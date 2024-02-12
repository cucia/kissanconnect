<?php

//include '../connection.php';

if(isset($_GET["approve"])){
   $conn= mysqli_connect("localhost","root","","db_kissanconnect");
    $q="update tbl_finding set status='1' where findingid='$_GET[fid]'";
    if(mysqli_query($conn,$q)==1){
        echo "<script>alert('Approved');</script>";      
    }
    else
    {
        echo "<script>alert('Approval Failed');</script>";
    }
}
else
{
    $conn= mysqli_connect("localhost","root","","db_kissanconnect");
    $q="update tbl_finding set status='2' where findingid='$_GET[fid]'";
    if(mysqli_query($conn,$q)==1){
        echo "<script>alert('rejected');</script>";
    }
    else
    {
        echo "<script>alert('rejection Failed');</script>";
    }
    
}

echo "<script>window.location='approvefindings.php';</script>";