<?php
include_once 'dbc.php';
include_once 'session.php';
// include_once 'cvn.php';
class display_products{

	public function getProducts($offset){
    $con = open();
		$query = mysqli_query($con,"SELECT * FROM products WHERE status=1 ORDER BY product_name ASC LIMIT 12 OFFSET {$offset}");
    if (mysqli_num_rows($query) < 1) {
      echo '<div class="col-lg-12 alert alert-default">No More Data To display</div>';
    }
		while ($row = mysqli_fetch_array($query)) {
			$category = $row['category'];
			$sub_category = $row['sub_category'];
			$product = $row['product'];
      $product_id = $row['product_id'];
			$sp = $row['price'];
      $discount = $row['discount'];
      if ($discount != 0) {
        $price = $discount;
      }else{
        $price = $sp;
      }
			$pix = $row['product_pix'];
			$brand = $row['brand'];
			$product_name = $row['product_name'];
			$cat = $sub_category." (".$category.")";
			$desc = $brand." ".$product_name;

		?>
        <div class="col-md-3 col-xs-12 col-sm-12" style="margin-bottom: 3%">
              <div class="product product-grid">
                <div class="product-img-wrap"><a href="product.php?product=<?php echo $product_id ?>"><img src="product-pics/<?php echo $pix; ?>" alt="" style="max-height: 180px"/></a>
                  <div class="product-label-wrap"><span class="new"><?php echo $brand ?></span></div>
                </div>
                <div class="product-caption">
                  <ul class="product-categories">
                    <li><a href="category.php?category=<?php echo $category; ?>"><?php echo $category ?></a></li>
                    <li><a href="sub-category.php?subcategory=<?php echo $sub_category; ?>"><?php echo $sub_category ?></a></li>
                  </ul>
                  <h6 class="product-title"><a href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name; ?></a></h6>
                  <p class="">
                  <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span>&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span>&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?>
                  </p>
                  <a href="#" class="button-black button button-icon-left" onclick="addToCart(<?php echo $product_id ?>)"><span>Add to Cart</span></a>
                  <a href="whatsapp://send?phone=+2347037348375&text=https://www.weshop.com.ng/product.php?product=<?php echo $product_id;?>" > &nbsp; &nbsp;<span class="icon icon-md fa fa-whatsapp"></span></a>
                </div>
              </div>
            </div>
		<?php
		  }
      close($con);
    }

    public function mostPopular($con){
    $query = mysqli_query($con,"SELECT * FROM products WHERE status=0 ORDER BY product_views DESC LIMIT 8");
    while ($row = mysqli_fetch_array($query)) {
      $category = $row['category'];
      $sub_category = $row['sub_category'];
      $product = $row['product'];
      $product_id = $row['product_id'];
      $sp = $row['price'];
      $discount = $row['discount'];
      if ($discount != 0) {
        $price = $discount;
      }else{
        $price = $sp;
      }
      $pix = $row['product_pix'];
      $brand = $row['brand'];
      $product_name = $row['product_name'];
      $cat = $sub_category." (".$category.")";
      $desc = $brand." ".$product_name;

    ?>
        <div class="item">
              <div class="product product-grid">
                <div class="product-img-wrap"><a href="product.php?product=<?php echo $product_id ?>"><img src="product_pix/<?php echo $pix; ?>" alt="" style="max-height: 180px"/></a>
                  <div class="product-label-wrap"><span class="new"><?php echo $brand ?></span></div>
                </div>
                <div class="product-caption">
                  <ul class="product-categories">
                    <li><a href="category.php?category=<?php echo $category; ?>"><?php echo $category ?></a></li>
                    <li><a href="sub-category.php?category=<?php echo $sub_category; ?>"><?php echo $sub_category ?></a></li>
                  </ul>
                  <h6 class="product-title"><a href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name; ?></a></h6>
                  <p class="">
                  <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span>&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span>&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?>
                  </p>
                 <a href="#" class="button-black button button-icon-left" onclick="addToCart(<?php echo $product_id ?>)"><span>Add to Cart</span></a>
                  <a href="whatsapp://send?phone=+2347037348375&text=https://www.weshop.com.ng/product.php?product=<?php echo $product_id;?>" > &nbsp; &nbsp;<span class="icon icon-md fa fa-whatsapp"></span></a>
                </div>
              </div>
            </div>
    <?php
      }
    }

