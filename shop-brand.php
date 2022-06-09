<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOPcELL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
  <script src="js/script.js"></script>
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
<!--header ends here-->
<style>
#hand-icon{
	margin-top:5%;
	margin-bottom:5%;
}


.img{
	margin:5% 5% 5% 5%;
	height:300px;
}
.img:hover{
	-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
  cursor:zoom-in;
}
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
  
}

</style>
<div style="background-image:url('image/bg.png');background-size:100%;">
  <div class="header">
  	<h2>Shop by brand</h2>
 
  <div class="row" id="form">
  <?php
$con = mysqli_connect('localhost', 'root','', 'sellcell');

$company = mysqli_real_escape_string($con,$_GET['company']);
									$sql="SELECT * from product where company='$company'";
																					
										if ($result=mysqli_query($con,$sql))
										{
												$rowcount=mysqli_num_rows($result);
												
												while ($row=mysqli_fetch_row($result))
													{
														$pimage=$row[4];
														echo "<div class=\"col-sm-4\" style=\"text-align:center;margin-top:5%;margin-bottom:5%\">";
														echo "<img src=\"$pimage\" class=\"img\">";
														echo "<br>";
														printf ("Product ID is %s <br>",$row[0]);
														$pid=$row[0];
														printf ("%s <br>",$row[1]);
														printf ("%s <br>",$row[3]);
														echo "<form method=\"post\">";
														echo "<button type=\"submit\" class=\"glyphicon glyphicon-shopping-cart\" name=\"add_to_cart\" id=\"top-icon\" formaction=\"add_to_cart.php?pid=$pid\"></button>";
														echo "<button type=\"submit\" class=\"glyphicon glyphicon-heart\" name=\"add_to_wishlist\" id=\"hand-icon\" formaction=\"wish.php?pid=$pid\"></button>";
														echo "<br>";
														echo "</form>";
														echo "</div>";
														}
  
												mysqli_free_result($result);
										}
								?>
</div>
</div>
</div>

<!--footer -->


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
