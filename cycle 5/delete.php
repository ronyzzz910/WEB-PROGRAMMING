<?php
$con=mysqli_connect("localhost","20mca044","2689","20mca044");
$id=$_GET["id"];
if($con)
{

$query1="delete from STUDENT where id='$id'";
if(mysqli_query($con, $query1))
{
echo "Data Removed !<br>";
} 
}
?>