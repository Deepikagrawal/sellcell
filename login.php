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
form, .content {
	background: rgba(0, 0, 0, 0.5);
 width:40%;
	margin-left:30%;
	margin-right:30%;
  margin: 0px auto;
  padding: 20px;
 
  color:#1E90FF;
 
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
 width:100%;
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
  
  width:100%;
}
.btn:hover{
	background-color:white;
	color:#1E90FF;
	
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

#img-login{
	width:50%;
	margin-left:25%;
	margin-right:25%;
	
	
}
#login-link{
	text-decoration:none;
	color:white;
	
}
#login-link:hover{
	color:#1E90FF;
}
</style>
<body>

<div style="background-image:url('image/login.jpg');background-size:100%;">
  <div class="header">
  	<h2>Login</h2>
	
 <form method="post" action="login.php" >
 <img src='image/user.png'  class="img-responsive" id="img-login">
  	<?php include('errors.php'); ?>
  	<div class="input-group1">
  	  
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
  	</div>
  	<div class="input-group1">
  	 
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
  	</div>
	<div class="input-group1">
  	 
  	  <input type="password" name="password" placeholder="Password">
  	</div>
  	
  	<div class="input-group1">
  	  <button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Need a account? <a href="register.php" id="login-link">Sign Up</a>
  	</p>
	

  </form>
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
