
<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='delta';
$a1=mysqli_connect($mysql_host,$mysql_user , $mysql_pass); 
if(!$a1||!mysqli_select_db($a1,$mysql_db))
{
die("error while connecting<br>");
}

?>
