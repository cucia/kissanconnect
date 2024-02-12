<?php
require '../connection.php';

$id=$_GET["id"];

$conn= mysqli_connect("localhost","root","","db_kissanconnect");   
if(mysqli_query($conn,"delete from tbl_services where sid='$id'")==1)
{
  
    echo "<script>alert('service Removed');</script>";
}
else
{
     echo "<script>alert('service Removal Failed');</script>";
}
    echo "<script>window.location='avaiservices.php';</script>";