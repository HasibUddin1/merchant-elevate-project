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
        "title" => "Login",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>


<body>


    <div class="user-pages login-page">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index" class="mb-4 d-block text-center"><img class="logo-color-white" src="assets/img/logo-color.png" alt="logo" class="img-fluid" /></a>
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="h3">Nice To See You Again</h1>
                            <p class="text-muted">
                                Please log in to your account to access your client dashboard.
                            </p>

                            <div class="action-btns">
                                <a href="<?= $gclient->createAuthUrl() ?>" class="btn google-btn bg-white shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                                    <img src="assets/img/google-icon.svg" alt="google" class="me-3" />
                                    <span>Sign In with Google</span>
                                </a>
                            </div>
                            <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                <span class="divider-bar"></span>
                                <h6 class="position-absolute text-center divider-text bg-light-subtle mb-0">
                                    Or
                                </h6>
                            </div>
                            <form action="core/login.php" method="POST" class="mt-4 register-form">
                                <?php if (isset($_SESSION["login_error"])) : ?>
                                    <div class="alert alert-danger">
                                        <strong>Opps! </strong><?php echo $_SESSION["login_error"]  ?>
                                    </div>
                                <?php
                                    unset($_SESSION["login_error"]);
                                endif;
                                ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email" id="floatingInput" required aria-label="email" value="<?php if (isset($_SESSION["login_email"])) {
                                                                                                                                                                                echo $_SESSION["login_email"];
                                                                                                                                                                                unset($_SESSION["login_email"]);
                                                                                                                                                                            } ?>" placeholder="name@example.com" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="floatingPassword" required aria-label="Password" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="login" class="btn btn-primary mt-3 d-block w-100">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">
                                    Don’t have an account?
                                    <a href="register" class="text-decoration-none">Sign up Today</a>
                                    <br />
                                    <a href="reset" class="text-decoration-none">Forgot password</a>
                                </p>
                            </form>
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