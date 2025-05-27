<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Professional SEO Services in Shimla - Boost your rankings with our expert on-page & off-page optimization strategies">
    <meta name="keywords" content="SEO services Shimla, search engine optimization, local SEO, on-page SEO, off-page SEO">
    <meta name="author" content="Skydo Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Professional SEO Services in Shimla | Skydo Solutions</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon-1.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/sass/style.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/webfonts/flat-icon/flaticon_bantec.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/sass/style.css">
    <style>
        /* Base Styles */
        :root {
            --primary: #28abdd;
            --secondary: #01008c;
            --dark: #2d3748;
            --light: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #f9fbfd;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: var(--dark);
        }

        /* SEO Banner Styles */
        .seo-banner {
            position: relative;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            overflow: hidden;
        }

        .seo-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .seo-banner-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .seo-banner-content .lead {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .seo-banner-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transform: perspective(1000px) rotateY(-10deg);
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
            transition: all 0.5s ease;
            border: 5px solid white;
        }

        .seo-banner-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .seo-banner-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .seo-badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 8px 20px;
            border-radius: 50px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 500;
            backdrop-filter: blur(5px);
        }

        /* SEO Process Section */
        .seo-process {
            position: relative;
            padding: 100px 0;
            overflow: hidden;
        }

        .seo-process-blob {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: rgba(40, 171, 221, 0.1);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }

        .seo-process-blob-1 {
            top: -200px;
            right: -200px;
        }

        .seo-process-blob-2 {
            bottom: -150px;
            left: -150px;
            width: 500px;
            height: 500px;
            animation-delay: 2s;
            animation-direction: reverse;
        }

        .process-step-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            z-index: 1;
        }

        .process-step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .process-step-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 0;
            background: linear-gradient(to bottom, var(--secondary), var(--primary));
            transition: all 0.5s ease;
        }

        .process-step-card:hover::before {
            height: 100%;
        }

        .step-number {
            font-size: 60px;
            font-weight: 800;
            color: rgba(40, 171, 221, 0.1);
            position: absolute;
            right: 30px;
            top: 30px;
            line-height: 1;
            transition: all 0.3s ease;
        }

        .process-step-card:hover .step-number {
            color: rgba(40, 171, 221, 0.2);
            transform: scale(1.1);
        }

        .process-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px rgba(40, 171, 221, 0.3);
            transition: all 0.3s ease;
        }

        .process-step-card:hover .process-icon {
            transform: rotate(10deg) scale(1.1);
        }

        /* SEO Services Section */
        .seo-services {
            background: white;
            padding: 100px 0;
            position: relative;
        }

        .seo-service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            position: relative;
            margin-bottom: 30px;
            height: 100%;
        }

        .seo-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .seo-service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-badge {
            display: inline-block;
            background: rgba(40, 171, 221, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* SEO Results Section */
        .seo-results {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
            position: relative;
            overflow: hidden;
        }

        .result-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .result-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .result-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: all 0.3s ease;
        }

        .result-card:hover::before {
            height: 100%;
            opacity: 0.05;
        }

        .result-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(40, 171, 221, 0.3);
        }

        .result-number {
            font-size: 50px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
            line-height: 1;
        }

        /* SEO Tools Slider */
        .seo-tools {
            padding: 80px 0;
            background: white;
        }

        .tool-slide {
            text-align: center;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .tool-slide img {
            height: 80px;
            width: auto;
            margin: 0 auto;
            filter: grayscale(100%) opacity(70%);
            transition: all 0.3s ease;
        }

        .tool-slide:hover img {
            filter: grayscale(0%) opacity(100%);
            transform: scale(1.1);
        }

        /* SEO FAQ Section */
        .seo-faq {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(40, 171, 221, 0.1);
            color: var(--primary);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(40, 171, 221, 0.3);
        }

        /* SEO CTA Section */
        .seo-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .seo-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .seo-cta h2 {
            color: white;
        }

        .cta-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* Animations */
        @keyframes float {
            0%, 100% {
                transform: translate(0, 0);
            }
            50% {
                transform: translate(20px, 20px);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite ease-in-out;
        }

        /* Responsive Adjustments */
        @media (max-width: 1199.98px) {
            .seo-banner-content h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 991.98px) {
            .seo-banner {
                padding: 100px 0 60px;
                text-align: center;
            }

            .seo-banner-image {
                margin-top: 40px;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                transform: perspective(1000px) rotateY(0deg);
            }
        }

        @media (max-width: 767.98px) {
            .seo-banner-content h1 {
                font-size: 2.5rem;
            }

            .seo-banner-content .lead {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 575.98px) {
            .seo-banner {
                padding: 80px 0 40px;
            }

            .seo-banner-content h1 {
                font-size: 2rem;
            }

            .seo-badge {
                font-size: 12px;
                padding: 5px 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Area Start -->
    <?php include 'inside-header.php'; ?>
    <!-- Header Area End -->

    <!-- CRO Banner Area Start -->
    <section class="seo-banner cro-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="seo-banner-content">
                        <h1>Boost Conversions with Our <span class="text-warning">CRO Expertise</span></h1>
                        <p class="lead">Transform more visitors into customers with data-driven conversion optimization strategies</p>
                        
                        <div class="mb-4">
                            <span class="seo-badge cro-badge"><i class="fas fa-chart-pie me-2"></i>A/B Testing</span>
                            <span class="seo-badge cro-badge"><i class="fas fa-mouse-pointer me-2"></i>User Behavior</span>
                            <span class="seo-badge cro-badge"><i class="fas fa-rocket me-2"></i>Landing Page Optimization</span>
                        </div>
                        
                        <a href="#contact" class="btn btn-light btn-lg me-3">Get Free Audit</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Our CRO Services</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="seo-banner-image">
                        <img src="./assets/img/cro-bann.jpg" alt="CRO Services">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CRO Process Section -->
    <section class="seo-process">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Our Proven <span class="text-primary">CRO Process</span></h2>
                <p class="lead">Data-driven approach to maximize your conversion potential</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="process-step-card">
                        <div class="process-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Research & Analysis</h3>
                        <p>Comprehensive analysis of user behavior and conversion funnels</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-primary me-2"></i>Heatmap analysis</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Conversion funnel audit</li>
                            <li><i class="fas fa-check text-primary me-2"></i>User session recordings</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step-card">
                        <div class="process-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Testing & Implementation</h3>
                        <p>Strategic experimentation to optimize conversion paths</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-primary me-2"></i>A/B & multivariate testing</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Landing page optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i>CTO placement strategy</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step-card">
                        <div class="process-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3>Optimization & Scaling</h3>
                        <p>Continuous improvement based on data insights</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-primary me-2"></i>Performance monitoring</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Iterative improvements</li>
                            <li><i class="fas fa-check text-primary me-2"></i>ROI analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CRO Services Section -->
    <section class="seo-services" id="services">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Conversion Optimization <span class="text-primary">Services</span></h2>
                <p class="lead">Data-driven solutions to boost your conversion rates</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-up">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="./assets/img/AB-Testing.png" alt="A/B Testing">
                        </div>
                        <div class="service-content">
                            <h3>A/B Testing</h3>
                            <p>Scientific testing of page variations to determine optimal performance</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Multivariate testing</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Statistical analysis</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="./assets/img/user-friendly.jpg" alt="User Experience">
                        </div>
                        <div class="service-content">
                            <h3>User Experience Analysis</h3>
                            <p>Comprehensive analysis of user behavior patterns</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Heatmaps</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Session recordings</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="./assets/img/funnel-optimization.avif" alt="Funnel Optimization">
                        </div>
                        <div class="service-content">
                            <h3>Funnel Optimization</h3>
                            <p>Streamlining conversion paths for maximum efficiency</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Drop-off analysis</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Checkout optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CRO Results Section -->
    <section class="seo-results">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Measurable <span class="text-primary">Results</span></h2>
                <p class="lead">Typical results from our conversion optimization efforts</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-percent"></i>
                        </div>
                        <div class="result-number">45%</div>
                        <h4>Conversion Increase</h4>
                        <p>Average improvement in conversion rates</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="result-number">3.2x</div>
                        <h4>ROI Improvement</h4>
                        <p>Average return on optimization investment</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-stopwatch"></i>
                        </div>
                        <div class="result-number">68%</div>
                        <h4>Faster Checkout</h4>
                        <p>Average reduction in checkout time</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="result-number">92%</div>
                        <h4>Tests Implemented</h4>
                        <p>Of recommended changes get implemented</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- CRO FAQ Section -->
<section class="seo-faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="section-title mb-3">
                    <h2>CRO <span class="text-primary">FAQs</span></h2>
                    <p class="lead">Answers to common questions about our Conversion Rate Optimization services</p>
                </div>

                <img src="./assets/img/cro.jpg" alt="CRO Questions" class="img-fluid rounded shadow own-faq-image" loading="lazy">
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="faq__three section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="faq-collapse">
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-minus"></i>
                                                <h6>What is Conversion Rate Optimization (CRO)?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>CRO is the process of increasing the percentage of website visitors who complete a desired action, such as making a purchase, signing up for a newsletter, or filling out a form.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-plus"></i>
                                                <h6>How does CRO help my business?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>CRO helps you get more value from your existing website traffic by improving user experience, removing conversion barriers, and increasing revenue without increasing ad spend.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-plus"></i>
                                                <h6>What strategies are used in CRO?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>We use strategies like A/B testing, heatmaps, user session recordings, usability testing, funnel analysis, and content optimization to improve conversion rates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-plus"></i>
                                                <h6>How long does it take to see CRO results?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>While initial improvements may be visible within a few weeks, meaningful CRO results typically emerge over 1–3 months as data is gathered, tested, and refined.</p>
                                            </div>
                                        </div>
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

    <!-- Footer Area Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Area End -->
<!-- JavaScript Libraries -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/progressbar.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Initialize counter animation
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });

            // Scroll to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.scroll-up').fadeIn();
                } else {
                    $('.scroll-up').fadeOut();
                }
            });

            $('.scroll-up').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
    <!-- JavaScript Libraries -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Initialize counter animation
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            // Initialize tools slider
            var toolsSlider = new Swiper('.swiper-container', {
                slidesPerView: 2,
                spaceBetween: 20,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 50,
                    },
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });

            // Scroll to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.scroll-up').fadeIn();
                } else {
                    $('.scroll-up').fadeOut();
                }
            });

            $('.scroll-up').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
</body>
</html>