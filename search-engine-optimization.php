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

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
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
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
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
            background: rgba(255, 255, 255, 0.2);
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            margin-bottom: 30px;
            height: 100%;
        }

        .seo-service-card:hover {
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

    <!-- SEO Banner Area Start -->
    <section class="seo-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="seo-banner-content">
                        <h1>Dominate Search Rankings with Our <span class="text-warning">SEO Expertise</span></h1>
                        <p class="lead">Get more organic traffic, leads, and sales with our data-driven SEO strategies tailored for your business</p>

                        <div class="mb-4">
                            <span class="seo-badge"><i class="fas fa-check-circle me-2"></i> On-Page Optimization</span>
                            <span class="seo-badge"><i class="fas fa-check-circle me-2"></i> Technical SEO</span>
                            <span class="seo-badge"><i class="fas fa-check-circle me-2"></i> Content Strategy</span>
                            <span class="seo-badge"><i class="fas fa-check-circle me-2"></i> Local SEO</span>
                        </div>

                        <a href="#contact" class="btn btn-light btn-lg me-3">Get Free SEO Audit</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Our SEO Services</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="seo-banner-image">
                        <img src="./assets/img/seo-banner.avif" alt="SEO Services" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEO Banner Area End -->

    <!-- SEO Process Section -->
    <section class="seo-process">
        <div class="seo-process-blob seo-process-blob-1"></div>
        <div class="seo-process-blob seo-process-blob-2"></div>

        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Our Proven <span class="text-primary">SEO Process</span></h2>
                <p class="lead">A systematic approach to improving your search visibility and driving qualified traffic</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step-card">
                        <span class="step-number">1</span>
                        <div class="process-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Discovery & Audit</h3>
                        <p>We conduct a comprehensive SEO audit to identify technical issues, content gaps, and opportunities for improvement.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Technical SEO analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Competitor research</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Keyword gap analysis</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step-card">
                        <span class="step-number">2</span>
                        <div class="process-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>Strategy & Optimization</h3>
                        <p>We develop a customized SEO strategy and implement on-page optimizations to improve your search rankings.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> On-page SEO enhancements</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Content optimization</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Technical improvements</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step-card">
                        <span class="step-number">3</span>
                        <div class="process-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Growth & Reporting</h3>
                        <p>We continuously monitor performance, refine strategies, and provide transparent reporting on your SEO progress.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Monthly performance reports</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Continuous optimization</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Conversion tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEO CTA Section -->
    <section class="seo-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="zoom-in">
                    <div class="cta-card">
                        <h2 class="mb-4">Ready to Dominate Search Rankings?</h2>
                        <p class="lead mb-5">Get more organic traffic, leads, and sales with our expert SEO services. Contact us today for a free consultation and website audit.</p>
                        <a href="contact.php" class="btn btn-light btn-lg me-3">Get Free SEO Audit</a>
                        <a href="tel:+911234567890" class="btn btn-outline-light btn-lg"><i class="fas fa-phone-alt me-2"></i> Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEO Services Section -->
    <section class="seo-services" id="services">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Comprehensive <span class="text-primary">SEO Services</span></h2>
                <p class="lead">We offer full-spectrum SEO solutions to help your business rank higher and attract more customers</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="On-Page SEO" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Foundation</span>
                            <h3>On-Page SEO</h3>
                            <p>Optimize your website content, meta tags, headings, and internal linking structure to improve search visibility.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Content optimization</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Meta tags & schema markup</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Internal linking strategy</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Technical SEO" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Performance</span>
                            <h3>Technical SEO</h3>
                            <p>Improve your website's technical infrastructure to ensure search engines can crawl and index your content effectively.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Site speed optimization</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Mobile responsiveness</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> XML sitemaps & robots.txt</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Local SEO" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Visibility</span>
                            <h3>Local SEO</h3>
                            <p>Dominate local search results and Google My Business listings to attract customers in your area.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Google My Business optimization</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Local citations & directories</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Review management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Content SEO" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Engagement</span>
                            <h3>Content SEO</h3>
                            <p>Create high-quality, search-optimized content that attracts links and engages your target audience.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Keyword research</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Blog content creation</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Content marketing strategy</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Link Building" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Authority</span>
                            <h3>Link Building</h3>
                            <p>Earn high-quality backlinks from authoritative websites to boost your domain authority and rankings.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Guest posting</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Broken link building</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Digital PR</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="seo-service-card">
                        <div class="service-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-commerce SEO" loading="lazy">
                        </div>
                        <div class="service-content">
                            <span class="service-badge">Conversion</span>
                            <h3>E-commerce SEO</h3>
                            <p>Optimize your online store to rank for product searches and convert visitors into paying customers.</p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Product page optimization</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Category page SEO</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Shopping feed optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Tools Section -->
    <section class="seo-tools">
        <div class="container">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>SEO Tools <span class="text-primary">We Use</span></h2>
                <p class="lead">We leverage industry-leading tools to analyze, optimize, and track your SEO performance</p>
            </div>

            <div class="swiper-container" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/semrush-logo-skydo.png" alt="SEMrush" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/moz-skydo.jpg" alt="Moz" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/ahref-skydo.webp" alt="Ahrefs" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Google-Analytics-skydo.png" alt="Google Analytics" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/Google-Search-Console-skydo.png" alt="Google Search Console" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/cover-screaming-frog-skydo.jpg" alt="Screaming Frog" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/majestic-skydo.jpg" alt="Majestic" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tool-slide">
                            <img src="./assets/img/sedarch-metrics-skydo.jpg" alt="Searchmetrics" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- SEO FAQ Section -->
    <section class="seo-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="section-title mb-3">
                        <h2>SEO <span class="text-primary">FAQs</span></h2>
                        <p class="lead">Answers to common questions about our SEO services</p>
                    </div>

                    <img src="./assets/img/seo-skydo-solutions.png" alt="SEO Questions" class="img-fluid rounded shadow own-faq-image" loading="lazy">
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
                                                    <h6>What is SEO and why is it important?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>SEO (Search Engine Optimization) is the process of optimizing your website to rank higher on search engines. It increases visibility, drives organic traffic, and helps grow your online presence.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-collapse-item">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <i class="fas fa-plus"></i>
                                                    <h6>How long does it take to see results from SEO?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>SEO is a long-term strategy. Typically, you may start seeing results within 3 to 6 months, depending on your industry, competition, and the quality of your SEO efforts.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-collapse-item">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <i class="fas fa-plus"></i>
                                                    <h6>What are the key components of SEO?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>Key components of SEO include keyword research, on-page optimization, technical SEO, content creation, and link building. These work together to improve search engine rankings.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq-collapse-item">
                                            <div class="faq-collapse-item-card">
                                                <div class="faq-collapse-item-card-header">
                                                    <i class="fas fa-plus"></i>
                                                    <h6>Can SEO help local businesses?</h6>
                                                </div>
                                                <div class="faq-collapse-item-card-header-content display-none">
                                                    <p>Yes, local SEO helps businesses appear in location-based searches, making it easier for nearby customers to find and contact you. It includes Google Business Profile optimization and local keywords.</p>
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