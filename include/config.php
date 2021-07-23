<?php
//variable declaration
$dbServername = "localhost";
$dbUsername = "root";   
$dbPassword = "fvgm7e3nnYbLUDEp";   
$dbName ="wedding";

//connecting to the database
$conn=mysqli_connect('localhost','root','fvgm7e3nnYbLUDEp','wedding');

//checking connection
if(!$conn){
   
    die("Connection Error:".mysqli_connect_error());
}
    
?>
