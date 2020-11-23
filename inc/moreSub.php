<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';

$offset = $_POST['offset'];
$mySubCategory = $_POST['mySubCategory'];
$products = new display_products;
$products-> getSubCategory($mySubCategory,$offset);

?>
