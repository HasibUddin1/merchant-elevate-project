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
        "title" => "Pricing",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="pricing-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="
          background: url('assets/img/page-header-bg.svg') no-repeat bottom left;
        ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="display-5 fw-bold">Price Suit to Your Business</h1>
                        <p class="lead">
                            Seamlessly actualize client-based users after out-of-the-box
                            value. Globally embrace strategic data through frictionless
                            expertise.
                        </p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--pricing section start-->
        <section class="pricing-section ptb-120 position-relative z-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Stater</h3>
                                <h4 class="display-6 fw-semi-bold">$25<span>/month</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i> 1
                                        Team
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i> 1
                                        Installed Agent
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Real-Time Feedback
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Video Dedicated Support
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i> 1
                                        Attacked Targets Per Month
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Team Collaboration Tools
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Automated Updated Features
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        24/7 Life time Support
                                    </li>
                                </ul>
                            </div>
                            <a href="contact" class="btn btn-outline-primary mt-2">Buy Now</a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape" />
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-dark text-white p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-warning d-block">Advanced</h3>
                                <h4 class="display-6 fw-semi-bold">$45<span>/month</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i> 5
                                        Team
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i> 3
                                        Installed Agent
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i>
                                        Real-Time Feedback
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i>
                                        Video Dedicated Support
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i> 24
                                        Attacked Targets Per Month
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i>
                                        Team Collaboration Tools
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i>
                                        Automated Updated Features
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-warning me-2"></i>
                                        24/7 Life time Support
                                    </li>
                                </ul>
                            </div>
                            <a href="contact" class="btn btn-primary mt-2">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Premium</h3>
                                <h4 class="display-6 fw-semi-bold">$75<span>/month</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i> 6
                                        Team
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i> 8
                                        Installed Agent
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Real-Time Feedback
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Video Dedicated Support
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i> 40
                                        Attacked Targets Per Month
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Team Collaboration Tools
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        Automated Updated Features
                                    </li>
                                    <li>
                                        <i class="fas fa-circle fa-2xs text-primary me-2"></i>
                                        24/7 Life time Support
                                    </li>
                                </ul>
                            </div>
                            <a href="contact" class="btn btn-outline-primary mt-2">Buy Now</a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape" />
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->

        <!--faq section start-->
        <section class="faq-section ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">FAQ</h4>
                            <h2>Frequently Asked Questions</h2>
                            <p>
                                Completely whiteboard top-line channels and fully tested
                                value. Competently generate testing procedures before
                                visionary maintainable growth strategies for maintainable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="accordion faq-accordion" id="accordionExample">
                            <div class="accordion-item border border-2 active">
                                <h5 class="accordion-header" id="faq-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">
                                        How does back pricing work?
                                    </button>
                                </h5>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dramatically formulate cross-unit products with
                                        web-enabled action items. Quickly maximize extensible
                                        methods of empowerment without out-of-the-box initiatives.
                                        Proactively myocardinate functional total linkage rather
                                        than seamless information. Holisticly fabricate timely
                                        initiatives vis-a-vis high-quality imperatives.
                                        Continually deploy open-source content through
                                        professional customer service.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                                        Can you show me an example?
                                    </button>
                                </h5>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Continually innovate technically sound internal or
                                        "organic" sources with market positioning content.
                                        Completely drive optimal intellectual capital vis-a-vis
                                        global human capital. Intrinsicly administrate robust
                                        materials and bleeding-edge resources. Dynamically
                                        envisioneer next-generation markets vis-a-vis
                                        market-driven applications
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                        How do I processing I need?
                                    </button>
                                </h5>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Phosfluorescently deliver cooperative testing procedures
                                        after integrated communities. Dramatically simplify
                                        resource-leveling models with unique outsourcing.
                                        Professionally simplify covalent partnerships whereas
                                        market positioning best practices. Collaboratively utilize
                                        magnetic technology for robust technology.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                                        What happens if I go over my limit?
                                    </button>
                                </h5>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Credibly facilitate leveraged process improvements for
                                        equity invested infrastructures. Continually mesh top-line
                                        human capital with backward-compatible outsourcing.
                                        Rapidiously coordinate intuitive deliverables rather than
                                        parallel metrics. Interactively monetize customer directed
                                        convergence and parallel sources. Enthusiastically
                                        architect client-centric e-services whereas granular
                                        e-commerce.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false">
                                        How do I calculate how much processing I need?
                                    </button>
                                </h5>
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Distinctively enable premier potentialities through market
                                        positioning models. Distinctively extend unique
                                        infomediaries without enterprise-wide ideas. Objectively
                                        deploy multifunctional catalysts for change for installed
                                        base content. Seamlessly create go forward convergence
                                        through quality schemas. Objectively deploy cross-media
                                        leadership skills through customer directed sources.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->

        <!--testimonial section start-->
        <section class="testimonial-section ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>
                                Uniquely promote adaptive quality vectors rather than
                                stand-alone e-markets pontificate alternative architectures
                                with accurate schemas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user" />
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO at Amaara Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>The Best Template You Got to Have it!</h6>
                                                Globally network long-term high-impact schemas
                                                vis-a-vis distinctive e-commerce cross-media
                                                infrastructures rather than ethical
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
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user" />
                                                <div class="author-info">
                                                    <h6 class="mb-0">Oberoi R.</h6>
                                                    <small>CEO at Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Embarrassed by the First Version.</h6>
                                                Dynamically create innovative core competencies with
                                                effective best practices promote innovative
                                                infrastructures.
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
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4" />
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user" />
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Quiety template!</h6>
                                                Appropriately negotiate interactive niches rather than
                                                parallel strategic theme incubate premium total
                                                linkage areas.
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
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded" width="60" alt="user" />
                                                <div class="author-info">
                                                    <h6 class="mb-0">Joan Dho</h6>
                                                    <small>Founder and CTO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Best Template for SAAS Company!</h6>
                                                Dynamically create innovative core competencies with
                                                effective best practices promote innovative
                                                infrastructures.
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
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4" />
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3" />
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded" width="60" alt="user" />
                                                <div class="author-info">
                                                    <h6 class="mb-0">Ranu Mondal</h6>
                                                    <small>Lead Developer</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>It is undeniably good!</h6>
                                                Rapidiously supply client-centric e-markets and
                                                maintainable processes progressively engineer
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
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4" />
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
        <!--testimonial section end-->


        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

</body>

</html>