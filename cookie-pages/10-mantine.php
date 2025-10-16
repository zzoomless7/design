<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Mantine v7</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --mantine-color-blue: #228be6;
            --mantine-color-cyan: #15aabf;
            --mantine-color-grape: #be4bdb;
            --mantine-color-green: #40c057;
            --mantine-color-orange: #fd7e14;
            --mantine-color-red: #fa5252;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background: #f8f9fa;
        }
        
        .mantine-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 16px;
            transition: box-shadow 0.2s;
        }
        
        .mantine-card:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07), 0 2px 4px rgba(0, 0, 0, 0.06);
        }
        
        .mantine-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .mantine-badge-green {
            background: #d3f9d8;
            color: #2b8a3e;
        }
        
        .mantine-badge-blue {
            background: #d0ebff;
            color: #1864ab;
        }
        
        .mantine-badge-grape {
            background: #f3d9fa;
            color: #862e9c;
        }
        
        .mantine-badge-orange {
            background: #ffe8cc;
            color: #e8590c;
        }
        
        .mantine-button {
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .mantine-button-primary {
            background: var(--mantine-color-blue);
            color: white;
        }
        
        .mantine-button-primary:hover {
            background: #1c7ed6;
            transform: translateY(-1px);
        }
        
        .mantine-button-green {
            background: var(--mantine-color-green);
            color: white;
        }
        
        .mantine-button-green:hover {
            background: #37b24d;
        }
        
        .mantine-button-red {
            background: var(--mantine-color-red);
            color: white;
        }
        
        .mantine-button-red:hover {
            background: #f03e3e;
        }
        
        .mantine-alert {
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            display: flex;
            gap: 12px;
        }
        
        .mantine-alert-blue {
            background: #e7f5ff;
            border-left: 4px solid var(--mantine-color-blue);
            color: #1864ab;
        }
        
        .mantine-accordion-item {
            background: white;
            border-radius: 8px;
            margin-bottom: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        
        .mantine-accordion-control {
            padding: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 600;
            background: #f8f9fa;
            transition: background 0.2s;
        }
        
        .mantine-accordion-control:hover {
            background: #e9ecef;
        }
        
        .mantine-accordion-content {
            padding: 16px;
            display: none;
        }
        
        .mantine-accordion-content.active {
            display: block;
        }
        
        .mantine-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .mantine-table thead {
            background: #f8f9fa;
        }
        
        .mantine-table th {
            padding: 12px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #dee2e6;
        }
        
        .mantine-table td {
            padding: 12px;
            border-bottom: 1px solid #dee2e6;
        }
        
        .mantine-table tbody tr:hover {
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fas fa-cookie-bite text-3xl" style="color: var(--mantine-color-blue);"></i>
                    <h1 class="text-2xl font-bold">CookiePolicy</h1>
                </div>
                <nav class="hidden md:flex gap-6">
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Acasă</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Despre</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" class="text-white py-24">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="text-7xl mb-4">🍪</div>
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Politica de Cookie-uri</h1>
            <p class="text-xl opacity-90">Construit cu Mantine v7 - React Components Library</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Info Alert -->
        <div class="mantine-alert mantine-alert-blue">
            <i class="fas fa-info-circle text-3xl"></i>
            <div>
                <h3 class="font-bold text-lg mb-2">Ce sunt cookie-urile?</h3>
                <p>Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău care permit site-urilor web să funcționeze eficient și să îți ofere o experiență personalizată. Mantine v7 oferă componente moderne și accesibile pentru o interfață de utilizator optimă.</p>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 class="text-4xl font-bold mt-12 mb-6">Categorii de Cookie-uri</h2>

        <!-- Essential Cookies -->
        <div class="mantine-accordion-item">
            <div class="mantine-accordion-control" onclick="this.nextElementSibling.classList.toggle('active')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-shield-alt text-2xl" style="color: var(--mantine-color-green);"></i>
                    <span>Cookie-uri Esențiale</span>
                    <span class="mantine-badge mantine-badge-green">Obligatorii</span>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="mantine-accordion-content">
                <p class="mb-4 text-gray-600">Aceste cookie-uri sunt strict necesare pentru funcționarea de bază a site-ului și nu pot fi dezactivate.</p>
                <table class="mantine-table">
                    <thead>
                        <tr>
                            <th>Nume Cookie</th>
                            <th>Scop</th>
                            <th>Durată</th>
                            <th>Tip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code class="bg-gray-100 px-2 py-1 rounded">session_id</code></td>
                            <td>Gestionarea sesiunii utilizatorului autentificat</td>
                            <td>Sesiune</td>
                            <td><span class="mantine-badge mantine-badge-green">First-party</span></td>
                        </tr>
                        <tr>
                            <td><code class="bg-gray-100 px-2 py-1 rounded">csrf_token</code></td>
                            <td>Protecție împotriva atacurilor CSRF</td>
                            <td>24 ore</td>
                            <td><span class="mantine-badge mantine-badge-green">First-party</span></td>
                        </tr>
                        <tr>
                            <td><code class="bg-gray-100 px-2 py-1 rounded">cookie_consent</code></td>
                            <td>Stochează preferințele de cookie-uri</td>
                            <td>1 an</td>
                            <td><span class="mantine-badge mantine-badge-green">First-party</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Performance Cookies -->
        <div class="mantine-accordion-item">
            <div class="mantine-accordion-control" onclick="this.nextElementSibling.classList.toggle('active')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-chart-line text-2xl" style="color: var(--mantine-color-blue);"></i>
                    <span>Cookie-uri de Performanță</span>
                    <span class="mantine-badge mantine-badge-blue">Opțional</span>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="mantine-accordion-content">
                <p class="mb-4 text-gray-600">Aceste cookie-uri colectează informații despre modul în care vizitatorii utilizează site-ul nostru.</p>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="mantine-card">
                        <h4 class="font-bold mb-2"><code>_ga</code></h4>
                        <p class="text-sm text-gray-600 mb-2">Google Analytics - identificare utilizatori unici</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-xs text-gray-500">⏱️ 2 ani</span>
                            <span class="mantine-badge mantine-badge-blue">Analytics</span>
                        </div>
                    </div>
                    <div class="mantine-card">
                        <h4 class="font-bold mb-2"><code>_gid</code></h4>
                        <p class="text-sm text-gray-600 mb-2">Google Analytics - stocare informații despre vizită</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-xs text-gray-500">⏱️ 24 ore</span>
                            <span class="mantine-badge mantine-badge-blue">Analytics</span>
                        </div>
                    </div>
                    <div class="mantine-card">
                        <h4 class="font-bold mb-2"><code>_gat</code></h4>
                        <p class="text-sm text-gray-600 mb-2">Google Analytics - limitare rate de cereri</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-xs text-gray-500">⏱️ 1 minut</span>
                            <span class="mantine-badge mantine-badge-blue">Analytics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Functionality Cookies -->
        <div class="mantine-accordion-item">
            <div class="mantine-accordion-control" onclick="this.nextElementSibling.classList.toggle('active')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-cog text-2xl" style="color: var(--mantine-color-grape);"></i>
                    <span>Cookie-uri de Funcționalitate</span>
                    <span class="mantine-badge mantine-badge-grape">Opțional</span>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="mantine-accordion-content">
                <p class="mb-4 text-gray-600">Aceste cookie-uri permit site-ului să își amintească alegerile tale pentru o experiență îmbunătățită.</p>
                <div class="space-y-3">
                    <div class="mantine-card flex items-center justify-between">
                        <div>
                            <h5 class="font-bold"><code>language_pref</code></h5>
                            <p class="text-sm text-gray-600">Stochează preferința de limbă</p>
                        </div>
                        <span class="mantine-badge mantine-badge-grape">1 an</span>
                    </div>
                    <div class="mantine-card flex items-center justify-between">
                        <div>
                            <h5 class="font-bold"><code>theme_mode</code></h5>
                            <p class="text-sm text-gray-600">Tema preferată (light/dark)</p>
                        </div>
                        <span class="mantine-badge mantine-badge-grape">6 luni</span>
                    </div>
                    <div class="mantine-card flex items-center justify-between">
                        <div>
                            <h5 class="font-bold"><code>font_size</code></h5>
                            <p class="text-sm text-gray-600">Dimensiunea fontului preferată</p>
                        </div>
                        <span class="mantine-badge mantine-badge-grape">1 an</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marketing Cookies -->
        <div class="mantine-accordion-item">
            <div class="mantine-accordion-control" onclick="this.nextElementSibling.classList.toggle('active')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-bullhorn text-2xl" style="color: var(--mantine-color-orange);"></i>
                    <span>Cookie-uri de Marketing</span>
                    <span class="mantine-badge mantine-badge-orange">Opțional</span>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="mantine-accordion-content">
                <p class="mb-4 text-gray-600">Aceste cookie-uri sunt folosite pentru a-ți afișa reclame relevante.</p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="mantine-card">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fab fa-facebook text-3xl text-blue-600"></i>
                            <h4 class="font-bold"><code>_fbp</code></h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">Facebook Pixel pentru publicitate personalizată și tracking conversii</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">📅 3 luni</span>
                            <span class="mantine-badge mantine-badge-orange">Third-party</span>
                        </div>
                    </div>
                    <div class="mantine-card">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fas fa-ad text-3xl" style="color: var(--mantine-color-orange);"></i>
                            <h4 class="font-bold"><code>ads_id</code></h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">Identificare pentru publicitate țintită și retargeting</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">📅 1 an</span>
                            <span class="mantine-badge mantine-badge-orange">Third-party</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="mantine-card mt-12" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
            <div class="text-center">
                <h2 class="text-4xl font-bold mb-4">
                    <i class="fas fa-sliders-h mr-2"></i>
                    Centru de Control Cookie-uri
                </h2>
                <p class="text-lg text-gray-700 mb-6 max-w-2xl mx-auto">
                    Ai control complet asupra cookie-urilor utilizate pe site-ul nostru. Alege opțiunea care ți se potrivește.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="mantine-button mantine-button-green">
                        <i class="fas fa-check-circle"></i>
                        Acceptă Toate Cookie-urile
                    </button>
                    <button class="mantine-button mantine-button-primary">
                        <i class="fas fa-cog"></i>
                        Personalizează Setările
                    </button>
                    <button class="mantine-button mantine-button-red">
                        <i class="fas fa-times-circle"></i>
                        Respinge Cookie-urile Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-4xl font-bold mt-12 mb-6">Setări în Browser</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="mantine-card text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-chrome text-6xl text-blue-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Google Chrome</h4>
                <p class="text-sm text-gray-600">Setări → Confidențialitate și securitate → Cookie-uri</p>
            </div>
            <div class="mantine-card text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-firefox text-6xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Mozilla Firefox</h4>
                <p class="text-sm text-gray-600">Opțiuni → Confidențialitate și securitate</p>
            </div>
            <div class="mantine-card text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-safari text-6xl text-blue-400 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Apple Safari</h4>
                <p class="text-sm text-gray-600">Preferințe → Confidențialitate → Cookie-uri</p>
            </div>
            <div class="mantine-card text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-edge text-6xl text-blue-600 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Microsoft Edge</h4>
                <p class="text-sm text-gray-600">Setări → Cookie-uri și permisiuni site</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="mantine-card mt-8" style="border-left: 4px solid var(--mantine-color-orange); background: #fff4e6;">
            <div class="flex items-start gap-4">
                <i class="fas fa-envelope text-3xl" style="color: var(--mantine-color-orange);"></i>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Contactează-ne</h3>
                    <p class="text-gray-700">
                        Pentru întrebări sau nelămuriri privind politica noastră de cookie-uri, te rugăm să ne contactezi la:
                        <a href="mailto:privacy@example.com" class="font-bold hover:underline" style="color: var(--mantine-color-blue);">
                            privacy@example.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-12 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-2xl font-bold mb-2">CookiePolicy - Mantine v7</p>
            <p class="text-gray-400 mb-2">© 2024 Toate drepturile rezervate</p>
            <p class="text-sm text-gray-500">Ultima actualizare: <?php echo date('d F Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="mantine-button mantine-button-primary fixed bottom-8 right-8 shadow-2xl rounded-full w-14 h-14 flex items-center justify-center">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>
</body>
</html>
