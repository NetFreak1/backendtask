<?php
require 'sqln3.php';
session_destroy();
echo $http_referer;
header('Location:'.$http_referer);
?>