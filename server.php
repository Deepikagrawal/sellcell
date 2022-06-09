<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$address1="";
$address2="";
$state="";
$pincode="";
$phone="";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sellcell');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address1 = mysqli_real_escape_string($db, $_POST['address1']);
  $address2 = mysqli_real_escape_string($db, $_POST['address2']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	
} else {
 	array_push($errors, "Email is not right");
}
if(preg_match("/^[0-9]{10}$/", $phone)) {
  
}
else{
	array_push($errors, "Please enter 10 digit phone number");
}
	

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password,address1,address2,state,pincode,phone) 
  			  VALUES('$username', '$email', '$password','$address1','$address2','$state','$pincode','$phone')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.html');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: shop.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//add_to_cart

if(isset($_POST['add_to_cart'])){
	$con=mysqli_connect("localhost","root","","sellcell");
	$pid=mysqli_real_escape_string($db, $_GET['pid']);
						
						
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						if(empty($_SESSION['username']))
{
	
}
else{
	$username=$_SESSION['username'];
							$sql = "SELECT pid,pname,price,pimage FROM product WHERE pid = $pid";
							if ($result=mysqli_query($con,$sql))
										{
												$rowcount=mysqli_num_rows($result);
												
												while ($row=mysqli_fetch_row($result))
													{
														$pid=$row['0'];
														$pname=$row['1'];
														$price=$row['2'];
														$pimage=$row['3'];
																												
														}
  
										}	

  $sql = "SELECT pid FROM cart WHERE pid = '$pid' and username='$username'" ;
  $result=mysqli_query($db,$sql);
  if(mysqli_fetch_row($result)==0)
   {
   $query = "INSERT INTO cart (pid, pname, price,username,pimage) 
  			  VALUES('$pid', '$pname', '$price','$username','$pimage')";
  	mysqli_query($db, $query);
   }
}
 								
 

}
//add_to_wishlist


if(isset($_POST['add_to_wishlist'])){
	$con=mysqli_connect("localhost","root","","sellcell");
	$pid=mysqli_real_escape_string($db, $_GET['pid']);
						
						
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
if(empty($_SESSION['username']))
{
	
}
else{
	$username=$_SESSION['username'];
							$sql = "SELECT pid,pname,price,pimage FROM product WHERE pid = $pid";
							if ($result=mysqli_query($con,$sql))
										{
												$rowcount=mysqli_num_rows($result);
												
												while ($row=mysqli_fetch_row($result))
													{
														$pid=$row['0'];
														$pname=$row['1'];
														$price=$row['2'];
														$pimage=$row['3'];
																												
														}
  
										}	

  $sql = "SELECT pid FROM wishlist WHERE pid = '$pid' and username='$username'";
  $result=mysqli_query($db,$sql);
  if(mysqli_fetch_row($result)==0)
   {
   $query = "INSERT INTO wishlist (pid, pname, price,username,pimage) 
  			  VALUES('$pid', '$pname', '$price','$username','$pimage')";
  	mysqli_query($db, $query);
   }

}

}
//remove from cart
if(isset($_POST['remove_cart'])){
	$con=mysqli_connect("localhost","root","","sellcell");
	$pid=mysqli_real_escape_string($db, $_GET['pid']);
						$username=$_SESSION['username'];
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

							$sql = "delete FROM cart WHERE pid = $pid and username='$username'";
														
										
  	mysqli_query($db, $sql);
  	

}
//remove from checkout
if(isset($_POST['remove_checkout'])){
	$con=mysqli_connect("localhost","root","","sellcell");
	$pid=mysqli_real_escape_string($db, $_GET['pid']);
						$username=$_SESSION['username'];
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

							$sql = "delete FROM cart WHERE pid = $pid and username='$username'";
							header('location: checkout.php');					
										
  	mysqli_query($db, $sql);
  	

}
//remove from wishlist
if(isset($_POST['remove_wish'])){
	$con=mysqli_connect("localhost","root","","sellcell");
	$pid=mysqli_real_escape_string($db, $_GET['pid']);
						$username=$_SESSION['username'];
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

							$sql = "delete FROM wishlist WHERE pid = $pid and username='$username'";
														
										
  	mysqli_query($db, $sql);
  	

}

//contact us
if(isset($_POST['contact_us'])){
	$con=mysqli_connect("localhost","root","","sellcell");
	$name=mysqli_real_escape_string($db, $_POST['name']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$subject=mysqli_real_escape_string($db, $_POST['subject']);
	$message=mysqli_real_escape_string($db, $_POST['message']);
	 $msg="Message is submitted";
	if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $query = "INSERT INTO contact (name, email, subject,message) 
  			  VALUES('$name', '$email', '$subject','$message')";
			 array_push($errors, "Message is submitted");
  	mysqli_query($db, $query);
  	
} else {
 	array_push($errors, "Email is not right");
}

						

}


?>