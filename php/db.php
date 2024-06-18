<?php
$servername = "localhost";  
$username = "root"; 
$password = ""; 
$database = "ipl"; 
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
} 
//else
//{
  //  echo "Connection established successfully";
//}
?>
