<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Ant Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/antd/5.10.0/reset.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --ant-primary-color: #1890ff;
            --ant-success-color: #52c41a;
            --ant-warning-color: #faad14;
            --ant-error-color: #f5222d;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #f0f2f5;
        }
        
        .ant-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.09);
            padding: 24px;
            margin-bottom: 16px;
        }
        
        .ant-card:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
            transition: all 0.3s;
        }
        
        .ant-card-head {
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 16px;
            margin-bottom: 16px;
            font-size: 20px;
            font-weight: 600;
        }
        
        .ant-btn {
            height: 40px;
            padding: 0 20px;
            font-size: 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .ant-btn-primary {
            background: var(--ant-primary-color);
            color: white;
        }
        
        .ant-btn-primary:hover {
            background: #40a9ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(24, 144, 255, 0.4);
        }
        
        .ant-btn-success {
            background: var(--ant-success-color);
            color: white;
        }
        
        .ant-btn-success:hover {
            background: #73d13d;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(82, 196, 26, 0.4);
        }
        
        .ant-btn-danger {
            background: var(--ant-error-color);
            color: white;
        }
        
        .ant-btn-danger:hover {
            background: #ff4d4f;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(245, 34, 45, 0.4);
        }
        
        .ant-alert {
            padding: 16px;
            border-radius: 6px;
            margin-bottom: 16px;
            border: 1px solid;
        }
        
        .ant-alert-info {
            background: #e6f7ff;
            border-color: #91d5ff;
            color: #0050b3;
        }
        
        .ant-tag {
            display: inline-block;
            padding: 2px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .ant-tag-success {
            background: #f6ffed;
            border: 1px solid #b7eb8f;
            color: #52c41a;
        }
        
        .ant-tag-processing {
            background: #e6f7ff;
            border: 1px solid #91d5ff;
            color: #1890ff;
        }
        
        .ant-tag-warning {
            background: #fffbe6;
            border: 1px solid #ffe58f;
            color: #faad14;
        }
        
        .ant-tag-error {
            background: #fff2f0;
            border: 1px solid #ffccc7;
            color: #ff4d4f;
        }
        
        .ant-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .ant-table th {
            background: #fafafa;
            padding: 16px;
            text-align: left;
            font-weight: 600;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .ant-table td {
            padding: 16px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .ant-table tr:hover {
            background: #fafafa;
        }
        
        .ant-collapse-item {
            background: white;
            border: 1px solid #d9d9d9;
            border-radius: 6px;
            margin-bottom: 8px;
            overflow: hidden;
        }
        
        .ant-collapse-header {
            padding: 16px;
            font-weight: 600;
            cursor: pointer;
            background: #fafafa;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .ant-collapse-header:hover {
            background: #f0f0f0;
        }
        
        .ant-collapse-content {
            padding: 16px;
            display: none;
        }
        
        .ant-collapse-content.active {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fas fa-cookie-bite text-3xl"></i>
                    <h1 class="text-2xl font-bold">CookiePolicy</h1>
                </div>
                <nav class="hidden md:flex gap-6">
                    <a href="#" class="hover:text-blue-200 transition">Acasă</a>
                    <a href="#" class="hover:text-blue-200 transition">Despre</a>
                    <a href="#" class="hover:text-blue-200 transition">Contact</a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <div class="bg-gradient-to-br from-blue-50 to-blue-100 py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="text-6xl mb-4">🍪</div>
            <h1 class="text-5xl font-bold mb-4 text-gray-800">Politica de Cookie-uri</h1>
            <p class="text-xl text-gray-600">Design elegant cu Ant Design System</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Info Alert -->
        <div class="ant-alert ant-alert-info">
            <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-2xl"></i>
                <div>
                    <h3 class="font-bold text-lg mb-2">Ce sunt cookie-urile?</h3>
                    <p>Cookie-urile sunt fișiere text mici care sunt stocate pe dispozitivul tău atunci când vizitezi un site web. Ele ajută site-ul să funcționeze eficient și să îți ofere o experiență personalizată.</p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 class="text-3xl font-bold mt-8 mb-6">Categorii de Cookie-uri</h2>

        <!-- Essential Cookies Card -->
        <div class="ant-card">
            <div class="ant-card-head flex items-center gap-3">
                <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                <span>Cookie-uri Esențiale</span>
            </div>
            <p class="mb-4 text-gray-600">Aceste cookie-uri sunt necesare pentru funcționarea de bază a site-ului și nu pot fi dezactivate.</p>
            <table class="ant-table">
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
                        <td><span class="ant-tag ant-tag-success">Esențial</span></td>
                    </tr>
                    <tr>
                        <td><code class="bg-gray-100 px-2 py-1 rounded">csrf_token</code></td>
                        <td>Protecție împotriva atacurilor CSRF</td>
                        <td>24 ore</td>
                        <td><span class="ant-tag ant-tag-success">Esențial</span></td>
                    </tr>
                    <tr>
                        <td><code class="bg-gray-100 px-2 py-1 rounded">cookie_consent</code></td>
                        <td>Stochează preferințele tale de cookie-uri</td>
                        <td>1 an</td>
                        <td><span class="ant-tag ant-tag-success">Esențial</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Performance Cookies Card -->
        <div class="ant-card">
            <div class="ant-card-head flex items-center gap-3">
                <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                <span>Cookie-uri de Performanță</span>
            </div>
            <p class="mb-4 text-gray-600">Aceste cookie-uri colectează informații despre modul în care vizitatorii utilizează site-ul nostru.</p>
            <table class="ant-table">
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
                        <td><code class="bg-gray-100 px-2 py-1 rounded">_ga</code></td>
                        <td>Google Analytics - identificare utilizatori unici</td>
                        <td>2 ani</td>
                        <td><span class="ant-tag ant-tag-processing">Performanță</span></td>
                    </tr>
                    <tr>
                        <td><code class="bg-gray-100 px-2 py-1 rounded">_gid</code></td>
                        <td>Google Analytics - stocare informații despre vizită</td>
                        <td>24 ore</td>
                        <td><span class="ant-tag ant-tag-processing">Performanță</span></td>
                    </tr>
                    <tr>
                        <td><code class="bg-gray-100 px-2 py-1 rounded">_gat</code></td>
                        <td>Google Analytics - limitare rate de cereri</td>
                        <td>1 minut</td>
                        <td><span class="ant-tag ant-tag-processing">Performanță</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Functionality Cookies Card -->
        <div class="ant-card">
            <div class="ant-card-head flex items-center gap-3">
                <i class="fas fa-cog text-purple-600 text-2xl"></i>
                <span>Cookie-uri de Funcționalitate</span>
            </div>
            <p class="mb-4 text-gray-600">Aceste cookie-uri permit site-ului să își amintească alegerile tale.</p>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="border border-gray-200 rounded p-4 hover:border-blue-400 transition">
                    <div class="flex justify-between items-center mb-2">
                        <code class="font-bold">language_pref</code>
                        <span class="ant-tag ant-tag-processing">1 an</span>
                    </div>
                    <p class="text-sm text-gray-600">Stochează preferința de limbă</p>
                </div>
                <div class="border border-gray-200 rounded p-4 hover:border-blue-400 transition">
                    <div class="flex justify-between items-center mb-2">
                        <code class="font-bold">theme_mode</code>
                        <span class="ant-tag ant-tag-processing">6 luni</span>
                    </div>
                    <p class="text-sm text-gray-600">Tema preferată (light/dark)</p>
                </div>
                <div class="border border-gray-200 rounded p-4 hover:border-blue-400 transition">
                    <div class="flex justify-between items-center mb-2">
                        <code class="font-bold">font_size</code>
                        <span class="ant-tag ant-tag-processing">1 an</span>
                    </div>
                    <p class="text-sm text-gray-600">Dimensiunea fontului preferată</p>
                </div>
                <div class="border border-gray-200 rounded p-4 hover:border-blue-400 transition">
                    <div class="flex justify-between items-center mb-2">
                        <code class="font-bold">layout_pref</code>
                        <span class="ant-tag ant-tag-processing">6 luni</span>
                    </div>
                    <p class="text-sm text-gray-600">Preferințe de layout</p>
                </div>
            </div>
        </div>

        <!-- Marketing Cookies Card -->
        <div class="ant-card">
            <div class="ant-card-head flex items-center gap-3">
                <i class="fas fa-bullhorn text-orange-600 text-2xl"></i>
                <span>Cookie-uri de Marketing</span>
            </div>
            <p class="mb-4 text-gray-600">Aceste cookie-uri sunt folosite pentru a-ți afișa reclame relevante.</p>
            <table class="ant-table">
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
                        <td><code class="bg-gray-100 px-2 py-1 rounded">_fbp</code></td>
                        <td>Facebook Pixel pentru publicitate personalizată</td>
                        <td>3 luni</td>
                        <td><span class="ant-tag ant-tag-warning">Marketing</span></td>
                    </tr>
                    <tr>
                        <td><code class="bg-gray-100 px-2 py-1 rounded">ads_preferences</code></td>
                        <td>Preferințe pentru publicitate țintită</td>
                        <td>1 an</td>
                        <td><span class="ant-tag ant-tag-warning">Marketing</span></td>
                    </tr>
                    <tr>
                        <td><code class="bg-gray-100 px-2 py-1 rounded">retargeting_id</code></td>
                        <td>Identificare pentru campaniile de retargeting</td>
                        <td>90 zile</td>
                        <td><span class="ant-tag ant-tag-warning">Marketing</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Cookie Management -->
        <div class="ant-card bg-gradient-to-r from-blue-50 to-indigo-50 mt-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">
                    <i class="fas fa-sliders-h mr-2"></i>
                    Gestionează Preferințele de Cookie-uri
                </h2>
                <p class="text-gray-700 mb-6 text-lg">
                    Ai control complet asupra cookie-urilor utilizate pe site-ul nostru
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="ant-btn ant-btn-success">
                        <i class="fas fa-check-circle"></i>
                        Acceptă Toate Cookie-urile
                    </button>
                    <button class="ant-btn ant-btn-primary">
                        <i class="fas fa-cog"></i>
                        Personalizează Setările
                    </button>
                    <button class="ant-btn ant-btn-danger">
                        <i class="fas fa-times-circle"></i>
                        Respinge Cookie-urile Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-3xl font-bold mt-12 mb-6">Setări în Browser</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="ant-card text-center">
                <i class="fab fa-chrome text-6xl text-blue-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Google Chrome</h4>
                <p class="text-sm text-gray-600">Setări → Confidențialitate și securitate → Cookie-uri</p>
            </div>
            <div class="ant-card text-center">
                <i class="fab fa-firefox text-6xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Mozilla Firefox</h4>
                <p class="text-sm text-gray-600">Opțiuni → Confidențialitate și securitate</p>
            </div>
            <div class="ant-card text-center">
                <i class="fab fa-safari text-6xl text-blue-400 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Apple Safari</h4>
                <p class="text-sm text-gray-600">Preferințe → Confidențialitate → Cookie-uri</p>
            </div>
            <div class="ant-card text-center">
                <i class="fab fa-edge text-6xl text-blue-600 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Microsoft Edge</h4>
                <p class="text-sm text-gray-600">Setări → Cookie-uri și permisiuni site</p>
            </div>
        </div>

        <!-- Contact Card -->
        <div class="ant-card bg-yellow-50 border-l-4 border-yellow-500 mt-8">
            <h3 class="text-2xl font-bold mb-3 flex items-center gap-2">
                <i class="fas fa-envelope text-yellow-600"></i>
                Contactează-ne
            </h3>
            <p class="text-gray-700">
                Pentru întrebări sau nelămuriri privind politica noastră de cookie-uri, te rugăm să ne contactezi la:
                <a href="mailto:privacy@example.com" class="text-blue-600 font-semibold hover:underline ml-1">
                    privacy@example.com
                </a>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-lg font-bold mb-2">CookiePolicy - Ant Design</p>
            <p class="text-gray-400 mb-2">© 2024 Toate drepturile rezervate</p>
            <p class="text-sm text-gray-500">Ultima actualizare: <?php echo date('d F Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 bg-blue-500 hover:bg-blue-600 text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center text-xl transition-all hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Collapse functionality
        document.querySelectorAll('.ant-collapse-header').forEach(header => {
            header.addEventListener('click', function() {
                const content = this.nextElementSibling;
                content.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
