<?php 
include_once 'session.php';
include_once 'dbc.php';
$con = open();
if (isset($_SESSION['cart_id'])) {
	$cart_id = $_SESSION['cart_id'];
}
else{
	 $characters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $characterslength=35;
      $randomString='';
      for ($i = 1; $i < 10; $i++){
          $randomString.=$characters[rand(0,$characterslength - 1)];
      }
    $cart_id = 'WES-'.$randomString;
	$_SESSION['cart_id'] = $cart_id;
}
$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$query = mysqli_query($con, "SELECT * FROM products WHERE product_id='$product_id' AND instock=1 ");
if (mysqli_num_rows($query) < 1) {
echo "Error";
}else{
	$det = mysqli_fetch_array($query);
	$sp = $det['price'];
	$discount = $det['discount'];
	if ($discount != 0) {
	$price = $discount;
	}else{
	$price = $sp;
	}
	$date = date('F-d-Y');
	$add = mysqli_query($con, "INSERT INTO cart (cart_id,product_id,price,time_added,quantity) VALUES('$cart_id','$product_id','$price','$date',1)");
	if ($add == true) {
		 $item_num = mysqli_num_rows(mysqli_query($con, "SELECT * FROM cart WHERE cart_id = '$cart_id' "));
		echo $item_num;
	}
	else{
		echo "failed";
	}
}
close($con);
?>
