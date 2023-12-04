<?php
include"connection.php";

//creating table
$s= "create table student(id int(10) primary key, name varchar(20), dob int(5),address varchar(10))";
if(mysqli_query($conn,$s)){
echo "table created";
}
else{
echo "table creation failed";
}
$conn->close();
?>
