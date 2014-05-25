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
<span><a href="craftyii.php">HOME</a>&nbsp;&raquo;&nbsp;<a href="myaccount.php">MY ACCOUNT</a>&nbsp;&raquo;&nbsp;<a href="#" class="active">LOGIN</a>
</div>
</div>
</div>

<div class="row">
<div class="medium-12 columns">
<div class="login-title">
<span>ACCOUNT LOGIN</span>
</div>
<div class="row">
<div class="reg medium-5 columns">
<div class="head">
<p><img src="img/icons/document.png">NEW CUSTOMER</p>	
</div>
<hr class="line">
<div class="content">
<span>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</span>
</div>
<hr class="line">
<div class="bottom">
<a href="register.php">Continue<img src="img/icons/login-arrow.png"></a>
</div>
</div>
<div class="log medium-5 columns">
<div class="head">
<p><img src="img/icons/login.png">RETURNING A CUSTOMER</p>
</div>
<hr class="line">
<div class="content">
<form>
<div class="row">
<dv class="small-6 columns">
<label>E-MAIL ADDRESS:</label>	
</dv>
<div class="small-6 columns">
<input type="text">		
</div>
</div>
<div class="row">
<dv class="small-6 columns">
<label>PASSWORD:</label>	
</dv>
<div class="small-6 columns">
<input type="text">		
</div>
</div>
</form>
</div>
<hr class="line">
<div class="bottom">
<button class="log-btn">Login<img src="img/icons/login-arrow.png"></button>
<a href="forgotpass.php">Forgot Password</a>
</div>
</div>
</div>
</div>
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
