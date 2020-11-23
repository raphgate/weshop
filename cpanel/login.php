<?php
include_once './../inc/session.php';
    include_once 'auth/accounts.php';
    include_once 'inc/display_products.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include "inc/header_link.php";
        ?>
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-5 center" style="background: #fff;padding: 5%">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center"><img src="../images/logo-108x47.png" height="40"> </a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <?php if (isset($_POST['admin_login'])) {
                                    $admin = new user;
                                    $admin->adminLogin();
                                } ?>
                                <form class="m-t-md" action="" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="admin_email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="admin_password" placeholder="Password" required>
                                    </div>
                                    <input type="submit" name="admin_login" class="btn btn-danger btn-block" value="Login">
                                </form>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        
    </body>
</html>