<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - UnoCSS</title>
    <script src="https://cdn.jsdelivr.net/npm/@unocss/runtime"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        [un-cloak] { display: none; }
    </style>
</head>
<body un-cloak class="m-0 p-0 bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-xl">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="text-2xl font-bold">🍪 CookiePolicy</div>
            <div class="hidden md:flex gap-6">
                <a href="#" class="hover:text-cyan-200 transition">Acasă</a>
                <a href="#" class="hover:text-cyan-200 transition">Despre</a>
                <a href="#" class="hover:text-cyan-200 transition">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 text-white py-24">
        <div class="container mx-auto px-4 text-center">
            <div class="text-8xl mb-6 animate-bounce">🍪</div>
            <h1 class="text-6xl font-black mb-4">Politica de Cookie-uri</h1>
            <p class="text-2xl opacity-90">Dezvoltat cu UnoCSS - Motorul atomic instantaneu</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12 max-w-7xl">
        <!-- Intro Box -->
        <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-2xl shadow-2xl p-8 mb-12 border-2 border-cyan-200">
            <div class="flex items-start gap-4">
                <div class="text-5xl text-cyan-600">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div>
                    <h2 class="text-4xl font-bold mb-4 text-cyan-900">Ce sunt cookie-urile?</h2>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău când accesezi un site web. 
                        Ele ajută la îmbunătățirea experienței tale online prin memorarea preferințelor și optimizarea funcționalității site-ului.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 class="text-4xl font-bold mb-8 text-center">Categorii de Cookie-uri</h2>
        
        <!-- Essential Cookies -->
        <div class="mb-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-400 to-emerald-500 p-6">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-lock"></i>
                        Cookie-uri Esențiale
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Cookie-uri strict necesare pentru funcționarea site-ului.</p>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-green-50">
                                    <th class="border border-green-200 p-3 text-left font-semibold">Cookie</th>
                                    <th class="border border-green-200 p-3 text-left font-semibold">Scop</th>
                                    <th class="border border-green-200 p-3 text-left font-semibold">Durată</th>
                                    <th class="border border-green-200 p-3 text-left font-semibold">Tip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-green-50 transition">
                                    <td class="border border-green-200 p-3 font-mono text-sm">session_id</td>
                                    <td class="border border-green-200 p-3">Menține sesiunea activă</td>
                                    <td class="border border-green-200 p-3">Sesiune</td>
                                    <td class="border border-green-200 p-3">
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">First-party</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-green-50 transition">
                                    <td class="border border-green-200 p-3 font-mono text-sm">csrf_token</td>
                                    <td class="border border-green-200 p-3">Protecție CSRF</td>
                                    <td class="border border-green-200 p-3">24 ore</td>
                                    <td class="border border-green-200 p-3">
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">First-party</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Cookies -->
        <div class="mb-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-400 to-indigo-500 p-6">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-chart-bar"></i>
                        Cookie-uri de Performanță
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Ne ajută să înțelegem cum interacționezi cu site-ul.</p>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <p class="font-mono font-bold text-blue-900">_ga</p>
                            <p class="text-sm text-gray-600 mt-2">Google Analytics - identificare</p>
                            <p class="text-xs text-gray-500 mt-1">⏱️ 2 ani</p>
                        </div>
                        <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <p class="font-mono font-bold text-blue-900">_gid</p>
                            <p class="text-sm text-gray-600 mt-2">Analytics - stocare date</p>
                            <p class="text-xs text-gray-500 mt-1">⏱️ 24 ore</p>
                        </div>
                        <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <p class="font-mono font-bold text-blue-900">_gat</p>
                            <p class="text-sm text-gray-600 mt-2">Rate limiting requests</p>
                            <p class="text-xs text-gray-500 mt-1">⏱️ 1 minut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Functionality Cookies -->
        <div class="mb-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-purple-400 to-pink-500 p-6">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-wrench"></i>
                        Cookie-uri de Funcționalitate
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Personalizează experiența ta pe site.</p>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-purple-50 rounded-lg p-4 hover:bg-purple-100 transition">
                            <div>
                                <p class="font-bold">language_pref</p>
                                <p class="text-sm text-gray-600">Limba preferată</p>
                            </div>
                            <span class="bg-purple-200 text-purple-800 px-3 py-1 rounded-full text-xs font-bold">1 an</span>
                        </div>
                        <div class="flex items-center justify-between bg-purple-50 rounded-lg p-4 hover:bg-purple-100 transition">
                            <div>
                                <p class="font-bold">theme_mode</p>
                                <p class="text-sm text-gray-600">Temă vizuală (light/dark)</p>
                            </div>
                            <span class="bg-purple-200 text-purple-800 px-3 py-1 rounded-full text-xs font-bold">6 luni</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marketing Cookies -->
        <div class="mb-12">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-orange-400 to-red-500 p-6">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-ad"></i>
                        Cookie-uri de Marketing
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Pentru reclame personalizate și relevante.</p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="border-2 border-orange-200 rounded-lg p-4 hover:border-orange-400 transition">
                            <p class="font-mono font-bold text-orange-900">_fbp</p>
                            <p class="text-sm text-gray-600 mt-2">Facebook Pixel pentru tracking publicitate</p>
                            <p class="text-xs text-gray-500 mt-1">📅 3 luni</p>
                        </div>
                        <div class="border-2 border-orange-200 rounded-lg p-4 hover:border-orange-400 transition">
                            <p class="font-mono font-bold text-orange-900">ads_preferences</p>
                            <p class="text-sm text-gray-600 mt-2">Preferințe publicitate țintită</p>
                            <p class="text-xs text-gray-500 mt-1">📅 1 an</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Control Panel -->
        <div class="bg-gradient-to-r from-indigo-100 to-purple-100 rounded-2xl shadow-2xl p-10 mb-12">
            <h2 class="text-4xl font-bold text-center mb-6">
                <i class="fas fa-sliders-h mr-2"></i>
                Centru de Control Cookie-uri
            </h2>
            <p class="text-center text-lg text-gray-700 mb-8">
                Alege cum vrei să fie utilizate cookie-urile pe acest site
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-10 rounded-xl shadow-lg transform hover:scale-110 transition-all duration-300 flex items-center gap-2">
                    <i class="fas fa-check-circle text-2xl"></i>
                    Acceptă Toate
                </button>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-10 rounded-xl shadow-lg transform hover:scale-110 transition-all duration-300 flex items-center gap-2">
                    <i class="fas fa-cog text-2xl"></i>
                    Configurează
                </button>
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-4 px-10 rounded-xl shadow-lg transform hover:scale-110 transition-all duration-300 flex items-center gap-2">
                    <i class="fas fa-times-circle text-2xl"></i>
                    Respinge Toate
                </button>
            </div>
        </div>

        <!-- Browser Guide -->
        <h2 class="text-4xl font-bold mb-8 text-center">Ghid Browser</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 hover:shadow-2xl transition-all">
                <i class="fab fa-chrome text-6xl text-blue-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Chrome</h4>
                <p class="text-sm text-gray-600">Setări → Confidențialitate</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 hover:shadow-2xl transition-all">
                <i class="fab fa-firefox text-6xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Firefox</h4>
                <p class="text-sm text-gray-600">Preferințe → Privacy</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 hover:shadow-2xl transition-all">
                <i class="fab fa-safari text-6xl text-blue-400 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Safari</h4>
                <p class="text-sm text-gray-600">Preferințe → Privacy</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 hover:shadow-2xl transition-all">
                <i class="fab fa-edge text-6xl text-blue-600 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">Edge</h4>
                <p class="text-sm text-gray-600">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-yellow-100 border-l-8 border-yellow-500 rounded-xl shadow-lg p-8">
            <h3 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-envelope text-yellow-600"></i>
                Contact
            </h3>
            <p class="text-lg">
                Întrebări despre cookie-uri? Scrie-ne la: 
                <a href="mailto:privacy@example.com" class="text-blue-600 font-bold hover:underline">
                    privacy@example.com
                </a>
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-black text-white py-10">
        <div class="container mx-auto px-4 text-center">
            <p class="text-2xl font-bold mb-2">🍪 CookiePolicy - UnoCSS</p>
            <p class="text-gray-400 mb-2">© 2024 Toate drepturile rezervate</p>
            <p class="text-sm text-gray-500">Actualizat: <?php echo date('d F Y'); ?></p>
        </div>
    </footer>

    <!-- Floating Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 bg-cyan-500 hover:bg-cyan-600 text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center text-2xl transform hover:scale-125 transition-all duration-300 z-50">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
