<?php
require 'connectsqlfile.php';
if(isset($_POST['password'])){
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$name1=$_POST['name1'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$college=$_POST['college'];
$branch=$_POST['branch'];
$year=$_POST['yos'];
if(!empty($password)&&!empty($name1)&&!empty($gender)&&!empty($college)&&!empty($year)&&!empty($mobile)&&!empty($email)&&!empty($cpassword))
{
if($password==$cpassword)
{
$query_run5=mysqli_query($a1,"SELECT* FROM users WHERE name1='$name1'");
if($query_run5)
{
$query_num_rows5=mysqli_num_rows($query_run5);
if(mysqli_num_rows($query_run5)==0)
{
echo "sorry,Username can't be changed";
}
else
{
$query6="UPDATE users SET email='$email' WHERE name1='$name1'";
$query67="UPDATE users SET mobile='$mobile' WHERE name1='$name1'";
$query68="UPDATE users SET year='$year' WHERE name1='$name1'";
$query69="UPDATE users SET college='$college' WHERE name1='$name1'";
$query70="UPDATE users SET branch='$branch' WHERE name1='$name1'";
if($query_run67=mysqli_query($a1,$query67))
{
if($query_run68=mysqli_query($a1,$query68))
{
if($query_run69=mysqli_query($a1,$query69))
{
if($query_run70=mysqli_query($a1,$query70))
{
if($query_run6=mysqli_query($a1,$query6))
{
echo "you have changed the details succesfully<br>";
echo "<h2> your new details are as follows</h2>";
echo "<h3>UserName:".$name1."<br><br>Mobile Number:".$mobile."<br><br>Email-Id:".$email. "<br><br>Gender:".$gender."<br><br>Name of College:".$college."<br><br>Branch:".$branch."<br><br>Year Of Study:".$year."</h3>.";
die();
}
}
}
}
}
}
}
}
else
{
echo "password and confirm password didn't match";
}

}
else
{
echo "PlEASE FIll ALL THE DETAILS<br>THE FIELDS WITH '*' ARE NECESSARY ";
}
}


?>
<h1>TO EDIT YOUR DETAILS ,ENTER THE NEW DETAILS DOWN</h1>
<form action="edit.php"  method="POST" >
Username*:<br><input type="text" name="name1" value="<?php echo $name1; ?>"> <br><br>
Create Password*:<br><input type="password" name="password" ><br><br>
Confirm Password*:<br><input type="password" name="cpassword" ><br><br>
Mobile Number*:<br><input type="text" name="mobile" value="<?php echo $mobile; ?>"><br><br>
E-Mail*:<br><input type="text" name="email" value="<?php echo  $email ?>"><br><br>
Gender*:<br><input type="text" name="gender" value='<?php echo  $gender ?>'><br><br>
Name of college*:<br><input type="text" name="college" value="<?php echo  $college ?>"><br><br>
Branch*:<br><input type="text" name="branch" value="<?php echo  $branch ?>"><br><br>
Year Of Study*:<br><input type="text" name="yos" value="<?php echo  $year ?>"></br>
<input type="submit" value="submit"><input type="button" value="login">
</form>