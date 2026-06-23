<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Open Props</title>
    <link rel="stylesheet" href="https://unpkg.com/open-props"/>
    <link rel="stylesheet" href="https://unpkg.com/open-props/normalize.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: var(--font-sans);
            background: var(--gradient-8);
            color: var(--gray-9);
            line-height: var(--font-lineheight-3);
        }
        
        .container {
            max-width: var(--size-content-3);
            margin-inline: auto;
            padding: var(--size-fluid-3);
        }
        
        .hero {
            background: var(--gradient-2);
            color: var(--gray-0);
            padding: var(--size-10) var(--size-5);
            text-align: center;
            border-radius: var(--radius-3);
            margin-block-end: var(--size-8);
            box-shadow: var(--shadow-6);
        }
        
        .hero h1 {
            font-size: var(--font-size-7);
            font-weight: var(--font-weight-9);
            margin-block-end: var(--size-3);
        }
        
        .hero p {
            font-size: var(--font-size-4);
            opacity: 0.9;
        }
        
        .card {
            background: var(--gray-0);
            border-radius: var(--radius-3);
            padding: var(--size-6);
            margin-block-end: var(--size-6);
            box-shadow: var(--shadow-3);
            border: var(--border-size-1) solid var(--gray-3);
        }
        
        .card:hover {
            box-shadow: var(--shadow-5);
            transform: translateY(var(--size-1));
            transition: all var(--ease-3) var(--speed-2);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            gap: var(--size-3);
            margin-block-end: var(--size-4);
            padding-block-end: var(--size-3);
            border-block-end: var(--border-size-2) solid var(--gray-3);
        }
        
        .card-header h3 {
            font-size: var(--font-size-5);
            font-weight: var(--font-weight-7);
            margin: 0;
        }
        
        .card-essential { border-inline-start: var(--border-size-5) solid var(--green-6); }
        .card-performance { border-inline-start: var(--border-size-5) solid var(--blue-6); }
        .card-functionality { border-inline-start: var(--border-size-5) solid var(--purple-6); }
        .card-marketing { border-inline-start: var(--border-size-5) solid var(--orange-6); }
        
        .icon-essential { color: var(--green-6); }
        .icon-performance { color: var(--blue-6); }
        .icon-functionality { color: var(--purple-6); }
        .icon-marketing { color: var(--orange-6); }
        
        .cookie-table {
            width: 100%;
            border-collapse: collapse;
            margin-block-start: var(--size-4);
        }
        
        .cookie-table th {
            background: var(--gray-2);
            padding: var(--size-3);
            text-align: start;
            font-weight: var(--font-weight-7);
            border-block-end: var(--border-size-2) solid var(--gray-4);
        }
        
        .cookie-table td {
            padding: var(--size-3);
            border-block-end: var(--border-size-1) solid var(--gray-3);
        }
        
        .cookie-table tr:hover {
            background: var(--gray-1);
        }
        
        .tag {
            display: inline-block;
            padding: var(--size-1) var(--size-3);
            border-radius: var(--radius-round);
            font-size: var(--font-size-0);
            font-weight: var(--font-weight-6);
        }
        
        .tag-essential { background: var(--green-2); color: var(--green-9); }
        .tag-performance { background: var(--blue-2); color: var(--blue-9); }
        .tag-functionality { background: var(--purple-2); color: var(--purple-9); }
        .tag-marketing { background: var(--orange-2); color: var(--orange-9); }
        
        .button-group {
            display: flex;
            gap: var(--size-3);
            flex-wrap: wrap;
            justify-content: center;
            margin-block-start: var(--size-5);
        }
        
        .button {
            padding: var(--size-3) var(--size-6);
            border-radius: var(--radius-2);
            border: none;
            font-weight: var(--font-weight-7);
            cursor: pointer;
            font-size: var(--font-size-3);
            transition: all var(--ease-3) var(--speed-2);
            display: inline-flex;
            align-items: center;
            gap: var(--size-2);
        }
        
        .button:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-4);
        }
        
        .button-success {
            background: var(--green-6);
            color: var(--gray-0);
        }
        
        .button-info {
            background: var(--blue-6);
            color: var(--gray-0);
        }
        
        .button-danger {
            background: var(--red-6);
            color: var(--gray-0);
        }
        
        .info-box {
            background: var(--blue-1);
            border-inline-start: var(--border-size-5) solid var(--blue-6);
            padding: var(--size-5);
            border-radius: var(--radius-2);
            margin-block-end: var(--size-6);
        }
        
        .info-box h2 {
            display: flex;
            align-items: center;
            gap: var(--size-3);
            color: var(--blue-9);
            font-size: var(--font-size-6);
        }
        
        .browser-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(var(--size-13), 1fr));
            gap: var(--size-4);
            margin-block: var(--size-6);
        }
        
        .browser-card {
            background: var(--gray-0);
            padding: var(--size-5);
            border-radius: var(--radius-2);
            text-align: center;
            box-shadow: var(--shadow-2);
        }
        
        .browser-card:hover {
            box-shadow: var(--shadow-4);
            transform: translateY(calc(var(--size-2) * -1));
            transition: all var(--ease-3) var(--speed-2);
        }
        
        .browser-icon {
            font-size: var(--font-size-8);
            margin-block-end: var(--size-3);
        }
        
        .footer {
            background: var(--gray-9);
            color: var(--gray-0);
            text-align: center;
            padding: var(--size-6);
            margin-block-start: var(--size-8);
            border-radius: var(--radius-3);
        }
        
        .back-to-top {
            position: fixed;
            inset-block-end: var(--size-5);
            inset-inline-end: var(--size-5);
            background: var(--indigo-6);
            color: var(--gray-0);
            width: var(--size-10);
            height: var(--size-10);
            border-radius: var(--radius-round);
            border: none;
            cursor: pointer;
            box-shadow: var(--shadow-5);
            font-size: var(--font-size-4);
        }
        
        .back-to-top:hover {
            background: var(--indigo-7);
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="hero">
        <div style="font-size: var(--font-size-9); margin-block-end: var(--size-4);">🍪</div>
        <h1>Politica de Cookie-uri</h1>
        <p>Construit cu Open Props - Design modern și performant</p>
    </div>

    <div class="container">
        <div class="info-box">
            <h2>
                <i class="fas fa-info-circle"></i>
                Ce sunt cookie-urile?
            </h2>
            <p>
                Cookie-urile sunt fișiere text mici stocate în browser-ul tău când vizitezi un site web. 
                Ele ne ajută să îți oferim o experiență personalizată și să îmbunătățim funcționalitatea site-ului nostru.
            </p>
        </div>

        <h2 style="font-size: var(--font-size-6); margin-block-end: var(--size-5);">Tipuri de Cookie-uri</h2>

        <!-- Essential Cookies -->
        <div class="card card-essential">
            <div class="card-header">
                <i class="fas fa-shield-alt fa-2x icon-essential"></i>
                <h3>Cookie-uri Esențiale</h3>
            </div>
            <p>Necesare pentru funcționarea de bază a site-ului. Nu pot fi dezactivate.</p>
            <table class="cookie-table">
                <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Scop</th>
                        <th>Durată</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>session_id</code></td>
                        <td>Gestionarea sesiunii utilizatorului</td>
                        <td>Sesiune</td>
                        <td><span class="tag tag-essential">Esențial</span></td>
                    </tr>
                    <tr>
                        <td><code>csrf_token</code></td>
                        <td>Protecție împotriva atacurilor CSRF</td>
                        <td>24 ore</td>
                        <td><span class="tag tag-essential">Esențial</span></td>
                    </tr>
                    <tr>
                        <td><code>cookie_consent</code></td>
                        <td>Salvează preferințele de cookie-uri</td>
                        <td>1 an</td>
                        <td><span class="tag tag-essential">Esențial</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Performance Cookies -->
        <div class="card card-performance">
            <div class="card-header">
                <i class="fas fa-chart-line fa-2x icon-performance"></i>
                <h3>Cookie-uri de Performanță</h3>
            </div>
            <p>Colectează informații anonime despre modul în care utilizați site-ul.</p>
            <table class="cookie-table">
                <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Scop</th>
                        <th>Durată</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>_ga</code></td>
                        <td>Google Analytics - identificare utilizatori</td>
                        <td>2 ani</td>
                        <td><span class="tag tag-performance">Performanță</span></td>
                    </tr>
                    <tr>
                        <td><code>_gid</code></td>
                        <td>Google Analytics - identificare sesiuni</td>
                        <td>24 ore</td>
                        <td><span class="tag tag-performance">Performanță</span></td>
                    </tr>
                    <tr>
                        <td><code>_gat</code></td>
                        <td>Limitare rate de cereri Analytics</td>
                        <td>1 minut</td>
                        <td><span class="tag tag-performance">Performanță</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Functionality Cookies -->
        <div class="card card-functionality">
            <div class="card-header">
                <i class="fas fa-cog fa-2x icon-functionality"></i>
                <h3>Cookie-uri de Funcționalitate</h3>
            </div>
            <p>Memorează preferințele tale pentru o experiență îmbunătățită.</p>
            <table class="cookie-table">
                <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Scop</th>
                        <th>Durată</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>language_pref</code></td>
                        <td>Preferință de limbă</td>
                        <td>1 an</td>
                        <td><span class="tag tag-functionality">Funcționalitate</span></td>
                    </tr>
                    <tr>
                        <td><code>theme_mode</code></td>
                        <td>Tema aleasă (dark/light)</td>
                        <td>6 luni</td>
                        <td><span class="tag tag-functionality">Funcționalitate</span></td>
                    </tr>
                    <tr>
                        <td><code>font_size</code></td>
                        <td>Dimensiunea fontului preferată</td>
                        <td>1 an</td>
                        <td><span class="tag tag-functionality">Funcționalitate</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Marketing Cookies -->
        <div class="card card-marketing">
            <div class="card-header">
                <i class="fas fa-bullhorn fa-2x icon-marketing"></i>
                <h3>Cookie-uri de Marketing</h3>
            </div>
            <p>Folosite pentru publicitate țintită și măsurarea eficienței campaniilor.</p>
            <table class="cookie-table">
                <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Scop</th>
                        <th>Durată</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>_fbp</code></td>
                        <td>Facebook Pixel pentru tracking</td>
                        <td>3 luni</td>
                        <td><span class="tag tag-marketing">Marketing</span></td>
                    </tr>
                    <tr>
                        <td><code>ads_id</code></td>
                        <td>Identificare pentru reclame personalizate</td>
                        <td>1 an</td>
                        <td><span class="tag tag-marketing">Marketing</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Cookie Management -->
        <div class="card" style="text-align: center; background: var(--gradient-12);">
            <h2 style="font-size: var(--font-size-6); margin-block-end: var(--size-4);">
                <i class="fas fa-sliders-h"></i> Gestionează Cookie-urile
            </h2>
            <p>Controlează cum sunt folosite cookie-urile pe acest site</p>
            <div class="button-group">
                <button class="button button-success">
                    <i class="fas fa-check"></i>
                    Acceptă Toate
                </button>
                <button class="button button-info">
                    <i class="fas fa-cog"></i>
                    Personalizează
                </button>
                <button class="button button-danger">
                    <i class="fas fa-times"></i>
                    Respinge Opționale
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 style="font-size: var(--font-size-6); margin-block: var(--size-6);">Setări Browser</h2>
        <div class="browser-grid">
            <div class="browser-card">
                <div class="browser-icon">
                    <i class="fab fa-chrome" style="color: #4285F4;"></i>
                </div>
                <h4>Chrome</h4>
                <p style="font-size: var(--font-size-1);">Setări → Confidențialitate</p>
            </div>
            <div class="browser-card">
                <div class="browser-icon">
                    <i class="fab fa-firefox" style="color: #FF7139;"></i>
                </div>
                <h4>Firefox</h4>
                <p style="font-size: var(--font-size-1);">Opțiuni → Confidențialitate</p>
            </div>
            <div class="browser-card">
                <div class="browser-icon">
                    <i class="fab fa-safari" style="color: #006CFF;"></i>
                </div>
                <h4>Safari</h4>
                <p style="font-size: var(--font-size-1);">Preferințe → Confidențialitate</p>
            </div>
            <div class="browser-card">
                <div class="browser-icon">
                    <i class="fab fa-edge" style="color: #0078D7;"></i>
                </div>
                <h4>Edge</h4>
                <p style="font-size: var(--font-size-1);">Setări → Confidențialitate</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="card" style="background: var(--yellow-1); border-inline-start: var(--border-size-5) solid var(--yellow-6);">
            <h3 style="display: flex; align-items: center; gap: var(--size-3); color: var(--yellow-9);">
                <i class="fas fa-envelope"></i>
                Contactează-ne
            </h3>
            <p>
                Pentru întrebări despre politica de cookie-uri:
                <a href="mailto:privacy@example.com" style="color: var(--blue-7); font-weight: var(--font-weight-7);">
                    privacy@example.com
                </a>
            </p>
        </div>
    </div>

    <div class="footer">
        <p style="font-weight: var(--font-weight-7); font-size: var(--font-size-4);">
            CookiePolicy - Open Props
        </p>
        <p style="opacity: 0.8;">© 2024 Toate drepturile rezervate</p>
        <p style="font-size: var(--font-size-1); opacity: 0.6;">
            Ultima actualizare: <?php echo date('d.m.Y'); ?>
        </p>
    </div>

    <button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
