<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';
$cart_id = $_SESSION['cart_id'];
$con = open();
$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$action = mysqli_real_escape_string($con, $_POST['action']);
if ($action == 'p') {
	$update = mysqli_query($con, "UPDATE cart SET quantity=quantity+1 WHERE product_id='$product_id' AND cart_id='$cart_id' ");

}elseif ($action == 'm') {
	$update = mysqli_query($con, "UPDATE cart SET quantity=quantity-1 WHERE product_id='$product_id' AND cart_id='$cart_id' ");
}elseif ($action == 'r') {
	$update = mysqli_query($con, "DELETE FROM cart WHERE product_id='$product_id' AND cart_id='$cart_id' ");
}

 $cart = new display_products;
 $cart ->getGuestCart($con,$cart_id);
 close($con);
?>
