<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Skydo Solutions Privacy Policy - Learn how we protect your data and respect your privacy">
    <meta name="keywords" content="privacy policy, data protection, GDPR, compliance, Skydo Solutions">
    <meta name="author" content="Skydo Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Privacy Policy | Skydo Solutions</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon-1.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/sass/style.css">
    <style>
        /* Privacy Policy Custom Styles */
        :root {
            --primary: #28abdd;
            --secondary: #01008c;
            --dark: #2d3748;
            --light: #f8f9fa;
        }

        .privacy-hero {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .privacy-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .privacy-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .privacy-hero p.lead {
            font-size: 1.25rem;
            opacity: 0.9;
        }

        .privacy-content {
            padding: 80px 0;
            background-color: #f9fbfd;
        }

        .privacy-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            padding: 40px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .privacy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .privacy-card h2 {
            color: var(--primary);
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .privacy-card h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .privacy-card h3 {
            color: var(--dark);
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .privacy-icon {
            font-size: 50px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .privacy-list {
            list-style-type: none;
            padding-left: 0;
        }

        .privacy-list li {
            padding: 8px 0;
            position: relative;
            padding-left: 30px;
        }

        .privacy-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: var(--primary);
            position: absolute;
            left: 0;
            top: 8px;
        }

        .privacy-highlight {
            background: rgba(40, 171, 221, 0.1);
            border-left: 4px solid var(--primary);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
        }

        .privacy-update {
            background-color: #fff8e6;
            border-left: 4px solid #ffc107;
            padding: 15px;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
        }

        .privacy-contact {
            background: linear-gradient(135deg, var(--primary), #E55C00);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .privacy-contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .privacy-contact h2 {
            color: white;
        }

        .contact-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .privacy-hero h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 767.98px) {
            .privacy-hero {
                padding: 80px 0;
            }
            
            .privacy-hero h1 {
                font-size: 2.2rem;
            }
            
            .privacy-card {
                padding: 30px;
            }
        }

        @media (max-width: 575.98px) {
            .privacy-hero h1 {
                font-size: 2rem;
            }
            
            .privacy-content {
                padding: 60px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Header Area Start -->
    <?php include 'inside-header.php'; ?>
    <!-- Header Area End -->

    <!-- Privacy Hero Section -->
    <section class="privacy-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1>Our Commitment to Your Privacy</h1>
                    <p class="lead">At Skydo Solutions, we prioritize the protection and proper handling of your personal information. This policy outlines our practices for data collection, use, and protection.</p>
                    <p>Last Updated: <strong>June 15, 2023</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Content Section -->
    <section class="privacy-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="privacy-card" data-aos="fade-up">
                        <div class="text-center mb-4">
                            <div class="privacy-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <h2>Privacy Policy</h2>
                            <p>This policy applies to all information collected through our website and services.</p>
                        </div>

                        <h3>1. Information We Collect</h3>
                        <p>We may collect the following types of information when you interact with our services:</p>
                        <ul class="privacy-list">
                            <li><strong>Personal Identification Information:</strong> Name, email address, phone number, job title, company name</li>
                            <li><strong>Technical Data:</strong> IP address, browser type, device information, operating system</li>
                            <li><strong>Usage Data:</strong> Pages visited, time spent, navigation paths, clickstream data</li>
                            <li><strong>Marketing Data:</strong> Preferences for receiving marketing communications</li>
                            <li><strong>Professional Data:</strong> CVs, work history, professional qualifications (for job applicants)</li>
                        </ul>

                        <div class="privacy-highlight">
                            <h4>Legal Basis for Processing</h4>
                            <p>We process your personal data based on one or more of the following legal grounds: your consent, contractual necessity, legal obligations, legitimate business interests, or protection of vital interests.</p>
                        </div>

                        <h3>2. How We Use Your Information</h3>
                        <p>We use the information we collect for the following purposes:</p>
                        <ul class="privacy-list">
                            <li>To provide and maintain our services</li>
                            <li>To notify you about changes to our services</li>
                            <li>To allow you to participate in interactive features</li>
                            <li>To provide customer support</li>
                            <li>To gather analysis or valuable information for improvement</li>
                            <li>To monitor usage of our services</li>
                            <li>To detect, prevent, and address technical issues</li>
                            <li>To provide marketing communications (where consented)</li>
                            <li>To process job applications</li>
                        </ul>

                        <h3>3. Data Sharing and Disclosure</h3>
                        <p>We may share your information in the following situations:</p>
                        <ul class="privacy-list">
                            <li><strong>Service Providers:</strong> With third-party vendors who perform services on our behalf</li>
                            <li><strong>Business Transfers:</strong> In connection with any merger or sale of company assets</li>
                            <li><strong>Legal Requirements:</strong> When required by law or to respond to legal process</li>
                            <li><strong>Protection of Rights:</strong> To protect the rights and property of Skydo Solutions</li>
                        </ul>

                        <div class="privacy-update">
                            <h4><i class="fas fa-exclamation-circle me-2"></i>Important Notice</h4>
                            <p>We do not sell your personal information to third parties. We may share anonymized, aggregated data with partners for business analysis.</p>
                        </div>

                        <h3>4. International Data Transfers</h3>
                        <p>Your information may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
                        <p>We ensure all international transfers comply with applicable data protection laws through appropriate safeguards such as Standard Contractual Clauses or adequacy decisions.</p>

                        <h3>5. Data Security</h3>
                        <p>We implement appropriate technical and organizational measures to protect your personal data, including:</p>
                        <ul class="privacy-list">
                            <li>Encryption of data in transit and at rest</li>
                            <li>Regular security assessments and testing</li>
                            <li>Access controls and authentication procedures</li>
                            <li>Employee training on data protection</li>
                            <li>Incident response plans</li>
                        </ul>
                        <p>While we strive to protect your personal data, no method of transmission over the Internet or method of electronic storage is 100% secure.</p>

                        <h3>6. Data Retention</h3>
                        <p>We retain personal data only for as long as necessary to fulfill the purposes for which it was collected, including for the purposes of satisfying any legal, accounting, or reporting requirements.</p>
                        <p>Typical retention periods:</p>
                        <ul class="privacy-list">
                            <li>Customer data: 5 years after last contact</li>
                            <li>Marketing data: 3 years after last engagement</li>
                            <li>Job applicant data: 2 years for unsuccessful applications</li>
                            <li>Financial records: 7 years for tax compliance</li>
                        </ul>

                        <h3>7. Your Data Protection Rights</h3>
                        <p>Depending on your location, you may have the following rights regarding your personal data:</p>
                        <ul class="privacy-list">
                            <li><strong>Access:</strong> Request copies of your personal data</li>
                            <li><strong>Rectification:</strong> Request correction of inaccurate data</li>
                            <li><strong>Erasure:</strong> Request deletion of your personal data</li>
                            <li><strong>Restriction:</strong> Request restriction of processing</li>
                            <li><strong>Portability:</strong> Request transfer of your data to another organization</li>
                            <li><strong>Objection:</strong> Object to certain processing activities</li>
                            <li><strong>Withdraw Consent:</strong> Withdraw previously given consent</li>
                        </ul>
                        <p>To exercise these rights, please contact us using the information below.</p>

                        <h3>8. Cookies and Tracking Technologies</h3>
                        <p>We use cookies and similar tracking technologies to track activity on our website and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>
                        <p>We use the following types of cookies:</p>
                        <ul class="privacy-list">
                            <li><strong>Essential Cookies:</strong> Necessary for website functionality</li>
                            <li><strong>Performance Cookies:</strong> Help improve website performance</li>
                            <li><strong>Functionality Cookies:</strong> Remember your preferences</li>
                            <li><strong>Targeting Cookies:</strong> Used for marketing purposes</li>
                        </ul>

                        <h3>9. Children's Privacy</h3>
                        <p>Our services are not directed to individuals under the age of 16. We do not knowingly collect personal information from children under 16. If we become aware that we have collected personal data from a child without parental consent, we will take steps to remove that information.</p>

                        <h3>10. Changes to This Privacy Policy</h3>
                        <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date.</p>
                        <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

                        <div class="privacy-highlight">
                            <h4>GDPR Compliance</h4>
                            <p>For users in the European Economic Area (EEA), we comply with the General Data Protection Regulation (GDPR). Our Data Protection Officer can be contacted at <a href="mailto:dpo@skydosolutions.com" class="text-white">dpo@skydosolutions.com</a>.</p>
                        </div>

                        <div class="privacy-update">
                            <h4><i class="fas fa-shield-alt me-2"></i>California Consumer Privacy Act (CCPA)</h4>
                            <p>California residents have specific rights under the CCPA. To learn more about these rights and how to exercise them, please see our <a href="#" class="text-dark">CCPA Supplement</a>.</p>
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
    <!-- JavaScript Libraries -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
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

        // Add smooth scrolling to all links
        jQuery(document).ready(function($) {
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