<?php
session_start();
if(!isset($_SESSION["email"])){
    header('location:../login.php');
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
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
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
		<ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu">
                    <li><a href="home.php"><span>Home</span></a></li>
                    <li><a href="uploadfindings.php" ><span>Upload Findings</span></a></li>
                    <li><a href="viewservices.php"><span>View Current Services</span></a></li>
                    <li class="agile_active"><a href="findings.php"><span>Findings</span></a></li>
                    <li><a href="../logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
<!-- //banner -->	
<!-- home -->

<!-- //home -->
<!-- about -->
<div class="container" id="login"><br/><br/><br/>
            <h4 style="padding-top:.5em;"></h4><hr/>
            <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p>
        <?php
       
        require '../connection.php';
        
        $q="select * from tbl_finding where status=1";
                
                $conn= mysqli_connect("localhost","root","","db_kissanconnect");  

                $res= mysqli_query($conn,$q);
                
                if(mysqli_num_rows($res)==0){
                             echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Findings Found</h4>";
                }
                else{ ?>
    <center><h2><b>What's New</b></h2><br><br><br>

        
    <table class="table table-hover" border-style: dotted>
            <thead>
            <th>Updates</th>
            
            
            <!--<th>Related file</th>
            <th></th>-->
            <th>Uploaded date</th>
            
            </thead><tbody>
                <?php  
                while($row= mysqli_fetch_array($res)){
                    $name=  explode("/", $row["fnote"]);    
                
                    echo "<tr >"
                    . "<td>$row[fdescri]</td>"
                  
                    
                   // . "<td>$row[fnote]</td>"
                   // . "<td></td>"
                    . "<td>$row[uplddate]</td>"
                    . "<td></td>"
                    . "<td><a href='$row[fnote]'>View</a></td>"
                    . "<td><a href='removefindingprocess.php?id=$row[findingid]'>Remove</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?></div>
    </body>
</html>