    public function relatedProducts($sub_category,$product_id){
    $con = open();
    $query = mysqli_query($con,"SELECT * FROM products WHERE product_id != '$product_id' AND sub_category='$sub_category' AND status=1 ORDER BY product_views DESC LIMIT 8");
    if (mysqli_num_rows($query) < 1) {
      echo '<div class="col-lg-12 alert-default text-center text-default">No Related Products For This Product</div>';
    }
    while ($row = mysqli_fetch_array($query)) {
      $category = $row['category'];
      $sub_category = $row['sub_category'];
      $product = $row['product'];
      $product_id = $row['product_id'];
      $sp = $row['price'];
      $discount = $row['discount'];
      if ($discount != 0) {
        $price = $discount;
      }else{
        $price = $sp;
      }
      $pix = $row['product_pix'];
      $brand = $row['brand'];
      $product_name = $row['product_name'];
      $cat = $sub_category." (".$category.")";
      $desc = $brand." ".$product_name;

    ?>
        <div class="item">
              <div class="product product-grid">
                <div class="product-img-wrap"><a href="product.php?product=<?php echo $product_id ?>"><img src="product-pics/<?php echo $pix; ?>" alt="" style="max-height: 180px"/></a>
                  <div class="product-label-wrap"><span class="new"><?php echo $brand ?></span></div>
                </div>
                <div class="product-caption">
                  <ul class="product-categories">
                    <li><a href="category.php?category=<?php echo $category; ?>"><?php echo $category ?></a></li>
                    <li><a href="sub-category.php?subcategory=<?php echo $sub_category; ?>"><?php echo $sub_category ?></a></li>
                  </ul>
                  <h6 class="product-title"><a href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name; ?></a></h6>
                  <p class="">
                  <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span>&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span>&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?>
                  </p>
                 <a href="#" class="button-black button button-icon-left" onclick="addToCart(<?php echo $product_id ?>)"><span>Add to Cart</span></a>
                  <a href="whatsapp://send?phone=+2347037348375&text=https://www.weshop.com.ng/product.php?product=<?php echo $product_id;?>" > &nbsp; &nbsp;<span class="icon icon-md fa fa-whatsapp"></span></a>
                </div>
              </div>
            </div>
    <?php
      }
    }

    public function getCategory($category,$offset){
      $con = open();
    $query = mysqli_query($con,"SELECT * FROM products WHERE (category='$category') AND status=1 ORDER BY product_name LIMIT 12 OFFSET {$offset}");
    if (mysqli_num_rows($query) < 1) {
      echo '<div class="col-lg-12 alert alert-default" style="text-align: center">No More Data To display</div>';
    }
    while ($row = mysqli_fetch_array($query)) {
      $category = $row['category'];
      $sub_category = $row['sub_category'];
      $product = $row['product'];
      $product_id = $row['product_id'];
      $sp = $row['price'];
      $discount = $row['discount'];
      if ($discount != 0) {
        $price = $discount;
      }else{
        $price = $sp;
      }
      $pix = $row['product_pix'];
      $brand = $row['brand'];
      $product_name = $row['product_name'];
      $cat = $sub_category." (".$category.")";
      $desc = $brand." ".$product_name;

    ?>
         <div class="col-md-3 col-xs-12 col-sm-12" style="margin-bottom: 3%">
              <div class="product product-grid">
                <div class="product-img-wrap"><a href="product.php?product=<?php echo $product_id ?>"><img src="product-pics/<?php echo $pix; ?>" alt="" style="max-height: 180px"/></a>
                  <div class="product-label-wrap"><span class="new"><?php echo $brand ?></span></div>
                </div>
                <div class="product-caption">
                  <ul class="product-categories">
                    <li><a href="category.php?category=<?php echo $category; ?>"><?php echo $category ?></a></li>
                    <li><a href="sub-category.php?subcategory=<?php echo $sub_category; ?>"><?php echo $sub_category ?></a></li>
                  </ul>
                  <h6 class="product-title"><a href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name; ?></a></h6>
                  <p class="">
                  <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span>&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span>&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?>
                  </p>
                 <a href="#" class="button-black button button-icon-left" onclick="addToCart(<?php echo $product_id ?>)"><span>Add to Cart</span></a>
                  <a href="whatsapp://send?phone=+2347037348375&text=https://www.weshop.com.ng/product.php?product=<?php echo $product_id;?>" > &nbsp; &nbsp;<span class="icon icon-md fa fa-whatsapp"></span></a>
                </div>
              </div>
            </div>
    <?php
      }
      close($con);
    }

