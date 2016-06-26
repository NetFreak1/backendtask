<?php
require 'connectsqlfile.php';

if(isset($_POST['ouser']))
{
$ouser=$_POST['ouser'];
}
if(!empty($ouser))
{
$query_run4=mysqli_query($a1,"SELECT* FROM users WHERE name1='$ouser'" );
if($query_run4)
{
$query_num_rows4=mysqli_num_rows($query_run4);
if(mysqli_num_rows($query_run4)==0)
{
echo "The Username you want doesn't exists";
}
else
{
$id=mysqli_result4($query_run4,0,'id');
$name1=mysqli_result4($query_run4,0,'name1');
$mobile=mysqli_result4($query_run4,0,'mobile');
$email=mysqli_result4($query_run4,0,'email');
$gender=mysqli_result4($query_run4,0,'gender');
$college=mysqli_result4($query_run4,0,'college');
$branch=mysqli_result4($query_run4,0,'branch');
$year=mysqli_result4($query_run4,0,'year');
$reviews=mysqli_result4($query_run4,0,'reviews');
echo "<h2>THE DETAILS OF $ouser are as follows";
echo "<h3>UserName:".$name1."<br><br>Mobile Number:".$mobile."<br><br>Email-Id:".$email. "<br><br>Gender:".$gender."<br><br>Name of College:".$college."<br><br>Branch:".$branch."<br><br>Year Of Study:".$year."</h3>.";

}
}
}
function mysqli_result4($result,$iRow,$field)
{
if(!mysqli_data_seek($result,$iRow))
return false;
if(!($row=mysqli_fetch_array($result)))
return false;
if(!array_key_exists($field,$row))
return false;
return $row[$field];
}
?>
<form action="checkothers.php" method="POST">
<h1>TO CHECK OTHER USERS CHECK HERE</h1>
USERNAME:<input type="text" name="ouser">
<input type="submit" value="SUBMIT">
</form>