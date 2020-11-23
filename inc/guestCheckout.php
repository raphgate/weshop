<?php
	include_once 'dbc.php';
	include_once 'session.php';
	$cart_id = $_SESSION['cart_id'];
	$cart_query = mysqli_query($con, "SELECT * FROM cart WHERE cart_id='$cart_id' ");
        $total=0;
         $metr = mysqli_num_rows($cart_query);
        if ($metr < 1) {
          echo '<div style="padding-right:40%;padding-left:40%;background:rgba(255,0,255, 0.5);padding-bottom:2%;padding-top:2%">Cart Is Empty</div>';
        }else{
        while ($cart_row = mysqli_fetch_array($cart_query)) {
            $product_id = $cart_row['product_id'];
            $price = $cart_row['price'];
            $shop_id = $cart_row['shop_id'];
            $qty = $cart_row['quantity'];
            $actual = $price*$qty;
            $total += $actual;
        }
    }
?>

<form id="checkout" action="" method="post" >
    <script src="https://js.paystack.co/v1/inline.js"></script>
      <input type="hidden" id="amount" name="amount" value="<?php echo $total;?>">
      <input type="email" id="email" name="email" Placeholder="Enter Your Emaill Address" class="form-control" style="max-width: 300px">
      <input type="text" id="address" name="address" Placeholder="Enter Shipping Address Here" class="form-control" style="max-width: 300px">
     <button class="button style-12" onclick="payWithPaystack()">Proceed to checkout <i class="fa fa-chevron-right"></i> 
     </button>
</form>
