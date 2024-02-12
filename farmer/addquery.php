<?php   

session_start();
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
  <li  class="active"><a href="addquery.php">New Query</a></li>
  <li><a href="viewqueries.php">Query Replies</a></li>
  <li><a href="additem.php">My Products</a></li>
 <li><a href="Exitem.php">View Added Products</a></li>
  <li><a href="feedbacks.php">Feedbacks</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="container" id="body">
        <center>
            <h5 style="padding-top:.5em;"><b>Submit Query</b></h5><hr/>
          <form name="" method="post" action="">
            
                <table style="width:50%;">
                            <tr><td>
                                  <h5>Select Category</h5>
                                    <select name="cat" class="form-control" >
                                        <option value="">Select Category</option>
                                        <?php    
                                        require '../connection.php';
                                        $q1="select * from tbl_category where cattype='expert'";
                                        $conn= mysqli_connect("localhost","root","","db_kissanconnect");
                                        $res=  mysqli_query($conn,$q1);
                                        while($row1=  mysqli_fetch_assoc($res)){
                                            echo "<option value='$row1[categoryid]'>$row1[catname]</option>";
                                        }
                                        ?>
                                    </select><br/>
                                    <h5>Your Query</h5>
                                    <textarea name="query" class="form-control" required="" placeholder="Enter Your Query" style="resize:none;"></textarea><br/>
                                    <input type="submit" name="reg" value="Submit Query" class="btn btn-success btn-group-justified">
                        </td></tr>
                </table>
            </center>
          </form></div>
    </body>
</html>

<?php   

if(isset($_POST["reg"])){
    
    $fid=$_SESSION["farmerid"];
    $catid=$_POST["cat"];
    $query=$_POST["query"];
    $qdate=date('Y-m-d');
    
    $q="insert into tbl_query (fid,catid,query,qdate) values ('$fid','$catid','$query','$qdate')";
    if(mysqli_query($conn,$q)==1){
        echo "<script>alert('Query Submitted')</script>";
    }
 else {
        echo "<script>alert('Query Submission Failed')</script>";
    }
    
}
?>
