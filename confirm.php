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
  	<h2>Confirm</h2>
  	
  <div class="row" id="form">

	<div class="col-sm-4">

	
	</div>
	<div class="col-sm-4" style="text-align:center">
	
	<p ><?php
	$con=mysqli_connect("localhost","root","","sellcell");

						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						
						if(empty($_SESSION['username'])){


    }
else{
	$username=$_SESSION['username'];
	
	$amount=$_GET['amount'];
	$rand=rand();
	$date=date("Y/m/d");
	
	
      $query = "INSERT INTO orders(username, order_no, amount,confirm,date) 
  			  VALUES('$username', '$rand', '$amount',0,'$date')";
			  	mysqli_query($con, $query);
   
		
	

	
  
	$sql="SELECT * from users where username='$username'";

										if ($result=mysqli_query($con,$sql))
										{
												$rowcount=mysqli_num_rows($result);
												
											
												while ($row=mysqli_fetch_row($result))
							
													{
														printf ("Your ID is %s <br>",$row[0]);
														printf ("Your username is %s <br>",$row[1]);
														printf ("Your email is %s <br>",$row[2]);
														printf ("Your address is %s <br>",$row[4]);
														printf ("Your address pincode is %s <br>",$row[6]);
														printf ("Your phone number is %s <br>",$row[7]);
													
													}
										
										echo "<form method=\"post\" >";
										echo "<button formaction=\"mail.php?date=$date\" class=\"add-btn\" >Confirm order</button>";
										echo "</form>";
										}
										
}
								?></p>
	</div>
	
	<div class="col-sm-4" >
	</div>
  </div>
 

  </div>
  </div>
<!--footer -->

<div class="container-fluid" id="data"> 
<div class="row" id="foot-row">
	
	<div class="col-sm-3" >
		<h3 class="foot-h">ABOUT US</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sem vitae velit dapibus mattis id nec eros. Ut gravida tempor aliquet.</p>
	</div>
	<div class="col-sm-2">
		<h3 class="foot-h">REACH US</h3>
		<p><a href="#" class="link-foot" style="text-decoration:none;">New Launches</a></p>
		<p><a href="#" class="link-foot" style="text-decoration:none;">Best Seller</a></p>
		<p><a href="#" class="link-foot" style="text-decoration:none;">Featured Product</a></p>
		<p><a href="#" class="link-foot" style="text-decoration:none;">Sale Off</a></p>
		
	</div>
	<div class="col-sm-2">
		<h3 class="foot-h">SOME LINKS</h3>
		<p><a href="#" class="link-foot" style="text-decoration:none;">About Us</a></p>
		<p><a href="#"class="link-foot" style="text-decoration:none;">Contact Us</a></p>
		<p><a href="#" class="link-foot" style="text-decoration:none;">Policy</a></p>
		
	</div>
	<div class="col-sm-2">
<h3 class="foot-h">FOR CUSTOMER</h3>
		<p><a href="#" class="link-foot" style="text-decoration:none;">Wishlist</a></p>
		<p><a href="#" class="link-foot" style="text-decoration:none;">Cart</a></p>
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
