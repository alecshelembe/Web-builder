<?php 
include_once("page-header.php");
include_once("functions.php");

mysqli_select_db($conn, $dbname);
$table = "`website`";

$query = "SELECT * FROM $table;";

$result = mysqli_query($conn, $query) or die("Site under constrution.");

$row = mysqli_num_rows($result);

if ($row == 0) {
	die("Site under constrution.");
}

while ($row = mysqli_fetch_assoc($result)) {
	$title = $row['title'];
	$standard = $row['standard'];
	$number = $row['number'];
	$email = $row['email'];
	$menu_link_1 = $row['menu-link-1'];
	$menu_link_2 = $row['menu-link-2'];
	$menu_link_3 = $row['menu-link-3'];
	$menu_link_4 = $row['menu-link-4'];
	$main_heading = $row['main-heading'];
	$paragraph_heading = $row['paragraph-heading'];
	$header_a = $row['header-a'];
	$product_a_1 = $row['product-a-1'];
	$product_a_2 = $row['product-a-2'];
	$product_a_3 = $row['product-a-3'];
	$product_a_4 = $row['product-a-4'];
	$header_b = $row['header-b'];
	$product_b_1 = $row['product-b-1'];
	$product_b_2 = $row['product-b-2'];
	$product_b_3 = $row['product-b-3'];
	$product_b_4 = $row['product-b-4'];
	$header_c = $row['header-c'];
	$product_c_1 = $row['product-c-1'];
	$product_c_2 = $row['product-c-2'];
	$product_c_3 = $row['product-c-3'];
	$product_c_4 = $row['product-c-4'];
	$header_d = $row['header-b'];
	$product_d_1 = $row['product-d-1'];
	$product_d_2 = $row['product-d-2'];
	$product_d_3 = $row['product-d-3'];
	$product_d_4 = $row['product-d-4'];
	$header_e = $row['header-e'];
	$product_e_1 = $row['product-e-1'];
	$product_e_2 = $row['product-e-2'];
	$product_e_3 = $row['product-e-3'];
	$product_e_4 = $row['product-e-4'];
	$header_f = $row['header-f'];
	$product_f_1 = $row['product-f-1'];
	$product_f_2 = $row['product-f-2'];
	$product_f_3 = $row['product-f-3'];
	$product_f_4 = $row['product-f-4'];
	$header_g = $row['header-g'];
	$product_g_1 = $row['product-g-1'];
	$product_g_2 = $row['product-g-2'];
	$product_g_3 = $row['product-g-3'];
	$product_g_4 = $row['product-g-4'];
	$header_h = $row['header-h'];
	$product_h_1 = $row['product-h-1'];
	$product_h_2 = $row['product-h-2'];
	$product_h_3 = $row['product-h-3'];
	$product_h_4 = $row['product-h-4'];
	$header_i = $row['header-i'];
	$product_i_1 = $row['product-i-1'];
	$product_i_2 = $row['product-i-2'];
	$product_i_3 = $row['product-i-3'];
	$product_i_4 = $row['product-i-4'];
	$header_j = $row['header-j'];
	$product_j_1 = $row['product-j-1'];
	$product_j_2 = $row['product-j-2'];
	$product_j_3 = $row['product-j-3'];
	$product_j_4 = $row['product-j-4'];
}
?>
<body class="animate__animated animate__fadeIn">
	<p class="contact"><a href="tel:<?php echo "$number"; ?>"> <?php echo "$number"; ?></a><br><a href="email:<?php echo "$email"; ?>"> <?php echo "$email"; ?></a></p>
	<header>
		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn" name="checkbtn">
				<span style="font-size: smaller;">Menu</span>	
			</label>
			<label class="logo"><a href="#" style="color: white;"><?php echo "$title"; ?></a></label>
			<ul>	
				<li onclick="swip()"><a href="<?php echo "#$menu_link_1"; ?>"><?php echo "$menu_link_1"; ?></a></li>
				<li onclick="swip()"><a href="<?php echo "#$menu_link_2"; ?>"><?php echo "$menu_link_2"; ?></a></li>
				<li onclick="swip()"><a href="<?php echo "#$menu_link_3"; ?>"><?php echo "$menu_link_3"; ?></a></li>
				<li onclick="swip()"><a href="<?php echo "#$menu_link_4"; ?>"><?php echo "$menu_link_4"; ?></a></li>
			</ul>
		</nav>
	</header>
	<section>

		<h1 style="color: #333;"><?php echo "$main_heading"; ?></h1>
		<p class="top-header"><?php echo "$paragraph_heading"; ?>  </p>
		<br>
		<form action="back-end.php" method="post">
			<input type="submit" name="pictures" value="Gallary">
		</form>
		<br>
		<h4 id="<?php echo "$menu_link_1"; ?>"><?php echo "$menu_link_1"; ?></h4>
		<h2><?php echo "$header_a"; ?></h2>
		<h3><?php echo "$product_a_1"; ?></h3>
		<h3><?php echo "$product_a_2"; ?></h3>
		<h3><?php echo "$product_a_3"; ?></h3>
		<h3><?php echo "$product_a_4"; ?></h3>
		<br>
		<h4 id="<?php echo "$menu_link_2"; ?>"><?php echo "$menu_link_2"; ?></h4>
		<h2><?php echo "$header_b"; ?></h2>
		<h3><?php echo "$product_b_1"; ?></h3>
		<h3><?php echo "$product_b_2"; ?></h3>
		<h3><?php echo "$product_b_3"; ?></h3>
		<h3><?php echo "$product_b_4"; ?></h3>
		<br>
		<h4 id="<?php echo "$menu_link_3"; ?>"><?php echo "$menu_link_3"; ?></h4>
		<h2><?php echo "$header_c"; ?></h2>
		<h3><?php echo "$product_c_1"; ?></h3>
		<h3><?php echo "$product_c_2"; ?></h3>
		<h3><?php echo "$product_c_3"; ?></h3>
		<h3><?php echo "$product_c_4"; ?></h3>
		<br>
		<h4 id="<?php echo "$menu_link_4"; ?>"><?php echo "$menu_link_4"; ?></h4>
		<h2><?php echo "$header_d"; ?></h2>
		<h3><?php echo "$product_d_1"; ?></h3>
		<h3><?php echo "$product_d_2"; ?></h3>
		<h3><?php echo "$product_d_3"; ?></h3>
		<h3><?php echo "$product_d_4"; ?></h3>
		<br>
		<h2><?php echo "$header_e"; ?></h2>
		<h3><?php echo "$product_e_1"; ?></h3>
		<h3><?php echo "$product_e_2"; ?></h3>
		<h3><?php echo "$product_e_3"; ?></h3>
		<h3><?php echo "$product_e_4"; ?></h3>
		<br>
		<h2><?php echo "$header_f"; ?></h2>
		<h3><?php echo "$product_f_1"; ?></h3>
		<h3><?php echo "$product_f_2"; ?></h3>
		<h3><?php echo "$product_f_3"; ?></h3>
		<h3><?php echo "$product_f_4"; ?></h3>
		<br>
		<h2><?php echo "$header_g"; ?></h2>
		<h3><?php echo "$product_g_1"; ?></h3>
		<h3><?php echo "$product_g_2"; ?></h3>
		<h3><?php echo "$product_g_3"; ?></h3>
		<h3><?php echo "$product_g_4"; ?></h3>
		<br>
		<h2><?php echo "$header_h"; ?></h2>
		<h3><?php echo "$product_h_1"; ?></h3>
		<h3><?php echo "$product_h_2"; ?></h3>
		<h3><?php echo "$product_h_3"; ?></h3>
		<h3><?php echo "$product_h_4"; ?></h3>
		<br>
		<h2><?php echo "$header_i"; ?></h2>
		<h3><?php echo "$product_i_1"; ?></h3>
		<h3><?php echo "$product_i_2"; ?></h3>
		<h3><?php echo "$product_i_3"; ?></h3>
		<h3><?php echo "$product_i_4"; ?></h3>
		<br>
		<h2><?php echo "$header_j"; ?></h2>
		<h3><?php echo "$product_j_1"; ?></h3>
		<h3><?php echo "$product_j_2"; ?></h3>
		<h3><?php echo "$product_j_3"; ?></h3>
		<h3><?php echo "$product_j_4"; ?></h3>	
	</section>
	<footer>
		<p> &copy; <?php echo "$title"; ?> </p>
		<br>
	</footer>
	<script type="text/javascript">
		function swip() {
			document.getElementById("check").checked = false;
		}
	</script>
</body>
</html>
