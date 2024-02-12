<?php

include '../connection.php';
if(isset($_GET["approve"])){
   
    $q="update tbl_login set status='1'  where loginid='$_GET[id]'";
    $conn= mysqli_connect("localhost","root","","db_kissanconnect");

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
    $q="update tbl_login set status='2' where loginid='$_GET[id]'";
    if(mysqli_query($conn,$q)==1){
        echo "<script>alert('rejected');</script>";
    }
    else
    {
        echo "<script>alert('rejection Failed');</script>";
    }
    
}

echo "<script>window.location='approveexpert.php';</script>";