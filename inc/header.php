<?php  
	require_once 'dbc.php';
	require_once 'session.php';
	require_once 'display_products.php';
	require_once 'auth/accounts.php';

	if (isset($_SESSION['cart_id'])) {
        $con = open();
        $cart_id = $_SESSION['cart_id'];
        $item = mysqli_num_rows(mysqli_query($con, "SELECT * FROM cart WHERE cart_id = '$cart_id' "));
        close($con);
    }
?>
<header class="page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap">
    <nav style="background-color: #00BF4A;" class="rd-navbar rd-navbar_inverse" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="120px" data-xl-stick-up-offset="35px" data-xxl-stick-up-offset="35px" data-body-class="">
      <div class="rd-navbar-inner rd-navbar-search-wrap">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel rd-navbar-search_collapsable">
          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img src="images/logo.png" alt="" height="47"/></a></div>
        </div>
        <!-- RD Navbar Nav-->
        <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
          <ul class="rd-navbar-items-list rd-navbar-search_collapsable">
            <li>
              <button class="rd-navbar-search__toggle rd-navbar-fixed--hidden" data-rd-navbar-toggle=".rd-navbar-search-wrap"></button>
            </li>
            <li class="rd-navbar-nav-wrap__shop"><a class="icon icon-md linear-icon-cart link-primary" href="cart.php" style="font-size: 20px;"><i id="mycart"> <?php if(isset($_SESSION['cart_id'])){echo $item; }?></i></a></li> 
          </ul>
          <!-- RD Search-->
          <div class="rd-navbar-search rd-navbar-search_toggled rd-navbar-search_not-collapsable">
            <form action="search.php" method="GET">
              <div class="form-wrap">
                  <input class="form-input" id="rd-navbar-search-form-input" type="text" name="result" style="max-width: 90%;margin-left: 5%;padding-left: 5%" placeholder="Search here">
                  <div class="rd-search-results-live" id="rd-search-results-live"></div>
              </div>
              <button class="rd-search__submit" type="submit"></button>
            </form>
            <div class="rd-navbar-fixed--hidden">
              <button class="rd-navbar-search__toggle" data-custom-toggle=".rd-navbar-search-wrap" data-custom-toggle-disable-on-blur="true"></button>
            </div>
          </div>
          <div class="rd-navbar-search_collapsable">
            <ul class="rd-navbar-nav">
              <?php  
                  $con = open();
                  $catQuery = mysqli_query($con,"SELECT * FROM product_samples GROUP BY category ORDER BY category");
                  while ($catQ = mysqli_fetch_array($catQuery)) {
                      $category = $catQ['category'];
                      echo '<li class="active"><a href="category.php?category='.$category.'">'.$category.'</a>
                                <ul class="rd-navbar-dropdown">';
                                $subCatQuery = mysqli_query($con, "SELECT * FROM product_samples WHERE category = '$category' ");
                                while ($subCatQ = mysqli_fetch_array($subCatQuery)) {
                                    $subcategory = $subCatQ['subcategory'];
                                    echo '<li><a href="sub-category.php?subcategory='.$subcategory.'">'.$subcategory.'</a>
                                          </li>';
                                }
                                echo '</ul>
                          </li> ';
                  }
                  close($con);
              ?>  
              <li><a href="coming-soon.php" style="color: #000;">Food Delivery</a></li>  
                         
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>