    public function getsubCategory($category,$offset){
      $con = open();
    $query = mysqli_query($con,"SELECT * FROM products WHERE sub_category='$category' AND status=1 ORDER BY product_name LIMIT 12 OFFSET {$offset}");
    if (mysqli_num_rows($query) < 1) {
      echo '<div class="col-lg-12 alert alert-default" style="text-align: center">No More Data To display</div>';
    }
    while ($row = mysqli_fetch_array($query)) {
      $category = $row['category'];
      $sub_category = $row['sub_category'];
      $product = $row['product'];
      $product_id = $row['product_id'];
      $sp = $row['price'];
      $discount = $row['discount'];
      if ($discount != 0) {
        $price = $discount;
      }else{
        $price = $sp;
      }
      $pix = $row['product_pix'];
      $brand = $row['brand'];
      $product_name = $row['product_name'];
      $cat = $sub_category." (".$category.")";
      $desc = $brand." ".$product_name;

    ?>
         <div class="col-md-3 col-xs-12 col-sm-12" style="margin-bottom: 3%">
              <div class="product product-grid">
                <div class="product-img-wrap"><a href="product.php?product=<?php echo $product_id ?>"><img src="product-pics/<?php echo $pix; ?>" alt="" style="max-height: 180px"/></a>
                  <div class="product-label-wrap"><span class="new"><?php echo $brand ?></span></div>
                </div>
                <div class="product-caption">
                  <ul class="product-categories">
                    <li><a href="category.php?category=<?php echo $category; ?>"><?php echo $category ?></a></li>
                    <li><a href="sub-category.php?subcategory=<?php echo $sub_category; ?>"><?php echo $sub_category ?></a></li>
                  </ul>
                  <h6 class="product-title"><a href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name; ?></a></h6>
                  <p class="">
                  <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span>&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span>&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?>
                  </p>
                 <a href="#" class="button-black button button-icon-left" onclick="addToCart(<?php echo $product_id ?>)"><span>Add to Cart</span></a>
                  <a href="whatsapp://send?phone=+2347037348375&text=https://www.weshop.com.ng/product.php?product=<?php echo $product_id;?>" > &nbsp; &nbsp;<span class="icon icon-md fa fa-whatsapp"></span></a>
                </div>
              </div>
            </div>
    <?php
      }
    }

