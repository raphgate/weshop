<?php 
// include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';
$date = date('F-d-Y');
$order_id = mysqli_real_escape_string($con, $_POST['order_id']);

$adminSales = new display_products;
$adminSales-> adminSales($con,$order_id);
?>
