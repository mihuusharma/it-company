<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Professional Affiliate Marketing Services - Maximize Your Earnings with Our Data-Driven Affiliate Strategies">
    <meta name="keywords" content="affiliate marketing services, affiliate program management, passive income, digital marketing, affiliate partnerships">
    <meta name="author" content="Skydo Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Professional Affiliate Marketing Services | Skydo Solutions</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon-1.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
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
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
            background-color: #f9fbfd;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: var(--dark);
        }

        /* Affiliate Banner Styles */
        .affiliate-banner {
            position: relative;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
                color: white;
            overflow: hidden;
        }

        .affiliate-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .affiliate-banner-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .affiliate-banner-content .lead {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .affiliate-banner-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transform: perspective(1000px) rotateY(-10deg);
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
            transition: all 0.5s ease;
            border: 5px solid white;
        }

        .affiliate-banner-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .affiliate-banner-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .affiliate-badge {
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

        /* Affiliate Process Section */
        .affiliate-process {
            position: relative;
            padding: 100px 0;
            overflow: hidden;
        }

        .affiliate-process-blob {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: rgba(255, 107, 0, 0.1);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }

        .affiliate-process-blob-1 {
            top: -200px;
            right: -200px;
        }

        .affiliate-process-blob-2 {
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
            background: linear-gradient(to bottom, var(--primary), var(--accent));
            transition: all 0.5s ease;
        }

        .process-step-card:hover::before {
            height: 100%;
        }

        .step-number {
            font-size: 60px;
            font-weight: 800;
            color: rgba(255, 107, 0, 0.1);
            position: absolute;
            right: 30px;
            top: 30px;
            line-height: 1;
            transition: all 0.3s ease;
        }

        .process-step-card:hover .step-number {
            color: rgba(255, 107, 0, 0.2);
            transform: scale(1.1);
        }

        .process-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px rgba(255, 107, 0, 0.3);
            transition: all 0.3s ease;
        }

        .process-step-card:hover .process-icon {
            transform: rotate(10deg) scale(1.1);
        }

        /* Affiliate Services Section */
        .affiliate-services {
            background: white;
            padding: 100px 0;
            position: relative;
        }

        .affiliate-service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            position: relative;
            margin-bottom: 30px;
            height: 100%;
        }

        .affiliate-service-card:hover {
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

        .affiliate-service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-badge {
            display: inline-block;
            background: rgba(255, 107, 0, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Affiliate Results Section */
        .affiliate-results {
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
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: all 0.3s ease;
        }

        .result-card:hover::before {
            height: 100%;
            opacity: 0.05;
        }

        .result-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(255, 107, 0, 0.3);
        }

        .result-number {
            font-size: 50px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
            line-height: 1;
        }

        /* Affiliate Platforms Section */
        .affiliate-platforms {
            padding: 80px 0;
            background: white;
        }

        .platform-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .platform-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .platform-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .platform-icon img {
            max-width: 100%;
            max-height: 100%;
            filter: grayscale(100%) opacity(70%);
            transition: all 0.3s ease;
        }

        .platform-card:hover .platform-icon img {
            filter: grayscale(0%) opacity(100%);
            transform: scale(1.1);
        }

        /* Affiliate FAQ Section */
        .affiliate-faq {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(255, 107, 0, 0.1);
            color: var(--primary);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(255, 107, 0, 0.3);
        }

        /* Affiliate CTA Section */
        .affiliate-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary), #E55C00);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .affiliate-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .affiliate-cta h2 {
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
            .affiliate-banner-content h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 991.98px) {
            .affiliate-banner {
                padding: 100px 0 60px;
                text-align: center;
            }

            .affiliate-banner-image {
                margin-top: 40px;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                transform: perspective(1000px) rotateY(0deg);
            }
        }

        @media (max-width: 767.98px) {
            .affiliate-banner-content h1 {
                font-size: 2.5rem;
            }

            .affiliate-banner-content .lead {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 575.98px) {
            .affiliate-banner {
                padding: 80px 0 40px;
            }

            .affiliate-banner-content h1 {
                font-size: 2rem;
            }

            .affiliate-badge {
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

    <!-- Affiliate Banner Area Start -->
    <section class="affiliate-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="affiliate-banner-content">
                        <h1>Maximize Earnings with Our <span class="text-warning">Affiliate Expertise</span></h1>
                        <p class="lead">Generate passive income and boost your revenue with our data-driven affiliate marketing strategies tailored for your business</p>
                        
                        <div class="mb-4">
                            <span class="affiliate-badge"><i class="fas fa-check-circle me-2"></i> Program Setup</span>
                            <span class="affiliate-badge"><i class="fas fa-check-circle me-2"></i> Partner Recruitment</span>
                            <span class="affiliate-badge"><i class="fas fa-check-circle me-2"></i> Performance Tracking</span>
                            <span class="affiliate-badge"><i class="fas fa-check-circle me-2"></i> Commission Optimization</span>
                        </div>
                        
                        <a href="#contact" class="btn btn-light btn-lg me-3">Get Free Consultation</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="affiliate-banner-image">
                        <img src="./assets/img/affiliate-banner.avif" alt="Affiliate Marketing" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate Banner Area End -->

    <!-- Affiliate Process Section -->
    <section class="affiliate-process">
        <div class="affiliate-process-blob affiliate-process-blob-1"></div>
        <div class="affiliate-process-blob affiliate-process-blob-2"></div>
        
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Our Proven <span class="text-primary">Affiliate Process</span></h2>
                <p class="lead">A strategic approach to building profitable affiliate relationships and maximizing your passive income</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step-card">
                        <span class="step-number">1</span>
                        <div class="process-icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h3>Strategy & Planning</h3>
                        <p>We analyze your business and develop a customized affiliate marketing strategy aligned with your revenue goals.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Niche research</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Competitor analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Program structure</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step-card">
                        <span class="step-number">2</span>
                        <div class="process-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Partner Recruitment</h3>
                        <p>We identify and recruit high-quality affiliates who can effectively promote your products/services.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Affiliate outreach</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Relationship building</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Onboarding process</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step-card">
                        <span class="step-number">3</span>
                        <div class="process-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Optimization & Scaling</h3>
                        <p>We continuously monitor performance, optimize partnerships, and scale successful relationships.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Performance tracking</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Commission optimization</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Growth strategies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate Services Section -->
    <section class="affiliate-services" id="services">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Comprehensive <span class="text-primary">Affiliate Services</span></h2>
                <p class="lead">We manage all aspects of your affiliate marketing program to drive revenue and growth</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="affiliate-service-card">
                        <div class="service-image">
                            <img src="./assets/img/affiliate-program.jpg" alt="Affiliate Program Setup" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Program Management</span>
                            <h3>Affiliate Program Setup</h3>
                            <p>Launch a profitable affiliate program with the right structure, commission rates, and tracking systems.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Platform selection</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Commission structure</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Tracking implementation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="affiliate-service-card">
                        <div class="service-image">
                            <img src="./assets/img/recruitment.jpg" alt="Affiliate Recruitment" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Partner Growth</span>
                            <h3>Affiliate Recruitment</h3>
                            <p>Attract high-quality affiliates who can effectively promote your products and drive sales.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Influencer outreach</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Content creator partnerships</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Niche targeting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="affiliate-service-card">
                        <div class="service-image">
                            <img src="./assets/img/marketing-material.jpeg" alt="Affiliate Content" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Marketing Assets</span>
                            <h3>Affiliate Marketing Materials</h3>
                            <p>Create compelling marketing assets that help your affiliates promote your products effectively.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Banner ads</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Email templates</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Product data feeds</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="affiliate-service-card">
                        <div class="service-image">
                            <img src="./assets/img/tracking.webp" alt="Affiliate Tracking" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Performance</span>
                            <h3>Affiliate Tracking & Reporting</h3>
                            <p>Implement robust tracking systems to monitor affiliate performance and ROI.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Conversion tracking</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Fraud detection</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Detailed reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="affiliate-service-card">
                        <div class="service-image">
                            <img src="./assets/img/Affiliate-Programs-optimization.jpg" alt="Affiliate Optimization" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Revenue Growth</span>
                            <h3>Affiliate Program Optimization</h3>
                            <p>Continuously improve your program to maximize conversions and affiliate engagement.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Commission testing</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Performance incentives</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Program enhancements</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="affiliate-service-card">
                        <div class="service-image">
                            <img src="./assets/img/Affiliate-marketing.webp" alt="Affiliate Training" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Education</span>
                            <h3>Affiliate Training & Support</h3>
                            <p>Educate and support your affiliates to help them become more effective promoters.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Training materials</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Webinars</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Dedicated support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate Results Section -->
    <section class="affiliate-results">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Measurable <span class="text-primary">Affiliate Results</span></h2>
                <p class="lead">We deliver tangible improvements that impact your revenue stream</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="result-number counter" data-target="120">0</div>
                        <h4>More Affiliates</h4>
                        <p>Average increase in active affiliates after program optimization</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <div class="result-number counter" data-target="75">0</div>
                        <h4>Higher Conversion Rates</h4>
                        <p>Average improvement in affiliate-driven conversion rates</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="result-number counter" data-target="300">0</div>
                        <h4>More Referral Traffic</h4>
                        <p>Average increase in qualified traffic from affiliate sources</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="result-card">
                        <div class="result-icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <div class="result-number counter" data-target="40">0</div>
                        <h4>Lower Acquisition Cost</h4>
                        <p>Average reduction in customer acquisition costs through affiliates</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate Platforms Section -->
    <section class="affiliate-platforms">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Affiliate Networks <span class="text-primary">We Work With</span></h2>
                <p class="lead">We manage programs across all major affiliate networks to maximize your reach</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Amazon_Web_Services_Logo.svg" alt="Amazon Associates" loading="lazy">
                        </div>
                        <h4>Amazon Associates</h4>
                        <p>Leverage the world's largest ecommerce platform for affiliate sales</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/ShareASale_logo.svg" alt="ShareASale" loading="lazy">
                        </div>
                        <h4>ShareASale</h4>
                        <p>Access thousands of merchants and affiliates in this leading network</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/CJ_Affiliate_logo.svg" alt="CJ Affiliate" loading="lazy">
                        </div>
                        <h4>CJ Affiliate</h4>
                        <p>Premium affiliate network with advanced tracking and reporting</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Rakuten_Advertising_logo.svg" alt="Rakuten Advertising" loading="lazy">
                        </div>
                        <h4>Rakuten Advertising</h4>
                        <p>Global affiliate network with premium brands and publishers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate FAQ Section -->
    <section class="affiliate-faq section-padding">
        <div class="container">
            <div class="row">
                <!-- Image & Title -->
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="section-title mb-5">
                        <h2>Affiliate <span class="text-primary">FAQs</span></h2>
                        <p class="lead">Answers to common questions about our affiliate services</p>
                    </div>
                    <img src="./assets/img/affiliate-faq.jpg" alt="Affiliate Questions" class="img-fluid rounded shadow" loading="lazy">
                </div>

                <!-- Accordion -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="accordion" id="affiliateFaqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long does it take to see results from affiliate marketing?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#affiliateFaqAccordion">
                                <div class="accordion-body">
                                    Affiliate programs typically take 3-6 months to gain momentum as you recruit affiliates and they begin promoting your products. Initial results may appear within weeks, but significant revenue usually builds over several months as your affiliate base grows and optimizes their promotional efforts.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What commission rates should I offer?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#affiliateFaqAccordion">
                                <div class="accordion-body">
                                    Commission rates vary by industry and product margins. Typical rates range from 5-30%, with digital products often at the higher end. We analyze your business model, competitors, and profit margins to recommend optimal commission structures that attract quality affiliates while maintaining profitability.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you recruit quality affiliates?
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#affiliateFaqAccordion">
                                <div class="accordion-body">
                                    We use multiple strategies to recruit high-performing affiliates:
                                    <ul>
                                        <li>Targeted outreach to influencers in your niche</li>
                                        <li>Partnerships with content creators and bloggers</li>
                                        <li>Listing in affiliate directories and networks</li>
                                        <li>Incentives for top performers</li>
                                        <li>Providing exceptional marketing materials</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What's the difference between in-house and network programs?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#affiliateFaqAccordion">
                                <div class="accordion-body">
                                    In-house programs give you more control and lower fees but require more management. Network programs provide access to existing affiliate bases but charge higher fees (typically 20-30% of commissions). We help you choose the right approach based on your resources, goals, and technical capabilities.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How do you prevent affiliate fraud?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#affiliateFaqAccordion">
                                <div class="accordion-body">
                                    We implement multiple fraud prevention measures:
                                    <ul>
                                        <li>Advanced tracking with fraud detection</li>
                                        <li>Manual review of new affiliates</li>
                                        <li>Monitoring for suspicious activity patterns</li>
                                        <li>Cookie stuffing prevention</li>
                                        <li>Clear program terms with consequences for violations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate CTA Section -->
    <section class="affiliate-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="mb-4">Ready to Launch Your Profitable Affiliate Program?</h2>
                    <p class="lead mb-5">Let us help you build a passive income stream through strategic affiliate partnerships. Get started with a free consultation today.</p>
                    <a href="#contact" class="btn btn-light btn-lg me-3 pulse-animation">Get Started Now</a>
                    <a href="tel:+911234567890" class="btn btn-outline-light btn-lg"><i class="fas fa-phone-alt me-2"></i> Call Us</a>
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