    public function processSearch($keyword,$offset){
         $con = open();
         $arr = explode(" ",$keyword);
          $len = count($arr);
          $key = '';
          for ($i=0; $i < $len ; $i++) { 
                 $key1 = "'".$arr[$i]."'";
                 $key = $key.$key1.",";                        
          }
           $main_key = substr($key, 0, -1);

           $query = mysqli_query($con,"SELECT * FROM products WHERE status=1 AND( brand IN($main_key) OR category IN($main_key) OR sub_category IN($main_key) OR product_name IN($main_key) OR product IN($main_key) OR product_name LIKE '%$keyword%' ) ORDER BY product_name LIMIT 12 OFFSET {$offset} ");
           $num = mysqli_num_rows($query);
      if ($num == 0) {
          echo "<div class='col-lg-12 alert alert-default' style='text-align:center'>No data to display for ".$keyword."</div>";
      }else{
      while ($row = mysqli_fetch_array($query)) {
          $category = $row['category'];
          $sub_category = $row['sub_category'];
          $product = $row['product'];
          $product_id = $row['product_id'];
          $sp = $row['price'];
            $discount = $row['discount'];
            if ($discount != 0) {
              $price = $discount;
            }else{
              $price = $sp;
            }
          $pix = $row['product_pix'];
          $brand = $row['brand'];
          $product_name = $row['product_name'];
          $cat = $sub_category." (".$category.")";
          $desc = $brand." ".$product_name;

    ?>
        <div class="col-md-3 col-xs-12 col-sm-12" style="margin-bottom: 2%">
              <div class="product product-grid">
                <div class="product-img-wrap"><a href="product.php?product=<?php echo $product_id ?>"><img src="product-pics/<?php echo $pix; ?>" alt="" style="max-height: 180px"/></a>
                  <div class="product-label-wrap"><span class="new"><?php echo $brand ?></span></div>
                </div>
                <div class="product-caption">
                  <ul class="product-categories">
                    <li><a href="category.php?category=<?php echo $category; ?>"><?php echo $category ?></a></li>
                    <li><a href="sub-category.php?subcategory=<?php echo $sub_category; ?>"><?php echo $sub_category ?></a></li>
                  </ul>
                  <h6 class="product-title"><a href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name; ?></a></h6>
                  <p class="">
                  <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span>&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span>&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?>
                  </p>
                 <a href="#" class="button-black button button-icon-left" onclick="addToCart(<?php echo $product_id ?>)"><span>Add to Cart</span></a>
                  <a href="whatsapp://send?phone=+2347037348375&text=https://www.weshop.com.ng/product.php?product=<?php echo $product_id;?>" > &nbsp; &nbsp;<span class="icon icon-md fa fa-whatsapp"></span></a>
                </div>
              </div>
            </div>
    <?php
      }
    }
  }



