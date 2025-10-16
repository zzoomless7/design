<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Radix UI inspired design system */
        :root {
            --violet-1: #667eea;
            --violet-2: #764ba2;
            --blue-9: #3b82f6;
            --radius-1: 0.25rem;
            --radius-2: 0.5rem;
            --radius-3: 0.75rem;
            --radius-4: 1rem;
            --radius-5: 1.5rem;
            --radius-6: 2rem;
            --radius-full: 9999px;
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;
        }

        body {
            background: linear-gradient(135deg, var(--violet-1) 0%, var(--violet-2) 100%);
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: white;
        }

        .glass-surface {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card {
            border-radius: var(--radius-6);
            padding: var(--space-8);
            margin-bottom: var(--space-6);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            transform: translateY(-4px);
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 50;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--space-4);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 4rem;
        }

        .brand {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .nav-list {
            display: flex;
            gap: var(--space-4);
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: var(--space-2) var(--space-4);
            border-radius: var(--radius-3);
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .heading-xl {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            text-align: center;
            margin-bottom: var(--space-4);
        }

        .heading-lg {
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: var(--space-4);
            display: flex;
            align-items: center;
            gap: var(--space-3);
        }

        .heading-md {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: var(--space-3);
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .text-blue {
            color: var(--blue-9);
        }

        .text-subtle {
            color: rgba(255, 255, 255, 0.8);
        }

        .accordion-item {
            background: rgba(255, 255, 255, 0.05);
            padding: var(--space-6);
            border-radius: var(--radius-4);
            margin-bottom: var(--space-6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: background 0.2s ease;
        }

        .accordion-item:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .callout {
            background: rgba(59, 130, 246, 0.2);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: var(--radius-4);
            padding: var(--space-6);
        }

        .footer {
            background: rgba(255, 255, 255, 0.1);
            padding: var(--space-12) 0 var(--space-8);
            margin-top: var(--space-12);
        }

        .footer-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: var(--space-6);
            margin-bottom: var(--space-6);
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-link:hover {
            color: white;
        }

        .icon-group {
            display: flex;
            gap: var(--space-4);
            justify-content: center;
        }

        .icon-button {
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-full);
            color: white;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.2s ease;
        }

        .icon-button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .scroll-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 3rem;
            height: 3rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-full);
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

        .scroll-top:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .nav-list {
                display: none;
            }
            
            .heading-xl {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="glass-surface navbar">
        <div class="container">
            <div class="nav-container">
                <div class="brand">
                    <i class="fas fa-home"></i>
                    <span>Reședința Budaș</span>
                </div>
                <ul class="nav-list">
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
        <div class="glass-surface card">
            <h1 class="heading-xl">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p class="text-subtle" style="text-align: center; font-size: 1.125rem;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass-surface card">
            <h2 class="heading-lg">
                <i class="fas fa-cookie-bite text-blue"></i>
                Ce sunt Cookies?
            </h2>
            <p style="margin-bottom: 1rem;">Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
            <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="glass-surface card">
            <h2 class="heading-lg">
                <i class="fas fa-list text-blue"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="accordion-item">
                <h5 class="heading-md">
                    <i class="fas fa-shield-alt text-blue"></i>
                    1. Cookies Esențiale (Necesare)
                </h5>
                <p style="margin-bottom: 1rem;">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                <ul style="margin-left: 1.5rem; list-style: disc;">
                    <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                    <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                    <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                </ul>
            </div>

            <div class="accordion-item">
                <h5 class="heading-md">
                    <i class="fas fa-chart-line text-blue"></i>
                    2. Cookies de Analiză
                </h5>
                <p style="margin-bottom: 1rem;">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                <ul style="margin-left: 1.5rem; list-style: disc;">
                    <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                    <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                </ul>
            </div>

            <div class="accordion-item">
                <h5 class="heading-md">
                    <i class="fas fa-bullseye text-blue"></i>
                    3. Cookies de Marketing
                </h5>
                <p style="margin-bottom: 1rem;">Pentru a-ți oferi conținut relevant:</p>
                <ul style="margin-left: 1.5rem; list-style: disc;">
                    <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                    <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                </ul>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="glass-surface card">
            <h2 class="heading-lg">
                <i class="fas fa-cog text-blue"></i>
                Cum Poți Gestiona Cookies?
            </h2>
            <div class="callout">
                <p style="margin-bottom: 1rem;"><strong>Browserul tău</strong> îți permite să controlezi cookies-urile:</p>
                <ul style="margin-left: 1.5rem; list-style: disc;">
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-surface card">
            <h2 class="heading-lg">
                <i class="fas fa-envelope text-blue"></i>
                Contact
            </h2>
            <p style="margin-bottom: 1rem;">Pentru întrebări despre politica noastră de cookies:</p>
            <p style="margin-bottom: 0.5rem;"><i class="fas fa-phone"></i> <a href="tel:+40758330929" style="color: white; text-decoration: none;">+40 758 330 929</a></p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" style="color: white; text-decoration: none;">info@resedintabudas.ro</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-flex">
                <p>&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div>
                    <a href="../legal/termeni-si-conditii.php" class="footer-link">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php" class="footer-link">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php" class="footer-link">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="icon-group">
                <a href="https://facebook.com/resedintabudas" class="icon-button" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/resedintabudas" class="icon-button" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/40758330929" class="icon-button" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <div class="scroll-top" id="backToTop">
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
