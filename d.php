<?php
$server = "";
$username = "root";
$password="";
$database="demotable";

$con=mysqli_connect($server,$username,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  
  $sql="INSERT INTO demo VALUES('$firstname','$lastname','$fathername','$mothername')";
   mysqli_query($con,$sql)
 ?>
 done database