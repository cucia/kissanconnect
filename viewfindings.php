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
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
	<h1 class="text-center"><a href="#">Kissan Connect</a></h1>
</div>
<!-- banner -->
<div class="w3_banner">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
					<li>	
						<div class="banner_text_w3layouts">
							<h3>The farmer has to be an optimist or he wouldn't still be a farmer.</h3>
							<span> </span>
							<p>Casp Eestibulum </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>The discovery of agriculture was the first big step toward a civilized life.    </h3>
							<span> </span>
							<p>Rlua vestibulum </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>You can make a small fortune in farming-provided you start with a large one.   </h3>
							<span> </span>
							<p>Cras vestibulum </p>
						</div>
					</li>
				</ul>
			</div>
		  <script src="js/responsiveslides.min.js"></script>
		  <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		 </script>
	   </div>
	</div>   
</div>
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
                   
                       <li class="agile_active"><a href="#" ><span>Updates</span></a></li>
                        <li><a href="farmproducts.php" ><span>Farm Products</span></a></li>
                        <li ><a href="services.php"><span>Krishibhavan services</span></a></li>
                        <li ><a href="index.php"><span>home</span></a></li>
                        
 	</ul>
</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
<!-- //banner -->	
<!-- home -->

<div class="container" id="rewards"><br/><br/><br/>
<h4 style="padding-top:.5em;"></h4><hr/>
            <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p>
        <?php
       
        require './connection.php';
        
        $q="select * from tbl_finding where status=1";
                
                $conn= mysqli_connect("localhost","root","","db_kissanconnect");  

                $res= mysqli_query($conn,$q);
                
                if(mysqli_num_rows($res)==0){
                             echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Updates found</h4>";
                }
                else{ ?>
    <center><h2><b>What's New</b></h2><br><br><br><br>
        
    <table class="table table-hover" border-style: dotted>
            <thead>
            <th>Updates</th>
            <th></th>
            <th></th>
           <th>Uploaded date</th>
            
            <th></th>
            <th>Related file</th>
            <th></th>
            
            </thead><tbody>
                <?php  
                while($row= mysqli_fetch_array($res)){

                    
                   // $name=  explode("/", $row["fnote"]);
                    echo "<tr >"
                    . "<td>$row[fdescri]</td>"
                    . "<td></td>"
                   // . "<td></td>"
                    //. "<td>$row[fnote]</td>"
                    . "<td></td>"
                    . "<td>$row[uplddate]</td>"
                    . "<td></td>"
                    . "<td><a href='upload/$row[fnote]' class='btn btn-success'>View details</a></td>"
                    . "<td></td>"
                    //. "<td><a href='removefindingprocess.php?id=$row[findingid]'>Remove</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?>
    
</div>
 
<!-- copy-right 
<div class="copy-right agileits-w3layouts">
	<div class="container">
		<div class="social-icons agileits">
     		<ul>
				<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
				<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
				<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
				<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
			</ul>
			<div class="clearfix"> </div>
		</div> 
		<p>© 2017 candid. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>	
	</div>
</div>
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>
		<script>
			$(document).ready(function(){
				$('.cm-overlay').cmOverlay();
			});
		</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //end-smooth-scrolling -->	
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
      