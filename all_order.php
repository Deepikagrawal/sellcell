<?php include('server.php') ?>
<?php 
if(empty($_SESSION['username'])){
header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOPcELL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" href="image/logo.png">
  
</head>
<body>
<script src="https://unpkg.com/scrollreveal"></script>
<script> 
$(function(){
  $("#header").load("header.php"); 
 
});
$(function(){
  
 ScrollReveal().reveal('.header',{
        duration:2000,
        origin:'left',
        reset:true,
        mobile:true,
        viewFactor:0.2,
		 distance:'100px',
     });
	

});
</script>
  
<body>

<!--header -->


<div id="header"></div>
<style>

.header {
	width:80%;
	margin-left:10%;
	margin-right:10%;
  margin: 50px auto 0px;
  color: white;
 
  text-align: center;
 
  padding: 20px;
}

</style>
<body>
<div style="background-image:url('image/cart1.png');background-size:100%;">
  <div class="header">
  	<h2>Order till date</h2>
 <style>
 table{
	 width:100%;
	 text-align:center;
 }
 th,td{text-align:center;
 }
 th{
	 background-color:white;
	 color:black;
	 font-weight:bold;
	 font-size:110%;
 }
 </style>
 
 
  <table >
  <tbody>
    <?php
				
						$con=mysqli_connect("localhost","root","","sellcell");

						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						
						if($_SESSION['username']=='deepika'){
							
									$sql="SELECT * from history";

										if ($result=mysqli_query($con,$sql))
										{
    echo"<tr >";

      echo"<th>Product ID</th>";
      echo"<th>Product Name</th>";
      echo"<th>Price</th>";
       echo"<th>Username</th>";
      echo"<th>Date of order</th>";
      echo"<th>Order Number</th>";
    echo"</tr>";

												
												while ($row=mysqli_fetch_row($result))
													{
														echo "<tr>";
														
														echo "<td>";
														printf ("%s",$row[0]);
														echo "</td>";
														echo "<td>";
														printf ("%s",$row[1]);
														echo "</td>";
														echo "<td>";
														printf ("%s",$row[2]);
														echo "</td>";
														echo "<td>";
														printf ("%s",$row[3]);
														echo "</td>";
														
														echo "<td>";
														printf ("%s",$row[6]);
														echo "</td>";
														echo "<td>";
														printf ("%s",$row[7]);
														echo "</td>";														
														echo "</tr>";
														
														}
												
												mysqli_free_result($result);
										}
}
								?>
  </tbody>
</table>
  </div>
  
</div>
<div class="container-fluid" id="data"> 
<div class="row" id="foot-row">
	
	<div class="col-sm-3" >
		<h3 class="foot-h">ABOUT US</h3>
		<p>We aim to offer our customers a variety of the latest phones. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget friendly products. We offer all of this while providing excellent customer service and friendly support.</p>
	</div>
	<div class="col-sm-2">
		<h3 class="foot-h">REACH US</h3>
		<p><a href="shop.html" class="link-foot" style="text-decoration:none;">New Launches</a></p>
		<p><a href="shop.html" class="link-foot" style="text-decoration:none;">Best Seller</a></p>
		<p><a href="shop.html" class="link-foot" style="text-decoration:none;">Featured Product</a></p>
		<p><a href="shop.html" class="link-foot" style="text-decoration:none;">Sale Off</a></p>
		
	</div>
	<div class="col-sm-2">
		<h3 class="foot-h">SOME LINKS</h3>
		<p><a href="about.html" class="link-foot" style="text-decoration:none;">About Us</a></p>
		<p><a href="contact.php"class="link-foot" style="text-decoration:none;">Contact Us</a></p>
		<p><a href="policy.html" class="link-foot" style="text-decoration:none;">Policy</a></p>
		
	</div>
	<div class="col-sm-2">
<h3 class="foot-h">FOR CUSTOMER</h3>
		<p><a href="wish.php" class="link-foot" style="text-decoration:none;">Wishlist</a></p>
		<p><a href="add_to_cart.php" class="link-foot" style="text-decoration:none;">Cart</a></p>
	</div>
	<div class="col-sm-3">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h3 class="foot-h">CONTACT US</h3>		
							<a href="#" class="link"><li class="fa fa-facebook"></li></a>
							<a href="#" class="link"><li class="fa fa-google"></li></a>
							<a href="#" class="link"><li class="fa fa-linkedin"></li></a>
							<a href="#" class="link"><li class="fa fa-pinterest"></li></a>
							<a href="#" class="link"><li class="fa fa-twitter"></li></a>
							</div>
	
</div>
</div>
<footer class="foot">
	<p class="foot-p">Copyright &copy 2019 Deepika Agrawal . All rights reserved </p>
</footer>
</body>
</html>
