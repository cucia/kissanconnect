<?php
session_start();


$email=$_SESSION["email"];
require '../connection.php';
$q="select farmerid,fname from tbl_farmer where femail='$email'";
$conn= mysqli_connect("localhost","root","","db_kissanconnect");
$res= mysqli_query($conn,$q);
$row=  mysqli_fetch_array($res);
$_SESSION["farmerid"]=$row["farmerid"];

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <title></title>
         <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            body,html{
                background-image:url('../images/slider/adminbg.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-repeat:no-repeat;
            }
            #body { background-color:#fff;padding-bottom:20em; }
            #link:active {  }
        </style>
    </head>
    <body>
           <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:#0c8213;">Kissan Connect</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="">Welcome <?php  echo $row["fname"];   ?></a></li>
        <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="col-sm-2" style="position:fixed;height:100%;background-color:#e1eee2;margin-top:-1.3em;">
            <ul class="nav nav-pills nav-stacked" style="margin-top:2em;">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="addquery.php">New Query</a></li>
  <li><a href="viewqueries.php">Query Replies</a></li>
  <li><a href="additem.php">My Products</a></li>
   <li><a href="Exitem.php">View Added Products</a></li>

  <li><a href="feedbacks.php">Feedbacks</a></li>
  <li><a href="viewfeedbacks.php">Feedback Replies</a></li>
</ul>
        </div>
        <div class="col-sm-8" style="position:static;">
        
            </div>
    </body>
</html>

        