<?php
//require '../connection.php';
$conn= mysqli_connect("localhost","root","","db_kissanconnect");

$id=$_GET["id"];

if(mysqli_query($conn,"update tbl_finding set status= 2 where findingid='$id'")==1){
    echo "<script>alert('Finding Removed');</script>";
}
else
{
     echo "<script>alert('Finding Removal Failed');</script>";
}
    echo "<script>window.location='findings.php';</script>";