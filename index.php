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
        "title" => "Home",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

</head>

<body>

    <div class="home-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--hero section start-->
        <section class="hero-section ptb-40" style="
          background: url('assets/img/shape/dot-dot-wave-shape.svg') no-repeat
            bottom center;
        ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start">
                            <div class="d-flex justify-content-start align-items-center gap-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="section-subtitle-icon">
                                </div>
                                <div>
                                    <p class="mb-0 section-subtitle">We Create Brands That Convert</p>
                                </div>
                            </div>
                            <h1 class="fw-bold display-5" data-aos="fade-up" data-aos-delay="300">
                                Earn Income with Our Fully Managed E-commerce Store
                            </h1>
                            <p class="lead" data-aos="fade-up" data-aos-delay="600">
                                At Merchant Elevate, we build profitable, cash-generating branded stores for our clients, providing a complete done-for-you solution with steady monthly passive income.
                            </p>
                            <div data-aos="fade-up" data-aos-delay="1000">
                                <a href="register.php" class="btn site_btn_color">
                                    <span class="text-wrap">
                                        <span>Start Your Project</span>
                                        <span>Start Your Project</span>
                                    </span>
                                </a>
                            </div>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block" data-aos="fade-up" data-aos-delay="1500">

                                <ul class="nav subscribe-feature-list mt-3">
                                    <li class="nav-item">
                                        <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i>Quick Approvals</span>
                                    </li>
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i>Consistent Monthly Payouts</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mt-4 mt-xl-0 ps-xl-5">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left" data-aos-delay="1800">

                            <div class="hero-img-wrap position-relative">
                                <div class="hero-screen-wrap">

                                    <div class="mac-screen">
                                        <img width="800" src="assets/img/hero-img.jpg" alt="hero image" class="position-relative img-fluid rounded-custom" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->


        <!-- Marquee Section -->
        <section class="marquee-section">

            <!-- TOP ROW (LEFT → RIGHT) -->
             <!-- TODO: Implementing cross animation later -->
            <div class="marquee marquee-left" style="display: none;">
                <div class="track">
                    <div class="item">Performance Marketing</div>
                    <div class="dot">•</div>
                    <div class="item">Results, Not Promises</div>
                    <div class="dot">•</div>
                    <div class="item">Data-Driven Ads</div>
                    <div class="dot">•</div>
                    <div class="item">Growth Focused Campaigns</div>

                    <!-- duplicate for seamless loop -->
                    <div class="item">Performance Marketing</div>
                    <div class="dot">•</div>
                    <div class="item">Results, Not Promises</div>
                    <div class="dot">•</div>
                    <div class="item">Data-Driven Ads</div>
                    <div class="dot">•</div>
                    <div class="item">Growth Focused Campaigns</div>
                </div>
            </div>

            <!-- BOTTOM ROW (RIGHT → LEFT) -->
            <div class="marquee marquee-right">
                <div class="track">
                    <div class="item">Creative That Converts</div>
                    <div class="dot">•</div>
                    <div class="item">ROI Focused Strategy</div>
                    <div class="dot">•</div>
                    <div class="item">High Performance Funnels</div>
                    <div class="dot">•</div>
                    <div class="item">Scaling Brands Fast</div>

                    <!-- duplicate -->
                    <div class="item">Creative That Converts</div>
                    <div class="dot">•</div>
                    <div class="item">ROI Focused Strategy</div>
                    <div class="dot">•</div>
                    <div class="item">High Performance Funnels</div>
                    <div class="dot">•</div>
                    <div class="item">Scaling Brands Fast</div>
                </div>
            </div>

        </section>

        <!-- Who we are section -->

        <section class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5" data-aos="fade-right" data-aos-delay="50">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="section-subtitle-icon"></div>
                        <p class="mb-0 section-subtitle">Who We Are</p>
                    </div>
                    <h1 class="who_we_are_heading mb-3">Driving Your Growth Through Digital Advertising</h1>
                    <p class="text-black who_we_are_description">We design and execute data-driven digital advertising strategies that don’t just generate clicks—but real, measurable business growth. From audience targeting to creative optimization, every step is focused on maximizing your return on investment and scaling your brand efficiently.</p>
                </div>
                <div class="col-xl-4 col-lg-4" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/who_we_are_img.jpg" alt="who we are image" class="img-fluid rounded-custom" />

                </div>

                <div class="col-xl-3 col-lg-3 position-relative" data-aos="fade-left" data-aos-delay="200">
                    <a href="#services" class="circle-box w-inline-block">
                        <div class="circle-inner">
                            <div style="color: rgb(10, 10, 10);" class="circle-box-icon">
                                <img width="30" src="assets/img/down-left.png" alt="Service Icon">
                            </div>
                        </div>
                        <div class="circle-text">Explore<br>Service</div>
                    </a>
                    <div class="position-absolute rotate-star" style="bottom: 65%; left: 20%;">
                        <img width="80" src="assets/img/star.png" alt="who we are image" class="img-fluid rounded-custom" />
                    </div>
                    <div class="position-absolute" style="bottom: 0;">
                        <img src="assets/img/who_we_are_img2.jpg" alt="who we are image" class="img-fluid rounded-custom" />
                    </div>

                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="services-section" id="services">

            <div class="d-flex align-items-center gap-3 mb-3 justify-content-center">
                <div class="section-subtitle-icon"></div>
                <p class="mb-0 section-subtitle" data-aos="fade-up">What We Focus On</p>
            </div>

            <h1 class="text-center services-title" data-aos="fade-up">Explore Our Full Range of <br> Digital Services</h1>
            <p class="text-center services-description" data-aos="fade-up">From ads to design, we craft complete marketing solutions focused on <br> attracting leads, boosting conversions, and scaling your business.</p>

            <div class="cards-section">

                <div class="card">Card 1</div>
                <div class="card">Card 2</div>
                <div class="card">Card 3</div>
                <div class="card">Card 4</div>

            </div>
        </section>

        <!--customers section start-->
        <section class="promo-section ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h2>Our Clients Get Results</h2>
                            <p>
                                Join the long list of satisfied long term clients
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 mt-md-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-100 rounded-custom" data-aos="fade-up" data-aos-delay="100">
                            <div class="promo-card-info mb-4">
                                <h3 class="display-5 fw-bold mb-4">
                                    <i class="fas fa-smile text-warning me-2"></i> 90%
                                </h3>
                                <p>
                                    90% of clients who apply get their accounts approved and are receiving monthly revenue share.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 mt-md-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-100 rounded-custom" data-aos="fade-up" data-aos-delay="150">
                            <div class="promo-card-info mb-4">
                                <h3 class="display-5 fw-bold mb-4">
                                    <i class="fas fa-piggy-bank text-warning me-2"></i> $750
                                </h3>
                                <p>
                                    Earn a guranteed $750 a month in recurring revenue share once our stores are set up and running.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-100 rounded-custom" data-aos="fade-up" data-aos-delay="200">
                            <div class="promo-card-info mb-4">
                                <h3 class="display-5 fw-bold mb-4">
                                    <i class="fas fa-calendar text-warning me-2"></i> 5 Days
                                </h3>
                                <p>
                                    It takes our clients an average of 5 days to get their accounts approved upon submitting their application.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--customers section end-->

        <!--feature section start-->
        <section class="feature-section-two ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <div class="section-heading" data-aos="fade-up">
                            <h4 class="h5 text-primary">About Us</h4>
                            <h2>Elevate Your Success with Merchant Elevate</h2>

                            <ul class="list-unstyled mt-5">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Turnkey Management</h3>
                                        <p>
                                            Merchant Elevate is a turnkey management company in the eCommerce sector and has the necessary expertise to partner with clients searching for additional monthly income.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Expertise</h3>
                                        <p>
                                            Our team of eCommerce experts constantly analyzes the hottest trends to offer in-demand products. We ensure our store generates the highest sales volume possible.
                                        </p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Automation</h3>
                                        <p>
                                            With our Merchant Elevate Automation service, we set up, manage and scale our Merchant Elevate eCommerce store – an established online website dedicated to selling trending products.
                                        </p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                            <ul class="img-overlay-list list-unstyled position-absolute">
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="50">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Earn Consistently</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="100">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Earn with Referrals</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="150">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">No Experiece Required</h6>
                                </li>
                            </ul>
                            <img src="assets/img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--feature section start-->
        <section class="feature-section two-bg-dark-light ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="image-wrap mb-5 mb-md-0 mb-lg-0 mb-xl-0" data-aos="fade-up">
                            <img src="assets/img/dashboard-img.png" alt="feature img" class="img-fluid shadow rounded-custom" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-content-wrap" data-aos="fade-up" data-aos-delay="50">
                            <h4 class="h5 text-primary">Sell Smarter</h4>
                            <h2>Effortless Earning: Our Network, Your Revenue</h2>
                            <p>We manage all marketing, content creation & media buying on nearly every social platform. From there, we process and fulfill orders, and handle all customer service needs.</p>

                            <p>The beautiful thing about this service is that we are dropshipping on our branded store. We utilize the Dropshipping business model – we list items for sale on our Merchant Elevate store and ONLY buy inventory from our suppliers after we make sales on our store. </p>

                            <p>This means there’s no risk of buying inventory upfront and waiting for a sale. You never see or touch the items you’re selling. The suppliers through our exclusive network do all the prepping shipping of items for you!
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--our work process start-->
        <section class="work-process ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">How Does It Work?</h4>
                            <h2>Step By Step Process</h2>
                            <p>
                                All it takes is just a few simple steps for you to start earning revenue share from our store.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                        <div class="img-wrap" data-aos="fade-up" data-aos-delay="50">
                            <img src="assets/img/process.jpg" alt="work process" class="img-fluid rounded-custom" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                        <ul class="work-process-list list-unstyled">
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="50">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-folder-tree fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 1</span>
                                    <h3 class="h5 mb-2">Introduction Call</h3>
                                    <p>
                                        This is when we join a call and get to know each other and evaluate if this is a great fit for both of us.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-bezier-curve fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 2</span>
                                    <h3 class="h5 mb-2">Create Account</h3>
                                    <p>
                                        If the call goes well click the “Get Started” button to create an account and submit your application.

                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="150">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-layer-group fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 3</span>
                                    <h3 class="h5 mb-2">Create LLC</h3>
                                    <p>
                                        We will have our onboarding team help guide you through the LLC process. Another option is to dedicate this task to our legal department.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-piggy-bank fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 4</span>
                                    <h3 class="h5 mb-2">Open Business Bank Account</h3>
                                    <p>
                                        Opened within 48-72 hours of receiving completed LLC documentation.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-truck fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 5</span>
                                    <h3 class="h5 mb-2">Implementation Process</h3>
                                    <p>
                                        We will set up the online store, source products, and integrate our store with our fulfillment center and customer service team.

                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-dollar fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 6</span>
                                    <h3 class="h5 mb-2">Receive Payouts</h3>
                                    <p>
                                        Once the store is live and receiving sales. You will begin to receive your monthly revenue share.

                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--our work process end-->

        <!--customer review slider section start-->
        <section class="testimonial-section bg-dark text-white ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-warning text-primary">Testimonials</h4>
                            <h2>What They Say About Us</h2>
                            <p>
                                Hear from some of our satisfied clients who have had sucessful ecommerce campaigns with us
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Miles Stevens</h6>
                                                    <small>Client</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Very Fast!</h6>
                                                The whole process was pretty straight forward and suport help with the questions I did have. Highly recommend if you meet the requirements.
                                            </blockquote>
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
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Terry Parker </h6>
                                                    <small>Client</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Very happy so far</h6>
                                                No complaints! Payouts are not bad and account was easy to set up.
                                            </blockquote>
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
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Hannah Jacobsen</h6>
                                                    <small>Client</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Quiety template!</h6>
                                                Appropriately negotiate interactive niches rather than
                                                parallel strategic theme premium total linkage areas.
                                            </blockquote>
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
                                    </div>


                                </div>
                            </div>
                            <div class="swiper-nav-control">
                                <span class="swiper-button-next"></span>
                                <span class="swiper-button-prev"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--customer review slider section end-->

        <!--integration section start-->
        <section class="integration-section ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Our Partners</h4>
                            <h2>We Collaborate with Top Dropshipping Vendors</h2>
                            <p>
                                Managing a successful e-commerce business entails working with numerous vendors and suppliers. Here are a select few with whom we take great pleasure in collaborating with.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul class="integration-list list-unstyled mb-0">
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/AliExpress.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">AliExpress</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Alibaba.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Alibaba</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/SaleHoo.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">SaleHoo</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/WorldwideBrands.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Worldwide Brands</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Doba.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Doba</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Wholesale2b.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Wholesale2b</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Megagoods.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Megagoods</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/WholesaleCentral.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Wholesale Central</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Modalyst.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Modalyst</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Spocket.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Spocket</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/CJDropshipping.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">CJDropshipping</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/CROV.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">CROV</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Shopify.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Shopify</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/Oberlo.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Oberlo</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/mailchimp.png" alt="integration" class="img-fluid" />
                                        <h6 class="mb-0 mt-4">Mailchimp</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--integration section end-->


    </div>

    <!-- include footer -->
    <?php include_once "includes/footer.php"; ?>

    <!-- include Scripts -->
    <?php include_once "includes/scripts.php"; ?>

</body>

</html>