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
  <li  class="active"><a href="viewqueries.php">Query Replies</a></li>
  <li><a href="additem.php">My Products</a></li>
  <li><a href="Exitem.php">View Added Products</a></li>
  <li><a href="feedbacks.php">Feedbacks</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
                <div class="container" id="body">
                    <h4 style="padding-top:.5em;">Query Replies</h4><hr/>
        <?php   
        
        require '../connection.php';

        $qid=$_GET["id"];
        $res=  mysqli_query($conn,"SELECT * FROM `tbl_queryreply`
JOIN `tbl_expert` ON `tbl_expert`.`expertid`=`tbl_queryreply`.`exid`
WHERE `tbl_queryreply`.`qid`='$qid'");
        if(mysqli_num_rows($res)==0){
            echo "No Replies Recieved";
        }
 else {     ?>
      

                            <?php   while($row=  mysqli_fetch_array($res)){    ?><ul><li>
                            <?php echo "$row[ename] has replied on $row[qrdate] <br/>"
                                    . "$row[reply]";     ?></li></ul>
                            <?php  }   ?>
                            
                        </table></center>
     
     <?php
 }
 ?></div>
    </body>
</html>
