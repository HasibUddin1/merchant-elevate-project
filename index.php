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
        <!-- TODO: Updating the image below Start Your Project Button -->
        <section class="hero-section ptb-40 overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-start">
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
                            <div class="hero-rating-wrap" data-aos="fade-up" data-aos-delay="1500">
                                <div class="hero-author-box"><img loading="lazy" src="assets/img/person1.png" alt="" class="hero-author-img first"><img loading="lazy" src="assets/img/person2.png" alt="" class="hero-author-img"><img loading="lazy" src="assets/img/person3.png" alt="" class="hero-author-img"></div>
                                <div class="hero-rating-box">
                                    <div class="rating-box-two"><img loading="lazy" src="assets/img/star.svg" alt="" class="rating-star-two"><img loading="lazy" src="assets/img/star.svg" alt="" class="rating-star-two"><img loading="lazy" src="assets/img/star.svg" alt="" class="rating-star-two"><img loading="lazy" src="assets/img/star.svg" alt="" class="rating-star-two"><img loading="lazy" src="assets/img/star.svg" alt="" class="rating-star-two">
                                        <p class="rating-count">4.9</p>
                                    </div>
                                    <p class="hero-rating-text mb-0">200+ Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-4 mt-xl-0 ps-xl-5" data-aos="fade-left" data-aos-delay="2000">
                        <div class="hero-img-wrap position-relative">

                            <div class="hero-img-wrap position-relative">
                                <div class="hero-screen-wrap">

                                    <div class="mac-screen">
                                        <div class="hero-slider">
                                            <img src="assets/img/hero1.jpg" class="slide active" />
                                            <img src="assets/img/hero2.jpg" class="slide" />
                                            <img src="assets/img/hero3.jpg" class="slide" />

                                            <!-- Progress bar -->
                                            <div class="progress-track">
                                                <div class="progress-bar"></div>
                                            </div>
                                        </div>
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
        <section class="marquee-section overflow-hidden">

            <!-- TOP ROW -->
            <div class="marquee marquee-left">
                <div class="track">
                    <div class="item">Performance Marketing</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Results, Not Promises</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Data-Driven Ads</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Growth Focused Campaigns</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>

                    <!-- duplicate -->
                    <div class="item">Performance Marketing</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Results, Not Promises</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Data-Driven Ads</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Growth Focused Campaigns</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>

                    <!-- duplicate -->
                    <div class="item">Performance Marketing</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Results, Not Promises</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Data-Driven Ads</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Growth Focused Campaigns</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                </div>
            </div>

            <!-- BOTTOM ROW -->
            <div class="marquee marquee-right">
                <div class="track">
                    <div class="item">Creative That Converts</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">ROI Focused Strategy</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">High Performance Funnels</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Scaling Brands Fast</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>

                    <!-- duplicate -->
                    <div class="item">Creative That Converts</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">ROI Focused Strategy</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">High Performance Funnels</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Scaling Brands Fast</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>

                    <!-- duplicate -->
                    <div class="item">Creative That Converts</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">ROI Focused Strategy</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">High Performance Funnels</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                    <div class="item">Scaling Brands Fast</div>
                    <div class="dot">
                        <img width="22" height="22" src="assets/img/dot_star.png" alt="Dot Icon">
                    </div>
                </div>
            </div>

        </section>

        <!-- Who we are section -->

        <section class="container who_we_are_section overflow-hidden" id="about">
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
                        <img src="assets/img/who_we_are_img2.jpg" alt="who we are image" class="img-fluid rounded-custom who_we_are_img2" />
                    </div>

                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="services-section" id="services">

            <div class="d-flex align-items-center gap-3 mb-3 justify-content-center" data-aos="fade-up">
                <div class="section-subtitle-icon"></div>
                <p class="mb-0 section-subtitle">What We Focus On</p>
            </div>

            <h1 class="text-center services-title" data-aos="fade-up">Explore Our Full Range of <br> Digital Services</h1>
            <p class="text-center services-description" data-aos="fade-up">From ads to design, we craft complete marketing solutions focused on <br> attracting leads, boosting conversions, and scaling your business.</p>

            <div class="cards-section">

                <!-- 1st Card -->
                <div class="card">
                    <div class="text-content">
                        <h3 class="card_title">Secure Document Handling</h3>
                        <p class="card_description">Manage all your important business documents in a centralized and secure system. Users can easily upload, organize, and track their files while ensuring data safety and smooth administrative handling.</p>
                        <div class="tags_container">
                            <span class="tag">Secure Storage</span>
                            <span class="tag">Easy Upload</span>
                            <span class="tag">Organized Files</span>
                            <span class="tag">Access Control</span>
                        </div>
                    </div>
                    <div class="img_container">
                        <img src="assets/img/service_img1.jpg" alt="Service Image" class="img-fluid rounded-custom" />
                    </div>
                </div>

                <!-- 2nd Card -->
                <div class="card">
                    <div class="text-content">
                        <h3 class="card_title">User Management System</h3>
                        <p class="card_description">Efficiently manage user accounts, roles, and permissions within your platform. This system ensures proper access control, smooth onboarding, and structured user activity tracking for better management.</p>
                        <div class="tags_container">
                            <span class="tag">Role Control</span>
                            <span class="tag">User Access</span>
                            <span class="tag">Account Management</span>
                            <span class="tag">Permission System</span>
                        </div>
                    </div>
                    <div class="img_container">
                        <img src="assets/img/service_img2.jpg" alt="Service Image" class="img-fluid rounded-custom" />
                    </div>
                </div>

                <!-- 3rd Card -->
                <div class="card">
                    <div class="text-content">
                        <h3 class="card_title">Workflow Automation Tools</h3>
                        <p class="card_description">Streamline repetitive business processes with smart automation tools. Reduce manual effort, improve efficiency, and ensure tasks move smoothly through predefined workflows without delays.</p>
                        <div class="tags_container">
                            <span class="tag">Process Automation</span>
                            <span class="tag">Task Flow</span>
                            <span class="tag">Efficiency Boost</span>
                            <span class="tag">Smart Scheduling</span>
                        </div>
                    </div>
                    <div class="img_container">
                        <img src="assets/img/service_img3.jpg" alt="Service Image" class="img-fluid rounded-custom" />
                    </div>
                </div>

                <!-- 4th Card -->
                <div class="card">
                    <div class="text-content">
                        <h3 class="card_title">Performance Analytics Dashboard</h3>
                        <p class="card_description">Get a clear overview of system and business performance through real-time analytics. Track key metrics, monitor activity trends, and make data-driven decisions with ease.</p>
                        <div class="tags_container">
                            <span class="tag">Real-time Data</span>
                            <span class="tag">Insights</span>
                            <span class="tag">KPI Tracking</span>
                            <span class="tag">Reporting System</span>
                        </div>
                    </div>
                    <div class="img_container">
                        <img src="assets/img/service_img4.jpg" alt="Service Image" class="img-fluid rounded-custom" />
                    </div>
                </div>

            </div>
        </section>


        <!-- Our Impact Section -->
        <section class="our_impact_section container">
            <div class="row justify-content-center">


                <div class="col-lg-4 overflow-hidden">
                    <div class="left_content" data-aos="fade-right">

                        <!-- 1st Card -->
                        <div class="card">
                            <img width="50" height="50" src="assets/img/business_growth_icon.png" alt="Our Impact Image" class="img-fluid" />
                            <div class="text_content">
                                <h3 class="card_title">Business Growth</h3>
                                <p>Helping businesses expand their reach, improve performance, and achieve consistent growth through smart digital solutions.</p>
                            </div>
                            <h1 class="stats">+120%</h1>
                        </div>

                        <!-- 2nd Card -->
                        <div class="card">
                            <img width="50" height="50" src="assets/img/faster_operations.png" alt="Our Impact Image" class="img-fluid" />
                            <div class="text_content">
                                <h3 class="card_title">Faster Operations</h3>
                                <p>Streamlining workflows and processes to reduce delays and improve overall operational efficiency.</p>
                            </div>
                            <h1 class="stats">2.5x</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 middle_content" data-aos="fade-up">
                    <div class="tagline gap-3 mb-3">
                        <div class="section-subtitle-icon"></div>
                        <p class="mb-0 section-subtitle">Our Impact</p>
                    </div>
                    <h3 class="section_title text-center">Driving Real Business Transformation</h3>
                    <p class="section_description text-center mt-3 mb-0">We deliver measurable results that help businesses grow, scale, and operate more efficiently.</p>
                </div>

                <div class="col-lg-4 overflow-hidden">
                    <div class="right_content" data-aos="fade-left">

                        <!-- 3rd Card -->
                        <div class="card">
                            <img width="50" height="50" src="assets/img/user_engagement.png" alt="Our Impact Image" class="img-fluid" />
                            <div class="text_content">
                                <h3 class="card_title">User Engagement</h3>
                                <p>Improving user interaction and engagement through optimized systems and better experience design.</p>
                            </div>
                            <h1 class="stats">+85%</h1>
                        </div>


                        <!-- 4th Card -->
                        <div class="card">
                            <img width="50" height="50" src="assets/img/data_accuracy.png" alt="Our Impact Image" class="img-fluid" />
                            <div class="text_content">
                                <h3 class="card_title">Data Accuracy</h3>
                                <p>Ensuring reliable and precise data handling for better decision-making and business control.</p>
                            </div>
                            <h1 class="stats">99.9%</h1>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Our Work Section -->
        <section class="our_work_section container ms-auto overflow-hidden">
            <div class="container text_content">
                <div class="d-flex justify-content-start align-items-center gap-3 mb-3">
                    <div class="section-subtitle-icon"></div>
                    <div>
                        <p class="mb-0 section-subtitle">Our Work</p>
                    </div>
                </div>

                <h1 class="section_title mb-3">
                    Crafting Digital Solutions <br> That Deliver Results
                </h1>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="section_description">
                        Explore how we turn ideas into scalable, efficient, and <br>
                        impactful digital work for modern businesses.
                    </p>

                    <div class="buttons_container">
                        <button id="prevBtn">
                            <img width="24" src="assets/img/left_arrow.png">
                        </button>
                        <button id="nextBtn">
                            <img width="24" src="assets/img/right_arrow.png">
                        </button>
                    </div>
                </div>
            </div>

            <!-- SLIDER -->
            <div class="work_slider_wrapper">
                <div class="work_slider container" id="workSlider">

                    <!-- 1st Card -->
                    <div class="work_card">
                        <div class="position-relative">
                            <div class="project-image-box"><img style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" loading="lazy" alt="" src="assets/img/work_img1.jpg" class="project_image img-fluid rounded-custom">
                                <div class="project-shape-box"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape-two">
                                    <h3 class="card_heading">Web Development</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 card_description">Custom, responsive websites built for performance, scalability, and modern user experience.</p>

                    </div>


                    <!-- 2nd Card -->
                    <div class="work_card">
                        <div class="position-relative">
                            <div class="project-image-box"><img style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" loading="lazy" alt="" src="assets/img/work_img2.jpg" class="project_image img-fluid rounded-custom">
                                <div class="project-shape-box"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape-two">
                                    <h3 class="card_heading">System Integration</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 card_description">Connecting tools and platforms seamlessly to improve workflow and reduce manual work.</p>

                    </div>



                    <!-- 3rd Card -->
                    <div class="work_card">
                        <div class="position-relative">
                            <div class="project-image-box"><img style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" loading="lazy" alt="" src="assets/img/work_img3.jpg" class="project_image img-fluid rounded-custom">
                                <div class="project-shape-box"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape-two">
                                    <h3 class="card_heading">UI/UX Design</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 card_description">Designing clean and user-friendly interfaces that improve engagement and usability.</p>

                    </div>


                    <!-- 4th Card -->
                    <div class="work_card">
                        <div class="position-relative">
                            <div class="project-image-box"><img style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" loading="lazy" alt="" src="assets/img/work_img4.jpg" class="project_image img-fluid rounded-custom">
                                <div class="project-shape-box"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape-two">
                                    <h3 class="card_heading">Process Automation</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 card_description">Automating repetitive business tasks to save time and increase operational efficiency.</p>

                    </div>


                    <!-- 5th Card -->
                    <div class="work_card">
                        <div class="position-relative">
                            <div class="project-image-box"><img style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" loading="lazy" alt="" src="assets/img/work_img5.jpg" class="project_image img-fluid rounded-custom">
                                <div class="project-shape-box"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape-two">
                                    <h3 class="card_heading">Data Management</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 card_description">Organizing and managing business data securely for better control and decision-making.</p>

                    </div>


                    <!-- 6th Card -->
                    <div class="work_card">
                        <div class="position-relative">
                            <div class="project-image-box"><img style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" loading="lazy" alt="" src="assets/img/work_img6.jpg" class="project_image img-fluid rounded-custom">
                                <div class="project-shape-box"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape"><img loading="lazy" src="https://cdn.prod.website-files.com/67c557f717dc36a702f39ae2/6870f7ebeccf3fc95b60dc71_svgviewer-output.svg" alt="" class="project-shape-two">
                                    <h3 class="card_heading">Performance Optimization</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 card_description">Improving system speed, efficiency, and overall digital performance for better results.</p>

                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="testimonial_section container overflow-hidden">
            <div class="d-flex align-items-center gap-3 mb-3" data-aos="fade-up">
                <div class="section-subtitle-icon"></div>
                <p class="mb-0 section-subtitle">Client Testimonials</p>
            </div>
            <div data-aos="fade-up">
                <h3 class="section_heading">What Our Clients Say</h3>
                <p class="section_description">We are proud to partner with incredible clients who trust our work and appreciate the results we deliver.</p>
            </div>

            <div class="testimonial_cards_container row" data-aos="fade-up">

                <!-- Card 1 -->
                <div class="col-lg-4 p-3">
                    <div class="card first_card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="img_container">
                                <img src="assets/img/client1.png" alt="Alex Morgan">
                            </div>
                            <div class="quote_icon">
                                <img src="assets/img/quotation.png" alt="Quote Icon">

                            </div>
                        </div>
                        <h4 class="testimonial_author">Alex Morgan</h4>
                        <p class="designation">Product Manager</p>
                        <p class="testimonial_text">"Before using this platform, our workflow was spread across multiple tools, making progress tracking difficult. After switching, everything became seamless—from automation to reporting. The dashboard provides real-time visibility, and our team is now fully aligned. It’s more than just software; it has become our daily command center. I honestly can’t imagine managing our business without it anymore."</p>

                    </div>

                    <div class="card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="img_container">
                                <img src="assets/img/client4.png" alt="David Brown">
                            </div>
                            <div class="quote_icon">
                                <img src="assets/img/quotation.png" alt="Quote Icon">

                            </div>
                        </div>
                        <h4 class="testimonial_author">David Brown</h4>
                        <p class="designation">Growth Strategist</p>
                        <p class="testimonial_text">"This platform has transformed how our team works. From task automation to real-time collaboration, everything runs seamlessly. The interface is intuitive, and the support team is genuinely focused on delivering a great user experience."</p>

                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 p-3">
                    <div class="card first_card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="img_container">
                                <img src="assets/img/client2.png" alt="James Carter">
                            </div>
                            <div class="quote_icon">
                                <img src="assets/img/quotation.png" alt="Quote Icon">

                            </div>
                        </div>
                        <h4 class="testimonial_author">James Carter</h4>
                        <p class="designation">CTO</p>
                        <p class="testimonial_text">"We were initially skeptical about making the switch, but the software quickly proved its value within days. Our operations became more efficient, our data better organized, and our workflow significantly smoother."</p>

                    </div>

                    <div class="card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="img_container">
                                <img src="assets/img/client5.png" alt="Emily Stone">
                            </div>
                            <div class="quote_icon">
                                <img src="assets/img/quotation.png" alt="Quote Icon">

                            </div>
                        </div>
                        <h4 class="testimonial_author">Emily Stone</h4>
                        <p class="designation">Data Scientist</p>
                        <p class="testimonial_text">"We faced challenges managing projects and data across multiple departments. After testing several SaaS platforms, this one stood out right away. The UI is clean and intuitive, and its automation features save us hours each day. What impressed us most was how seamlessly it scaled with our rapid team growth. We’ve significantly reduced manual work, improved efficiency, and regained full control over our processes."</p>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 p-3">
                    <div class="card first_card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="img_container">
                                <img src="assets/img/client3.png" alt="Sarah Wilson">
                            </div>
                            <div class="quote_icon">
                                <img src="assets/img/quotation.png" alt="Quote Icon">

                            </div>
                        </div>
                        <h4 class="testimonial_author">Sarah Wilson</h4>
                        <p class="designation">Marketing Director</p>
                        <p class="testimonial_text">"We needed a solution that didn’t require lengthy onboarding or technical expertise. Within just a few hours, our entire team was up and running. Every feature feels thoughtfully designed for real users—simple, clear, and efficient. Reports, integrations, and notifications all work seamlessly. It’s rare to find software that performs so reliably without constant troubleshooting."</p>

                    </div>

                    <div class="card" data-aos="fade-up">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="img_container">
                                <img src="assets/img/client6.png" alt="Michael Reed">
                            </div>
                            <div class="quote_icon">
                                <img src="assets/img/quotation.png" alt="Quote Icon">

                            </div>
                        </div>
                        <h4 class="testimonial_author">Michael Reed</h4>
                        <p class="designation">Cloud Architect</p>
                        <p class="testimonial_text">"The performance, reliability, and customer support make this platform truly outstanding. It’s more than just a tool—it has become an essential part of our business operations, driving growth and simplifying our daily workflows with consistent speed and efficiency."</p>

                    </div>
                </div>



            </div>
        </section>


        <!-- Contact Section -->
        <!--contact us form start-->
        <section class="contact-us-form pt-60 pb-120 contact_form overflow-hidden" id="contact">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-heading" data-aos="fade-up">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="section-subtitle-icon"></div>
                                <p class="mb-0 section-subtitle">What We Focus On</p>
                            </div>
                            <h2 class="section_title">Talk To A Team Member For Any Inquiries</h2>
                            <p class="section_description">
                                Our client onboarding team will help answer any questions you may have with getting your account started.
                            </p>
                        </div>
                        <form action="./core/contact.php" class="register-form" method="POST" data-aos="fade-right">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="mb-1 text-black">Name *</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="name" class="form-control" id="firstName" required placeholder="Name" aria-label="Name" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1 text-black">Email *</label>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" id="email" required placeholder="Email" aria-label="Email" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="mb-1 text-black">Message *</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="message" id="message" required placeholder="How can we help you?" style="height: 120px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn site_btn_color mt-4">
                                <span class="text-wrap">
                                    <span>Send Message</span>
                                    <span>Send Message</span>
                                </span>
                            </button>
                            <?php
                            if (isset($_GET['success']) && $_GET['success'] == 1) {
                                // Show a Bootstrap success alert
                                echo '<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                            Message sent successfully!
                                        </div>';
                            } else if (isset($_GET['success']) && $_GET['success'] == 0) {
                                // Show a Bootstrap success alert
                                echo '<div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                            Failed to send messsage. Try again later!
                                        </div>';
                            }
                            ?>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-10 image_container" data-aos="fade-left">
                        <div class="contact-us-img">
                            <img src="assets/img/contact_img.jpg" alt="contact us" class="img-fluid rounded-custom" />
                        </div>
                        <div class="contact_info">
                            <div class="location_info d-flex align-items-center gap-2 mb-2">
                                <img width="24" src="assets/img/location_icon.png" alt="Location">
                                <a class="text-black"><?= ADDRESS ?></a>
                            </div>
                            <div class="phone_info d-flex align-items-center gap-2">
                                <img width="24" src="assets/img/phone_icon.png" alt="Phone">
                                <a class="text-black"><?= PHONE ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us form end-->


    </div>

    <!-- include footer -->
    <?php include_once "includes/footer.php"; ?>

    <!-- include Scripts -->
    <?php include_once "includes/scripts.php"; ?>

</body>

</html>