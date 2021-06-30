<?php
//variable declaration
$dbServername = "localhost";
$dbUsername = "root";   
$dbPassword = "";   
$dbName ="wedding";

//connecting to the database
$conn=mysqli_connect('localhost','root','','wedding');

//checking connection
if(!$conn){
   
    die("Connection Error:".mysqli_connect_error());
}
    
?>
