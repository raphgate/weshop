<?php 
include_once 'session.php';
include_once 'display_products.php';
include_once 'dbc.php';
$customer_id = $_SESSION['customer_id'];
// if (isset($_SESSION['cart_id'])) {
// 	$cart_id = $_SESSION['cart_id'];
// }
// else{
// 	$cart_id = time();
// 	$_SESSION['cart_id'] = $cart_id;
// }
$cart_id = mysqli_real_escape_string($con, $_POST['cart_id']);
$date = date('F-d-Y');
$cart_query = mysqli_query($con, "SELECT * FROM cart WHERE cart_id='$cart_id' ");
while ($cart_row = mysqli_fetch_array($cart_query)) {
    $product_id = $cart_row['product_id'];
    $price = $cart_row['price'];
    $shop_id = $cart_row['shop_id'];
    $qty = $cart_row['quantity'];
    $actual = $price*$qty;

    $add = mysqli_query($con, "INSERT INTO whishlist (whish_id,customer_id,product_id,price,shop_id,time_added,quantity) VALUES('$cart_id','$customer_id','$product_id','$price','$shop_id','$date','$qty')");
    }

if ($add == true) {
	$cart = new display_products;
    $cart ->getCart($con,$cart_id);
	 echo '<div style="padding-right:20%;padding-left:20%;background:rgba(255,0,255, 0.5)">Wishlist Saved Click <a href="wishlist.php">Here to view wishlist</a></div>';
}
else{
	echo 'Failed Save Wishlist';
	//echo mysqli_error($con);
}
?>
