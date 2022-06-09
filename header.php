
<script type="text/javascript">
     window.sr=ScrollReveal();
     sr.reveal('.navbar',{
        duration:2000,
        origin:'bottom',
        reset:true,
        mobile:true,
        viewFactor:0.2
     });
	 
	 ScrollReveal().reveal('.mid',{
        duration:2000,
        origin:'right',
        reset:true,
        mobile:true,
        viewFactor:0.2,
		 distance:'100px',
     });


	 
</script>
<style>
.navbar{
	
	text-align:center;
}
.navbar-header{
	background-color:#1E90FF;
webkit-transition: color 1s;
    -moz-transition:    color 1s;
    -ms-transition:     color 1s;
    -o-transition:      color 1s;
    transition:         color 1s;
	webkit-transition: background-color 1s;
    -moz-transition:     background-color 1s;
    -ms-transition:      background-color 1s;
    -o-transition:       background-color 1s;
    transition:          background-color 1s;
	
	font-size:120%;
}

.nav li:hover,
.navbar-toggle
{
	background-color:#1E90FF;
	color:white;
webkit-transition: color 1s;
    -moz-transition:    color 1s;
    -ms-transition:     color 1s;
    -o-transition:      color 1s;
    transition:         color 1s;
	webkit-transition: background-color 1s;
    -moz-transition:     background-color 1s;
    -ms-transition:      background-color 1s;
    -o-transition:       background-color 1s;
    transition:          background-color 1s;
	
	font-size:120%;
}
.nav li{
	color:black;
	background-color:white;
	padding-right:2px;
	padding-left:2px;
	font-size:125%;
	
}


</style>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav" >
	
      <li><a href="index.html">HOME</a></li>
	   <li ><a href="shop.html">SHOP</a></li>
	    <li><a href="checkout.php">CHECKOUT</a></li>
        <li><a href="wish.php">WISHLIST</a></li>
        <li><a href="brand.html">BRAND</a></li>
        <li><a href="policy.html">POLICY</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="about.html">ABOUT US</a></li>
        <li><a href="add_to_cart.php">CART</a></li>
		<li><?php 
		session_start();
    
         ?>
            <?php if(isset($_SESSION['username'])): ?>
  <a class="link" href="logout.php" style="text-decoration:none">LOGOUT</a>
<?php else: ?>
  <a class="link" href="login.php" style="text-decoration:none">LOGIN</a>
<?php endif; ?></li>
  		
  
   
     
      </ul>
	  <ul class="nav navbar-nav navbar-right">
     <li>
            <?php if(isset($_SESSION['username'])): ?>
  <div class="dropdown">
  <button class="dropbtn1" > HI,<?php echo strtoupper($_SESSION['username']); ?></button>
  <div class="dropdown-content">
    <a href="profile.php">Profile</a>
		<?php if(($_SESSION['username']!='deepika')): ?>
    <a href="show_order.php">Show orders</a>
	<?php else: ?>
 <?php endif; ?>
	<?php if(($_SESSION['username']=='deepika')): ?>
  <a class="link" href="all_order.php" style="text-decoration:none">Order till date</a>
   <a class="link" href="show_users.php" style="text-decoration:none">Show users</a>
<?php else: ?>
  
<?php endif; ?>
    
  </div>
</div>

<?php endif; ?></li>
    </ul>
    </div>
  </div>
</nav> 
<div class="mid" >
<div class="row">
	<div class="col-sm-2"><img src="image/logo.png" class="top-logo">
	</div>
	<div class="col-sm-1">
	</div>
	<div class="col-sm-8" id="offer-top" style="background-image:url('image/offer-top.jpg')">
	</div>
	<div class="col-sm-1">
	</div>
	
</div>
  