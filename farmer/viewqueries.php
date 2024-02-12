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
  <li  class="active"><a href="viewqueries.php">Query Replies</a></li>
  <li><a href="additem.php">My Products</a></li>
   <li><a href="Exitem.php">View Added Products</a></li>
  <li><a href="feedbacks.php">Feedbacks</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="container" id="body">
            <h4 style="padding-top:.5em;">My Queries & Replies</h4><hr/>
        <?php
       
        require '../connection.php';
        
        $fid=$_SESSION["farmerid"];
        $q2="SELECT * FROM `tbl_query` where fid='$fid' order by qid desc";
         $conn= mysqli_connect("localhost","root","","db_kissanconnect");       
                $res=  mysqli_query($conn,$q2);
                
                if(mysqli_num_rows($res)==0){
                      echo "<h4 style='color:red;padding-top:5em;text-align:center;'>You Haven't Uploaded Any Queries</h4>";
                }
                else{ ?>
                <?php  
                while($row=  mysqli_fetch_array($res)){
                    $res4=  mysqli_query($conn,"SELECT catname FROM `tbl_category`
JOIN tbl_query ON `tbl_query`.`catid`=`tbl_category`.`categoryid`
WHERE tbl_query.`qid`='$row[qid]'");
                    $row4=  mysqli_fetch_assoc($res4);
                    echo "<ul><li>Your Query related to $row4[catname]</li><br/>"
                    . "$row[query]  <a href='viewreplies.php?id=$row[qid]' style='float:right;'>View Replies</a> </ul>";
                
                ?>
<?php                }
                }
        
        
?></div>
    </body>
</html>
      