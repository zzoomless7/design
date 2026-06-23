<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - NextUI 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --nextui-primary: #0072F5;
            --nextui-secondary: #7828C8;
            --nextui-success: #17C964;
            --nextui-warning: #F5A524;
            --nextui-error: #F31260;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
        }
        
        .nextui-card {
            background: white;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 4px 14px 0 rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .nextui-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px 0 rgba(0, 0, 0, 0.15);
        }
        
        .nextui-chip {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .nextui-button {
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .nextui-button:hover {
            transform: scale(1.02);
        }
        
        .nextui-button:active {
            transform: scale(0.98);
        }
        
        .nextui-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.1), transparent);
            margin: 1.5rem 0;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white border-b sticky top-0 z-50 backdrop-blur bg-opacity-70">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-cookie-bite text-white"></i>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        CookiePolicy
                    </span>
                </div>
                <div class="hidden md:flex items-center gap-6">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition font-medium">Acasă</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition font-medium">Despre</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative overflow-hidden" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-purple-600/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-24 text-center text-white">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-white/10 backdrop-blur rounded-3xl mb-6 animate-bounce">
                <span class="text-6xl">🍪</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-4">Politica de Cookie-uri</h1>
            <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                Experienți frumoasă cu NextUI 2 - Beautiful, fast and modern React UI library
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Alert -->
        <div class="nextui-card mb-8" style="border-left: 4px solid var(--nextui-primary); background: linear-gradient(135deg, #E7F3FF 0%, #F0E7FF 100%);">
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-info-circle text-2xl text-blue-600"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Ce sunt cookie-urile?</h3>
                    <p class="text-gray-700">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău. NextUI 2 oferă componente React moderne, 
                        frumoase și accesibile pentru a construi interfețe de utilizator excepționale.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 class="text-4xl font-bold mb-8 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
            Categorii de Cookie-uri
        </h2>

        <div class="grid gap-6 mb-12">
            <!-- Essential Cookies -->
            <div class="nextui-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, #17C964 0%, #12A150 100%);">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Cookie-uri Esențiale</h3>
                            <p class="text-sm text-gray-600">Necesare pentru funcționarea de bază</p>
                        </div>
                    </div>
                    <span class="nextui-chip" style="background-color: #D1FAE5; color: #065F46;">
                        Obligatorii
                    </span>
                </div>
                <div class="nextui-divider"></div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Cookie</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Scop</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Durată</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Tip</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="py-3 px-4"><code class="px-2 py-1 bg-gray-100 rounded-lg">session_id</code></td>
                                <td class="py-3 px-4 text-gray-600">Menține sesiunea utilizatorului</td>
                                <td class="py-3 px-4 text-gray-600">Sesiune</td>
                                <td class="py-3 px-4">
                                    <span class="nextui-chip text-xs" style="background-color: #DCFCE7; color: #15803D;">First-party</span>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="py-3 px-4"><code class="px-2 py-1 bg-gray-100 rounded-lg">csrf_token</code></td>
                                <td class="py-3 px-4 text-gray-600">Protecție securitate</td>
                                <td class="py-3 px-4 text-gray-600">24 ore</td>
                                <td class="py-3 px-4">
                                    <span class="nextui-chip text-xs" style="background-color: #DCFCE7; color: #15803D;">First-party</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3 px-4"><code class="px-2 py-1 bg-gray-100 rounded-lg">cookie_consent</code></td>
                                <td class="py-3 px-4 text-gray-600">Preferințe cookie-uri</td>
                                <td class="py-3 px-4 text-gray-600">1 an</td>
                                <td class="py-3 px-4">
                                    <span class="nextui-chip text-xs" style="background-color: #DCFCE7; color: #15803D;">First-party</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Performance Cookies -->
            <div class="nextui-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, #0072F5 0%, #0052CC 100%);">
                            <i class="fas fa-chart-line text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Cookie-uri de Performanță</h3>
                            <p class="text-sm text-gray-600">Analiză și optimizare</p>
                        </div>
                    </div>
                    <span class="nextui-chip" style="background-color: #DBEAFE; color: #1E40AF;">
                        Opțional
                    </span>
                </div>
                <div class="nextui-divider"></div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="p-4 bg-blue-50 rounded-xl border-2 border-blue-100 hover:border-blue-300 transition">
                        <code class="font-bold text-blue-600">_ga</code>
                        <p class="text-sm text-gray-600 mt-2 mb-3">Google Analytics - identificare</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">⏱️ 2 ani</span>
                            <i class="fas fa-chart-area text-blue-500"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-blue-50 rounded-xl border-2 border-blue-100 hover:border-blue-300 transition">
                        <code class="font-bold text-blue-600">_gid</code>
                        <p class="text-sm text-gray-600 mt-2 mb-3">Analytics - stocare date</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">⏱️ 24 ore</span>
                            <i class="fas fa-chart-area text-blue-500"></i>
                        </div>
                    </div>
                    <div class="p-4 bg-blue-50 rounded-xl border-2 border-blue-100 hover:border-blue-300 transition">
                        <code class="font-bold text-blue-600">_gat</code>
                        <p class="text-sm text-gray-600 mt-2 mb-3">Rate limiting</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">⏱️ 1 min</span>
                            <i class="fas fa-chart-area text-blue-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="nextui-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, #7828C8 0%, #5A1A9A 100%);">
                            <i class="fas fa-cog text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Cookie-uri de Funcționalitate</h3>
                            <p class="text-sm text-gray-600">Personalizare experiență</p>
                        </div>
                    </div>
                    <span class="nextui-chip" style="background-color: #F3E8FF; color: #6B21A8;">
                        Opțional
                    </span>
                </div>
                <div class="nextui-divider"></div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition">
                        <div>
                            <code class="font-bold text-purple-700">language_pref</code>
                            <p class="text-sm text-gray-600 mt-1">Preferință limbă</p>
                        </div>
                        <span class="nextui-chip text-xs" style="background-color: #E9D5FF; color: #6B21A8;">1 an</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition">
                        <div>
                            <code class="font-bold text-purple-700">theme_mode</code>
                            <p class="text-sm text-gray-600 mt-1">Temă vizuală</p>
                        </div>
                        <span class="nextui-chip text-xs" style="background-color: #E9D5FF; color: #6B21A8;">6 luni</span>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="nextui-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, #F5A524 0%, #CC8514 100%);">
                            <i class="fas fa-bullhorn text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Cookie-uri de Marketing</h3>
                            <p class="text-sm text-gray-600">Publicitate țintită</p>
                        </div>
                    </div>
                    <span class="nextui-chip" style="background-color: #FEF3C7; color: #92400E;">
                        Opțional
                    </span>
                </div>
                <div class="nextui-divider"></div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="nextui-card" style="background: linear-gradient(135deg, #FFF7ED 0%, #FFEDD5 100%);">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fab fa-facebook text-3xl text-blue-600"></i>
                            <code class="font-bold text-lg">_fbp</code>
                        </div>
                        <p class="text-sm text-gray-700 mb-3">Facebook Pixel pentru tracking</p>
                        <span class="text-xs text-gray-500">📅 3 luni</span>
                    </div>
                    <div class="nextui-card" style="background: linear-gradient(135deg, #FFF7ED 0%, #FFEDD5 100%);">
                        <div class="flex items-center gap-3 mb-3">
                            <i class="fas fa-ad text-3xl text-orange-600"></i>
                            <code class="font-bold text-lg">ads_id</code>
                        </div>
                        <p class="text-sm text-gray-700 mb-3">Advertising identifier</p>
                        <span class="text-xs text-gray-500">📅 1 an</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="nextui-card text-center mb-12" style="background: linear-gradient(135deg, #E0E7FF 0%, #F3E8FF 100%);">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <i class="fas fa-sliders-h text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold mb-4">Gestionează Preferințele</h2>
            <p class="text-gray-700 mb-8 max-w-2xl mx-auto">
                Control complet și transparent asupra cookie-urilor utilizate
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="nextui-button text-white" style="background: linear-gradient(135deg, #17C964 0%, #12A150 100%);">
                    <i class="fas fa-check-circle"></i>
                    Acceptă Toate
                </button>
                <button class="nextui-button text-white" style="background: linear-gradient(135deg, #0072F5 0%, #0052CC 100%);">
                    <i class="fas fa-cog"></i>
                    Personalizează
                </button>
                <button class="nextui-button text-white" style="background: linear-gradient(135deg, #F31260 0%, #C20E4D 100%);">
                    <i class="fas fa-times-circle"></i>
                    Respinge Opționale
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-4xl font-bold mb-8 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
            Setări Browser
        </h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="nextui-card text-center">
                <i class="fab fa-chrome text-6xl text-blue-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Chrome</h4>
                <p class="text-sm text-gray-600">Setări → Confidențialitate</p>
            </div>
            <div class="nextui-card text-center">
                <i class="fab fa-firefox text-6xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Firefox</h4>
                <p class="text-sm text-gray-600">Opțiuni → Privacy</p>
            </div>
            <div class="nextui-card text-center">
                <i class="fab fa-safari text-6xl text-blue-400 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Safari</h4>
                <p class="text-sm text-gray-600">Preferințe → Privacy</p>
            </div>
            <div class="nextui-card text-center">
                <i class="fab fa-edge text-6xl text-blue-600 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Edge</h4>
                <p class="text-sm text-gray-600">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="nextui-card" style="border-left: 4px solid var(--nextui-warning); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%);">
            <div class="flex gap-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-envelope text-2xl text-yellow-600"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Contactează-ne</h3>
                    <p class="text-gray-700">
                        Pentru întrebări: 
                        <a href="mailto:privacy@example.com" class="font-bold text-blue-600 hover:underline">
                            privacy@example.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white mt-12 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-2xl font-bold mb-2">CookiePolicy - NextUI 2</p>
            <p class="text-gray-400 mb-2">© 2024 Toate drepturile rezervate</p>
            <p class="text-sm text-gray-500">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 w-14 h-14 rounded-full text-white shadow-2xl flex items-center justify-center text-xl transition-all hover:scale-110"
            style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
