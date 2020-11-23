<?php
include_once 'dbc.php';
class display_products{

    public function getMyProducts($value,$offset){
      $con = open();
      if ($value != 'all') {
        $query = mysqli_query($con,"SELECT * FROM products WHERE status=1 AND (product_name LIKE '%$value%' OR brand LIKE '%$value%' OR product LIKE '%$value%' OR price LIKE '%$value%' OR discount LIKE '%$value%') ORDER BY product_id DESC");
      }else{
        $query = mysqli_query($con,"SELECT * FROM products WHERE status=1 ORDER BY product_name ASC LIMIT 10 OFFSET {$offset}");
      }
        
        $n=0;
        if (mysqli_num_rows($query) < 1) {
          echo '<tr><td colspan="5" class="alert alert-deafult text-center">No Data To Display</td></tr>';
        }
        while ($row = mysqli_fetch_array($query)) {
          $category = $row['category'];
          $sub_category = $row['sub_category'];
          $product = $row['product'];
          $product_id = $row['product_id'];
          $instock = $row['instock'];
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
          $n++;
        ?>
           <tr>
               <td><img src="./../product-pics/<?php echo $pix ?>" style="max-height: 50px;max-width: 50px" class="img-thumbnail"></td>
               <td><a href="../product.php?product=<?php echo $product_id; ?>" target='_blank'><?php echo $product_name; ?></a></td>
               <td><span class="label label-warning"></span>&#8358; <?php echo number_format($discount); ?></td>
               <td><span class="label label-warning"></span> &#8358; <?php echo number_format($sp); ?></td>
               <td id="product-tab<?php echo $product_id ?>">
                   <a href="edit-product.php?prd=<?php echo $product_id; ?>" class="btn btn-info">Edit</a>
                   <?php 
                      if ($instock == 1) {
                        ?>
                        <a  class="btn btn-warning" onclick="turnOff(<?php echo $product_id?>)">Turn Off</a>
                        <?php
                      }elseif ($instock == 0) {
                        ?>
                        <a  class="btn btn-primary" onclick="turnOn(<?php echo $product_id?>)">Turn On</a>
                        <?php
                      }
                    ?>
                    <a  class="btn btn-danger" onclick="deleteProduct(<?php echo $product_id?>)">Delete</a>
               </td>
          </tr>

        <?php
        }
          close($con);
    }

    public function addProduct()
    {
      $con = open();
      $category = clean('category');
      $subcategory = clean('subcategory');
      $brand = clean('brand');
      $product_description = clean('product_description');
      $pname = clean('pname');
      $price = clean('price');
      $discount = clean('discount');
      $date_added = date('d-F-Y');
      $unique=time();
      $pix=$_FILES['pix']['name'];
      $pix = $unique.$pix;
      $rphoto=$_FILES['pix']['tmp_name'];
      $target="../product-pics/".$pix;
      move_uploaded_file($rphoto, $target);

      
      $thename = '';
      if(count($_FILES['pix_2']['name']) > 0 && count($_FILES['pix_2']['name']) < 4){
            //Loop through each file
            for($i=0; $i<count($_FILES['pix_2']['name']); $i++) {
              //Get the temp file path
                $tmpFilePath = $_FILES['pix_2']['tmp_name'][$i];

                //Make sure we have a filepath
                if($tmpFilePath != ""){
                
                    //save the filename
                    $shortname = $_FILES['pix_2']['name'][$i];

                    //save the url and the file
                    $filePath = "../product-pics/" . $unique.$_FILES['pix_2']['name'][$i];

                    $shortname = $unique.$_FILES['pix_2']['name'][$i];

                    //Upload the file into the temp dir
                    if(move_uploaded_file($tmpFilePath, $filePath)) {

                        $thename .= $shortname.',';

                    }
            }
        }
              $photos = $thename;
              $photos = substr($photos, 0, -1);
      }else{
        $photos = 'xdcfgghbjknlm';
      }

      $upload = mysqli_query($con, "INSERT INTO products (category, sub_category, product_name, brand, product_pix, extra_pix, date_added, price, discount, status, instock, product_views,description) VALUES('$category','$subcategory','$pname','$brand','$pix','$photos','$date_added','$price','$discount',1,1,0,'$product_description')");
      if ($upload == true) {
        echo '<script>alert("Product Added Successfully")</script>';
      }else{
        echo '<script>alert("Failed To Add Product, Try Again Later")</script>';
      }

      close($con);
    }
     

