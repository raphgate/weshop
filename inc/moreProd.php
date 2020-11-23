<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';

$offset = $_POST['offset'];
$product = $_POST['product'];
$products = new display_products;
$products-> getSingle($con,$product,$offset);

?>
