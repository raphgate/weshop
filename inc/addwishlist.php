<?php 
include_once 'session.php';
include_once 'display_products.php';
include_once 'dbc.php';
$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
if (isset($_SESSION['customer_id'])) {
    	$customer_id = $_SESSION['customer_id'];
        $cart_id = time();
        $date = date('F-d-Y');
        $r = mysqli_fetch_array(mysqli_query($con, "SELECT price,shop_id,discount FROM products WHERE product_id='$product_id' "));
        $sp = $r['price'];
        $discount = $r['discount'];
        if ($discount != 0) {
           $price = $discount; 
        }else{
            $price = $sp;
        }
        $shop_id = $r['shop_id'];
            $add = mysqli_query($con, "INSERT INTO whishlist (whish_id,customer_id,product_id,price,shop_id,time_added,quantity) VALUES('$cart_id','$customer_id','$product_id','$price','$shop_id','$date','1')");

        if ($add == true) {
            
        }
        else{
            echo '<h6>Failed Save Wishlist</h6>';
            //echo mysqli_error($con);
        }
}
else{
    $_SESSION['tmp_pd'] = $product_id;
	echo "Error";
}

?>
