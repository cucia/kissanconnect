<?php     
session_start();
if(!isset($_SESSION["email"])){
    header('location:../index.php');
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kissan Connect</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Candid Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="../css/font-awesome.css" type="text/css" rel="stylesheet"> 
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo" style="margin-top:-1em;">
	<h1 class="text-center"><a href="#">Kissan Connect</a></h1>
</div>
<!-- banner -->

<!-- menu -->
<nav class="navbar navbar-inverse ">
	<div class="container">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
	<div class="collapse navbar-collapse top-nav w3l" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu" style="float:right;">
                    <li><a href="dashboard.php"><span>Dashboard</span></a></li>
                    <li><a href="../logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
        <div class="container" id="body"><br/><br/>
        <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Existing Services</a></li>
  <li><a data-toggle="tab" href="#menu1">Add New Services</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p>
        <?php
       
        require '../connection.php';
        
        $q="select * from tbl_services ";
                
                $conn= mysqli_connect("localhost","root","","db_kissanconnect");  

                $res=  mysqli_query($conn,$q);
                
                if(mysqli_num_rows($res)==0){
                             echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Services Found</h4>";
                }
                else{ ?>
    <center><table class="table table-hover">
            <thead>
            <th>Service Name</th>
           
            <th>Service Type</th>
            <th>Start Date</th>
            <th>Last Date </th>
             <th>Description</th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysqli_fetch_array($res)){
                    echo "<tr>"
                    . "<td>$row[sname]</td>"
                   
                     . "<td>$row[stype]</td>"
                    . "<td>$row[sdate]</td>"
                            . "<td>$row[ldate]</td>"
                             . "<td>$row[sdescri]</td>"
                            . "<td><a href='removeserviceprocess.php?id=$row[sid]'>Remove</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
        ?></p></div>
    <div id="menu1" class="tab-pane fade"><br/><br/>
    <p> 
    
         <form method="post" action=" ">
            <center>
                <table style="width:50%;">
                  <tr><td>
                                    <h5>Service Name</h5>
                                    <input type="text" name="sname" class="form-control" placeholder="Enter Service Name" required=""/><br/>
                                    <h5>Service Type</h5>
                                    <input type="text" name="stype" class="form-control" placeholder="Enter Service Type" required=""/><br/>
                                      <h5>Service Date</h5>
                                    <input type="date" name="sdate" class="form-control"  required=""/><br/>
                                    <h5>Last Date </h5>
                                    <input type="date" name="ldate" class="form-control"  required=""/><br/>
                                    <h5>Service Description</h5>
                                    <textarea name="sdescri" class="form-control" required="" rows="3" style="resize:none;"></textarea><br/><br/>
                                    <input type="submit" name="add" class="btn btn-success btn-group-justified" value="Add Service"/>
                                    
                        </td></tr>
                </table>
            </center>
        </form>
    <?php   


if(isset($_POST["add"])){
    
    $sname=$_POST["sname"];
   
    $sdate=$_POST["sdate"];
    $ldate=$_POST["ldate"];
    $descri=$_POST["sdescri"];
     $stype=$_POST["stype"];

    $conn= mysqli_connect("localhost","root","","db_kissanconnect");
    $q1="insert into tbl_services(sname,sdate,ldate,sdescri,stype) values ('$sname','$sdate','$ldate','$sdescri','$stype')";


    if(mysqli_query($conn,$q1))
     {
       echo "<script>alert('Service Notification Added')</script>";
      }
  else {
        echo "<script>alert('Service Notification /Adding Failed')</script>";
        }
     echo "<script>window.location='avaiservices.php';</script>";
}

?>
    </p>
  </div>
</div></div>
    </body>
</html>
      