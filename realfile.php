<?php 
require 'connectsqlfile.php';
require 'sqln3.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
$r=$_SESSION['user_id'];
echo $r;
echo 'you are logged in <a href="logout.php"> LogOut </a><br><br>';
$query1_run=mysqli_query($a1,"SELECT* FROM users WHERE id='$r'" );
echo "<h2>YOUR DETAILS ARE AS FOLLOWS</h2>";
$id=mysqli_result1($query1_run,0,'id');
$name1=mysqli_result1($query1_run,0,'name1');
$mobile=mysqli_result1($query1_run,0,'mobile');
$password=mysqli_result1($query1_run,0,'password');
$email=mysqli_result1($query1_run,0,'email');
$gender=mysqli_result1($query1_run,0,'gender');
$college=mysqli_result1($query1_run,0,'college');
$branch=mysqli_result1($query1_run,0,'branch');
$year=mysqli_result1($query1_run,0,'year');
$reviews=mysqli_result1($query1_run,0,'reviews');
echo "<h3>UserName:".$name1."<br><br>Mobile Number:".$mobile."<br><br>Email-Id:".$email. "<br><br>Gender:".$gender."<br><br>Name of College:".$college."<br><br>Branch:".$branch."<br><br>Year Of Study:".$year."</h3>.";
include 'imageupload.php';
include 'checkothers.php';
include 'edit.php';

}
else
{
include 'loginform.php';
echo 'to register click here <a href="signupform.php">Sign up</a>';
}

?>

