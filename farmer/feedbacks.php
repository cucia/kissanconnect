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
  <li ><a href="viewqueries.php">Query Replies</a></li>
  <li><a href="additem.php">My Products</a></li>
  <li><a href="Exitem.php">View Added Products</a></li>
 
  <li  class="active"><a href="feedbacks.php">Feedbacks</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="container" id="body"><br/>
            <a href="viewfeedbacks.php">Previous Feedbacks</a><br/>
          <form name="" method="post" action="" enctype="multipart/form-data">
            <center>
                <table style="width:50%;" class="table table-hover">
                            <tr><td>
                                  <h5>Your Feedback</h5><hr/>
                                  <textarea name="feedback" placeholder="Enter Your Feedback" required="" class="form-control" style="resize:none;"></textarea><br/><br/>
                                    <input type="submit" name="reg" value="Share Feedback" class="btn btn-success btn-group-justified">
                        </td></tr>
                </table>
            </center>
          </form></div>
        
    </body>
</html>
<?php   

if(isset($_POST["reg"])){
    
    $fid=$_SESSION["farmerid"];
    $feedback=$_POST["feedback"];
      
      require '../connection.php';
      
   $conn= mysqli_connect("localhost","root","","db_kissanconnect");
          $q1="insert into tbl_feedback (farmerid,feedback,reply) values ('$fid','$feedback','No Reply Recieved')";
          if(mysqli_query($conn,$q1)==1){
             echo "<script>alert('Feedback Shared')</script>";  
          }
 else {
     echo "<script>alert('Feedback Sharing Failed')</script>"; 
 }
      }
      
      
   

?>
