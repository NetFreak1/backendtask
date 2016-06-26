<?php
echo "<h1>LOGIN FORM</h1>";
function mysqli_result($result,$iRow,$field)
{
if(!mysqli_data_seek($result,$iRow))
return false;
if(!($row=mysqli_fetch_array($result)))
return false;
if(!array_key_exists($field,$row))
return false;
return $row[$field];
}
if(isset($_POST['name1'])&&isset($_POST['password']))
{
$name1=$_POST['name1'];
$password=$_POST['password'];
$password_hash=md5($password);
if(!empty($name1)&&!empty($password))
{
if(mysqli_connect_errno())
{
echo "failed to connectmysql".mysqli_connect_error();
exit();
}
$query_run=mysqli_query($a1,"SELECT* FROM users WHERE name1='".addslashes($name1)."' AND password='".addslashes($password_hash)."'" );
if($query_run)
{
$query_num_rows=mysqli_num_rows($query_run);
if(mysqli_num_rows($query_run)==0)
{
echo "invalid username or password";
}
else
{

$user_id=mysqli_result($query_run,0,'id');
echo $user_id;
$_SESSION['user_id']=$user_id;
header('Location:realfile.php');
}
}
}
else
{
echo " you must fill in both the username and password";
}


}


?>

<form action="<?php echo "$current_file"; ?>" method="POST">
Username:<input type="text" name="name1"> Password:<input type="password" name="password">
<input type="submit" value="Login">   
</form>