<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <link rel="stylesheet" href="https://unpkg.com/open-props"/>
    <link rel="stylesheet" href="https://unpkg.com/open-props/normalize.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --gradient-start: #667eea;
            --gradient-end: #764ba2;
        }

        body {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            min-height: 100vh;
            font-family: var(--font-sans);
            margin: 0;
            padding: 0;
        }

        .glass-card {
            background: hsl(0 0% 100% / 0.1);
            backdrop-filter: blur(var(--blur-3));
            border: var(--border-size-1) solid hsl(0 0% 100% / 0.2);
            border-radius: var(--radius-3);
            box-shadow: var(--shadow-4);
            padding: var(--size-8);
            margin-bottom: var(--size-6);
            color: white;
            transition: all var(--ease-3) var(--speed-2);
        }

        .glass-card:hover {
            box-shadow: var(--shadow-5);
            transform: translateY(-2px);
        }

        nav.glass-card {
            border-radius: 0;
        }

        .container {
            max-width: var(--size-content-3);
            margin-inline: auto;
            padding-inline: var(--size-4);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: var(--size-2);
            color: white;
            font-weight: var(--font-weight-7);
            font-size: var(--font-size-5);
            text-shadow: var(--shadow-2);
        }

        .nav-links {
            display: flex;
            gap: var(--size-4);
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-links a {
            color: hsl(0 0% 100% / 0.9);
            text-decoration: none;
            padding: var(--size-2) var(--size-4);
            border-radius: var(--radius-2);
            transition: all var(--ease-3) var(--speed-2);
        }

        .nav-links a:hover {
            background: hsl(0 0% 100% / 0.1);
            color: white;
        }

        .page-header {
            text-align: center;
            padding: var(--size-10) var(--size-6);
        }

        .page-title {
            font-size: var(--font-size-8);
            margin-bottom: var(--size-4);
            text-shadow: var(--shadow-2);
        }

        .section-title {
            font-size: var(--font-size-6);
            margin-bottom: var(--size-4);
            display: flex;
            align-items: center;
            gap: var(--size-2);
        }

        .section-title i {
            color: var(--blue-5);
        }

        .cookie-box {
            background: hsl(0 0% 100% / 0.05);
            padding: var(--size-6);
            border-radius: var(--radius-3);
            margin-bottom: var(--size-5);
            border: var(--border-size-1) solid hsl(0 0% 100% / 0.1);
        }

        .cookie-box h5 {
            font-size: var(--font-size-4);
            margin-bottom: var(--size-3);
            display: flex;
            align-items: center;
            gap: var(--size-2);
        }

        .cookie-box i {
            color: var(--blue-5);
        }

        .info-box {
            background: hsl(213 94% 68% / 0.2);
            border: var(--border-size-1) solid hsl(213 94% 68% / 0.3);
            border-radius: var(--radius-3);
            padding: var(--size-6);
        }

        .footer {
            background: hsl(0 0% 100% / 0.1);
            color: white;
            padding: var(--size-8) 0;
            margin-top: var(--size-10);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: var(--size-4);
        }

        .footer a {
            color: hsl(0 0% 100% / 0.8);
            text-decoration: none;
            transition: color var(--ease-3) var(--speed-2);
        }

        .footer a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: var(--size-3);
            justify-content: center;
            margin-top: var(--size-4);
        }

        .social-btn {
            width: var(--size-9);
            height: var(--size-9);
            display: flex;
            align-items: center;
            justify-content: center;
            background: hsl(0 0% 100% / 0.1);
            border-radius: var(--radius-round);
            color: white;
            text-decoration: none;
            border: var(--border-size-1) solid hsl(0 0% 100% / 0.2);
            transition: all var(--ease-3) var(--speed-2);
        }

        .social-btn:hover {
            background: hsl(0 0% 100% / 0.2);
            transform: translateY(-3px);
        }

        .back-to-top {
            position: fixed;
            bottom: var(--size-6);
            right: var(--size-6);
            width: var(--size-10);
            height: var(--size-10);
            background: hsl(0 0% 100% / 0.1);
            border-radius: var(--radius-round);
            color: white;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--ease-3) var(--speed-2);
            backdrop-filter: blur(var(--blur-3));
            border: var(--border-size-1) solid hsl(0 0% 100% / 0.2);
            z-index: 100;
        }

        .back-to-top:hover {
            background: hsl(0 0% 100% / 0.2);
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
    <nav class="glass-card">
        <div class="container">
            <div class="nav-wrapper">
                <div class="brand">
                    <i class="fas fa-home"></i>
                    <span>Reședința Budaș</span>
                </div>
                <ul class="nav-links">
                    <li><a href="../index.php"><i class="fas fa-home"></i> Acasă</a></li>
                    <li><a href="../despre.php"><i class="fas fa-info-circle"></i> Despre noi</a></li>
                    <li><a href="../articole.php"><i class="fas fa-newspaper"></i> Articole</a></li>
                    <li><a href="../galerie.php"><i class="fas fa-images"></i> Galerie</a></li>
                    <li><a href="../contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container" style="padding-top: var(--size-6); padding-bottom: var(--size-6);">
        <!-- Header -->
        <div class="glass-card page-header">
            <h1 class="page-title">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p style="font-size: var(--font-size-4); opacity: 0.9;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-cookie-bite"></i>
                Ce sunt Cookies?
            </h2>
            <p style="margin-bottom: var(--size-4);">Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
            <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-list"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="cookie-box">
                <h5><i class="fas fa-shield-alt"></i> 1. Cookies Esențiale (Necesare)</h5>
                <p style="margin-bottom: var(--size-3);">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                <ul style="margin-left: var(--size-6);">
                    <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                    <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                    <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                </ul>
            </div>

            <div class="cookie-box">
                <h5><i class="fas fa-chart-line"></i> 2. Cookies de Analiză</h5>
                <p style="margin-bottom: var(--size-3);">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                <ul style="margin-left: var(--size-6);">
                    <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                    <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                </ul>
            </div>

            <div class="cookie-box">
                <h5><i class="fas fa-bullseye"></i> 3. Cookies de Marketing</h5>
                <p style="margin-bottom: var(--size-3);">Pentru a-ți oferi conținut relevant:</p>
                <ul style="margin-left: var(--size-6);">
                    <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                    <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                </ul>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-cog"></i>
                Cum Poți Gestiona Cookies?
            </h2>
            <div class="info-box">
                <p style="margin-bottom: var(--size-3);"><strong>Browserul tău</strong> îți permite să controlezi cookies-urile:</p>
                <ul style="margin-left: var(--size-6);">
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-envelope"></i>
                Contact
            </h2>
            <p style="margin-bottom: var(--size-3);">Pentru întrebări despre politica noastră de cookies:</p>
            <p style="margin-bottom: var(--size-2);"><i class="fas fa-phone"></i> <a href="tel:+40758330929" style="color: white;">+40 758 330 929</a></p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" style="color: white;">info@resedintabudas.ro</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div>
                    <a href="../legal/termeni-si-conditii.php">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="social-links">
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
    <div class="back-to-top" id="backToTop">
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
