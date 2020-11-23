<?php
		include_once 'dbc.php';
		include_once '../../inc/session.php';
		include_once 'display_products.php';
		$category = clean('category');
		?>
		<br><br>
		<select class="form-control" id="category" name="subcategory">
          <option disabled="" selected="true">Select Subcategory</option>
          <?php 
              $con = open();
              $sel = mysqli_query($con,"SELECT * FROM product_samples WHERE category='$category' ");
			while ($row = mysqli_fetch_array($sel)) {
				$subcategory = $row['subcategory'];
				echo '<option>'.$subcategory.'</option>';
			}
              close($con);
          ?>
      </select>
      <br><br>
        <input class="form-control" name="brand" placeholder="brand" required=""><br><br>

		<input class="form-control" type="text" name="pname" placeholder="Product name here" required=""><br><br>

		<input class="form-control" type="number" name="price" placeholder="Price" required=""><br><br>

		<input class="form-control" type="number" name="discount" placeholder="Discount Price"><br><br>

		<label>Image 1 (Required)</label>
		<input class="form-control" type="file" name="pix" required=""><br><br>

		<label>Additional Images (Optional, 3 images max)</label>
		<input class="form-control" type="file" name="pix_2[]" multiple=""><br><br>

		<textarea class="form-control" rows="5" name="product_description" placeholder="Product Description"></textarea><br><br>

		<br>
		<input class="btn btn-danger" type="submit" value="Add Product" name="addProduct" />