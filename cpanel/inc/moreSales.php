<?php 
include_once 'dbc.php';
include_once '../../inc/session.php';
include_once 'display_products.php';

$offset = $_POST['offset'];
$myProducts = new display_products;
$con = open();
$myProducts-> getMySales($con,$offset);
?>