    public function getCart($con,$cart_id){
      $cart_query = mysqli_query($con, "SELECT * FROM cart WHERE cart_id='$cart_id' ");
        $total=0;
         $metr = mysqli_num_rows($cart_query);
        if ($metr < 1) {
          echo '<tr><td colspan="6" style="padding-right:40%;padding-left:40%;padding-bottom:2%;padding-top:2%">Cart Is Empty</td></tr>';
        }else{
        while ($cart_row = mysqli_fetch_array($cart_query)) {
            $product_id = $cart_row['product_id'];
            $price = $cart_row['price'];
            $shop_id = $cart_row['shop_id'];
            $qty = $cart_row['quantity'];
            $actual = $price*$qty;
            $total += $actual;
            $item_query = mysqli_fetch_array(mysqli_query($con, "SELECT product_name,product_pix,category,sub_category,brand FROM products WHERE product_id='$product_id' "));
            $product_name = $item_query['product_name'];
            $product_pix = $item_query['product_pix'];
            $category = $item_query['category'];
            $sub_category = $item_query['sub_category'];
            $brand = $item_query['brand'];
        
    ?>

        <tr style="padding: 1px">
          <td style="">
            <div class="unit flex-row unit-spacing-md align-items-center">
              <div class="unit__left"><img src="product-pics/<?php echo $product_pix ?>" alt="" style="max-height: 80px" />
              </div>
              <div class="unit__body">
                <h6><a class="thumbnail-classic-title" href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name ?></a></h6>
              </div>
            </div>
          </td>
          <td>
            <div class=""><span>&#8358; <?php echo number_format($price) ?></span></div>
          </td>
          <td>
            <div style="border: 1px solid #fff;text-align: center;background: #d5d3d3;color: #000"><i class="fa fa-minus" style="padding-right: 15%;padding-top: 10%;padding-bottom: 10%"  onclick="Decrease(<?php echo $product_id; ?>)"></i><b><?php echo $qty; ?></b>  <i class="fa fa-plus" style="padding-left: 15%;padding-top: 10%;padding-bottom: 10%"  onclick="Increase(<?php echo $product_id; ?>)"></i></div>
          </td>
          <td>
            <div class=""><span>&#8358; <?php echo number_format($actual) ?></span></div>
          </td>
          <td class="table-cart-remove-item"><span class="icon icon-sm linear-icon-cross2 icon-gray-4" onclick="Remove(<?php echo $product_id; ?>)"></span></td>
        </tr>
        <?php 
    }
    ?>
    <tr>
      <td></td>
      <td></td>
        <td class="subtotal"><b>Total</b></td>
        <th></th>
        <td class="subtotal"><b>&#8358;   <?php echo number_format($total); ?></b></td>
    </tr>
    <tr>
      <td colspan="6">
        <div class="" id="guest">
                    <?php 
                    if (isset($_SESSION['customer_id'])) {
                        $customer_id = $_SESSION['customer_id'];
                        $email = $_SESSION['email'];
                    ?>
                        <form id="checkout" action="" method="post" >
                            <script src="https://js.paystack.co/v1/inline.js"></script>
                              <input type="hidden" id="email" name="email" value="<?php echo $email;?>">
                              <input type="hidden" id="cart_id" name="cart_id" value="<?php echo $cart_id;?>">
                              <input type="hidden" id="amount" name="amount" value="<?php echo $total;?>">
                              <div class="row">
                                <div class="col-md-4">
                                  <input type="text" id="address" name="address" Placeholder="Enter Shipping Address Here" class="form-input"><br>
                                </div>
                                <div class="col-md-4">
                                  <input type="text" id="phone" name="phone" Placeholder="Enter phone number" class="form-input"><br>
                                </div>
                                <div class="col-md-4">
                                  <button class="button button-primary" onclick="payWithPaystack()">Proceed to checkout <i class="fa fa-chevron-right"></i> 
                                  </button>
                                </div>
                              </div>
                              
                              
                             
                        </form>
                <?php 
                    }else{
                        echo '<a href="login.php" class="button button-primary" type="submit">Login to checkout <i class="fa fa-chevron-right"></i> 
                             </a>';
                        ?>
                        <a href="guest.php" class="button-black button " type="submit">Checkout as guest <i class="fa fa-chevron-right"></i> 
                             </a>
                        <?php
                    }
                ?>
        </div>
      </td>
    </tr>
    <?php 
      }
    }


