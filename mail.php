
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
  
}
.input-group1 {
  margin: 10px 0px 10px 0px;
}
.input-group1 label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group1 input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #1E90FF;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
#amount-div{
	
	color:tomato;
	text-align:center;
	margin-bottom:5%;
	margin-top:5%;
	
}
.checkout-final
{
	background-color:white;
	font-size:50px;
	margin-bottom:5%;
	margin-top:5%;
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


</style>
<body>
<div style="background-image:url('image/reg.jpg');background-size:100%;">
  <div class="header">
  	<h2>Checkout</h2>
 
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
	$query = "UPDATE orders SET confirm='1' WHERE username='$username'";
  	mysqli_query($con, $query);
	$date=$_GET['date'];
	$sql1="SELECT * from orders where username='$username' and date='$date'";
	

										if ($result=mysqli_query($con,$sql1))
										{
												$rowcount=mysqli_num_rows($result);
												
												while ($row=mysqli_fetch_row($result))
							
													{
														$order_no=$row[1];
														printf ("Order is confirmed <br>");
														printf ("Order number is %s <br>",$row[1]);
														printf ("Order amount is Rs. %s <br>",$row[2]);
														printf ("Order date is  %s <br>",$row[4]);
														}
											
												mysqli_free_result($result);
										}
	$cart="SELECT pid, pname, price,pimage from cart where username='$username'";

										if ($result=mysqli_query($con,$cart))
										{
												$rowcount=mysqli_num_rows($result);
												
												while ($row=mysqli_fetch_row($result))
							
													{
														$pid=$row[0];
														$pname=$row[1];
														$price=$row[2];
														$pimage=$row[3];
														$query = "INSERT INTO history(username, order_no,date, pid, pname, price,pimage) 
  			  VALUES('$username', '$order_no','$date','$pid','$pname','$price','$pimage')";
			  	mysqli_query($con, $query);
														
														}
												
											mysqli_free_result($result);
										}
	
			  	
	$sql3="DELETE from cart where username='$username'";
	mysqli_query($con, $sql3);				
	$sql2="DELETE from wishlist where username='$username'";
	mysqli_query($con, $sql2);
}
								?></p>
	</div>
	
	<div class="col-sm-4" >
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
