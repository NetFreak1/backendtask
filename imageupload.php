
<?php
require 'connectsqlfile.php';
if(isset($_POST['use']))
{
echo "hii nassu";
echo $image_name=$_FILES['image']['name'];
echo $image_type=$_FILES['image']['type'];
echo $image_size=$_FILES['image']['size'];
echo $image_tmp_name=$_FILES['image']['tmp_name'];
if($image_name==' ')
{
echo "<script>alert('please select an image')</script>";
exit();
} 
else
{
move_uploaded_file($image_tmp_name,"photos/$image_name");
echo "image uploaded successfully";
echo "<img src='photos/$image_name'>";
}
}
?>

<h2>TO UPLOAD YOUR PROFILE PICTURE CLICK BELOW</h2>
<form action="imageupload.php" enctype="multipart/form-data">
<input type="hidden" name="use">
SELECT IMAGE:<input type="file" name='image'/><input type="submit" name="upload" value="UPLOAD NOW"/>
</form>