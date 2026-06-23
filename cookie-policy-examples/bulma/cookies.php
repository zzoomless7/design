<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand .navbar-item {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .navbar-menu .navbar-item {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .navbar-menu .navbar-item:hover {
            background: rgba(255, 255, 255, 0.1) !important;
            color: white !important;
        }

        .navbar-burger {
            color: white;
        }

        .content-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .content-box:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .hero {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            margin: 2rem 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hero .title, .hero .subtitle {
            color: white !important;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .section-title {
            color: white;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-title i {
            color: #3b82f6;
        }

        .cookie-box {
            background: rgba(255, 255, 255, 0.05);
            padding: 1.5rem;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .cookie-box .title {
            color: white !important;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .cookie-box i {
            color: #3b82f6;
        }

        .notification {
            background: rgba(59, 130, 246, 0.2) !important;
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 15px;
            color: white !important;
        }

        .footer {
            background: rgba(255, 255, 255, 0.1) !important;
            color: white;
            padding: 3rem 1.5rem 1rem;
            margin-top: 3rem;
        }

        .footer a {
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: white;
        }

        .social-buttons {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .button.is-rounded.social {
            width: 40px;
            height: 40px;
            padding: 0;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .button.is-rounded.social:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            z-index: 100;
        }

        .back-to-top:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <i class="fas fa-home"></i> &nbsp; Reședința Budaș
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item" href="../index.php">
                        <i class="fas fa-home"></i> &nbsp; Acasă
                    </a>
                    <a class="navbar-item" href="../despre.php">
                        <i class="fas fa-info-circle"></i> &nbsp; Despre noi
                    </a>
                    <a class="navbar-item" href="../articole.php">
                        <i class="fas fa-newspaper"></i> &nbsp; Articole
                    </a>
                    <a class="navbar-item" href="../galerie.php">
                        <i class="fas fa-images"></i> &nbsp; Galerie
                    </a>
                    <a class="navbar-item" href="../contact.php">
                        <i class="fas fa-envelope"></i> &nbsp; Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <!-- Hero Header -->
            <section class="hero is-medium">
                <div class="hero-body has-text-centered">
                    <p class="title">
                        <i class="fas fa-cookie-bite"></i> Politica Cookies
                    </p>
                    <p class="subtitle">
                        Ultima actualizare: 01 Octombrie 2025
                    </p>
                </div>
            </section>

            <div class="columns is-centered">
                <div class="column is-10">
                    <!-- Ce sunt Cookies -->
                    <div class="content-box">
                        <h2 class="section-title">
                            <i class="fas fa-cookie-bite"></i> Ce sunt Cookies?
                        </h2>
                        <div class="content">
                            <p>Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
                            <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
                        </div>
                    </div>

                    <!-- Tipuri de Cookies -->
                    <div class="content-box">
                        <h2 class="section-title">
                            <i class="fas fa-list"></i> Tipuri de Cookies pe Site-ul Nostru
                        </h2>
                        
                        <div class="cookie-box">
                            <h5 class="title is-5">
                                <i class="fas fa-shield-alt"></i> 1. Cookies Esențiale (Necesare)
                            </h5>
                            <div class="content">
                                <p>Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                                <ul>
                                    <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                                    <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                                    <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                                </ul>
                            </div>
                        </div>

                        <div class="cookie-box">
                            <h5 class="title is-5">
                                <i class="fas fa-chart-line"></i> 2. Cookies de Analiză
                            </h5>
                            <div class="content">
                                <p>Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                                <ul>
                                    <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                                    <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                                </ul>
                            </div>
                        </div>

                        <div class="cookie-box">
                            <h5 class="title is-5">
                                <i class="fas fa-bullseye"></i> 3. Cookies de Marketing
                            </h5>
                            <div class="content">
                                <p>Pentru a-ți oferi conținut relevant:</p>
                                <ul>
                                    <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                                    <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Gestionare Cookies -->
                    <div class="content-box">
                        <h2 class="section-title">
                            <i class="fas fa-cog"></i> Cum Poți Gestiona Cookies?
                        </h2>
                        <div class="notification">
                            <div class="content">
                                <p><strong>Browserul tău</strong> îți permite să controlezi cookies-urile:</p>
                                <ul>
                                    <li>Poți șterge toate cookies-urile deja salvate</li>
                                    <li>Poți bloca instalarea de noi cookies</li>
                                    <li>Poți seta excepții pentru anumite site-uri</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="content-box">
                        <h2 class="section-title">
                            <i class="fas fa-envelope"></i> Contact
                        </h2>
                        <div class="content">
                            <p>Pentru întrebări despre politica noastră de cookies:</p>
                            <p><i class="fas fa-phone"></i> <a href="tel:+40758330929" style="color: white;">+40 758 330 929</a></p>
                            <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" style="color: white;">info@resedintabudas.ro</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="column has-text-centered-mobile">
                    <p>&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                </div>
                <div class="column has-text-right-tablet has-text-centered-mobile">
                    <a href="../legal/termeni-si-conditii.php">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="social-buttons">
                        <a href="https://facebook.com/resedintabudas" class="button is-rounded social" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://instagram.com/resedintabudas" class="button is-rounded social" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/40758330929" class="button is-rounded social" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script>
        // Navbar burger
        document.addEventListener('DOMContentLoaded', () => {
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        });

        // Back to Top
        window.addEventListener('scroll', () => {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });

        document.getElementById('backToTop').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
