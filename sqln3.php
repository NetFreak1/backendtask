<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];
function mysqli_result1($result,$iRow,$field)
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