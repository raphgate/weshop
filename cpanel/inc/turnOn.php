<?php
		include_once 'dbc.php';
		include_once '../../inc/session.php';
		include_once 'display_products.php';
		$product_id = clean('product_id');
		$con = open();
		
		$turnOn = mysqli_query($con,"UPDATE products SET instock=1 WHERE product_id='$product_id' ");
		close($con);

?>
 <a href="edit-product.php?prd=<?php echo $product_id; ?>" class="btn btn-info">Edit</a>
 
 <a  class="btn btn-warning" onclick="turnOff(<?php echo $product_id?>)">Turn Off</a>
        
<a  class="btn btn-danger" onclick="deleteProduct(<?php echo $product_id?>)">Delete</a>