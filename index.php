<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project UDAAN - Empowering Abilities, Building Careers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1e3a8a;
            --secondary-blue: #3b82f6;
            --primary-orange: #f97316;
            --secondary-orange: #fb923c;
            --accent-yellow: #fbbf24;
            --light-gray: #f8fafc;
            --dark-gray: #1f2937;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent-yellow) !important;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 50%, var(--primary-orange) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .btn-learn-more {
            background: var(--accent-yellow);
            color: var(--dark-gray);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(251, 191, 36, 0.3);
        }

        .btn-learn-more:hover {
            background: #f59e0b;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(251, 191, 36, 0.4);
        }

        /* Mission Section */
        .mission-section {
            background: var(--light-gray);
            padding: 80px 0;
        }

        .section-title {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .mission-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .mission-text {
            font-size: 1.2rem;
            color: var(--dark-gray);
            line-height: 1.8;
        }

        /* Partner Logos Section */
        .partners-section {
            background: white;
            padding: 80px 0;
        }

        .partner-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .partner-box {
            background: var(--light-gray);
            border: 2px dashed var(--secondary-blue);
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.3s ease;
            min-height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .partner-box:hover {
            border-color: var(--primary-orange);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .partner-placeholder {
            color: var(--secondary-blue);
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* Footer */
        .footer {
            background: var(--dark-gray);
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .partner-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .navbar-brand {
                font-size: 1.2rem;
            }
            
            .navbar-brand img {
                height: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="PHOTO-2025-08-26-13-22-02.jpg" alt="Project UDAAN Logo">
                Project UDAAN
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center hero-content">
                    <h1 class="hero-title">Empowering Abilities, Building Careers</h1>
                    <p class="hero-subtitle">
                        Project UDAAN is a groundbreaking collaboration with Jaipur Foot dedicated to supporting 
                        individuals with disabilities through comprehensive job placement and skills development programs. 
                        We believe in creating inclusive workplaces where every ability is recognized and valued.
                    </p>
                    <button class="btn btn-learn-more">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="container">
            <div class="mission-content">
                <h2 class="section-title">Our Mission</h2>
                <p class="mission-text">
                    At Project UDAAN, we are committed to breaking down barriers and creating opportunities 
                    for individuals with disabilities. Our mission is to foster inclusivity in the workplace 
                    through innovative job matching programs, comprehensive skills development, and ongoing 
                    support systems. We partner with forward-thinking organizations to build diverse, 
                    accessible, and thriving work environments where every individual can contribute their 
                    unique talents and perspectives.
                </p>
            </div>
        </div>
    </section>

    <!-- Partner Logos Section -->
    <section class="partners-section">
        <div class="container">
            <h2 class="section-title">Our Partners</h2>
            <div class="partner-grid">
                <div class="partner-box">
                    <div class="partner-placeholder">
                        <i class="fas fa-building fa-3x mb-3"></i>
                        <p>Partner Logo 1</p>
                    </div>
                </div>
                <div class="partner-box">
                    <div class="partner-placeholder">
                        <i class="fas fa-handshake fa-3x mb-3"></i>
                        <p>Partner Logo 2</p>
                    </div>
                </div>
                <div class="partner-box">
                    <div class="partner-placeholder">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <p>Partner Logo 3</p>
                    </div>
                </div>
                <div class="partner-box">
                    <div class="partner-placeholder">
                        <i class="fas fa-globe fa-3x mb-3"></i>
                        <p>Partner Logo 4</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Project UDAAN. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Smooth Scrolling -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(30, 58, 138, 0.95)';
            } else {
                navbar.style.background = 'linear-gradient(135deg, var(--primary-blue), var(--secondary-blue))';
            }
        });
    </script>
</body>
</html>
