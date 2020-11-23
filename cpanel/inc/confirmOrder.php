<?php 
// include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';
$date = date('F-d-Y');
$con = open();
$order_id = mysqli_real_escape_string($con, $_POST['order_id']);
$que = mysqli_query($con,"SELECT * FROM orders WHERE order_id='$order_id' ");
while ($sle = mysqli_fetch_array($que)) {
	$price = $sle['price'];
	$qty = $sle['quantity'];
	$amount = $price*$qty;
	$product_id = $sle['product_id'];
	$location = $sle['location'];
	$fullname = $sle['customer_name'];
	$phone = $sle['phone'];
	$conf = mysqli_query($con,"INSERT INTO purchases (order_id,price,quantity,product_id,location,time_added,customer_name,phone) VALUES('$order_id','$price','$qty','$product_id','$location','$date','$fullname','$phone')");
	$fund = mysqli_query($con, "INSERT INTO payments (payment_id,amount,status,date_added) VALUES('$order_id','$amount',0,'$date')");
	$delete = mysqli_query($con,"DELETE FROM orders WHERE product_id='$product_id' AND order_id='$order_id' ");

}

echo '<div style="padding-right:40%;padding-left:40%;background:rgba(255,0,255, 0.5);padding-bottom:2%;padding-top:2%">Order Confirmed</div>';
?>
