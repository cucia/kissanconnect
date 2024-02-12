<?php
session_start();
if(isset($_POST["submit"])){



    $email=$_SESSION["email"];
//require '../connection.php';
    $q="select expertid,field,ename from tbl_expert where eemail='$email'";
    $conn= mysqli_connect("localhost","root","","db_kissanconnect");
    $res= mysqli_query($conn,$q);
    $row=  mysqli_fetch_array($res);
    $_SESSION["expertid"]=$row["expertid"];
    $q1="select categoryid from tbl_category where catname='$row[field]' and cattype='expert'";
    $conn= mysqli_connect("localhost","root","","db_kissanconnect");
    $res1= mysqli_query($conn,$q1);
    $row1=  mysqli_fetch_array($res1);
    $_SESSION["fieldid"]=$row1["categoryid"];

    
    $conn= mysqli_connect("localhost","root","","db_kissanconnect");
    $name=$_POST['search'];

    $q4="select * from tbl_farmer where fname='$name'";
    $res2= mysqli_query($conn,$q4);
    $row5=  mysqli_fetch_array($res2);
    if(mysqli_num_rows($res2)==0){
    	echo "<script>alert('Name Not Found')</script>";
    	echo "<script>window.location='home.php';</script>";
    }
    else{


    	$expertid=$_SESSION["expertid"];
        $q1="SELECT categoryid,catname FROM tbl_category
JOIN tbl_expert ON `tbl_expert`.`field`=`tbl_category`.`catname`
WHERE tbl_expert.`expertid`='$expertid'";
        $conn= mysqli_connect("localhost","root","","db_kissanconnect");
        $res1=  mysqli_query($conn,$q1);
        $row1=  mysqli_fetch_array($res1);
        
        $catid=$row1["categoryid"];
        
        $q2="SELECT * FROM `tbl_query`"
        . "join tbl_farmer on tbl_farmer.farmerid=tbl_query.fid where tbl_farmer.fname='$name' and tbl_query.catid='$catid' ";
        $conn= mysqli_connect("localhost","root","","db_kissanconnect");  
        $res=  mysqli_query($conn,$q2);
                
        if(mysqli_num_rows($res)==0){


            echo "<h4 style='color:red;padding-top:5em;text-align:center;'>No Queries Posted Yet</h4><br>";
            ?>
                    <div  class="container" style="position: absolute; bottom:50; right: 10; width: 300px;">
                    <a href="home.php" class="btn-success">Back</a></div>
           <?php
        }
        else{?><ul><table>

                    <?php 
                    echo "<h2><u>Previous queries of $name</u></h2>";  
                    while($row=  mysqli_fetch_array($res)){


                        echo "<br><br><li>$row[fname] posted a query related to $row1[catname]</li><br/>"
                        . "$row[query]";
                        $expertid=$_SESSION["expertid"];
                        $q3="select * from `tbl_queryreply` where `qid`='$row[qid]' and  exid='$expertid'";
                        $conn= mysqli_connect("localhost","root","","db_kissanconnect");

                        $res3=  mysqli_query($conn,$q3);
                        if(mysqli_num_rows($res3)==0){
                            echo "<br><a href='queryreply.php?id=$row[qid]'>Reply</a>";
                         }
                        else{
                            echo "<h5 style='vertical-align:bottom;'>Already Replied</h5>";
                            echo "<a href='viewreplies.php?id=$row[qid]' >View Reply</a><br>";
                         }

                    }?>
                    <div  class="container" style="position: absolute; bottom:30; right: 10; width: 200px;">
                    <a href="home.php" class="btn-primary">Back</a></div>
           <?php }    
                ?></ul></table>

    
<?php
   }
}

?>
