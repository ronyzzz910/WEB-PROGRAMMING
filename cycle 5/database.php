<?php
$servername = "localhost";
$username = "20mca044";
$password = "2689";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"20mca044");

// Check connection
if (!$conn) {
  die("Connection failed : " .mysqli_connect_error());
}
echo "Connected successfully !!";
?>