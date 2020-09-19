<?php
// sever
$dbsevername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "website";

$conn = mysqli_connect($dbsevername, $dbusername, $dbpassword);

function wait($var) {
	sleep($var);
}

function redirect_back() {
	echo("<script type=\"text/javascript\">
		window.history.go(-1);
		</script>");
	die("Error");
}

function message_information_missing() {
	echo("<script type=\"text/javascript\">
		alert(\"Information missing\");
		</script>");
}

function check_if_empty($var) {
	if (empty($var)) {
		message_information_missing();
		redirect_back();
	}
}

function critical_check($var){
	if (!isset($_POST[$var])) {
		die("$var not found");
	}
}

function sanitizeString($var) {    
	if (get_magic_quotes_gpc())

		$var = stripsloashes($var);   
	$var = htmlentities($var);    
	$var = strip_tags($var); 

	if (strlen($var) > 400 ) {
		echo"Charachter break";
		die("fatal error"); 
	}

	return $var; 
}



function password_check($var,$var2) {
	if ($var !== $var2) {
		echo("<script type=\"text/javascript\">
			alert(\"Passwords don't match.\");
			</script>");
		redirect_back();
		die();
	}
}

function code_match($var,$var2) {
	if ($var !== $var2) {
		echo("<script type=\"text/javascript\">
			alert(\"Something went wrong\");
			</script>");
		redirect_back();
		die();
	}
}

function end_last_login($var) {
	if (isset($_SESSION[$var])) {
		session_reset();
	} 
}

function logout($var) {
		session_destroy();

}

function wrongpassword() {

	echo("<script type=\"text/javascript\">
		alert(\"Wrong password\");
		window.history.go(-1);
		</script>");

}

function saved() {

	echo("<script type=\"text/javascript\">
		alert(\"Saved \");
		window.history.go(-1);
		</script>");
}

function create_table($varconn,$table) {

	$query = "CREATE TABLE $table.$table ( `name` VARCHAR(200) NOT NULL , `email` VARCHAR(200) NOT NULL , `security_key` VARCHAR(200) NOT NULL ) ENGINE = InnoDB;";

	$query = "CREATE TABLE $table.$table (
	`standard` VARCHAR(200) NOT NULL  , 
	`title` VARCHAR(200) NOT NULL  , 
	`number` VARCHAR(200) NOT NULL  , 
	`email` VARCHAR(200) NOT NULL  , 
	`menu-link-1` VARCHAR(200) NOT NULL , 
	`menu-link-2` VARCHAR(200) NOT NULL , 
	`menu-link-3` VARCHAR(200) NOT NULL , 
	`menu-link-4` VARCHAR(200) NOT NULL , 
	`main-heading` VARCHAR(200) NOT NULL , 
	`paragraph-heading` VARCHAR(200) NOT NULL , 
	`header-a` VARCHAR(200) NOT NULL , 
	`product-a-1` VARCHAR(200) NOT NULL , 
	`product-a-2` VARCHAR(200) NOT NULL , 
	`product-a-3` VARCHAR(200) NOT NULL , 
	`product-a-4` VARCHAR(200) NOT NULL ,
	`header-b` VARCHAR(200) NOT NULL , 
	`product-b-1` VARCHAR(200) NOT NULL , 
	`product-b-2` VARCHAR(200) NOT NULL , 
	`product-b-3` VARCHAR(200) NOT NULL , 
	`product-b-4` VARCHAR(200) NOT NULL ,
	`header-c` VARCHAR(200) NOT NULL , 
	`product-c-1` VARCHAR(200) NOT NULL , 
	`product-c-2` VARCHAR(200) NOT NULL , 
	`product-c-3` VARCHAR(200) NOT NULL , 
	`product-c-4` VARCHAR(200) NOT NULL ,
	`header-d` VARCHAR(200) NOT NULL , 
	`product-d-1` VARCHAR(200) NOT NULL , 
	`product-d-2` VARCHAR(200) NOT NULL , 
	`product-d-3` VARCHAR(200) NOT NULL , 
	`product-d-4` VARCHAR(200) NOT NULL ,
	`header-e` VARCHAR(200) NOT NULL , 
	`product-e-1` VARCHAR(200) NOT NULL , 
	`product-e-2` VARCHAR(200) NOT NULL , 
	`product-e-3` VARCHAR(200) NOT NULL , 
	`product-e-4` VARCHAR(200) NOT NULL ,
	`header-f` VARCHAR(200) NOT NULL , 
	`product-f-1` VARCHAR(200) NOT NULL , 
	`product-f-2` VARCHAR(200) NOT NULL , 
	`product-f-3` VARCHAR(200) NOT NULL , 
	`product-f-4` VARCHAR(200) NOT NULL ,
	`header-g` VARCHAR(200) NOT NULL , 
	`product-g-1` VARCHAR(200) NOT NULL , 
	`product-g-2` VARCHAR(200) NOT NULL , 
	`product-g-3` VARCHAR(200) NOT NULL , 
	`product-g-4` VARCHAR(200) NOT NULL ,
	`header-h` VARCHAR(200) NOT NULL , 
	`product-h-1` VARCHAR(200) NOT NULL , 
	`product-h-2` VARCHAR(200) NOT NULL , 
	`product-h-3` VARCHAR(200) NOT NULL , 
	`product-h-4` VARCHAR(200) NOT NULL ,
	`header-i` VARCHAR(200) NOT NULL , 
	`product-i-1` VARCHAR(200) NOT NULL , 
	`product-i-2` VARCHAR(200) NOT NULL , 
	`product-i-3` VARCHAR(200) NOT NULL , 
	`product-i-4` VARCHAR(200) NOT NULL ,
	`header-j` VARCHAR(200) NOT NULL , 
	`product-j-1` VARCHAR(200) NOT NULL , 
	`product-j-2` VARCHAR(200) NOT NULL , 
	`product-j-3` VARCHAR(200) NOT NULL , 
	`product-j-4` VARCHAR(200) NOT NULL 
	) ENGINE = InnoDB;";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	$query = "ALTER TABLE $table ADD PRIMARY KEY( `standard`);";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	$query = "INSERT INTO `website` (`standard`, `title`, `number`, `email`, `menu-link-1`, `menu-link-2`, `menu-link-3`, `menu-link-4`, `main-heading`, `paragraph-heading`, `header-a`, `product-a-1`, `product-a-2`, `product-a-3`, `product-a-4`, `header-b`, `product-b-1`, `product-b-2`, `product-b-3`, `product-b-4`, `header-c`, `product-c-1`, `product-c-2`, `product-c-3`, `product-c-4`, `header-d`, `product-d-1`, `product-d-2`, `product-d-3`, `product-d-4`, `header-e`, `product-e-1`, `product-e-2`, `product-e-3`, `product-e-4`, `header-f`, `product-f-1`, `product-f-2`, `product-f-3`, `product-f-4`, `header-g`, `product-g-1`, `product-g-2`, `product-g-3`, `product-g-4`, `header-h`, `product-h-1`, `product-h-2`, `product-h-3`, `product-h-4`, `header-i`, `product-i-1`, `product-i-2`, `product-i-3`, `product-i-4`, `header-j`, `product-j-1`, `product-j-2`, `product-j-3`, `product-j-4`) VALUES ('1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";

	// VALUES ('1', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o');";


	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

}

function update_product($varconn,$table,$info,$place){

	$query = "UPDATE $table SET `$place` = '$info' WHERE $table.`standard` = '1';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

}

function reset_table($varconn,$table) {

	$query = "DROP TABLE $table.$table;";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

}

function pair_for_login($varconn,$table,$email,$email_info,$security_key,$security_key_info) {

	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));


	$security_key = "";

	while ($row = mysqli_fetch_assoc($result)) {
		$security_key = $row['security_key'];
	}
	
	if ($security_key !== $security_key_info ){
		wrongpassword();
		die();
	}


	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));


	$account_state = "";
	$login_times="";
	
	while ($row = mysqli_fetch_assoc($result)) {
		$account_state = $row['account_state'];
		$login_times = $row['login_times'];
	}

	if($login_times == ""){
		$login_times = "0";
	}

	$login_times++;
	

	if ($account_state == 0 ){
		die("Contact Kingproteas");
	}

	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn,$_SESSION['ready'] = $query) or die(mysql_error($varconn));

	session_start();

	while ($row = mysqli_fetch_assoc($result))
	{ 

		$email = $_SESSION['email'] = $row['email'];
		$name = $_SESSION['name'] = $row['name'];

	}

	$query = "UPDATE $table
	 SET `login_times` = '$login_times' WHERE $table.`security_key` = '$security_key_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

}


?>


