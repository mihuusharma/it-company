<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyDo Solutions - Coming Soon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2962FF;
            --dark: #0A1F44;
            --light: #F6F9FC;
            --accent: #00C853;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--dark);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(10,31,68,0.9) 0%, rgba(41,98,255,0.7) 100%), 
                        url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(41,98,255,0.3) 0%, transparent 50%);
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 40px 0;
            text-align: center;
        }
        
        .logo {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
        
        .coming-soon {
            font-size: 5rem;
            font-weight: 800;
            margin-bottom: 30px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 5px;
        }
        
        h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .tagline {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Countdown */
        .countdown {
            display: flex;
            gap: 20px;
            margin: 40px auto;
            justify-content: center;
        }
        
        .countdown-item {
            text-align: center;
        }
        
        .countdown-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .countdown-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            opacity: 0.7;
        }
        
        /* Notify Form */
        .notify-form {
            max-width: 500px;
            margin: 50px auto 0;
        }
        
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        
        .form-input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            background: rgba(255,255,255,0.05);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255,255,255,0.1);
        }
        
        .form-input::placeholder {
            color: rgba(255,255,255,0.6);
        }
        
        .submit-btn {
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Contact Info */
        .contact-info {
            margin-top: 40px;
            display: flex;
            align-items: center;
            gap: 15px;
            justify-content: center;
        }
        
        .contact-icon {
            font-size: 1.2rem;
            color: var(--primary);
        }
        
        .contact-text {
            font-size: 1.1rem;
        }
        
        .contact-text a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-text a:hover {
            color: var(--accent);
        }
        
        /* Social Links */
        .social-links {
            display: flex;
            gap: 20px;
            margin-top: 40px;
            justify-content: center;
        }
        
        .social-link {
            color: white;
            font-size: 1.5rem;
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            opacity: 1;
            color: var(--primary);
            transform: translateY(-3px);
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding: 30px 0;
            background: rgba(0,0,0,0.2);
            margin-top: 50px;
        }
        
        .copyright {
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .logo {
                font-size: 2.5rem;
            }
            
            .coming-soon {
                font-size: 3rem;
                letter-spacing: 2px;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            .tagline {
                font-size: 1.2rem;
            }
            
            .countdown {
                gap: 10px;
            }
            
            .countdown-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="logo floating">SkyDo Solutions</div>
                <div class="coming-soon">Coming Soon</div>
                <h1>Transforming Ideas Into <span style="color: var(--accent);">Digital Reality</span></h1>
                <p class="tagline">We're building innovative IT solutions to help your business soar to new heights. Our website is under construction, but great things are coming soon!</p>
                
                <div class="countdown">
                    <div class="countdown-item">
                        <div class="countdown-number" id="days">00</div>
                        <div class="countdown-label">Days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="hours">00</div>
                        <div class="countdown-label">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="minutes">00</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="seconds">00</div>
                        <div class="countdown-label">Seconds</div>
                    </div>
                </div>
                
                <div class="notify-form">
                    <h3>Get notified when we launch</h3>
                    <form id="notifyForm">
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" placeholder="Your Email" required>
                        </div>
                        <button type="submit" class="submit-btn">Notify Me</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <i class="fas fa-envelope contact-icon"></i>
                    <div class="contact-text">
                        <a href="mailto:info@skydosolutions.com">info@skydosolutions.com</a>
                    </div>
                </div>
                
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p class="copyright">© 2023 SkyDo Solutions. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Countdown Timer - Set to 2 months from now
        function updateCountdown() {
            const now = new Date();
            const launchDate = new Date();
            launchDate.setMonth(now.getMonth() + 2); // Set to 2 months from now
            
            const distance = launchDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // Form submission
        document.getElementById('notifyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            // Here you would typically send the data to your server
            // For now, we'll just show an alert
            alert('Thank you! We will notify you when we launch.');
            this.reset();
        });
    </script>
</body>
</html>