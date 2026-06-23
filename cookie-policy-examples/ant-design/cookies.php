<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <script src="https://cdn.jsdelivr.net/npm/react@18/umd/react.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/antd@5/dist/antd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/antd@5/dist/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
            margin: 0;
            padding: 0;
        }

        .ant-layout {
            background: transparent;
        }

        .ant-layout-header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            padding: 0 50px;
        }

        .site-logo {
            float: left;
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            margin-right: 40px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .ant-menu {
            background: transparent !important;
            border-bottom: none;
        }

        .ant-menu-item {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .ant-menu-item:hover,
        .ant-menu-item-selected {
            color: white !important;
            background: rgba(255, 255, 255, 0.1) !important;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 32px;
            margin-bottom: 24px;
            color: white;
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .page-header {
            text-align: center;
            padding: 48px 32px;
        }

        .page-title {
            font-size: 2.5rem;
            margin-bottom: 16px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title i {
            color: #1890ff;
        }

        .cookie-type {
            background: rgba(255, 255, 255, 0.05);
            padding: 24px;
            border-radius: 15px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .cookie-type h5 {
            font-size: 1.2rem;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cookie-type i {
            color: #1890ff;
        }

        .ant-alert {
            background: rgba(24, 144, 255, 0.2);
            border: 1px solid rgba(24, 144, 255, 0.3);
            border-radius: 15px;
        }

        .ant-alert-message,
        .ant-alert-description {
            color: white;
        }

        .ant-layout-footer {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 48px 50px 24px;
            margin-top: 48px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .social-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 24px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            color: white;
        }

        .ant-back-top {
            bottom: 30px;
            right: 30px;
        }

        .ant-back-top-content {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .ant-back-top-content:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <div class="ant-layout-header" style="position: sticky; top: 0; z-index: 100;">
        <div class="site-logo">
            <i class="fas fa-home"></i> Reședința Budaș
        </div>
        <div style="float: left; width: calc(100% - 300px);">
            <div class="ant-menu ant-menu-dark ant-menu-horizontal" style="line-height: 64px;">
                <div class="ant-menu-item"><i class="fas fa-home"></i> <a href="../index.php" style="color: inherit;">Acasă</a></div>
                <div class="ant-menu-item"><i class="fas fa-info-circle"></i> <a href="../despre.php" style="color: inherit;">Despre noi</a></div>
                <div class="ant-menu-item"><i class="fas fa-newspaper"></i> <a href="../articole.php" style="color: inherit;">Articole</a></div>
                <div class="ant-menu-item"><i class="fas fa-images"></i> <a href="../galerie.php" style="color: inherit;">Galerie</a></div>
                <div class="ant-menu-item"><i class="fas fa-envelope"></i> <a href="../contact.php" style="color: inherit;">Contact</a></div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div style="max-width: 1200px; margin: 0 auto; padding: 32px 24px;">
        <!-- Header -->
        <div class="glass-card page-header">
            <h1 class="page-title">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p style="font-size: 1.1rem; opacity: 0.9;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-cookie-bite"></i>
                Ce sunt Cookies?
            </h2>
            <p style="margin-bottom: 16px;">Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
            <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-list"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="cookie-type">
                <h5><i class="fas fa-shield-alt"></i> 1. Cookies Esențiale (Necesare)</h5>
                <p style="margin-bottom: 12px;">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                <ul style="margin-left: 24px;">
                    <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                    <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                    <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                </ul>
            </div>

            <div class="cookie-type">
                <h5><i class="fas fa-chart-line"></i> 2. Cookies de Analiză</h5>
                <p style="margin-bottom: 12px;">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                <ul style="margin-left: 24px;">
                    <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                    <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                </ul>
            </div>

            <div class="cookie-type">
                <h5><i class="fas fa-bullseye"></i> 3. Cookies de Marketing</h5>
                <p style="margin-bottom: 12px;">Pentru a-ți oferi conținut relevant:</p>
                <ul style="margin-left: 24px;">
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
            <div class="ant-alert ant-alert-info" role="alert">
                <div class="ant-alert-content">
                    <div class="ant-alert-message"><strong>Browserul tău</strong> îți permite să controlezi cookies-urile:</div>
                    <div class="ant-alert-description">
                        <ul style="margin-left: 24px; margin-top: 12px;">
                            <li>Poți șterge toate cookies-urile deja salvate</li>
                            <li>Poți bloca instalarea de noi cookies</li>
                            <li>Poți seta excepții pentru anumite site-uri</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-card">
            <h2 class="section-title">
                <i class="fas fa-envelope"></i>
                Contact
            </h2>
            <p style="margin-bottom: 12px;">Pentru întrebări despre politica noastră de cookies:</p>
            <p style="margin-bottom: 8px;"><i class="fas fa-phone"></i> <a href="tel:+40758330929" style="color: white;">+40 758 330 929</a></p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" style="color: white;">info@resedintabudas.ro</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="ant-layout-footer">
        <div class="footer-content">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; margin-bottom: 24px;">
                <p style="margin: 0;">&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div style="text-align: right;">
                    <a href="../legal/termeni-si-conditii.php" style="color: rgba(255,255,255,0.8);">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php" style="color: rgba(255,255,255,0.8);">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php" style="color: rgba(255,255,255,0.8);">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="social-buttons">
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
    <div class="ant-back-top" style="display: block;">
        <div class="ant-back-top-content" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>

    <script>
        // Show/hide back to top button
        window.addEventListener('scroll', () => {
            const backToTop = document.querySelector('.ant-back-top');
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });
    </script>
</body>
</html>