    public function getGuestCart($con,$cart_id){
      $cart_query = mysqli_query($con, "SELECT * FROM cart WHERE cart_id='$cart_id' ");
        $total=0;
         $metr = mysqli_num_rows($cart_query);
        if ($metr < 1) {
          echo '<tr><td colspan="6" style="padding-right:40%;padding-left:40%;padding-bottom:2%;padding-top:2%">Cart Is Empty</td></tr>';
        }else{
        while ($cart_row = mysqli_fetch_array($cart_query)) {
            $product_id = $cart_row['product_id'];
            $price = $cart_row['price'];
            $shop_id = $cart_row['shop_id'];
            $qty = $cart_row['quantity'];
            $actual = $price*$qty;
            $total += $actual;
            $item_query = mysqli_fetch_array(mysqli_query($con, "SELECT product_name,product_pix,category,sub_category,brand FROM products WHERE product_id='$product_id' "));
            $product_name = $item_query['product_name'];
            $product_pix = $item_query['product_pix'];
            $category = $item_query['category'];
            $sub_category = $item_query['sub_category'];
            $brand = $item_query['brand'];
        
    ?><tr>
          <td style="">
            <div class="unit flex-row unit-spacing-md align-items-center">
              <div class="unit__left"><img src="product-pics/<?php echo $product_pix ?>" alt="" style="max-height: 80px" />
              </div>
              <div class="unit__body">
                <h6><a class="thumbnail-classic-title" href="product.php?product=<?php echo $product_id ?>"><?php echo $product_name ?></a></h6>
              </div>
            </div>
          </td>
          <td>
            <div class=""><span>&#8358; <?php echo number_format($price) ?></span></div>
          </td>
          <td>
            <div style="border: 1px solid #fff;text-align: center;background: #d5d3d3;color: #000"><i class="fa fa-minus" style="padding-right: 15%;padding-top: 10%;padding-bottom: 10%"  onclick="Decrease(<?php echo $product_id; ?>)"></i><b><?php echo $qty; ?></b>  <i class="fa fa-plus" style="padding-left: 15%;padding-top: 10%;padding-bottom: 10%"  onclick="Increase(<?php echo $product_id; ?>)"></i></div>
          </td>
          <td>
            <div class=""><span>&#8358; <?php echo number_format($actual) ?></span></div>
          </td>
          <td class="table-cart-remove-item"><span class="icon icon-sm linear-icon-cross2 icon-gray-4" onclick="Remove(<?php echo $product_id; ?>)"></span></td>
        </tr>
        <?php 
    }
    ?>
    <tr>
      <td></td>
      <td></td>
        <td class="subtotal"><b>Total</b></td>
        <th></th>
        <td class="subtotal"><b>&#8358;   <?php echo number_format($total); ?></b></td>
    </tr>
    <tr>
      <td colspan="6">
        <div class="" id="guest">
               <form id="checkout" action="" method="post" class="form-group">
                <script src="https://js.paystack.co/v1/inline.js"></script>
                    <input type="hidden" id="amount" name="amount" value="<?php echo $total;?>">
                    <input type="hidden" id="cart_id" name="order_id" value="<?php echo $cart_id;?>">
                    <div class="row">
                    <div class="col-md-3">
                      <input type="text" id="address" name="location" Placeholder="Enter Shipping Address Here" class="form-input"><br>
                    </div>
                    <div class="col-md-3">
                      <input class="form-input" type="email" id="email" name="email" placeholder="Enter email address"><br>
                    </div>
                    <div class="col-md-3">
                      <input class="form-input" type="text" id="phone" name="phone" placeholder="Enter phone number"><br>
                    </div>
                    <div class="col-md-3">
                      <input class="form-input" type="text" id="fullname" name="phone" placeholder="Enter your fullname"><br>
                    </div>
                    <div class="col-md-3">
                       <button class="button button-primary" style="width: 100%" onclick="payWithPaystack()">Proceed to checkout <i class="fa fa-chevron-right"></i> 
                       </button>
                    </div>
                  </div>
                   
                  </form>
        </div>
      </td>
    </tr>
    <?php 
      }
    }