    public function editProduct($con,$product_id,$sub_category){
        $shop_id = $_SESSION['shop_id'];
        $discount = mysqli_real_escape_string($con,$_POST['discount']);
        $price = mysqli_real_escape_string($con,$_POST['new_price']);
        if ($sub_category == 'Television') {
                $edit = mysqli_query($con,"UPDATE products,televisions SET products.discount='$discount', televisions.discount='$discount',products.price='$price',televisions.price='$price' WHERE products.product_id='$product_id' AND televisions.product_id='$product_id' ");

        }elseif ($sub_category == 'Smart Phone' || $sub_category == 'Tablet') {
               $edit = mysqli_query($con,"UPDATE products,phones SET products.discount='$discount', phones.discount='$discount',products.price='$price',phones.price='$price' WHERE products.product_id='$product_id' AND phones.product_id='$product_id' ");

        }elseif ($sub_category == 'Laptop And Notebook' || $sub_category == 'Ultrabook') {
                $edit = mysqli_query($con,"UPDATE products,laptops SET products.discount='$discount', laptops.discount='$discount',products.price='$price',laptops.price='$price' WHERE products.product_id='$product_id' AND laptops.product_id='$product_id' ");

        }elseif ($sub_category == 'Accessory') {
               $edit = mysqli_query($con,"UPDATE products,accessories SET products.discount='$discount', accessories.discount='$discount',products.price='$price',accessories.price='$price' WHERE products.product_id='$product_id' AND accessories.product_id='$product_id' ");
        }elseif ($sub_category == 'Other') {
               $edit = mysqli_query($con,"UPDATE products,orther SET products.discount='$discount', orther.discount='$discount',products.price='$price',orther.price='$price' WHERE products.product_id='$product_id' AND orther.product_id='$product_id' ");
        }elseif ($sub_category == 'Phone Repair') {
               $edit = mysqli_query($con,"UPDATE products,repairs SET products.discount='$discount', repairs.discount='$discount',products.price='$price',repairs.price='$price' WHERE products.product_id='$product_id' AND repairs.product_id='$product_id' ");
        }

        if ($edit == true) {
          echo "<script>alert('Product Edited Successfuly')</script>";
           $URL = "index.php";
       echo "<script>location.href='$URL'</script>";
        }else{
          echo "<script>alert('Failed to update product')</script>";
        }
    }

    public function shopOrders($con,$offset){
       $query1= mysqli_query($con,"SELECT *,SUM(quantity) AS qty,quantity*price AS amount FROM orders  GROUP BY order_id ORDER BY id ASC LIMIT 10 OFFSET {$offset}");
       if (mysqli_num_rows($query1) < 1) {
         echo '<tr>
         <td colspan="8" class="alert alert-info" style="text-align:center">No Data to display</td></tr>';
       }else{

      $n = 0;
      $total = 0;
      while ($row1 = mysqli_fetch_array($query1)) {
        $price = $row1['price'];
        $qty = $row1['qty']; 
        // $amount = $row1['amount'];
        // $total =+ $amount;
        $order_id = $row1['order_id'];
        $date = $row1['time_added'];
        $n++;

    ?>

      <tr class="table table-bordered">
          <td><?php echo $n ?></td>
          <td><?php echo $order_id ?></td>
          <td><?php echo $qty ?></td>
          <td><?php echo $date ?></td>
          <td><a href="shop-order-info.php?odr=<?php echo $order_id ?>" class="btn btn-sm btn-primary">View Order Details</a></td>
      </tr>

    <?php 
        }

       }
    }

 public function getMySales($con,$offset){
      $query1= mysqli_query($con,"SELECT * FROM purchases ORDER BY id ASC LIMIT 10 OFFSET {$offset}");
      $n = 0;
       if (mysqli_num_rows($query1) < 1) {
         echo '<tr>
         <td colspan="8" class="alert alert-info" style="text-align:center">No Data to display</td></tr>';
       }
      while ($row1 = mysqli_fetch_array($query1)) {
        $product_id = $row1['product_id'];
        $price = $row1['price'];
        $qty = $row1['quantity'];
        $order_id = $row1['order_id'];
        $date = $row1['time_added'];
        $customer_id = $row1['customer_id'];
        $actual = $qty*$price;
    $row = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM products WHERE product_id='$product_id'"));
      $category = $row['category'];
      $sub_category = $row['sub_category'];
      $product = $row['product'];
      $price = $row['price'];
      $pix = $row['product_pix'];
      $brand = $row['brand'];
      $product_name = $row['product_name'];
      $cat = $sub_category." (".$category.")";
      $desc = $brand." ".$product_name;
      $n++;

    ?>

      <tr class="table table-bordered">
          <td><?php echo $n ?></td>
          <td><?php echo $category ?></td>
          <td><?php echo $sub_category ?></td>
          <td><?php echo $product_name ?></td>
          <td>&#8364;  <?php echo number_format($price) ?></td>
          <td><?php echo $qty ?></td>
          <td><?php echo number_format($actual) ?></td>
          <td><?php echo $date ?></td>
      </tr>

    <?php 
      }
    }
    public function viewOrder($con,$order_id){
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
           <td><img src="../product-pics/<?php echo $product_pix ?>" style="max-width: 40px" class="img img-thumbnail"></td>
          <td colspan="4"><?php echo $product_name['product_name']; ?></td>
          <td><?php echo $qty; ?></td>
          <td>&#8364; <?php echo number_format($price) ?></td>
          <td>&#8364; <?php echo number_format($total) ?></td>
      </tr>

    <?php 
      }
      ?> <tr class="table table-bordered">
        <td colspan="8">Total</td>
        <td>
          <b>&#8364; <?php echo number_format($all) ?></b>
        </td>
      </tr>
      <?php 
    }
}

?>