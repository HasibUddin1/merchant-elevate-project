<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html lang="en">

<head>

    <!-- include head -->
    <?php
    $pageInfo = [
        "title" => "Career",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="career-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="
          background: url('assets/img/page-header-bg.svg') no-repeat bottom left;
        ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="display-5 fw-bold">Job Postings</h1>
                        <p class="lead">
                            Join Our Dynamic Team: Exciting Career Opportunities Await
                        </p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--open jobs section start-->
        <section id="open-positions" class="open-jobs ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Our Jobs</h4>
                            <h2>Current Available Positions at Merchant Elevate</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <p>
                            Amplify your career with our commitment to professional development, and join a team where innovation and collaboration are the keystones of our success.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-left">
                    <div class="col-lg-6 col-md-12">
                        <a href="career-single?jobName=Lead Sales Strategist" class="text-decoration-none mt-4 mt-xl-0 mt-lg-0 single-open-job p-5 bg-dark text-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="job-time h-6 mb-2"><i class="fas fa-briefcase me-2"></i>
                                    <strong>Contract - Full Time</strong></span>
                                <span class="badge px-3 py-2 bg-custom-light rounded-pill small">Full Time</span>
                            </div>
                            <h3 class="h5">Lead Sales Strategist</h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <li class="list-inline-item">
                                    <span class="fas fa-house me-1"></span> <?= SITE_NAME ?>
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-business-time me-1"></span> 5 years experince
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-wallet me-1"></span> $65k - $90k
                                </li>
                            </ul>
                            <div class="btn btn-outline-light btn-sm d-inline-block mt-4">
                                Apply Now
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--open jobs section end-->

        <!--career promo start-->
        <section class="career-promo ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Why Join Us</h4>
                            <h2>Great Working Environment</h2>
                            <p>
                               Join a simple yet powerful work environment that balances productivity with personal well-being.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature d-flex mt-0 p-5 bg-white rounded-custom">
                            <span class="fas fa-house-user fa-2x text-primary"></span>
                            <div class="ms-4 mt-2">
                                <h5>Hybrid Schedule</h5>
                                <p class="mb-0">
                                    Embrace the best of both worlds with our hybrid schedule, designed to offer you the flexibility of remote work with the connectivity of in-office collaboration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature d-flex mt-4 mt-xl-0 mt-lg-0 mt-md-0 p-5 bg-white rounded-custom">
                            <span class="fas fa-clock fa-2x text-primary"></span>
                            <div class="ms-4 mt-2">
                                <h5>Flexible Working Hours</h5>
                                <p class="mb-0">
                                   Our flexible working hours empower you to create a work-life balance that maximizes your productivity and personal time, on your own terms.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature d-flex mt-4 p-5 bg-white rounded-custom">
                            <span class="fas fa-user-friends fa-2x text-primary"></span>
                            <div class="ms-4 mt-2">
                                <h5>Dynamic Team</h5>
                                <p class="mb-0">
                                   Join our dynamic team and surround yourself with passionate professionals who inspire innovation and excellence in a fast-paced, ever-evolving work environment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature d-flex mt-4 p-5 bg-white rounded-custom">
                            <span class="fas fa-sun fa-2x text-primary"></span>
                            <div class="ms-4 mt-2">
                                <h5>Vacation</h5>
                                <p class="mb-0">
                                    Recharge on your terms with our 'Vacation Whenever' policy, ensuring you can take the time you need, when you need it, to come back refreshed and at your best.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--career promo end-->



        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

</body>

</html>