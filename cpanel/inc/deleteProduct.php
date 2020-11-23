<?php
		include_once 'dbc.php';
		include_once '../../inc/session.php';
		include_once 'display_products.php';
		$product_id = clean('product_id');
		$con = open();
		$delete = mysqli_query($con,"UPDATE products SET status=5 WHERE product_id='$product_id' ");
		close($con);
		$products = new display_products;
		$products -> getMyProducts('all',0);
?>