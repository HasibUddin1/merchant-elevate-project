<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
if (isset($_GET['articleName']) && file_exists("help_articles/{$_GET['articleName']}.php")) {
    $articleName = $_GET['articleName'];
} else {
    $articleName = "Not Found";
}

?>




<!doctype html>
<html lang="en">

<head>

    <!-- include head -->
    <?php
    $pageInfo = [
        "title" => "Help Single",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="help-single-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--support content section start-->
        <section class="support-content ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-4 d-none d-md-block d-lg-block">
                        <div class="support-article-sidebar sticky-sidebar">
                            <a href="javascript:history.back();" class="btn btn-primary mb-4 btn-sm"><i class="fas fa-angle-left me-2"></i> Go Back</a>
                            <div class="nav flex-column nav-pills support-article-tab bg-light-subtle rounded-custom p-5">
                                <h5>Related Support Articles</h5>
                                <a href="help-single?articleName=Can retailers opt-out of participation at any time" class="text-muted text-decoration-none py-2 d-block">
                                    Can retailers opt-out of participation at any time?
                                </a>
                                <a href="help-single?articleName=How long does enforcement take after a MAP violation attempt is made" class="text-muted text-decoration-none py-2 d-block">
                                    How long does enforcement take after a MAP violation attempt is made?
                                </a>
                                <a href="help-single?articleName=After retailer acceptance, how long does it take for enforcement to occur" class="text-muted text-decoration-none py-2 d-block">
                                    After retailer acceptance, how long does it take for enforcement to occur?
                                </a>
                                <a href="help-single?articleName=What is the monthly cost of your app" class="text-muted text-decoration-none py-2 d-block">
                                    What is the monthly cost of your app?
                                </a>
                                <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-muted text-decoration-none py-2 d-block">
                                    Do you offer refunds for the subscriptions?
                                </a>
                                <a href="help-single?articleName=Are notifications sent when MAP violation attempts occur" class="text-muted text-decoration-none py-2 d-block">
                                    Are notifications sent when MAP violation attempts occur?
                                </a>
                            </div>
                            <div class="bg-light-subtle p-5 mt-4 rounded-custom quick-support">
                                <a href="contact" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-success-soft me-3">
                                        <i class="fas fa-headset text-success"></i>
                                    </div>
                                    <div class="contact-option-text">Quick Support Form</div>
                                </a>
                                <a href="mailto:<?= SUPPORT_EMAIL ?>" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-primary-soft me-3">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div>
                                    <div class="contact-option-text"><?= SUPPORT_EMAIL ?></div>
                                </a>
                                <a href="contact" target="_blank" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-danger-soft me-3">
                                        <i class="fas fa-comment text-danger"></i>
                                    </div>
                                    <div class="contact-option-text">Live Support Chat</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php include_once "help_articles/$articleName.php" ?>

                </div>
            </div>
        </section>
        <!--support content section end-->

        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

</body>

</html>