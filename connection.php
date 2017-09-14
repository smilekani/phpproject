<?php
error_reporting(1);
$con=mysqli_connect('localhost', 'root', '');
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($con,"poll");
echo "sucesssfully Selected the DB";
?>
