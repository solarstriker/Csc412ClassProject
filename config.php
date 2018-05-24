<?php
$con=mysqli_connect('localhost','csc412','csc412','csc412');
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$table = 'adi_visitors';
if(isset($_GET['site'])) $site = $_GET['site'];
else $site = 'home';
?>