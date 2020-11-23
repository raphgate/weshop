<?php 
// include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';
$value = clean('value');
$products = new display_products;
$products -> getMyProducts($value,0);
?>