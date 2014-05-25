<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>SEARCH PAGE</title>
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
<div class="medium-9 columns">
<div class="row">
<div class="medium-12 columns">
<div class="product-head">
<span><a href="craftyii.php">HOME</a>&nbsp;&raquo;&nbsp;<a href="search.php" class="active">SEARCH</a>
</div>
</div>
</div>

<div class="row">
<div class="search-page medium-6 columns">
<div class="title">
<span>Search Criteria</span>
</div>
<div class="search-form">
<div class="title">
<span>SEARCH</span>
</div>
<form>
<input type="text">
<select>
<option>ALL CATEGORIES</option>
<optgroup label="Mesh">
<option>xb903</option>
<option>9010</option>
<option>9011</option>
</optgroup>
<optgroup label="Wrap">
<option>xb903</option>
</optgroup>
<optgroup label="Sympathy">
<option>xb903</option>
<option>9010</option>
<option>9011</option>
<option>xb903</option>
<option>9010</option>
<option>9011</option>
<option>9011</option>
</optgroup>
<optgroup label="Tulle">
<option>Tulle 6'</option>
<option>Glitter 6'</option>
<option>Tulle 54'</option>
<option>Glitter 54'</option>
</optgroup>
<optgroup label="Foam">
<option>Coolbrick</option>
</optgroup>
</select>
<input type="checkbox" name="categories" value="Category"><label>Search by Categories</label><br>
<input type="checkbox" name="categories" value="subcategory"><label>Search by Sub Categories</label>
<button type="button">SEARCH</button>
</form>	
</div>
</div>
</div>
</div><!---end of 9 columns-->
	
<div class="side-content medium-3 columns">
<div class="row">
<div class="small-12 columns">
<div class="side-title">
<span>FEATURED</span>
</div>
<div class="img">
<div class="img-head">
<div class="title">
<p>Iridesent Foil<br>xb800</p>
</div>
</div>
<a href="#"><img src="img/products/1.png"></a>
<div class="row collapse">
<div class="small-5 push-1 columns">
<p class="price">$99.00</p>
</div>
<div class="small-5 pull-1 columns">
<div class="img-btn"><a href="#"><img src="img/icons/cart.png"></a></div>
</div>
</div>
</div>
</div>
</div>
		
<div class="row">
<div class="small-12 columns">
<div class="side-title">
<span>SPECIAL</span>
</div>
<div class="img">
<div class="img-head">
<div class="title">
<p>Iridesent Foil<br>xb9044</p>
</div>
</div>
<a href="#"><img src="img/products/5.png"></a>
<div class="row collapse">
<div class="small-5 push-1 columns">
<p class="price">$45.00</p>
</div>
<div class="small-5 pull-1 columns">
<div class="img-btn"><a href="#"><img src="img/icons/cart.png"></a></div>
</div>
</div>
</div>
</div>
</div>
</div><!-- end of 3 column-->
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
