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
#form, .content {
	background: rgba(0, 0, 0, 0.5);
	text-align:left;
	padding:10px 25px;
  width:80%;
	margin-left:10%;
	margin-right:10%;
}

.img{
	height:150px;
}

.add-btn{
	color:white;
	background-color:#1E90FF;
	padding:10px 25px;
	margin-bottom:2%;
	margin-top:2%;
}

.add-btn:hover{
	color:#1E90FF;
	background-color:white;
	text-decoration:none;
}

#div-cart{
	
	font-size:120%;
}
.price{
	
	
	margin-top:5%;
	
	padding:10px 25px;
	font-size:150%;
}

#summary{
	text-align:center;
}
</style>
<body>
<div style="background-image:url('image/cart1.png');background-size:100%;">
  <div class="header">
  	<h2>Cart</h2>
 
  <div class="row" id="form">
	<div class="col-sm-4">
	<?php
				
						$con=mysqli_connect("localhost","root","","sellcell");

						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						
						if(empty($_SESSION['username'])){

    echo 'No products to display';

}
else{
	$username=$_SESSION['username'];

						
									$sql="SELECT * from cart where username='$username'";

										if ($result=mysqli_query($con,$sql))
										{
												
												while ($row=mysqli_fetch_row($result))
													{
															echo "<div class=\"row\" style=\"margin-bottom:5%;text-align:center\">";
											
			$pimage=$row[5];
														
														echo "<img src=\"$pimage\" class=\"img\" >";
														
														
														echo "</div>";
														}
												
												mysqli_free_result($result);
										}
}
								?>
  </div>
  <div class="col-sm-4">
  <p><?php 
  if(empty($_SESSION['username'])){

   

}
else{
  $sql="SELECT * from cart where username='$username'";

										if ($result=mysqli_query($con,$sql))
										{
												$rowcount=mysqli_num_rows($result);
												if($rowcount==0)
												{
												echo "<form>";
											echo "<button formaction=\"shop.html\" class=\"add-btn\" >Add products</button>";
											echo "</form>";
												}
												if ($result=mysqli_query($con,$sql))
										{
												
												while ($row=mysqli_fetch_row($result))
													{
															echo "<div class=\"row\" style=\"margin-bottom:5%;\">";
														
														
														echo "<p id=\"div-cart\">";
														printf ("Product ID : %s <br>",$row[0]);
														printf ("%s <br>",$row[1]);
														printf ("%s <br >",$row[2]);
														echo "</p>";
														$pid=$row[0];
														echo "<form method=\"post\">";
														
														echo "<button type=\"submit\" id=\"hand-icon\" name=\"remove_cart\" class=\"glyphicon glyphicon-remove\" formaction=\"add_to_cart.php?pid=$pid\"></button>";
														
														echo "<br>";
														echo "</form>";
														echo "</div>";
														
														}
												
												mysqli_free_result($result);
										}
										}
}
												?>
  </div>
  <div class="col-sm-4" id="summary">

  <p><?php

 
						
									$sql="SELECT pname,price from cart where username='$username'";
									$price=0;
									$tax=0;
										if ($result=mysqli_query($con,$sql))
										{
											$rowcount=mysqli_num_rows($result);
												if($rowcount>0)
												{
												echo "<h3 style=\"background-color:#1E90FF;padding:15px 25px;\">Summary</h3>";
												}
											
												while ($row=mysqli_fetch_row($result))
													{
														
											
															echo "<div class=\"row\">";
														
														echo "<div class=\"col-sm-6\">";
														printf ("%s <br>",$row[0]);
														echo "</div>";
														echo "<div class=\"col-sm-6\" >";
														$price=$price+$row[1];
														printf ("%s <br>",$row[1]);
														$tax=((12*$price)/100);
											printf ("%s <br>",$tax);
														echo "</div>";
														echo "</div>";
														
												
												
											echo "<hr>";
											$price=$tax+$price;
												
														}
												if($rowcount>0){
												printf ("Estimated Price : %s <br>",$price);
											echo "<div class=\"row\">";
												echo "<p class=\"price\">";
												echo "</p>";
												
												echo "</div>";
												}
												if($rowcount>0)
												{
												echo "<form>";
											echo "<button formaction=\"checkout.php\" class=\"add-btn\" >Checkout</button>";
											echo "<button formaction=\"shop.html\" class=\"add-btn\" style=\"margin-top:5%\">Add more products</button>";
											echo "</form>";
												}
												mysqli_free_result($result);
										}

								?>
							</p>
  
  </div>
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
