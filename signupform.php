<?php
require 'sqln3.php';
require 'connectsqlfile.php';
if(isset($_POST['password'])){
$password=$_POST['password'];
$password_hash=md5($password);
$cpassword=$_POST['cpassword'];
$name1=$_POST['name1'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$college=$_POST['college'];
$branch=$_POST['branch'];
$reviews=$_POST['reviews'];
$year=$_POST['yos'];
if(!empty($password)&&!empty($name1)&&!empty($gender)&&!empty($college)&&!empty($year)&&!empty($mobile)&&!empty($email)&&!empty($cpassword))
{
if($password==$cpassword)
{
$query_run2=mysqli_query($a1,"SELECT* FROM users WHERE name1='$name1'");
if($query_run2)
{
$query_num_rows2=mysqli_num_rows($query_run2);
if(mysqli_num_rows($query_run2)==0)
{
$query3="INSERT INTO users VALUES ('','$name1','$password_hash','$mobile','$email','$gender','$college','$branch','$year','$reviews',' ')";
if($query_run3=mysqli_query($a1,$query3))
{
echo "you have registered succesfully";
}
else
{
echo "sorry,we couldn't register ,please try later";
}
}
else
{
echo "username already exists<br>";
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
<form action="signupform.php"  method="POST" style="background-color:rgb(255,255,100)">
<h1 >SIGNUP FORM</h1>
Create Username*:<br><input type="text" name="name1" style="background-color:rgb(179,240,255)"> <br><br>
Create Password*:<br><input type="password" name="password" style="background-color:rgb(179,240,255)"><br><br>
Confirm Password*:<br><input type="password" name="cpassword" style="background-color:rgb(179,240,255)"><br><br>
Mobile Number*:<br><input type="text" name="mobile" style="background-color:rgb(179,240,255)"><br><br>
E-Mail*:<br><input type="text" name="email" style="background-color:rgb(179,240,255)"><br><br>
Gender*:<br><input type="text" name="gender" style="background-color:rgb(179,240,255)"><br><br>
Name of college*:<br><input type="text" name="college" style="background-color:rgb(179,240,255)"><br><br>
Branch*:<br><input type="text" name="branch" style="background-color:rgb(179,240,255)"><br><br>
Year Of Study*:<br><input type="text" style="background-color:rgb(179,240,255)" name="yos"></br>
Reviews About Us:<br><textarea name="reviews" rows="3" style="background-color:rgb(179,240,255)"></textarea><br>
<input type="submit" value="submit">
</form>