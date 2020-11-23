<?php
include_once '../inc/session.php';
session_destroy();
print " <script>window.location.assign('../index.php')</script>";

?>