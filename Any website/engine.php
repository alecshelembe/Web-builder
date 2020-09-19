<?php
session_start();
$email = $_SESSION['email'];
if (!isset($email)) {
	die("Error");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>	
<div class="red">	
	<form action="back-end.php" method="post">
		<input type="submit" name="create_table" value="Create table">
	</form>

	<form action="back-end.php" method="post">
		<input type="submit" name="reset_table" value="Clear website">
	</form>

	<form action="back-end.php" method="post">
		<input type="submit" name="remove_pictures" value="Remove Pictures">
	</form>
</div>
<h1>Update your website</h1> 
<br>
<a href="index.php"><input type="button" value="Main - Home"></a>

<form action="back-end.php"  method="post" enctype="multipart/form-data" />
	<label for="Picture">Upload Picture  max = 2MB </label>
	<input type="file" name="picture" accept="image/*">
	<input type="submit" value="Save" name="the_picture">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Title" maxlength="12">
	<input type="text" name="to" value="title" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Number">
	<input type="text" name="to" value="number" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Email">
	<input type="text" name="to" value="email" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Menu-link 1" maxlength="13">
	<input type="text" name="to" value="menu-link-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Menu-link 2" maxlength="13">
	<input type="text" name="to" value="menu-link-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Menu-link 3" maxlength="13">
	<input type="text" name="to" value="menu-link-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Menu-link 4" maxlength="13">
	<input type="text" name="to" value="menu-link-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Main-header">
	<input type="text" name="to" value="main-heading" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Paragraph-heading">
	<input type="text" name="to" value="paragraph-heading" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Heading a">
	<input type="text" name="to" value="header-a" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product a 1">
	<input type="text" name="to" value="product-a-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product a 2">
	<input type="text" name="to" value="product-a-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product a 3">
	<input type="text" name="to" value="product-a-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product a 4">
	<input type="text" name="to" value="product-a-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Heading b">
	<input type="text" name="to" value="header-b" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product b 1">
	<input type="text" name="to" value="product-b-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product b 2">
	<input type="text" name="to" value="product-b-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product b 3">
	<input type="text" name="to" value="product-b-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product b 4">
	<input type="text" name="to" value="product-b-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Heading c">
	<input type="text" name="to" value="header-c" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product c 1">
	<input type="text" name="to" value="product-c-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product c 2">
	<input type="text" name="to" value="product-c-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product c 3">
	<input type="text" name="to" value="product-c-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product c 4">
	<input type="text" name="to" value="product-c-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Heading d">
	<input type="text" name="to" value="header-d" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product d 1">
	<input type="text" name="to" value="product-d-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product d 2">
	<input type="text" name="to" value="product-d-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product d 3">
	<input type="text" name="to" value="product-d-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product d 4">
	<input type="text" name="to" value="product-d-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="header e">
	<input type="text" name="to" value="header-e" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product e 1">
	<input type="text" name="to" value="product-e-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product e 2">
	<input type="text" name="to" value="product-e-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product e 3">
	<input type="text" name="to" value="product-e-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product e 4">
	<input type="text" name="to" value="product-e-4" hidden>
	<input type="submit" value="Save">
</form>
<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="header f">
	<input type="text" name="to" value="header-f" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product f 1">
	<input type="text" name="to" value="product-f-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product f 2">
	<input type="text" name="to" value="product-f-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product f 3">
	<input type="text" name="to" value="product-f-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product f 4">
	<input type="text" name="to" value="product-f-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="header g">
	<input type="text" name="to" value="header-g" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product g 1">
	<input type="text" name="to" value="product-g-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product g 2">
	<input type="text" name="to" value="product-g-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product g 3">
	<input type="text" name="to" value="product-g-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product g 4">
	<input type="text" name="to" value="product-g-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="header h">
	<input type="text" name="to" value="header-h" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product h 1">
	<input type="text" name="to" value="product-h-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product h 2">
	<input type="text" name="to" value="product-h-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product h 3">
	<input type="text" name="to" value="product-h-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product h 4">
	<input type="text" name="to" value="product-h-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="header i">
	<input type="text" name="to" value="header-i" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product i 1">
	<input type="text" name="to" value="product-i-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product i 2">
	<input type="text" name="to" value="product-i-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product i 3">
	<input type="text" name="to" value="product-i-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product i 4">
	<input type="text" name="to" value="product-i-4" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="header j">
	<input type="text" name="to" value="header-j" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product j 1">
	<input type="text" name="to" value="product-j-1" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product j 2">
	<input type="text" name="to" value="product-j-2" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product j 3">
	<input type="text" name="to" value="product-j-3" hidden>
	<input type="submit" value="Save">
</form>

<form action="back-end.php" method="post">
	<input type="text" name="info" placeholder="Product j 4">
	<input type="text" name="to" value="product-j-4" hidden>
	<input type="submit" value="Save">
</form>
</body>
</html>