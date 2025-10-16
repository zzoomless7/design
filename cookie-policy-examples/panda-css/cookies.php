<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Panda CSS inspired utility classes */
        :root {
            --colors-purple-500: #667eea;
            --colors-purple-600: #764ba2;
            --colors-blue-400: #3b82f6;
            --spacing-2: 0.5rem;
            --spacing-4: 1rem;
            --spacing-6: 1.5rem;
            --spacing-8: 2rem;
            --spacing-12: 3rem;
            --radii-lg: 0.5rem;
            --radii-xl: 0.75rem;
            --radii-2xl: 1rem;
            --radii-3xl: 1.5rem;
            --radii-full: 9999px;
        }

        body {
            background: linear-gradient(135deg, var(--colors-purple-500) 0%, var(--colors-purple-600) 100%);
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-4);
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card {
            border-radius: var(--radii-3xl);
            padding: var(--spacing-8);
            margin-bottom: var(--spacing-6);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--spacing-4) 0;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: var(--spacing-2);
        }

        .nav-links {
            display: flex;
            gap: var(--spacing-4);
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: var(--spacing-2) var(--spacing-4);
            border-radius: var(--radii-lg);
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .text-center {
            text-align: center;
        }

        .title-xl {
            font-size: 2.5rem;
            margin-bottom: var(--spacing-4);
        }

        .title-lg {
            font-size: 1.8rem;
            margin-bottom: var(--spacing-4);
            display: flex;
            align-items: center;
            gap: var(--spacing-2);
        }

        .title-md {
            font-size: 1.2rem;
            margin-bottom: var(--spacing-4);
            display: flex;
            align-items: center;
            gap: var(--spacing-2);
        }

        .icon-blue {
            color: var(--colors-blue-400);
        }

        .cookie-box {
            background: rgba(255, 255, 255, 0.05);
            padding: var(--spacing-6);
            border-radius: var(--radii-2xl);
            margin-bottom: var(--spacing-6);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .alert {
            background: rgba(59, 130, 246, 0.2);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: var(--radii-2xl);
            padding: var(--spacing-6);
        }

        .footer {
            background: rgba(255, 255, 255, 0.1);
            padding: var(--spacing-12) 0 var(--spacing-8);
            margin-top: var(--spacing-12);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: var(--spacing-6);
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: white;
        }

        .social-container {
            display: flex;
            gap: var(--spacing-4);
            justify-content: center;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radii-full);
            color: white;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .back-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radii-full);
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

        .back-top:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="glass nav">
        <div class="container">
            <div class="nav-content">
                <div class="nav-brand">
                    <i class="fas fa-home"></i>
                    <span>Reședința Budaș</span>
                </div>
                <ul class="nav-links">
                    <li><a href="../index.php" class="nav-link"><i class="fas fa-home"></i> Acasă</a></li>
                    <li><a href="../despre.php" class="nav-link"><i class="fas fa-info-circle"></i> Despre noi</a></li>
                    <li><a href="../articole.php" class="nav-link"><i class="fas fa-newspaper"></i> Articole</a></li>
                    <li><a href="../galerie.php" class="nav-link"><i class="fas fa-images"></i> Galerie</a></li>
                    <li><a href="../contact.php" class="nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container" style="padding-top: 2rem; padding-bottom: 2rem;">
        <!-- Header -->
        <div class="glass card text-center">
            <h1 class="title-xl">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p style="font-size: 1.1rem; opacity: 0.9;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass card">
            <h2 class="title-lg">
                <i class="fas fa-cookie-bite icon-blue"></i>
                Ce sunt Cookies?
            </h2>
            <p style="margin-bottom: 1rem;">Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
            <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="glass card">
            <h2 class="title-lg">
                <i class="fas fa-list icon-blue"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="cookie-box">
                <h5 class="title-md">
                    <i class="fas fa-shield-alt icon-blue"></i>
                    1. Cookies Esențiale (Necesare)
                </h5>
                <p style="margin-bottom: 1rem;">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                <ul style="margin-left: 1.5rem;">
                    <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                    <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                    <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                </ul>
            </div>

            <div class="cookie-box">
                <h5 class="title-md">
                    <i class="fas fa-chart-line icon-blue"></i>
                    2. Cookies de Analiză
                </h5>
                <p style="margin-bottom: 1rem;">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                <ul style="margin-left: 1.5rem;">
                    <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                    <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                </ul>
            </div>

            <div class="cookie-box">
                <h5 class="title-md">
                    <i class="fas fa-bullseye icon-blue"></i>
                    3. Cookies de Marketing
                </h5>
                <p style="margin-bottom: 1rem;">Pentru a-ți oferi conținut relevant:</p>
                <ul style="margin-left: 1.5rem;">
                    <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                    <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                </ul>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="glass card">
            <h2 class="title-lg">
                <i class="fas fa-cog icon-blue"></i>
                Cum Poți Gestiona Cookies?
            </h2>
            <div class="alert">
                <p style="margin-bottom: 1rem;"><strong>Browserul tău</strong> îți permite să controlezi cookies-urile:</p>
                <ul style="margin-left: 1.5rem;">
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass card">
            <h2 class="title-lg">
                <i class="fas fa-envelope icon-blue"></i>
                Contact
            </h2>
            <p style="margin-bottom: 1rem;">Pentru întrebări despre politica noastră de cookies:</p>
            <p style="margin-bottom: 0.5rem;"><i class="fas fa-phone"></i> <a href="tel:+40758330929" style="color: white;">+40 758 330 929</a></p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" style="color: white;">info@resedintabudas.ro</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div>
                    <a href="../legal/termeni-si-conditii.php" class="footer-link">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php" class="footer-link">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php" class="footer-link">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="social-container">
                <a href="https://facebook.com/resedintabudas" class="social-btn" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/resedintabudas" class="social-btn" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/40758330929" class="social-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <div class="back-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script>
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
