<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Radix UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        [data-state="open"] {
            animation: slideDown 0.2s ease-out;
        }
        
        .radix-accordion-trigger {
            all: unset;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 1rem;
            background: white;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        
        .radix-accordion-trigger:hover {
            background: #f9fafb;
        }
        
        .radix-accordion-trigger[data-state="open"] .chevron {
            transform: rotate(180deg);
        }
        
        .chevron {
            transition: transform 0.2s;
        }
        
        .radix-accordion-content {
            overflow: hidden;
        }
        
        .radix-accordion-content[data-state="closed"] {
            display: none;
        }
        
        .radix-accordion-content[data-state="open"] {
            animation: slideDown 0.3s ease-out;
        }
    </style>
</head>
<body class="bg-slate-50">
    <!-- Header -->
    <header class="bg-white border-b sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-violet-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-cookie-bite text-white"></i>
                    </div>
                    <span class="text-xl font-bold">CookiePolicy</span>
                </div>
                <nav class="hidden md:flex gap-6">
                    <a href="#" class="text-slate-600 hover:text-slate-900 transition">Acasă</a>
                    <a href="#" class="text-slate-600 hover:text-slate-900 transition">Despre</a>
                    <a href="#" class="text-slate-600 hover:text-slate-900 transition">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-violet-600 via-purple-600 to-indigo-700 text-white py-20">
        <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:30px_30px]"></div>
        <div class="relative max-w-7xl mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/10 rounded-2xl mb-6 backdrop-blur">
                <span class="text-5xl">🍪</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Politica de Cookie-uri</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Construit cu Radix UI - Primitives accesibile și fără stil</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-12">
        <!-- Alert Banner -->
        <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-6 mb-8 shadow-sm">
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-info-circle text-blue-600"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-blue-900 mb-2">Ce sunt cookie-urile?</h3>
                    <p class="text-blue-800">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău atunci când vizitezi un site web. 
                        Radix UI oferă primitive accesibile și nestilistice pentru construirea interfețelor utilizator de înaltă calitate.
                    </p>
                </div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="mb-8">
            <h2 class="text-4xl font-bold mb-6">Categorii de Cookie-uri</h2>
            
            <div role="tablist" class="flex border-b border-slate-200 mb-6">
                <button role="tab" aria-selected="true" data-state="active" 
                        class="px-6 py-3 font-medium text-violet-600 border-b-2 border-violet-600 transition-colors"
                        onclick="switchTab(0)">
                    <i class="fas fa-shield-alt mr-2"></i>Esențiale
                </button>
                <button role="tab" aria-selected="false" data-state="inactive"
                        class="px-6 py-3 font-medium text-slate-600 hover:text-slate-900 transition-colors"
                        onclick="switchTab(1)">
                    <i class="fas fa-chart-line mr-2"></i>Performanță
                </button>
                <button role="tab" aria-selected="false" data-state="inactive"
                        class="px-6 py-3 font-medium text-slate-600 hover:text-slate-900 transition-colors"
                        onclick="switchTab(2)">
                    <i class="fas fa-cog mr-2"></i>Funcționalitate
                </button>
                <button role="tab" aria-selected="false" data-state="inactive"
                        class="px-6 py-3 font-medium text-slate-600 hover:text-slate-900 transition-colors"
                        onclick="switchTab(3)">
                    <i class="fas fa-bullhorn mr-2"></i>Marketing
                </button>
            </div>

            <!-- Tab Panels -->
            <div>
                <!-- Essential Tab -->
                <div role="tabpanel" data-state="active" class="tab-panel">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Cookie-uri Esențiale</h3>
                                <p class="text-slate-600 text-sm">Necesare pentru funcționarea de bază</p>
                            </div>
                        </div>
                        <div class="overflow-x-auto mt-6">
                            <table class="w-full">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">Cookie</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">Scop</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">Durată</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-700 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200">
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="px-6 py-4 whitespace-nowrap"><code class="px-2 py-1 bg-slate-100 rounded text-sm">session_id</code></td>
                                        <td class="px-6 py-4 text-sm text-slate-600">Menține sesiunea activă</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">Sesiune</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Activ
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="px-6 py-4 whitespace-nowrap"><code class="px-2 py-1 bg-slate-100 rounded text-sm">csrf_token</code></td>
                                        <td class="px-6 py-4 text-sm text-slate-600">Protecție CSRF</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">24 ore</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Activ
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="px-6 py-4 whitespace-nowrap"><code class="px-2 py-1 bg-slate-100 rounded text-sm">cookie_consent</code></td>
                                        <td class="px-6 py-4 text-sm text-slate-600">Preferințe cookie-uri</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">1 an</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Activ
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Performance Tab -->
                <div role="tabpanel" data-state="inactive" class="tab-panel hidden">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Cookie-uri de Performanță</h3>
                                <p class="text-slate-600 text-sm">Analiză și optimizare</p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-3 gap-4 mt-6">
                            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-md transition">
                                <code class="text-sm font-bold text-blue-600">_ga</code>
                                <p class="text-sm text-slate-600 mt-2">Google Analytics - identificare utilizatori</p>
                                <div class="mt-3 pt-3 border-t border-slate-200">
                                    <span class="text-xs text-slate-500">⏱️ 2 ani</span>
                                </div>
                            </div>
                            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-md transition">
                                <code class="text-sm font-bold text-blue-600">_gid</code>
                                <p class="text-sm text-slate-600 mt-2">Analytics - stocare informații</p>
                                <div class="mt-3 pt-3 border-t border-slate-200">
                                    <span class="text-xs text-slate-500">⏱️ 24 ore</span>
                                </div>
                            </div>
                            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-md transition">
                                <code class="text-sm font-bold text-blue-600">_gat</code>
                                <p class="text-sm text-slate-600 mt-2">Rate limiting pentru cereri</p>
                                <div class="mt-3 pt-3 border-t border-slate-200">
                                    <span class="text-xs text-slate-500">⏱️ 1 minut</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Functionality Tab -->
                <div role="tabpanel" data-state="inactive" class="tab-panel hidden">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-cog text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Cookie-uri de Funcționalitate</h3>
                                <p class="text-slate-600 text-sm">Personalizare și preferințe</p>
                            </div>
                        </div>
                        <div class="space-y-3 mt-6">
                            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition">
                                <div>
                                    <code class="font-bold">language_pref</code>
                                    <p class="text-sm text-slate-600 mt-1">Preferință de limbă</p>
                                </div>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">1 an</span>
                            </div>
                            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition">
                                <div>
                                    <code class="font-bold">theme_mode</code>
                                    <p class="text-sm text-slate-600 mt-1">Temă vizuală (light/dark)</p>
                                </div>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">6 luni</span>
                            </div>
                            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition">
                                <div>
                                    <code class="font-bold">font_size</code>
                                    <p class="text-sm text-slate-600 mt-1">Dimensiune font preferată</p>
                                </div>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">1 an</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marketing Tab -->
                <div role="tabpanel" data-state="inactive" class="tab-panel hidden">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-bullhorn text-orange-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Cookie-uri de Marketing</h3>
                                <p class="text-slate-600 text-sm">Publicitate și retargeting</p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div class="border-2 border-slate-200 rounded-lg p-6 hover:border-orange-300 transition">
                                <div class="flex items-center gap-3 mb-3">
                                    <i class="fab fa-facebook text-3xl text-blue-600"></i>
                                    <code class="font-bold text-lg">_fbp</code>
                                </div>
                                <p class="text-sm text-slate-600 mb-4">Facebook Pixel pentru tracking și publicitate personalizată</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-slate-500">📅 3 luni</span>
                                    <span class="px-2 py-1 bg-orange-100 text-orange-700 rounded text-xs font-semibold">Third-party</span>
                                </div>
                            </div>
                            <div class="border-2 border-slate-200 rounded-lg p-6 hover:border-orange-300 transition">
                                <div class="flex items-center gap-3 mb-3">
                                    <i class="fas fa-ad text-3xl text-orange-600"></i>
                                    <code class="font-bold text-lg">ads_id</code>
                                </div>
                                <p class="text-sm text-slate-600 mb-4">Identificare pentru publicitate țintită și campanii</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-slate-500">📅 1 an</span>
                                    <span class="px-2 py-1 bg-orange-100 text-orange-700 rounded text-xs font-semibold">Third-party</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management Dialog -->
        <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-2xl shadow-xl p-8 mb-12">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-violet-100 rounded-full mb-4">
                    <i class="fas fa-sliders-h text-2xl text-violet-600"></i>
                </div>
                <h2 class="text-3xl font-bold mb-3">Centru de Control Cookie-uri</h2>
                <p class="text-slate-600 mb-8 max-w-2xl mx-auto">
                    Gestionează preferințele tale de cookie-uri în mod transparent și cu control total
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="px-8 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition-colors shadow-lg flex items-center gap-2">
                        <i class="fas fa-check-circle"></i>
                        Acceptă Toate
                    </button>
                    <button class="px-8 py-3 bg-violet-600 text-white rounded-lg font-semibold hover:bg-violet-700 transition-colors shadow-lg flex items-center gap-2">
                        <i class="fas fa-cog"></i>
                        Personalizează
                    </button>
                    <button class="px-8 py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition-colors shadow-lg flex items-center gap-2">
                        <i class="fas fa-times-circle"></i>
                        Respinge Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-4xl font-bold mb-6">Setări Browser</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-chrome text-6xl text-blue-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Chrome</h4>
                <p class="text-sm text-slate-600">Setări → Confidențialitate</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-firefox text-6xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Firefox</h4>
                <p class="text-sm text-slate-600">Opțiuni → Privacy</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-safari text-6xl text-blue-400 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Safari</h4>
                <p class="text-sm text-slate-600">Preferințe → Privacy</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow">
                <i class="fab fa-edge text-6xl text-blue-600 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Edge</h4>
                <p class="text-sm text-slate-600">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 rounded-lg p-6 mt-12 shadow-sm">
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-envelope text-yellow-600"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-yellow-900 mb-2">Contactează-ne</h3>
                    <p class="text-yellow-800">
                        Pentru întrebări despre politica de cookie-uri: 
                        <a href="mailto:privacy@example.com" class="font-bold hover:underline">privacy@example.com</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 py-10 text-center">
            <p class="text-2xl font-bold mb-2">CookiePolicy - Radix UI</p>
            <p class="text-slate-400 mb-2">© 2024 Toate drepturile rezervate</p>
            <p class="text-sm text-slate-500">Ultima actualizare: <?php echo date('d F Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 w-14 h-14 bg-violet-600 hover:bg-violet-700 text-white rounded-full shadow-2xl flex items-center justify-center transition-all hover:scale-110">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <script>
        function switchTab(index) {
            // Update tab buttons
            const tabs = document.querySelectorAll('[role="tab"]');
            tabs.forEach((tab, i) => {
                if (i === index) {
                    tab.setAttribute('aria-selected', 'true');
                    tab.setAttribute('data-state', 'active');
                    tab.classList.add('text-violet-600', 'border-b-2', 'border-violet-600');
                    tab.classList.remove('text-slate-600');
                } else {
                    tab.setAttribute('aria-selected', 'false');
                    tab.setAttribute('data-state', 'inactive');
                    tab.classList.remove('text-violet-600', 'border-b-2', 'border-violet-600');
                    tab.classList.add('text-slate-600');
                }
            });
            
            // Update tab panels
            const panels = document.querySelectorAll('[role="tabpanel"]');
            panels.forEach((panel, i) => {
                if (i === index) {
                    panel.setAttribute('data-state', 'active');
                    panel.classList.remove('hidden');
                } else {
                    panel.setAttribute('data-state', 'inactive');
                    panel.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>
