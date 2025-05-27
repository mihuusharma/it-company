<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Professional Data Analytics Services in Shimla - Gain actionable insights with our comprehensive analytics solutions">
    <meta name="keywords" content="data analytics services Shimla, business intelligence, data visualization, predictive analytics, KPI tracking">
    <meta name="author" content="Skydo Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Professional Data Analytics Services in Shimla | Skydo Solutions</title>

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

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            color: var(--dark);
        }

        /* Analytics Banner Styles */
        .analytics-banner {
            position: relative;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            overflow: hidden;
        }

        .analytics-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .analytics-banner-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .analytics-banner-content .lead {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .analytics-banner-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transform: perspective(1000px) rotateY(-10deg);
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            border: 5px solid white;
        }

        .analytics-banner-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .analytics-banner-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .analytics-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 50px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 500;
            backdrop-filter: blur(5px);
        }

        /* Analytics Process Section */
        .analytics-process {
            position: relative;
            padding: 100px 0;
            overflow: hidden;
        }

        .analytics-process-blob {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: rgba(255, 122, 89, 0.1);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }

        .analytics-process-blob-1 {
            top: -200px;
            right: -200px;
        }

        .analytics-process-blob-2 {
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            z-index: 1;
        }

        .process-step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
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
            color: rgba(255, 122, 89, 0.1);
            position: absolute;
            right: 30px;
            top: 30px;
            line-height: 1;
            transition: all 0.3s ease;
        }

        .process-step-card:hover .step-number {
            color: rgba(255, 122, 89, 0.2);
            transform: scale(1.1);
        }

        .process-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), #1a73e8);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px #02024d;
            transition: all 0.3s ease;
        }

        .process-step-card:hover .process-icon {
            transform: rotate(10deg) scale(1.1);
        }

        /* Analytics Services Section */
        .analytics-services {
            background: white;
            padding: 100px 0;
            position: relative;
        }

        .analytics-service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            margin-bottom: 30px;
            height: 100%;
        }

        .analytics-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
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

        .analytics-service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-badge {
            display: inline-block;
            background: rgba(255, 122, 89, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Analytics Results Section */
        .analytics-results {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
            position: relative;
            overflow: hidden;
        }

        .result-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .result-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
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
            background: linear-gradient(135deg, var(--primary), #1a73e8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px #02024d;
        }

        .result-number {
            font-size: 50px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
            line-height: 1;
        }

        /* Analytics Tools Slider */
        .analytics-tools {
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
            transition: all 0.3s ease;
        }

        .tool-slide:hover img {
            transform: scale(1.1);
        }

        /* Analytics FAQ Section */
        .analytics-faq {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(255, 122, 89, 0.1);
            color: var(--primary);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: #02024d;
        }

        /* Analytics CTA Section */
        .analytics-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .analytics-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .analytics-cta h2 {
            color: white;
        }

        .cta-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
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
            .analytics-banner-content h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 991.98px) {
            .analytics-banner {
                padding: 100px 0 60px;
                text-align: center;
            }

            .analytics-banner-image {
                margin-top: 40px;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                transform: perspective(1000px) rotateY(0deg);
            }
        }

        @media (max-width: 767.98px) {
            .analytics-banner-content h1 {
                font-size: 2.5rem;
            }

            .analytics-banner-content .lead {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 575.98px) {
            .analytics-banner {
                padding: 80px 0 40px;
            }

            .analytics-banner-content h1 {
                font-size: 2rem;
            }

            .analytics-badge {
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

    <!-- Analytics Banner Area Start -->
    <section class="analytics-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="analytics-banner-content">
                        <h1>Transform Data Into <span class="text-warning">Actionable Insights</span></h1>
                        <p class="lead">Make smarter business decisions with our comprehensive analytics solutions and data visualization expertise</p>

                        <div class="mb-4">
                            <span class="analytics-badge"><i class="fas fa-check-circle me-2"></i> Data Visualization</span>
                            <span class="analytics-badge"><i class="fas fa-check-circle me-2"></i> Business Intelligence</span>
                            <span class="analytics-badge"><i class="fas fa-check-circle me-2"></i> Predictive Analytics</span>
                            <span class="analytics-badge"><i class="fas fa-check-circle me-2"></i> KPI Tracking</span>
                        </div>

                        <a href="#contact" class="btn btn-light btn-lg me-3">Get Free Consultation</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Our Analytics Services</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="analytics-banner-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Data Analytics Services" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Analytics Banner Area End -->

    <!-- Analytics Process Section -->
    <section class="analytics-process">
        <div class="analytics-process-blob analytics-process-blob-1"></div>
        <div class="analytics-process-blob analytics-process-blob-2"></div>

        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Our Data-Driven <span class="text-primary">Analytics Process</span></h2>
                <p class="lead">A systematic approach to transforming raw data into strategic business insights</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step-card">
                        <span class="step-number">1</span>
                        <div class="process-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Data Collection</h3>
                        <p>We gather and consolidate data from all your business sources into a unified analytics platform.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Data source identification</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> API integrations</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Data validation</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step-card">
                        <span class="step-number">2</span>
                        <div class="process-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analysis & Modeling</h3>
                        <p>Our experts analyze patterns, build predictive models, and uncover actionable insights.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Statistical analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Predictive modeling</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Trend identification</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step-card">
                        <span class="step-number">3</span>
                        <div class="process-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Visualization & Reporting</h3>
                        <p>We transform complex data into intuitive dashboards and strategic recommendations.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Interactive dashboards</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Custom reporting</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Executive summaries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics CTA Section -->
    <section class="analytics-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="zoom-in">
                    <div class="cta-card">
                        <h2 class="mb-4">Ready to Harness the Power of Your Data?</h2>
                        <p class="lead mb-5">Get actionable insights that drive growth with our expert analytics services. Contact us today for a free consultation.</p>
                        <a href="contact.php" class="btn btn-light btn-lg me-3">Get Free Consultation</a>
                        <a href="tel:+911234567890" class="btn btn-outline-light btn-lg"><i class="fas fa-phone-alt me-2"></i> Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Services Section -->
    <section class="analytics-services" id="services">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Comprehensive <span class="text-primary">Analytics Services</span></h2>
                <p class="lead">We offer end-to-end analytics solutions to help you make data-driven decisions</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="analytics-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Business Intelligence" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Insights</span>
                            <h3>Business Intelligence</h3>
                            <p>Turn your business data into actionable insights with our BI solutions.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> KPI dashboards</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Performance metrics</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Data warehousing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="analytics-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Data Visualization" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Clarity</span>
                            <h3>Data Visualization</h3>
                            <p>Transform complex data into intuitive, interactive visualizations.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Interactive dashboards</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Custom charts</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Real-time reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="analytics-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Predictive Analytics" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Forecasting</span>
                            <h3>Predictive Analytics</h3>
                            <p>Anticipate future trends and behaviors with advanced modeling.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Machine learning models</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Trend forecasting</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Risk assessment</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="analytics-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Web Analytics" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Digital</span>
                            <h3>Web Analytics</h3>
                            <p>Understand user behavior and optimize your digital presence.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Traffic analysis</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Conversion tracking</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> User journey mapping</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="analytics-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Marketing Analytics" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">ROI</span>
                            <h3>Marketing Analytics</h3>
                            <p>Measure and optimize your marketing performance across channels.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Campaign tracking</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Attribution modeling</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> ROI analysis</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="analytics-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Custom Analytics" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Tailored</span>
                            <h3>Custom Analytics</h3>
                            <p>Bespoke analytics solutions designed for your unique business needs.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Custom metrics</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Industry-specific insights</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Proprietary algorithms</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Results Section -->
    <section class="analytics-results">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Measurable <span class="text-primary">Business Impact</span></h2>
                <p class="lead">We deliver tangible improvements through data-driven decision making</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="result-number counter" data-target="40">0</div>
                        <h4>Faster Decisions</h4>
                        <p>Average reduction in decision-making time with real-time analytics</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="result-number counter" data-target="30">0</div>
                        <h4>Cost Savings</h4>
                        <p>Average cost reduction through process optimization insights</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="result-number counter" data-target="25">0</div>
                        <h4>Higher Accuracy</h4>
                        <p>Average improvement in forecasting accuracy with predictive models</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="result-number counter" data-target="35">0</div>
                        <h4>Revenue Growth</h4>
                        <p>Average revenue increase from data-driven strategies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Tools Section -->
    <section class="analytics-tools">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Analytics <span class="text-primary">Platforms We Use</span></h2>
                <p class="lead">We work with all major analytics platforms to deliver the best insights</p>
            </div>

            <div class="swiper-container" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Google-Analytics.png" alt="Google Analytics" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Tableau.png" alt="Tableau" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Power-BI.png" alt="Power BI" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Looker.png" alt="Looker" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Google-Data-Studio.png" alt="Google Data Studio" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Adobe-Analytics.png" alt="Adobe Analytics" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Matomo.png" alt="Matomo" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Amplitude.png" alt="Amplitude" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Analytics FAQ Section -->
    <section class="seo-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="section-title mb-3">
                        <h2>Analytics <span class="text-primary">FAQs</span></h2>
                        <p class="lead">Answers to common questions about our analytics services</p>
                    </div>

                    <img src="./assets/img/analytics-faqs.jpg" alt="Analytics Questions" class="img-fluid rounded shadow own-faq-image" loading="lazy">
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
                                                    <h6>What is business analytics?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>Business analytics involves using data, statistical analysis, and predictive modeling to gain insights and make data-driven business decisions that improve performance and efficiency.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-collapse-item">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <i class="fas fa-plus"></i>
                                                    <h6>How can analytics benefit my business?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>Analytics helps identify trends, optimize operations, improve customer experiences, reduce costs, and uncover new revenue opportunities through data-driven insights.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-collapse-item">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <i class="fas fa-plus"></i>
                                                    <h6>What data sources can you analyze?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>We can analyze data from CRM systems, websites, social media, financial systems, IoT devices, and any other digital or structured data sources your business uses.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-collapse-item">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <i class="fas fa-plus"></i>
                                                    <h6>How often will I receive reports?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>We provide real-time dashboards for continuous monitoring, with scheduled reports (daily, weekly, monthly) tailored to your business needs and decision cycles.</p>
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

    <!-- Scroll To Top Button -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
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