<?php 
include_once 'session.php';
include_once 'dbc.php';
include_once 'display_products.php';

$offset = $_POST['offset'];
$keyword = $_POST['keyword'];
$search = new display_products;
$search-> processSearch($keyword,$offset);

?>
