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
        "title" => "Team",
    ];
    ?>

    <?php include_once "includes/head.php"; ?>

    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <div class="team-page">

        <!-- include header -->
        <?php include_once "includes/nav.php"; ?>

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="
          background: url('assets/img/page-header-bg.svg') no-repeat bottom left;
            ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="display-5 fw-bold">Meet Our Team</h1>
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

        <!--team section start-->
        <section class="team-section ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-heading text-center">
                            <h5 class="h6 text-primary">Our Team</h5>
                            <h2>The People Behind Quiety</h2>
                            <p>
                                Intrinsicly strategize cutting-edge functionalities before
                                interoperable applications. Synergistically incubate extensive
                                expertise through integrated intellectual capital.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img">
                                <img src="assets/img/team/team-1.jpg" alt="team" class="img-fluid rounded-custom" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">John Sullivan</h5>
                                <p class="text-muted small">Front End Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-2.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">Katie Hudson</h5>
                                <p class="text-muted small">Customer Support Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-3.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">Jesse Stevens</h5>
                                <p class="text-muted small">Ads Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-4.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">Martin Gray</h5>
                                <p class="text-muted small">Back End Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-5.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">Heather Wright</h5>
                                <p class="text-muted small">Founded & Chairman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-6.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">Danielle Levin</h5>
                                <p class="text-muted small">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-7.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">James Lewis</h5>
                                <p class="text-muted small">Vice Chairman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mt-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-8.jpg" alt="team" class="img-fluid" />
                                <ul class="list-unstyled team-social-list team-social-style-2 list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info mt-4">
                                <h5 class="h6 mb-1">Monroe Parker</h5>
                                <p class="text-muted small">Back End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team section end-->

        <!-- include footer -->
        <?php include_once "includes/footer.php"; ?>

        <!-- include Scripts -->
        <?php include_once "includes/scripts.php"; ?>

    </div>

</body>

</html>