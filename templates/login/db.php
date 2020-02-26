<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
//$con = mysqli_connect('127.0.0.1',"user","","bond");
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'bond';
//$con = mysqli_connect("localhost","dbusername","dbpassword","dbname");
$con = mysqli_connect($host,$user,$pass,$db);
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>