<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Professional PPC Services in Shimla - Maximize ROI with our data-driven pay-per-click advertising campaigns">
    <meta name="keywords" content="PPC services Shimla, Google Ads, Facebook Ads, paid search, pay-per-click, digital advertising">
    <meta name="author" content="Skydo Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Professional PPC Services in Shimla | Skydo Solutions</title>

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
            --primary: #4285F4; /* Google Blue */
            --secondary: #FBBC05; /* Google Yellow */
            --accent: #34A853; /* Google Green */
            --dark: #202124;
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

        /* PPC Banner Styles */
        .ppc-banner {
            position: relative;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, var(--primary), #1a73e8);
            color: white;
            overflow: hidden;
        }

        .ppc-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .ppc-banner-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .ppc-banner-content .lead {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .ppc-banner-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transform: perspective(1000px) rotateY(-10deg);
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
            transition: all 0.5s ease;
            border: 5px solid white;
        }

        .ppc-banner-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .ppc-banner-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .ppc-badge {
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

        /* PPC Process Section */
        .ppc-process {
            position: relative;
            padding: 100px 0;
            overflow: hidden;
        }

        .ppc-process-blob {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: rgba(66, 133, 244, 0.1);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }

        .ppc-process-blob-1 {
            top: -200px;
            right: -200px;
        }

        .ppc-process-blob-2 {
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
            color: rgba(66, 133, 244, 0.1);
            position: absolute;
            right: 30px;
            top: 30px;
            line-height: 1;
            transition: all 0.3s ease;
        }

        .process-step-card:hover .step-number {
            color: rgba(66, 133, 244, 0.2);
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
            box-shadow: 0 10px 20px rgba(66, 133, 244, 0.3);
            transition: all 0.3s ease;
        }

        .process-step-card:hover .process-icon {
            transform: rotate(10deg) scale(1.1);
        }

        /* PPC Services Section */
        .ppc-services {
            background: white;
            padding: 100px 0;
            position: relative;
        }

        .ppc-service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            position: relative;
            margin-bottom: 30px;
            height: 100%;
        }

        .ppc-service-card:hover {
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

        .ppc-service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-badge {
            display: inline-block;
            background: rgba(66, 133, 244, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* PPC Results Section */
        .ppc-results {
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
            box-shadow: 0 10px 20px rgba(66, 133, 244, 0.3);
        }

        .result-number {
            font-size: 50px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
            line-height: 1;
        }

        /* PPC Platforms Section */
        .ppc-platforms {
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

        /* PPC FAQ Section */
        .ppc-faq {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(66, 133, 244, 0.1);
            color: var(--primary);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(66, 133, 244, 0.3);
        }

        /* PPC CTA Section */
        .ppc-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary), #1a73e8);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .ppc-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .ppc-cta h2 {
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
            .ppc-banner-content h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 991.98px) {
            .ppc-banner {
                padding: 100px 0 60px;
                text-align: center;
            }

            .ppc-banner-image {
                margin-top: 40px;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                transform: perspective(1000px) rotateY(0deg);
            }
        }

        @media (max-width: 767.98px) {
            .ppc-banner-content h1 {
                font-size: 2.5rem;
            }

            .ppc-banner-content .lead {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 575.98px) {
            .ppc-banner {
                padding: 80px 0 40px;
            }

            .ppc-banner-content h1 {
                font-size: 2rem;
            }

            .ppc-badge {
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

    <!-- PPC Banner Area Start -->
    <section class="ppc-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="ppc-banner-content">
                        <h1>Maximize ROI with Our <span class="text-warning">PPC Expertise</span></h1>
                        <p class="lead">Get more qualified leads and sales with our data-driven paid advertising strategies tailored for your business goals</p>
                        
                        <div class="mb-4">
                            <span class="ppc-badge"><i class="fas fa-check-circle me-2"></i> Google Ads</span>
                            <span class="ppc-badge"><i class="fas fa-check-circle me-2"></i> Facebook Ads</span>
                            <span class="ppc-badge"><i class="fas fa-check-circle me-2"></i> Remarketing</span>
                            <span class="ppc-badge"><i class="fas fa-check-circle me-2"></i> Conversion Tracking</span>
                        </div>
                        
                        <a href="#contact" class="btn btn-light btn-lg me-3 scrt">Get Free Audit</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Our PPC Services</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ppc-banner-image">
                        <img src="./assets/img/ppc-banner.jpg" alt="PPC Advertising" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PPC Banner Area End -->

    <!-- PPC Process Section -->
    <section class="ppc-process">
        <div class="ppc-process-blob ppc-process-blob-1"></div>
        <div class="ppc-process-blob ppc-process-blob-2"></div>
        
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Our Proven <span class="text-primary">PPC Process</span></h2>
                <p class="lead">A strategic approach to driving qualified traffic and maximizing your advertising ROI</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step-card">
                        <span class="step-number">1</span>
                        <div class="process-icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h3>Research & Strategy</h3>
                        <p>We conduct comprehensive market research and develop a customized PPC strategy aligned with your business objectives.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Keyword research</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Competitor analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Audience targeting</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step-card">
                        <span class="step-number">2</span>
                        <div class="process-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <h3>Campaign Setup</h3>
                        <p>We build and optimize high-converting PPC campaigns across multiple platforms with compelling ad creatives.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Account structure</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Ad copywriting</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Landing page setup</li>
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
                        <p>We continuously monitor performance, refine campaigns, and scale what's working to maximize your results.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Bid management</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> A/B testing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Performance reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PPC Services Section -->
    <section class="ppc-services" id="services">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Comprehensive <span class="text-primary">PPC Services</span></h2>
                <p class="lead">We manage all aspects of your pay-per-click advertising to drive qualified traffic and conversions</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="ppc-service-card">
                        <div class="service-image">
                            <img src="./assets/img/google-ads-management.avif" alt="Google Ads" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Search Network</span>
                            <h3>Google Ads Management</h3>
                            <p>Maximize visibility on Google Search with strategic keyword targeting, ad copy optimization, and bid management.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Search campaigns</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Display campaigns</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Shopping campaigns</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="ppc-service-card">
                        <div class="service-image">
                            <img src="./assets/img/facebook-instagram-ads.png" alt="Facebook Ads" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Social Media</span>
                            <h3>Facebook & Instagram Ads</h3>
                            <p>Reach your ideal customers with highly targeted social media advertising campaigns that drive engagement and conversions.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Lead generation</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Conversion campaigns</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Lookalike audiences</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="ppc-service-card">
                        <div class="service-image">
                            <img src="./assets/img/remarketing.avif" alt="Remarketing" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Retargeting</span>
                            <h3>Remarketing Campaigns</h3>
                            <p>Re-engage website visitors and convert them into customers with strategic remarketing across multiple platforms.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Google Display Network</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Facebook pixel tracking</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Dynamic remarketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="ppc-service-card">
                        <div class="service-image">
                            <img src="./assets/img/BingAds-Management.avif" alt="Bing Ads" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Alternative Network</span>
                            <h3>Bing Ads Management</h3>
                            <p>Expand your reach to the Bing search network audience with lower competition and often lower CPCs.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Search campaigns</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Shopping campaigns</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Audience targeting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="ppc-service-card">
                        <div class="service-image">
                            <img src="./assets/img/YouTubeAdvertising.jpg" alt="YouTube Ads" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Video Advertising</span>
                            <h3>YouTube Advertising</h3>
                            <p>Leverage the power of video advertising to engage audiences and drive conversions on the world's second-largest search engine.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> TrueView ads</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Bumper ads</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Discovery ads</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="ppc-service-card">
                        <div class="service-image">
                            <img src="./assets/img/linkedin-ads.jpeg" alt="LinkedIn Ads" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">B2B Advertising</span>
                            <h3>LinkedIn Advertising</h3>
                            <p>Target professionals and decision-makers with precision on the world's largest professional network.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Sponsored content</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Message ads</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Lead gen forms</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PPC Platforms Section -->
    <section class="ppc-platforms">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>PPC Platforms <span class="text-primary">We Master</span></h2>
                <p class="lead">We manage campaigns across all major advertising platforms to maximize your reach</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="./assets/img/google.webp" alt="Google Ads" loading="lazy">
                        </div>
                        <h4>Google Ads</h4>
                        <p>Search, Display, Shopping, and YouTube advertising</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="./assets/img/facebook-logo.png" alt="Facebook Ads" loading="lazy">
                        </div>
                        <h4>Facebook Ads</h4>
                        <p>Social media advertising across Facebook and Instagram</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="./assets/img/linkedin.svg" alt="LinkedIn Ads" loading="lazy">
                        </div>
                        <h4>LinkedIn Ads</h4>
                        <p>B2B advertising targeting professionals and decision-makers</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <img src="./assets/img/bing.jpg" alt="Bing Ads" loading="lazy">
                        </div>
                        <h4>Microsoft Advertising</h4>
                        <p>Search network advertising on Bing, Yahoo, and AOL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- PPC FAQ Section -->
<section class="seo-faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="section-title mb-3">
                    <h2>PPC <span class="text-primary">FAQs</span></h2>
                    <p class="lead">Answers to common questions about our PPC advertising services</p>
                </div>

                <img src="./assets/img/ppc-skydo-solutions.png" alt="PPC Questions" class="img-fluid rounded shadow own-faq-image" loading="lazy">
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
                                                <h6>What is PPC advertising?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>PPC (Pay-Per-Click) is a type of digital advertising where advertisers pay a fee each time their ad is clicked. It's commonly used on platforms like Google Ads and Bing Ads.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-plus"></i>
                                                <h6>How does PPC help my business?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>PPC helps drive targeted traffic to your website, increase brand visibility, and generate leads or sales quickly. It's especially effective for time-sensitive promotions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-plus"></i>
                                                <h6>What platforms are best for PPC?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>Popular PPC platforms include Google Ads, Microsoft Ads, Facebook Ads, Instagram Ads, LinkedIn Ads, and YouTube Ads. The best platform depends on your business goals and audience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-collapse-item">
                                        <div class="faq-collapse-item-card">
                                            <div class="faq-collapse-item-card-header">
                                                <i class="fas fa-plus"></i>
                                                <h6>How is PPC different from SEO?</h6>
                                            </div>
                                            <div class="faq-collapse-item-card-header-content display-none">
                                                <p>PPC involves paying for ad placement on search engines or social media, providing instant visibility. SEO is a long-term strategy that aims for organic traffic through optimized content and website structure.</p>
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