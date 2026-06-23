<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <link rel="stylesheet" href="https://unpkg.com/@mantine/core@7.3.2/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --mantine-color-blue-6: #3b82f6;
            --mantine-spacing-xs: 0.625rem;
            --mantine-spacing-sm: 0.75rem;
            --mantine-spacing-md: 1rem;
            --mantine-spacing-lg: 1.25rem;
            --mantine-spacing-xl: 2rem;
            --mantine-radius-md: 0.5rem;
            --mantine-radius-lg: 1rem;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        .mantine-Paper-root {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--mantine-radius-lg);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: var(--mantine-spacing-xl);
            margin-bottom: var(--mantine-spacing-lg);
            color: white;
        }

        .mantine-Paper-root:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .mantine-AppShell-header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            padding: var(--mantine-spacing-md);
        }

        .mantine-Title-root {
            color: white;
            margin-bottom: var(--mantine-spacing-lg);
            display: flex;
            align-items: center;
            gap: var(--mantine-spacing-sm);
        }

        .mantine-Text-root {
            color: rgba(255, 255, 255, 0.9);
        }

        .mantine-Accordion-item {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--mantine-radius-md);
            margin-bottom: var(--mantine-spacing-md);
        }

        .mantine-Accordion-control {
            color: white;
            font-weight: 600;
            padding: var(--mantine-spacing-lg);
        }

        .mantine-Accordion-content {
            color: rgba(255, 255, 255, 0.9);
        }

        .mantine-Alert-root {
            background: rgba(59, 130, 246, 0.2);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: white;
        }

        .mantine-Badge-root {
            background: rgba(59, 130, 246, 0.2);
            color: #93c5fd;
            border: 1px solid rgba(59, 130, 246, 0.3);
        }

        .mantine-Container-root {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--mantine-spacing-md);
        }

        .header-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--mantine-spacing-md);
        }

        .nav-brand {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: var(--mantine-spacing-sm);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .nav-links {
            display: flex;
            gap: var(--mantine-spacing-sm);
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: var(--mantine-spacing-sm) var(--mantine-spacing-md);
            border-radius: var(--mantine-radius-md);
            transition: all 0.2s;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .hero-section {
            text-align: center;
            padding: 3rem 2rem;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .icon-blue {
            color: var(--mantine-color-blue-6);
        }

        .footer {
            background: rgba(255, 255, 255, 0.1);
            padding: 3rem 0 1rem;
            margin-top: 3rem;
        }

        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer a:hover {
            color: white;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.2s;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin: 0 0.25rem;
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        #backToTop {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            color: white;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        #backToTop:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        ul {
            margin-left: 1.5rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="mantine-AppShell-header">
        <div class="mantine-Container-root header-nav">
            <a href="https://www.resedintabudas.ro" class="nav-brand">
                <i class="fas fa-home"></i> Reședința Budaș
            </a>
            <ul class="nav-links">
                <li><a href="../index.php" class="nav-link"><i class="fas fa-home"></i> Acasă</a></li>
                <li><a href="../despre.php" class="nav-link"><i class="fas fa-info-circle"></i> Despre noi</a></li>
                <li><a href="../articole.php" class="nav-link"><i class="fas fa-newspaper"></i> Articole</a></li>
                <li><a href="../galerie.php" class="nav-link"><i class="fas fa-images"></i> Galerie</a></li>
                <li><a href="../contact.php" class="nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <div class="mantine-Container-root" style="padding-top: 2rem;">
        <!-- Hero Section -->
        <div class="mantine-Paper-root hero-section">
            <h1 class="hero-title">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p style="font-size: 1.125rem; opacity: 0.9;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="mantine-Paper-root">
            <h2 class="mantine-Title-root" style="font-size: 1.875rem;">
                <i class="fas fa-cookie-bite icon-blue"></i> Ce sunt Cookies?
            </h2>
            <p class="mantine-Text-root" style="margin-bottom: 1rem;">Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
            <p class="mantine-Text-root">Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="mantine-Paper-root">
            <h2 class="mantine-Title-root" style="font-size: 1.875rem;">
                <i class="fas fa-list icon-blue"></i> Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="mantine-Accordion-item">
                <div class="mantine-Accordion-control">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-shield-alt icon-blue"></i>
                            <span>1. Cookies Esențiale (Necesare)</span>
                        </div>
                        <span class="mantine-Badge-root">Necesare</span>
                    </div>
                </div>
                <div class="mantine-Accordion-content" style="padding: 1rem 1.25rem;">
                    <p style="margin-bottom: 0.75rem;">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                    <ul>
                        <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                        <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                        <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                    </ul>
                </div>
            </div>

            <div class="mantine-Accordion-item">
                <div class="mantine-Accordion-control">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-chart-line icon-blue"></i>
                            <span>2. Cookies de Analiză</span>
                        </div>
                        <span class="mantine-Badge-root">Opționale</span>
                    </div>
                </div>
                <div class="mantine-Accordion-content" style="padding: 1rem 1.25rem;">
                    <p style="margin-bottom: 0.75rem;">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                    <ul>
                        <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                        <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                    </ul>
                </div>
            </div>

            <div class="mantine-Accordion-item">
                <div class="mantine-Accordion-control">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-bullseye icon-blue"></i>
                            <span>3. Cookies de Marketing</span>
                        </div>
                        <span class="mantine-Badge-root">Opționale</span>
                    </div>
                </div>
                <div class="mantine-Accordion-content" style="padding: 1rem 1.25rem;">
                    <p style="margin-bottom: 0.75rem;">Pentru a-ți oferi conținut relevant:</p>
                    <ul>
                        <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                        <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="mantine-Paper-root">
            <h2 class="mantine-Title-root" style="font-size: 1.875rem;">
                <i class="fas fa-cog icon-blue"></i> Cum Poți Gestiona Cookies?
            </h2>
            <div class="mantine-Alert-root" style="padding: 1.25rem; border-radius: 0.75rem;">
                <p style="font-weight: 600; margin-bottom: 0.75rem;">Browserul tău îți permite să controlezi cookies-urile:</p>
                <ul>
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="mantine-Paper-root">
            <h2 class="mantine-Title-root" style="font-size: 1.875rem;">
                <i class="fas fa-envelope icon-blue"></i> Contact
            </h2>
            <p class="mantine-Text-root" style="margin-bottom: 1rem;">Pentru întrebări despre politica noastră de cookies:</p>
            <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                <p><i class="fas fa-phone icon-blue"></i> <a href="tel:+40758330929" style="color: white;">+40 758 330 929</a></p>
                <p><i class="fas fa-envelope icon-blue"></i> <a href="mailto:info@resedintabudas.ro" style="color: white;">info@resedintabudas.ro</a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="mantine-Container-root">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
                <p>&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div style="text-align: right;">
                    <a href="../legal/termeni-si-conditii.php">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php">Politica de Confidențialitate</a>
                </div>
            </div>
            <div style="text-align: center;">
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
    <button id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

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
