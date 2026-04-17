<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION["user_id"]) && $_SESSION["user_email"] == "admin@merchantelevate.com") {
    header("Location: superadmin/index");
} else if (isset($_SESSION["user_id"]) && $_SESSION["user_email"] != "admin@merchantelevate.com") {
    header("Location: dashboard/index");
}

require_once 'google-api-php-client/vendor/autoload.php';
include_once "config/config.php";
include 'core/oauth2callback.php';

?>

<!doctype html>
<html lang="en">

<head>

    <!-- include head -->
    <?php
    $pageInfo = [
        "title" => "Register",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body>


    <div class="user-pages register-page">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60" style="
          background: url('assets/img/page-header-bg.svg') no-repeat right
            bottom;
        ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12">
                        <div class="pricing-content-wrap bg-custom-light rounded-custom shadow-lg">
                            <div class="price-feature-col pricing-feature-info text-white left-radius p-5 order-1 order-lg-0">
                                <a href="index" class="mb-5 d-none d-xl-block d-lg-block"><img class="logo-color-white" src="assets/img/logo-color.png" alt="logo" class="img-fluid" /></a>
                                <div class="customer-testimonial-wrap mt-60">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="testimonial-tab-1" role="tabpanel">
                                            <div class="testimonial-tab-content mb-4">
                                                <div class="mb-2">
                                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <blockquote>
                                                    <h5>The Best Team To Work With</h5>
                                                    Working with the Merchant Elevate team was top notch. The program is a great way to have recurring monthly income!
                                                </blockquote>
                                                <div class="author-info mt-4">
                                                    <h6 class="mb-0">Liam Campbell</h6>
                                                    <span>Merchant Elevate Client</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <ul class="nav testimonial-tab-list mt-5" id="nav-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="active" href="#testimonial-tab-1" data-bs-toggle="tab" data-bs-target="#testimonial-tab-1" role="tab" aria-selected="true">
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="price-feature-col pricing-action-info p-5 right-radius bg-light-subtle order-0 order-lg-1">
                                <a href="index" class="mb-5 d-block d-xl-none d-lg-none"><img src="assets/img/logo-color.png" alt="logo" class="img-fluid" /></a>
                                <h1 class="h3">Create an Account</h1>
                                <p class="text-muted">
                                    Get started with your free account today. No credit card
                                    needed and no setup fees.
                                </p>

                                <form action="core/register.php" method="POST" class="mt-5 register-form">
                                    <?php if (isset($_SESSION["register_error"])) : ?>
                                        <div class="alert alert-danger">
                                            <strong>Opps! </strong><?php echo $_SESSION["register_error"]  ?>
                                        </div>
                                    <?php
                                        unset($_SESSION["register_error"]);
                                    endif;
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="email" name="email" class="form-control" placeholder="Email" id="floatingInput" required aria-label="email" value="<?php if (isset($_SESSION["register_email"])) {
                                                                                                                                                                                    echo $_SESSION["register_email"];
                                                                                                                                                                                    unset($_SESSION["register_email"]);
                                                                                                                                                                                } ?>" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="password" class="mb-1">Password <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="password" name="password" class="form-control" placeholder="Password" id="floatingPassword" required aria-label="Password" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check d-flex">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" required />
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    I have read and agree to the
                                                    <a href="terms" class="text-decoration-none">Terms & Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="register" class="btn btn-primary mt-4 d-block w-100">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                    <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                        <span class="divider-bar"></span>
                                        <h6 class="position-absolute text-center divider-text bg-light-subtle mb-0">
                                            Or
                                        </h6>
                                    </div>
                                    <div class="action-btns">
                                        <a href="<?= $gclient->createAuthUrl() ?>" class="btn google-btn mt-4 d-block bg-white shadow-sm d-flex align-items-center text-decoration-none justify-content-center">
                                            <img src="assets/img/google-icon.svg" alt="google" class="me-3" />
                                            <span>Sign up with Google</span>
                                        </a>
                                    </div>
                                    <p class="text-center text-muted mt-4 mb-0 fw-medium font-monospace">
                                        Already have an account?
                                        <a href="login" class="text-decoration-none">Sign in</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

    <!-- include Scripts -->
    <?php include_once "includes/scripts.php"; ?>

</body>

</html>