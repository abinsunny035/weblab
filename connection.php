<?php 

$conn =new mysqli("localhost","root","","MCATEST");

if ($conn -> connect_error){
  die("Not connected:".$conn -> connect_error);
  //creating database
  
$s = "create database MCATEST";
if($conn->query($s)){
echo "databse created";
}
else 
echo "creation failed";
}
?>
