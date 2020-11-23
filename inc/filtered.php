<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';

$offset = $_POST['offset'];
$category = $_POST['category'];
$filter_value = $_POST['filter_value'];
$query = mysqli_query($con,"SELECT * FROM products WHERE (category='$category' OR sub_category='$category') AND status=0 AND (brand LIKE '%$filter_value%' OR price LIKE '%$filter_value%' OR discount LIKE '%$filter_value%') ORDER BY product_name ASC LIMIT 12 OFFSET {$offset}");
      $num = mysqli_num_rows($query); 
      if ($num == 0) {
          echo "<div class='col-lg-12 alert alert-default' style='text-align:center'>No More Data to display</div>";
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
          <div class="col-md-3 col-xs-12 col-sm-12">
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
                    </p><a class="button-black button button-icon button-icon-left"  onclick="addToCart(<?php echo $product_id?>)"><span class="icon icon-md linear-icon-cart"></span><span>Add to cart</span></a>
                  </div>
                </div>
              </div>
      <?php
        }
      }

?>
