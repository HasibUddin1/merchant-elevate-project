<!--page header section start-->
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="
          background: url('assets/img/page-header-bg.svg') no-repeat bottom left;
            ">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8 col-12">
                <div class="company-info-wrap">
                    <div class="company-logo p-4 bg-white shadow rounded-custom me-4 mt-2">
                        <div class="logo">
                            <img src="assets/img/logo-color.png" alt="company logo" class="img-fluid" />
                        </div>
                    </div>
                    <div class="company-overview">
                        <h1 class="display-5 fw-bold"><?= $jobName ?></h1>

                        <h6>About The Company</h6>
                        <ul class="list-unstyled list-inline mb-0 mt-3">
                            <li class="list-inline-item me-4">
                                <i class="fas fa-house me-2"></i> <?= SITE_NAME ?>
                            </li>
                            <li class="list-inline-item me-4">
                                <div class="star-rating">
                                    <i class="far fa-smile me-2"></i>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="annual-salary-wrap rounded-custom bg-white">
                    <h6>Annual Salary</h6>
                    <span class="display-6 fw-semi-bold text-dark mb-0">$65k - $90k</span>
                </div>
            </div>
        </div>

        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<!--page header section end-->

<!--job details section start-->
<section class="job-details ptb-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 pe-lg-5">
                <div class="job-details-wrap">
                    <h2>Job Details</h2>
                    <p>
                        We are looking for a dynamic and motivated Lead Sales Strategist to join our team.
                        As a Lead Sales Strategist at Merchantelevate.com, you will play a key role in driving
                        sales, building relationships with customers, and contributing to the growth
                        and success of our company.
                    </p>
                    <div class="job-details-info mt-5">
                        <h3 class="h5">Job Responsibilities</h3>
                        <ul class="content-list list-unstyled">
                            <li>
                                Proactively engage with customers to understand their needs and preferences.
                            </li>
                            <li>
                                Provide product information and advice to customers.
                            </li>
                            <li>
                                Offer solutions and recommendations to enhance the customer shopping experience.
                            </li>
                            <li>
                                Process sales transactions accurately and efficiently.
                            </li>
                            <li>
                                Meet and exceed sales targets and quotas.
                            </li>
                            <li>
                                Build and maintain customer relationships through excellent service and follow-up.
                            </li>
                            <li>
                                Collaborate with team members to achieve common goals.
                            </li>
                        </ul>
                    </div>
                    <div class="job-details-info mt-5">
                        <h3 class="h5">Job Requirements</h3>
                        <ul class="content-list list-unstyled">
                            <li>
                                Previous sales experience is a plus, but not required.
                                We value a positive attitude, strong work ethic, and a willingness to learn.
                            </li>
                            <li>
                                Excellent communication and interpersonal skills.
                            </li>
                            <li>
                                Customer-focused with a genuine desire to assist and serve.
                            </li>
                            <li>
                                Ability to work in a fast-paced and dynamic environment.
                            </li>
                            <li>
                                Team player with a can-do attitude.
                            </li>
                            <li>
                                Basic computer skills.
                            </li>
                        </ul>
                    </div>

                    <div class="job-details-info mt-5">
                        <h3 class="h5">Skill & Experience</h3>
                        <ul class="content-list list-unstyled">
                            <li>
                                Previous sales experience is a plus but not required. We value a positive attitude, a strong work ethic, and a willingness to learn.
                            </li>
                            <li>
                                Strong interpersonal and communication skills.
                            </li>
                            <li>
                                Ability to work effectively in a team and independently.
                            </li>
                            <li>
                                Experience working in a fast-paced and dynamic environment.
                            </li>
                        </ul>
                    </div>

                    <img src="assets/img/apply-now-1.jpg" class="img-fluid mt-5 rounded-custom" alt="apply" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="job-overview-wrap bg-light-subtle p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">
                    <h5>Job Overviews</h5>
                    <ul class="job-overview-list list-unstyled mt-4">
                        <li>
                            <i class="fas fa-location-arrow text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Location:</h6>
                                <span>Los Angeles, California</span>
                            </div>
                        </li>
                        <li>
                            <i class="far fa-user text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Job Title:</h6>
                                <span><?= $jobName ?></span>
                            </div>
                        </li>
                        <li>
                            <i class="far fa-clock text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Hours:</h6>
                                <span>37.5h / week</span>
                            </div>
                        </li>
                    
                        <li>
                            <i class="fas fa-wallet text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Salary:</h6>
                                <span>$65k - $90kk</span>
                            </div>
                        </li>
                    </ul>
                    <a href="contact" class="btn btn-primary d-block mt-5">Apply now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--job details section end-->

<!--related job start-->
<!-- <section class="related-job-list ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Related Jobs</h4>
                            <h2>More Openings Jobs at Quiety</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <p>
                            Phosfluorescently disintermediate revolutionary paradigms before
                            enabled interfaces. Dynamically transition skills vis-a-vis
                            virtual customer service via impactful partnerships with
                            technically sound paradigms with cutting-edge initiatives.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="career-single" class="text-decoration-none mt-4 mt-lg-0 mt-xl-0 single-open-job p-5 bg-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted h6 mb-2 job-time"><i class="far fa-briefcase me-2"></i> Remote - Full
                                    Time</span>
                                <span class="badge rounded-pill px-3 py-2 bg-primary-soft text-primary small">Developer</span>
                            </div>
                            <h3 class="h5">Jr Frontend Developer</h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <li class="list-inline-item">
                                    <span class="fas fa-house me-1"></span> Google
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-location-arrow me-1"></span> London, UK
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-wallet me-1"></span> $35k - $45k
                                </li>
                            </ul>
                            <div class="btn btn-primary btn-sm d-inline-block mt-4">
                                Apply Now
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="career-single" class="text-decoration-none mt-4 mt-lg-0 mt-xl-0 single-open-job p-5 bg-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted h6 mb-2 job-time"><i class="far fa-briefcase me-2"></i> Remote - Full
                                    Time</span>
                                <span class="badge rounded-pill px-3 py-2 bg-danger-soft text-danger small">Designer</span>
                            </div>
                            <h3 class="h5">UI/UX Product Designer</h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <li class="list-inline-item">
                                    <span class="fas fa-house me-1"></span> Figma
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-location-arrow me-1"></span> California
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-wallet me-1"></span> $25k - $35k
                                </li>
                            </ul>
                            <div class="btn btn-primary btn-sm d-inline-block mt-4">
                                Apply Now
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="career-single" class="text-decoration-none mt-4 mt-lg-0 mt-xl-0 single-open-job p-5 bg-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted h6 mb-2 job-time"><i class="far fa-briefcase me-2"></i> Full Time</span>
                                <span class="badge rounded-pill px-3 py-2 bg-success-soft text-success small">Manager</span>
                            </div>
                            <h3 class="h5">Senior Office Manager</h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <li class="list-inline-item">
                                    <span class="fas fa-house me-1"></span> Dribble
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-location-arrow me-1"></span> California
                                </li>
                                <li class="list-inline-item">
                                    <span class="fas fa-wallet me-1"></span> $55k - $62k
                                </li>
                            </ul>
                            <div class="btn btn-primary btn-sm d-inline-block mt-4">
                                Apply Now
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
<!--related job end-->