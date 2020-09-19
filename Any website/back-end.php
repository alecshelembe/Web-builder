<?php
if (isset($_POST['pictures'])) {
	$file_store = "pictures/";
	$files = glob($file_store.'*');
	foreach ($files as $file) {
		echo "<img src=\"$file\" width =\"450px\"/>";
	}
	exit();
}
include_once("functions.php");
mysqli_select_db($conn, $dbname);
	// session_start();
	// $email = $_SESSION['email'];
	// if (!isset($email)) {
	// 	die("Error");
	// }
if (isset($_POST['create_table'])) {
	critical_check("create_table");
	$create_table = sanitizeString($_POST['create_table']);
	check_if_empty($create_table);
	$table = "`website`";
	create_table($conn,$table);
	die("Table created.");
}

if (isset($_POST['login'])) {
	critical_check("login");
	critical_check("email");
	critical_check("password");
	$login = sanitizeString($_POST['login']);
	$email_info = sanitizeString($_POST['email']);
	$security_key_info = sanitizeString($_POST['password']);
	check_if_empty($login);
	check_if_empty($email_info);
	check_if_empty($security_key_info);
	$table = "`sign_in`";
	end_last_login($email_info);
	pair_for_login($conn,$table,"email",$email_info,"security_key",$security_key_info);
	header("location:engine.php");
	die();
}

if (isset($_POST['reset_table'])) {
	critical_check("reset_table");
	$reset_table = sanitizeString($_POST['reset_table']);
	check_if_empty($reset_table);
	$table = "`website`";
	reset_table($conn,$table);
	die("Table removed.");
}

if (isset($_POST['remove_pictures'])) {
	$file_store = "pictures/";
	$files = glob($file_store.'/*');
	foreach ($files as $file) {
		if (is_file($file)) {
			unlink($file);
		}
	}
	exit("All pictures removed");
}


if (isset($_POST['to'])) {
	critical_check("to");
	critical_check("info");
	$to = sanitizeString($_POST['to']);
	$info = sanitizeString($_POST['info']);
	check_if_empty($to);
	check_if_empty($info);
	$table = "`website`";
	update_product($conn,$table,$info,$to);
	saved();
	die("Done");
}

if (isset($_POST['the_picture'])) {

	$original_file_name = $_FILES['picture']['name'];
	$file_type = $_FILES['picture']['type'];
	$name_of_picture = sanitizeString($original_file_name);

	$file_type = sanitizeString($file_type);

	if($_FILES["picture"]["size"] > 2000000) {
		echo"Profile Picture exceeds 2MB";
		exit();
	}
	
	switch($_FILES['picture']['type'])
	{
		case 'image/jpeg': $extention = 'jpg'; break;
		case 'image/JPG': $extention = 'jpg'; break;
		case 'image/jpg': $extention = 'jpg'; break;
		case 'image/JPEG': $extention = 'jpg'; break;
		case 'image/gif':  $extention = 'gif'; break;
		case 'image/GIF':  $extention = 'gif'; break;
		case 'image/png':  $extention = 'png'; break;
		case 'image/PNG':  $extention = 'png'; break;
		case 'image/tif': $extention = 'tif'; break;
		case 'image/TIF': $extention = 'tif'; break;
		case 'image/tiff': $extention = 'tif'; break;
		case 'image/TIFF': $extention = 'tif'; break;
		default:	
		echo("Your Format must be .jpeg/.gif/ .png/ .tif or upload_a_picture!");
		exit();	 		  
		
	} 

	$file_size = $_FILES['picture']['size']; 	
	$file_tem_loc = $_FILES['picture']['tmp_name'];

	if ($extention)
	{	
		$name_of_picture = "$name_of_picture";
		// exit("$name_of_picture");

		$file_store = "pictures/";

		move_uploaded_file($file_tem_loc, $file_store.$name_of_picture);
	}
	else
	{
		echo ("Something went wrong in Uploading your profile picture. Try a different one.");
		exit();	 		  
	} 	

	saved();
	die("Done");
}
