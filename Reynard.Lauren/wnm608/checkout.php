<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="checkoutstyles.css">
	<link rel="stylesheet" type="text/css" href="product_list.php">
	<title>Checkout</title>
</head>
<body>

	<header>
		<a href="index.html" class="header-brand">Rocket Brewing Co.</a>
	<nav>

	<ul>

		<li><a href="aboutus.php">ABOUT US</a></li>
		<li><a href="events.php">EVENTS</a></li>
		<li><a href="shop.php">SHOP</a></li>
		<li><a href="Checkout.php">CART</a></li>
	</ul>
	</nav>

</header>

<h2>Check Out</h2>



<form class="form">
	<div class="form-control">
		<p>Address Informaiton</p>
		<label for="address-street" class="form-label">Street</label>
		<input id="address-street" type="text" placeholder="Street Name" class= "form-input">
	</div>

	<div class="form-control">
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<label for="address-city" class="form-label">City</label>
				<input id="address-city" type="text" placeholder="City" class="form-input">
			</div>

			<div class="col-xs-12">
				<label for="address-state" class="form-label">State</label>
				<input id="address-state" type="text" placeholder="State" class="form-input">
			</div>
		</div>
	</div>
	<div class="form-control">
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<label for="address-zip" class="form-label">Zip Code</label>
				<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
			</div>
			<div class="col-xs-12 col-md-6">
				<label for="address-country" class="form-label">Country</label>
				<input id="address-country" type="text" placeholder="Country" class="form-input">
			</div>

		</div>
	</div>

	
<br>
	<p>Card Holder Information</p>

	<div class="form-control">
		<label for="payment-name" class="form-label"> Full Name</label>
		<input id="payment-name" type="text" placeholder="Name" class="form-input">
	</div>
	<div class="form-control">Card Number</label>
		<br>
		<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
	</div>
	<div class="form-control">
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<label for="payment-expiration" class="form-label">Expiration</label>
				<input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
			</div>
			<div class="col-xs-12 col-md-6">
				<label for="payment-cvv" class="form-label">CVV</label>
				<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
			</div>
		</div>
	</div>
	<div class="form-control">
		<label for="payment-zip" class="form-label">Zip Code</label>
		<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
	</div>
	<button class="submit">Submit</button>

</form>















<footer class="footer">
	<div>2020</div>
</footer>

</body>
</html>