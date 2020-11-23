<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';
	$customer_id = $_SESSION['customer_id'];
	$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
	$update = mysqli_query($con, "DELETE FROM whishlist WHERE product_id='$product_id' AND customer_id='$customer_id' ");

	 $cart = new display_products;
	 $cart ->getWishList($con,$customer_id);
?>
