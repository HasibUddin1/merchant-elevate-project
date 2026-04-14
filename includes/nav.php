<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>

<!--preloader start-->
<div id="preloader" class="bg-light-subtle">
    <div class="preloader-wrap">
        <img src="assets/img/logo-color.png" alt="logo" class="img-fluid preloader-icon" />
        <div class="loading-bar"></div>
    </div>
</div>
<!--preloader end-->

<div class="main-wrapper">

    <header class="main-header w-100 z-10">
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                <a href="index" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="assets/img/logo-white.png" alt="logo" class="img-fluid logo-white" />
                    <img src="assets/img/logo-color.png" alt="logo" class="img-fluid logo-color" />
                </a>

                <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                    <i class="flaticon-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></i>
                </a>
                <div class="clearfix"></div>
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu header_menu gap-10">
                        <li><a href="index" class="header_nav_link">Home</a></li>
                        <li><a href="#about" class="header_nav_link">About Us</a></li>
                        <li><a href="#services" class="header_nav_link">Services</a></li>
                    </ul>
                </div>

                <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                    <?php if (isset($_SESSION['user_id']) && $_SESSION["user_email"] != "admin@merchantelevate.com") {
                    ?>
                        <a href="dashboard/index" class="btn site_btn_color text-decoration-none me-2">Dashboard</a>
                    <?php } else if (isset($_SESSION['user_id']) && $_SESSION["user_email"] === "admin@merchantelevate.com") { ?>
                        <a href="superadmin/index" class="btn site_btn_color text-decoration-none me-2">Admin Dashboard</a>
                    <?php } else { ?>
                        <a href="login" class="btn text-black text-decoration-none">Sign In</a>
                    <?php } ?>
                    <a href="register.php" class="btn site_btn_color">
                        <span class="text-wrap">
                            <span>Get Started</span>
                            <span>Get Started</span>
                        </span>
                    </a>
                </div>
            </div>
        </nav>
        <!--offcanvas menu start-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
            <div class="offcanvas-header d-flex align-items-center mt-4">
                <a href="index" class="d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="assets/img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                </a>
                <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="flaticon-cancel"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li><a href="index" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">About Us</a></li>
                    <li><a href="#about" class="nav-link">Services</a></li>
                    <li><a href="#about" class="nav-link">Prices</a></li>
                    <li><a href="#about" class="nav-link">Contact</a></li>
                </ul>
                <div class="action-btns mt-4 ps-3">
                    <?php if (isset($_SESSION['user_id'])) {
                    ?>
                        <a href="dashboard/index" class="btn btn-outline-primary me-2">Dashboard</a>
                    <?php } else { ?>
                        <a href="login" class="btn btn-outline-primary me-2">Sign In</a>
                    <?php } ?>
                    <a href="register" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
        <!--offcanvas menu end-->
    </header>