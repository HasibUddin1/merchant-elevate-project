<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION["user_id"]) && $_SESSION["user_email"] == "admin@merchantelevate.com") {
    header("Location: superadmin/index");
} else if (isset($_SESSION["user_id"]) && $_SESSION["user_email"] != "admin@merchantelevate.com") {
    header("Location: dashboard/index");
}
?>

<!doctype html>
<html lang="en">

<head>

    <!-- include head -->
    <?php
    $pageInfo = [
        "title" => "Reset",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body>


    <div class="user-pages reset-page">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60" style="
          background: url('assets/img/page-header-bg.svg') no-repeat right
            bottom;
        ">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index" class="mb-4 d-block text-center"><img class="logo-color-white" src="assets/img/logo-color.png" alt="logo" class="img-fluid" /></a>
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="fw-bold h3">Forgot your Password?</h1>
                            <p class="text-muted">
                                Enter the email associated with your account and we will send a password
                                recovery link to your email.
                            </p>

                            <form action="core/reset.php" method="POST" class="mt-5 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Enter your email" id="floatingInput" aria-label="email" value="<?php if (isset($_SESSION["reset_email"])) {
                                                                                                                                                                                    echo $_SESSION["reset_email"];
                                                                                                                                                                                    unset($_SESSION["reset_email"]);
                                                                                                                                                                                } ?>" placeholder="name@example.com" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="reset" class="btn btn-primary mt-3 d-block w-100">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>

                                <?php if (isset($_SESSION["reset_error"])) : ?>
                                    <div class="alert mt-4 alert-danger">
                                        <strong>Opps! </strong><?php echo $_SESSION["reset_error"]  ?>
                                    </div>
                                <?php
                                    unset($_SESSION["reset_error"]);
                                endif;

                                if (isset($_SESSION["reset_success"])) : ?>

                                    <div class="alert mt-4 alert-success">
                                        <strong>Success! </strong><?php echo $_SESSION["reset_success"]  ?>
                                    </div>

                                <?php
                                    unset($_SESSION["reset_success"]);
                                endif;
                                ?>
                                <p class="font-monospace fw-medium text-center mt-3 pt-4 mb-0">
                                    <a href="login" class="text-decoration-none">Back to login page</a>
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