    public function featuredProducts($con,$brand,$category,$product_id){
      $featured = mysqli_query($con,"SELECT * FROM products WHERE brand='$brand' AND category='$category' AND product_id != '$product_id'  AND status=0 ORDER BY RAND() LIMIT 9");
      if (mysqli_num_rows($featured) < 1) {
        echo "<h3 style='font-size:150%;color:grey'>No Featured Product...</h3>";
      }else{
      while ($feat = mysqli_fetch_array($featured)) {
        $product_id = $feat['product_id'];
        $product_name = $feat['product_name'];
        $sp = $feat['price'];
      $discount = $feat['discount'];
      if ($discount != 0) {
        $price = $discount;
      }else{
        $price = $sp;
      }
        $product_pix = $feat['product_pix'];
        $category = $feat['category'];
        $sub_category = $feat['category'];
      ?>

      <div class="col-md-3 w3layouts_mail_grid_left" style="margin-bottom: 5%">
          <div class="w3layouts_mail_grid_left1 hvr-radial-out" style="padding: 5%">
            <img src="product_pix/<?php echo $product_pix; ?>" style="max-height: 50px">
          </div>
          <div class="w3layouts_mail_grid_left2">
            <h3> <a href="product-info.php?prd=<?php echo $product_id; ?>"><?php echo $product_name; ?></a></h3>
            <p> <?php
                      if ($discount != 0) {
                      ?>
                         <del>&#8358; <?php echo number_format($sp); ?></del>
                         <span class="item_price">&#8358; <?php echo number_format($discount); ?></span>
                      <?php 
                      }
                      else{
                        ?>
                         <span class="item_price">&#8358; <?php echo number_format($price); ?></span>
                     <?php 
                      }
                   ?></p>
          </div>
        </div>
     <?php
        }
      }
    }

    public function viewProduct($sub_category,$product_id){
      $con = open();
        $r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM products WHERE product_id='$product_id' "));
        $product_name = $r['product_name'];
        $category = $r['category'];
        $sub_category = $r['sub_category'];
        $brand = $r['brand'];
        $product_pix = $r['product_pix'];
        $sp = $r['price'];
        $discount = $r['discount'];
        $extra_pix = $r['extra_pix'];
        @$ext = expo($extra_pix);
        @$ext1 = $ext[0];
        @$ext2 = $ext[1];
          if ($discount != 0) {
            $price = $discount;
          }else{
            $price = $sp;
          }
        $product_description = $r['description'];
        ?>
<section class="section-sm bg-default">
        <div class="container">
          <div class="row row-60">
            <div class="col-md-6 col-lg-5">
              
              <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" data-photo-swipe-gallery="gallery">
                <div class="item"><a class="img-thumbnail-variant-2" href="product-pics/<?php echo $product_pix; ?>" data-photo-swipe-item="" data-size="2000x2000">
                    <figure><img src="product-pics/<?php echo $product_pix; ?>" alt="" width="535" height="535"/>
                    </figure>
                    <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div></a>
                </div>
                <div class="item"><a class="img-thumbnail-variant-2" href="product-pics/<?php echo $ext1; ?>" data-photo-swipe-item="" data-size="2000x2000">
                    <figure><img src="product-pics/<?php echo $ext1; ?>" alt="" width="535" height="535"/>
                    </figure>
                    <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div></a>
                </div>
                <div class="item"><a class="img-thumbnail-variant-2" href="product-pics/<?php echo $ext2; ?>" data-photo-swipe-item="" data-size="1150x1150">
                    <figure><img src="product-pics/<?php echo $ext2; ?>" alt="" width="535" height="535"/>
                    </figure>
                    <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div></a>
                </div>
              </div>
              <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="3" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="5" data-slide-to-scroll="1">
                <div class="item"><img src="product-pics/<?php echo $product_pix; ?>" alt="" width="89" height="89"/>
                </div>
                <div class="item"><img src="product-pics/<?php echo $ext1; ?>" alt="" width="89" height="89"/>
                </div>
                <div class="item"><img src="product-pics/<?php echo $ext2; ?>" alt="" width="89" height="89"/>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-7">
              <div class="product-single">
                <h4><?php echo $r['product_name'] ?></h4>
                <p class="product-text">Brand > <?php echo $brand; ?></p>
                <p class="product-text">Category > <?php echo $category; ?></p>
                <p class="product-text">Sub Category > <?php echo $sub_category; ?></p>

                <h4>&#8358;<?php echo number_format($price); ?></h4>
                <div class="group">
                  <!-- <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="50"> -->
                  <button class="button button-primary button-icon button-icon-left" onclick="addToCart(<?php echo $product_id?>)"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></button>

                </div>
                <h4 id="kraa"></h4>
              </div>
            </div>
            <div class="col-sm-12">
              <!-- Bootstrap tabs-->
              <div class="tab-content text-left">
                <div class="tab-pane fade show active" id="tabs-1-1">
                  <h4>Additional Info</h4>
                  <p><?php echo $product_description; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          <?php 

    }

