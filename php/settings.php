<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Jigyasha';
$dbname = 'eselection';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

