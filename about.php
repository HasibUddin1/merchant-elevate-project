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
        "title" => "About Us",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="about-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--about header section start-->
        <section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark" style="
          background: url('assets/img/page-header-bg.svg') no-repeat center
            right;
        ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                            <div class="about-content-left">
                                <div class="about-info mb-5">
                                    <h1 class="fw-bold display-5">
                                        Turnkey Ecommerce Solutions: Monthly Profits Made Simple
                                    </h1>
                                    <p class="lead">
                                        Parter and grow with Merchant Elevate and maximize your earnings and potential.
                                    </p>
                                   
                                </div>
                              
                            </div>
                            <div class="about-content-right">
                                <img src="assets/img/about-img-2.jpg" alt="about" class="img-fluid mb-5 rounded-custom shadow" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5"></div>
        </section>
        <!--about header section end-->

  
        <!--feature section two start add this in when you are freeeeeeee-->
        <!--<section class="feature-section-two ptb-120 bg-light-subtle">-->
        <!--    <div class="container">-->
        <!--        <div class="row align-items-center justify-content-center">-->
        <!--            <div class="col-lg-6 col-md-12">-->
        <!--                <div class="section-heading">-->
        <!--                    <h4 class="h5 text-primary">Our Values</h4>-->
        <!--                    <h2>The Core Values that Drive Everything</h2>-->
        <!--                    <p>-->
        <!--                        Quickly incubate functional channels with multidisciplinary-->
        <!--                        architectures. Authoritatively fabricate formulate exceptional-->
        <!--                        innovation.-->
        <!--                    </p>-->
        <!--                    <ul class="list-unstyled mt-5">-->
        <!--                        <li class="d-flex align-items-start mb-4">-->
        <!--                            <div class="icon-box bg-primary rounded me-4">-->
        <!--                                <i class="fas fa-bezier-curve text-white"></i>-->
        <!--                            </div>-->
        <!--                            <div class="icon-content">-->
        <!--                                <h3 class="h5">Pixel Perfect Design</h3>-->
        <!--                                <p>-->
        <!--                                    Progressively foster enterprise-wide systems whereas-->
        <!--                                    equity invested web-readiness harness installed.-->
        <!--                                </p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li class="d-flex align-items-start mb-4">-->
        <!--                            <div class="icon-box bg-danger rounded me-4">-->
        <!--                                <i class="fas fa-fingerprint text-white"></i>-->
        <!--                            </div>-->
        <!--                            <div class="icon-content">-->
        <!--                                <h3 class="h5">Unique &amp; Minimal Design</h3>-->
        <!--                                <p>-->
        <!--                                    Dramatically administrate progressive metrics without-->
        <!--                                    error-free globally simplify standardized engineer-->
        <!--                                    efficient strategic.-->
        <!--                                </p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li class="d-flex align-items-start mb-4">-->
        <!--                            <div class="icon-box bg-dark rounded me-4">-->
        <!--                                <i class="fas fa-cog text-white"></i>-->
        <!--                            </div>-->
        <!--                            <div class="icon-content">-->
        <!--                                <h3 class="h5">Efficiency & Accountability</h3>-->
        <!--                                <p>-->
        <!--                                    Objectively transition prospective collaboration and-->
        <!--                                    idea-sharing without focused maintain focused niche-->
        <!--                                    markets niches.-->
        <!--                                </p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-6 col-md-7">-->
        <!--                <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">-->
        <!--                    <ul class="img-overlay-list list-unstyled position-absolute">-->
        <!--                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">-->
        <!--                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>-->
        <!--                            <h6 class="mb-0">Create a Free Account</h6>-->
        <!--                        </li>-->
        <!--                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">-->
        <!--                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>-->
        <!--                            <h6 class="mb-0">Install Our Tracking Pixel</h6>-->
        <!--                        </li>-->
        <!--                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">-->
        <!--                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>-->
        <!--                            <h6 class="mb-0">Start Tracking your Website</h6>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                    <img src="assets/img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom" />-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--feature section two end-->

      
      <!--our story section start-->
        <section class="our-story-section pt-60 pb-120" style="
          background: url('assets/img/shape/dot-dot-wave-shape.svg') no-repeat
            left bottom;
        ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-12 order-lg-1">
                        <div class="section-heading sticky-sidebar">
                            <h4 class="h5 text-primary">Our Story</h4>
                            <h2>Introducing Merchant Elevate</h2>
                            <p>We are a dropshipping management company and our founders bring more than 15 years of shared experience in online sales. We have evolved and adapted with the industry exceptionally and have extended our services and brought most of our operations in house. That means we already have a system in place to handle marketing, fulfillment houses and customer service.  </p>
                               
                                 <p>Merchant Elevate looks for suitable clients that are looking an opportunity to have us manage and run sales on an online store with our proven strategy.
                            </p>
                          
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-0">
                        <div class="story-grid-wrapper position-relative">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service d-none d-lg-block">
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/image-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5" />
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3" />
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="story-grid rounded-custom bg-dark overflow-hidden position-relative">
                                <div class="story-item bg-light-subtle border">
                                    <h3 class="display-5 fw-bold mb-1 text-dark">40+</h3>
                                    <h6 class="mb-0">Active Clients</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-success">20K+</h3>
                                    <h6 class="mb-0">Sales Per/Year</h6>
                                </div>                                
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-dark">8</h3>
                                    <h6 class="mb-0">Team Members</h6>
                                </div>

                                <div class="story-item bg-light-subtle border">
                                    <h3 class="display-5 fw-bold mb-1 text-dark">6</h3>
                                    <h6 class="mb-0">Years In Business</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our story section end-->
       


        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

</body>

</html>