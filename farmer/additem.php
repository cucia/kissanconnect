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
  <li class="active"><a href="additem.php">My Products</a></li>
   <li><a href="Exitem.php">View Added Products</a></li>
  <li><a href="feedbacks.php">Feedbacks</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
                <div class="container" id="body">
                    <h4 style="padding-top:.5em;">Add Product</h4><hr/>
        <form name="" method="post" action="" enctype="multipart/form-data">
            <center>
                <table style="width:50%;">
                            <tr><td>
                              
                                  <h5>Product Name</h5>
                                  <input type="text" name="product" placeholder="Enter Product name" required="" class="form-control"/><br/>
                                  <h5>Quantity</h5>
                                  <input type="number" name="quantity" placeholder="Enter Quantity" required="" class="form-control"/><br/>
                                   <h5>Price</h5>
                                  <input type="number" name="price" placeholder="Enter Product Price" required="" class="form-control"/><br/>
                                  <h5>Product Image</h5>
                                  <input type="file" name="image"  required="" class="form-control"/><br/>
                                    <input type="submit" name="reg" value="Add Product" class="btn btn-success btn-group-justified">
                        </td></tr>
                </table>
            </center>
        </form>
    </body>
</html>

<?php   

if(isset($_POST["reg"])){
    
    $fid=$_SESSION["farmerid"];
    //$cat=$_POST["cat"];
    $product=$_POST["product"];
    $quantity=$_POST["quantity"];
    $price=$_POST["price"];
    
     $folder='../images/farmeritem/';
      $file=$folder.basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'],$file);
      
      //require '../connection.php';
      $conn= mysqli_connect("localhost","root","","db_kissanconnect");
      $q1="select * from tbl_fproduct where fid='$fid'  and pname='$product'";
      $res=  mysqli_query($conn,$q1);
      if(mysqli_num_rows($res)>0){
         echo "<script>alert('Product Already Exists')</script>"; 
      }
 else {
          $q2="insert into tbl_fproduct (fid,pname,quantity,price,image) values ('$fid','$product','$quantity','$price','$file')";
          if(mysqli_query($conn,$q2)==1){
             echo "<script>alert('Product Added')</script>";  
          }
          else     {
             echo "<script>alert('Product Adding Failed')</script>"; 
          }
      }
      
      
    
}

?>