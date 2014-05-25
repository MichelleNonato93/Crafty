<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/modernizr.js"></script>
</head>
<body>
<?php include('header.php');?>
	
<section class="body">
<div class="body-top">
<div class="row">
<div class="medium-7 columns">
<a href="#"><img src="img/logo.png"><p>CRAFTY INNOVATION INC.</p></a>
</div>
<div class="cart medium-4 push-1 columns">
<div class="shop-cart">
<div id="shop" class="cart-dropdown">
<div class="quote">
<span><img src="img/icons/cart.png">CART 2 Items</span>
<span>$0.00</span>
</div>
<ul class="dropdown">
<li><a href="detail.php"><img src="img/products/10.png">LOREM IPSUM</a>
<a href="#">REMOVE</a>
</li>
<li><a href="detail.php"><img src="img/products/15.png">LOREM IPSUM</a>
<a href="#">REMOVE</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="medium-12 columns">
<div class="row">
<div class="medium-12 columns">
<div class="product-head">
<span><a href="craftyii.php">HOME</a>&nbsp;&raquo;&nbsp;<a href="myaccount.php">MY ACCOUNT</a>&nbsp;&raquo;&nbsp;<a href="register.php" class="active">REGISTER</a>
</div>
</div>
</div>

<div class="row">
<div class="register medium-12 columns">
<div class="register-title">
<span>REGISTER</span>
</div>
<div class="quote">
<span>If you already have an account, login at the <a href="login.php">login page</a></span>
</div>
<form class="register-form">
<div class="row">
<div class="medium-3 columns">
<div class="title">
<span>Your Personal Details</span>
</div>
</div>
<div class="medium-3 pull-4 columns">
<label>FIRST NAME
<input type="text" required data-validation-requred-message="Please enter your First name">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>LAST NAME
<input type="text" required data-validation-requred-message="Please enter your Last name">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>E-MAIL ADDRESS
<input type="text" required data-validation-requred-message="Please enter your Email">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>TELEPHONE
<input type="text">
</label>
</div>
</div>
                
<div class="title">
<span>Your Address</span>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>ADDRESS 1
<input type="text" required data-validation-requred-message="Please enter your Address">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>ADDRESS 2
<input type="text" required data-validation-requred-message="Please enter your Address">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>CITY
<input type="text">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>POSTAL CODE
<input type="text">
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>COUNTRY
<select>
<option>--Please Select--</option>    
<option>United Kingdom</option>    
<option>Singapore</option>    
<option>Philippines</option>    
</select>
</label>
</div>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>REGION / STATE
<select>
<option>--Please Select--</option>    
<option>California</option>    
<option>Manila</option>    
<option>Tokyo</option>    
</select>
</label>
</div>
</div>
                
<div class="title">
<span>Your Password</span>
</div>
                
<div class="row">
<div class="medium-3 push-5 columns">
<label>PASSWORD
<input type="password">
</label>
</div>
</div>
<div class="row">
<div class="medium-3 push-5 columns">
<label> CONFIRM PASSWORD
<input type="password">
</label>
</div>
</div>
                
<div class="policy">
<input type="checkbox">
<label>I have agreed to the <a href="terms.php" target="_blank">Terms &amp; Privacy Policy</a></label>
</div>
                
<div class="row">
<div class="medium-4 push-8 columns">
<button type="button">Register</button>
</div>
</div>
</form>
</div>
</div>

</section>
	  
<?php include('footer.php');?>
	  
<script src="js/vendor/jquery.js"></script>
<script src="js/script.js"></script>
<script src="js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>
</body>
</html>