     public function checkout($con,$cart_id,$location,$email,$phone,$fullname){

      $date = date('F-d-Y');
      $URL = "confirm.php";
       $cart_query = mysqli_query($con, "SELECT * FROM cart WHERE cart_id='$cart_id' ");
        $total=0;
        while ($cart_row = mysqli_fetch_array($cart_query)) {
            $product_id = $cart_row['product_id'];
            $price = $cart_row['price'];
            $qty = $cart_row['quantity'];
            $actual = $price*$qty;

            $order = mysqli_query($con,"INSERT INTO orders (order_id,price,quantity,product_id,location,time_added,customer_email,customer_name,phone) VALUES('$cart_id','$price','$qty','$product_id','$location','$date','$email','$fullname','$phone')");
            $delete = mysqli_query($con,"DELETE FROM cart WHERE cart_id='$cart_id' AND product_id='$product_id' ");
            }
             // echo "done";

              $subject = "Order Detail";
              $date = date("Y");

                $htmlContent = '<html>
                  <body style="background: #e4e2e2">
                  <center><div style="width: 50%;border-radius: 5px 5px 5px 5px;height:60%">
    
                  <div style="background: white;padding:10%;margin-top:25px">
                   <div>
                    <h6>Order Details</h6>
                   </div>
                  <h3  style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:3%">Weshop Order detail</h3>
                  <p style="padding:10px;line-height:200%">You have successfully Placed An Order <em style="color: #1ab394;font-family: CASTELLAR;font-size:1.2em;">With Weshop Nigeria</em> Your Order ID is : '.$cart_id.'</p>
                 <div >
                    <div></div>
                     </div>
                   <br>
                   <div>
                    <p><strong>Copyright</strong> &copy; <i id="today_d">'.$date.'</i> Weshop </p>
                   </div>
               </div>
    
               </div>
             </center>
          </body>
          </html>';

            $from ='<OrderDetails@chuqdennis.com>';
            // Additional headers
            $headers = 'From: ' . $from. "\r\n";   
            $headers  .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

             

             @$send = mail($email,$subject,$htmlContent,$headers);
             unset($_SESSION['cart_id']);
           
    }

    public function viewCustomerOrder($con,$order_id){
      $query1= mysqli_query($con,"SELECT *,price*quantity AS total FROM orders WHERE order_id='$order_id' ORDER BY id ASC");
      $n = 0;$all = 0;
      while ($row1 = mysqli_fetch_array($query1)) {
        $qty = $row1['quantity'];
        $total = $row1['total'];
        
        $all+=$total;
        $price = $row1['price'];
        $product_id = $row1['product_id'];
        $n++;
        $product_name = mysqli_fetch_array(mysqli_query($con, "SELECT product_name,product_pix FROM products WHERE product_id='$product_id' "));
        $product_pix = $product_name['product_pix'];
    ?>

      <tr class="table table-bordered">
           <td><?php echo $n; ?></td>
           <td><img src="product-pics/<?php echo $product_pix ?>" style="max-width: 40px" class="img img-circle img-thumbnail"></td>
          <td colspan="4"><?php echo $product_name['product_name']; ?></td>
          <td><?php echo $qty; ?></td>
          <td>₦ <?php echo number_format($price) ?></td>
          <td>₦ <?php echo number_format($total) ?></td>
      </tr>

    <?php 
      }
      ?> <tr class="table table-bordered">
        <td colspan="8">Total</td>
        <td>
          <b>₦ <?php echo number_format($all) ?></b>
        </td>
      </tr>
      <?php 
    }

}

?>
