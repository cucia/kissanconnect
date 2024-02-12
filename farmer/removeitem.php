<?php
require '../connection.php';

$id=$_GET["pid"];

$conn= mysqli_connect("localhost","root","","db_kissanconnect");   
if(mysqli_query($conn,"delete from tbl_fproduct where pid='$id'")==1)
{
  
    echo "<script>alert('Product Removed');</script>";
}
else
{
     echo "<script>alert('Product Removal Failed');</script>";
}
    echo "<script>window.location='Exitem.php';</script>";