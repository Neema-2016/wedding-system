<?php
session_start();
include'include/config.php';

     $id = $_GET['id'];
$sql=mysqli_query($conn,"DELETE  FROM  registry WHERE id=$id");
if($sql){
	  echo '<script type="text/javascript">'; 
    echo 'alert("Item Succesfully Deleted");'; 
    echo 'window.location="addreg.php";';
    echo '</script>';  
}else{
	$error=mysqli_error($conn);
	 echo '<script type="text/javascript">'; 
    echo 'alert(" '."$error".'");'; 
   echo 'window.location="addreg.php";';
    echo '</script>';  
}


?>