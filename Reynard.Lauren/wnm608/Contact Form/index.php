<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8">

	<title>Contact Form</title>
</head>
<body>

	<main>
		
		<p>CONTACT FORM</p>

		<form class="contact-form" action= "contactform.php" method="post">
			
			<input type="text" name="name" placeholder="Full Name">
			<input type="text" name="mail" placeholder="Your Email">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="message" placeholder="Message"></textarea>
			<button type="submit" name="Submit"> SEND MAIL</button>

		</form>



	</main>

</body>
</html>