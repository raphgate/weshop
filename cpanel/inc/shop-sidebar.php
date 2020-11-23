<?php include_once './../inc/session.php'; ?>
<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="">
                    <div class="sidebar-profile-details">
                        <span><?php echo $_SESSION['shop_name'] ?></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="active">
                <a href="index.php" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-home"></span>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="profile.php" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-user"></span>
                    <p>Profile</p>
                </a>
            </li>
            <li>
                <a href="index.php" class="waves-effect waves-button">
                    <span class="menu-icon fa fa-suitcase"></span>
                    <p>My Products</p>
                </a>
            </li>
            <li>
                <a href="upload_product.php" class="waves-effect waves-button">
                    <span class="menu-icon fa fa-upload"></span>
                    <p>Add Product</p>
                </a>
            </li>
            <li><a href="shop-orders.php" class="waves-effect waves-button"><span class="menu-icon fa fa-bookmark"></span><p>Orders</p></a>
            </li>
            <li><a href="shop-sales.php" class="waves-effect waves-button"><span class="menu-icon fa fa-money"></span><p>My Sales</p></a>
            </li>
            </li>
            </li>
            <li>
                <a href="shop-sample.php" class="waves-effect waves-button">
                    <span class="menu-icon fa fa-upload"></span>
                    <p>Add Sub-Categories</p>
                </a>
            </li>
            </li>
        </ul>
    </div>
</div>