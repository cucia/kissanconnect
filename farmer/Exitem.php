<?php session_start();   ?>
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
    <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
  <li ><a href="addquery.php">New Query</a></li>
  <li  ><a href="viewqueries.php">Query Replies</a></li>
  <li ><a href="additem.php">My Products</a></li>
   <li class="active"><a href="Exitem.php">View Added Products</a></li>
  <li><a href="feedbacks.php">Feedbacks</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<!-- //menu -->
  </div>	
<!-- //banner -->	
<!-- home -->

<!-- //home -->
<!-- about -->
<
<div class="container" id="rewards"><br/><br/><br/>
            <h4>Farm Products</h4><hr/>
        <?php    
        
        require '../connection.php';
        $conn= mysqli_connect("localhost","root","","db_kissanconnect");


        $fid=$_SESSION["farmerid"];
       // $q2="SELECT * FROM `tbl_feedback` where farmerid='$fid' order by feedid desc";
                // $conn= mysqli_connect("localhost","root","","db_kissanconnect");
                //$res=  mysqli_query($conn,$q2);



       
        $res=  mysqli_query($conn,"SELECT * FROM `tbl_fproduct`
JOIN `tbl_farmer` ON `tbl_farmer`.`farmerid`=`tbl_fproduct`.`fid`
WHERE `tbl_fproduct`.`status`='0' and  farmerid='$fid' ");


        if(mysqli_num_rows($res)==0){
              echo "<h4 style=color:red;text-align:center;padding-top:5em;padding-bottom:5em;>No Products Found</h4>";
        }
        else{  ?>
            
            <center><table class="table table-hover"><thead>
            <th></th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Farmer</th>
            <th>Contact</th>
            <th></th>
            </thead>
            <tbody>
            
        <?php  while($row=  mysqli_fetch_array($res)){
            
            echo "<tr><td><img src='images/$row[image]' style='width:100px;height:100px;'/></td>"
                    . "<td>$row[pname]</td>"
                    . "<td>$row[quantity] Kg</td>"
                    . "<td>Rs. $row[price] / Kg</td>"
                    . "<td>$row[fname]</td>"
                    . "<td>$row[fcontact]</td>"
                    . "<td><a href='removeitem.php?id=$row[pid]'>Remove</a></td></tr>";
            
            }  ?>
            </tbody></table></center>
                <?php
        }
        
        ?></div>
    </body>
</html>