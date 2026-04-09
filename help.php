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
        "title" => "Help",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>
    <style>
        #searchResults {
            box-shadow: 0px 0px 13px -7px black;
            transition: all 0.3s ease-in-out;
        }

        #searchResults a {
            padding: 20px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
        }

        #searchResults a h3 {
            color: black;
            transition: all 0.3s ease-in-out;
        }

        #searchResults a p,
        #searchResults a span {
            display: none !important;
        }


        #searchResults a:hover {
            background-color: #101726 !important;
            color: #fff !important;
        }

        #searchResults a:hover h3 {
            color: #fff !important;
        }
    </style>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="help-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--page header section start-->
        <section class="page-header position-relative ptb-120 bg-dark" style="
          background: url('assets/img/page-header-bg.svg') no-repeat bottom left;
        ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="text-center">
                            <h1 class="display-5 fw-bold">Support</h1>
                            <p class="lead">
                                Seamlessly actualize client-based users after out-of-the-box
                                value. Globally embrace strategic high-quality platforms
                                before frictionless expertise.
                            </p>

                            <div class="form-block-banner mw-60 m-auto mt-5 position-relative">
                                <form name="search" class="search-form d-flex">
                                    <input type="text" class="form-control" name="search" data-name="search" placeholder="Search for a topic or question" id="searchForm" required="" />
                                </form>

                                <div id="searchResults" class="me-2">
                                    <!-- Search results will be displayed here -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div> -->
            </div>
        </section>
        <!--page header section end-->

        <!--support content section start-->
        <section class="support-content ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-4 d-none d-md-block d-lg-block">
                        <div class="support-article-sidebar sticky-sidebar">
                            <div class="nav flex-column nav-pills support-article-tab bg-light-subtle rounded-custom p-5" id="v-pills-support" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" data-bs-target="#support-tab-1" data-bs-toggle="pill" type="button" role="tab" aria-selected="true">
                                    All Documentation
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-2" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Payments Query
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-3" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Setup or Installment
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-4" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Technical Support
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-5" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Retailers & Customer
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-6" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Security Issues
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-7" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Brand Creation
                                </button>
                                <button class="nav-link" data-bs-target="#support-tab-8" data-bs-toggle="pill" type="button" role="tab" aria-selected="false">
                                    Legal Support
                                </button>
                            </div>
                            <div class="bg-light-subtle p-5 mt-4 rounded-custom quick-support">
                                <a href="contact" class="text-decoration-none text-muted d-flex align-items-center py-2">
                                    <div class="quick-support-icon rounded-circle bg-success-soft me-3">
                                        <i class="fas fa-check-circle text-success"></i>
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
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-content" id="v-pills-supportContent">
                            <div class="tab-pane fade show active" id="support-tab-1" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>All Support Articles</h2>
                                    <ul class="support-article-list list-unstyled mt-4">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Rapidiously
                                                    incubate alternative infrastructures with high
                                                    standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    A lternative infrastructures with high standards in
                                                    e-markets. Intrinsicly evisculate e-business best
                                                    practices productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Mission-critical products before quality e-services.
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards e-business best practices
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=How often is there a subscribers stream" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    How often is there a subscribers stream?
                                                </h3>
                                                <p>
                                                    Critical products before quality e-services.
                                                    Incubate alternative infrastructures with high
                                                    standards in intrinsicly evisculate e-business best
                                                    alternative infrastructures practices...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What certifications does Agency has" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What certifications does Agency has?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical ncubate
                                                    alternative infrastructures with high standards in
                                                    e-markets. e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-2" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Payments Query</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-3" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Setup or Installment</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-4" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Technical Support</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-5" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Retailers & Customer</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-6" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Security Issues</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-7" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Brand Creation</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support-tab-8" role="tabpanel">
                                <div class="support-article-wrap">
                                    <h2>Legal Support</h2>
                                    <ul class="support-article-list list-unstyled">
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you have any local branches" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you have any local branches?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What do I need to create an account" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What do I need to create an account?
                                                </h3>
                                                <p>
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence. Credibly
                                                    evisculate mission-critical ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Do you offer refunds for the subscriptions" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Do you offer refunds for the subscriptions?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical with high
                                                    standards in e-markets. Intrinsicly evisculate
                                                    e-business best practices productivate standardized
                                                    convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Intrinsicly evisculate
                                                    e-business best practices ...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=Are you open for new podcast guests" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    Are you open for new podcast guests?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=When is the upcoming annual event" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    When is the upcoming annual event?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    e-business best practices productivate
                                                    standardized...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What is the monthly cost of your app" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What is the monthly cost of your app?
                                                </h3>
                                                <p>
                                                    Rapidiously incubate alternative infrastructures
                                                    with high standards in e-markets. Intrinsicly
                                                    evisculate e-business best practices productivate
                                                    standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="py-4 border-top border-light">
                                            <a href="help-single?articleName=What’s inside the Facebook community" class="text-decoration-none d-block text-muted">
                                                <h3 class="h5 support-article-title">
                                                    What’s inside the Facebook community?
                                                </h3>
                                                <p>
                                                    Credibly evisculate mission-critical products before
                                                    quality e-services. Rapidiously incubate alternative
                                                    infrastructures with high standards in e-markets.
                                                    Intrinsicly evisculate e-business best practices
                                                    productivate standardized convergence...
                                                </p>
                                                <span class="btn-link text-decoration-none read-more-link">Read More <i class="fas fa-arrow-right ms-2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--support content section end-->

        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

    <script>
        $(document).ready(function() {
            const searchForm = $("#searchForm");
            const searchResults = $("#searchResults");
            const articles = $("a.text-decoration-none.d-block.text-muted");

            // Function to show the search results
            function showSearchResults() {
                searchResults.css({
                    display: "block",
                    position: "absolute",
                    top: "60px", // Adjust the top position as needed
                    left: "0",
                    width: "100%",
                    background: "white",
                    zIndex: 8, // Adjust the z-index as needed
                    borderRadius: "6px",
                });
            }

            // Function to hide the search results
            function hideSearchResults() {
                searchResults.empty();
                searchResults.css("display", "none");
            }

            searchForm.on("input", function() {
                const searchTerm = searchForm.val().toLowerCase();

                hideSearchResults(); // Hide results by default

                if (searchTerm.trim() === "") {
                    return; // Exit if the search term is empty
                }

                let matchingResults = 0;

                articles.each(function() {
                    const article = $(this);
                    const h3 = article.find("h3");
                    const p = article.find("p");

                    if (h3.text().toLowerCase().includes(searchTerm) || p.text().toLowerCase().includes(searchTerm)) {
                        if (matchingResults < 3) {
                            searchResults.append(article.clone());
                            matchingResults++;
                        }
                    }
                });

                if (matchingResults > 0) {
                    showSearchResults();
                }
            });

            searchForm.on("keydown", function(e) {
                if (e.keyCode === 8) {
                    // Check for the backspace key (keyCode 8)
                    hideSearchResults();
                }
            });

            searchResults.on("click", "a", function() {
                // Handle the redirection logic here if needed
                const articleLink = $(this).attr("href");
                // Redirect to the articleLink
                window.location.href = articleLink;
            });

            // Detect clicks outside the search results to hide them
            $(document).on("click", function(e) {
                if (!searchResults.is(e.target) && searchResults.has(e.target).length === 0) {
                    hideSearchResults();
                }
            });
        });
    </script>






</body>

</html>