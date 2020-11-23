<?php
 
 include_once 'inc/dbc.php';
 include_once 'inc/session.php';
 include_once 'inc/display_products.php';

unset($_SESSION['cart_id']);
session_destroy();
print " <script>window.location.assign('index.php')</script>";

?>
