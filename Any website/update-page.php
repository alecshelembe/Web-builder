<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>	
<body>
	<h1>Login</h1>
	<form action ="back-end.php" method="post" onsubmit = "return check_login();">
		<input type="email" name="email" id="login_e_mail" placeholder="Email">	
		<input type="password" name="password" id="login_password" placeholder="Password">
		<input type="submit" name="login" value="Login">
		<p>or</p>
		<a href="index.php"><input type="button" value="Main - Home"></a>
	</form>
	<?php
	include_once("validation form.html");
	?>
</body>
</html>