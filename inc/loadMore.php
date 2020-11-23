<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';

$offset = $_POST['offset'];
$products = new display_products;
$products-> getProducts($offset);

?>
