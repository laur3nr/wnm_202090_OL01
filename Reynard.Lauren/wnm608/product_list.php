<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<title>Product List</title>
</head>
<body>

	<header>
		<a href="index.html" class="header-brand">Rocket Brewing Co.</a>
	<nav>

	<ul>

		<li><a href="aboutus.php">ABOUT US</a></li>
		<li><a href="events.php">EVENTS</a></li>
		<li><a href="shop.php">SHOP</a></li>
		<li><a href="cart.php">CART</a></li>
	</ul>


	</nav>

</header>



<?php



include_once "lib/php/functions.php";
include_once 'templates.php';

makeQuery(makeConn(), "SELECT * FROM `products`"):

echo array_reduce($result, 'productListTemplate');


?>




<footer class="footer">
	<div>2020</div>
</footer>

</body>
</html>