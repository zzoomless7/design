<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Windi CSS</title>
    <script src="https://cdn.jsdelivr.net/npm/@windicss/runtime"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-8">
                    <a href="#" class="text-2xl font-bold">CookiePolicy</a>
                    <div class="hidden md:flex space-x-4">
                        <a href="#" class="hover:text-purple-200 transition">Acasă</a>
                        <a href="#" class="hover:text-purple-200 transition">Despre</a>
                        <a href="#" class="hover:text-purple-200 transition">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <div class="text-6xl mb-4">
                <i class="fas fa-cookie"></i>
            </div>
            <h1 class="text-5xl font-bold mb-4">Politica de Cookie-uri</h1>
            <p class="text-xl opacity-90">Construită cu Windi CSS - Utilitate rapidă și eficientă</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Introduction -->
        <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-3xl font-bold mb-4 text-blue-900 flex items-center">
                <i class="fas fa-info-circle mr-3"></i>
                Ce sunt cookie-urile?
            </h2>
            <p class="text-gray-700 leading-relaxed">
                Cookie-urile sunt fragmente mici de date stocate pe dispozitivul tău când vizitezi un site web. 
                Acestea permit site-ului să funcționeze eficient și să îți amintească preferințele.
            </p>
        </div>

        <!-- Cookie Types Grid -->
        <h2 class="text-3xl font-bold mb-6">Tipuri de Cookie-uri</h2>
        
        <div class="grid md:grid-cols-2 gap-6 mb-12">
            <!-- Essential Cookies -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-4">
                    <h3 class="text-xl font-bold flex items-center">
                        <i class="fas fa-shield-alt mr-2"></i>
                        Cookie-uri Esențiale
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Necesare pentru funcționarea de bază a site-ului.</p>
                    <div class="space-y-3">
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-green-500">
                            <p class="font-semibold text-sm">session_id</p>
                            <p class="text-xs text-gray-600">Gestionare sesiune • Sesiune</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-green-500">
                            <p class="font-semibold text-sm">csrf_token</p>
                            <p class="text-xs text-gray-600">Securitate • 24h</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-green-500">
                            <p class="font-semibold text-sm">cookie_consent</p>
                            <p class="text-xs text-gray-600">Preferințe • 1 an</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Cookies -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4">
                    <h3 class="text-xl font-bold flex items-center">
                        <i class="fas fa-chart-line mr-2"></i>
                        Cookie-uri de Performanță
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Analizează cum utilizezi site-ul nostru.</p>
                    <div class="space-y-3">
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-blue-500">
                            <p class="font-semibold text-sm">_ga</p>
                            <p class="text-xs text-gray-600">Google Analytics • 2 ani</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-blue-500">
                            <p class="font-semibold text-sm">_gid</p>
                            <p class="text-xs text-gray-600">Identificare utilizator • 24h</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-blue-500">
                            <p class="font-semibold text-sm">_gat</p>
                            <p class="text-xs text-gray-600">Rate limiting • 1 min</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <div class="bg-gradient-to-r from-purple-500 to-pink-600 text-white p-4">
                    <h3 class="text-xl font-bold flex items-center">
                        <i class="fas fa-cog mr-2"></i>
                        Cookie-uri de Funcționalitate
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Pentru o experiență personalizată.</p>
                    <div class="space-y-3">
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-purple-500">
                            <p class="font-semibold text-sm">language_pref</p>
                            <p class="text-xs text-gray-600">Preferință limbă • 1 an</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-purple-500">
                            <p class="font-semibold text-sm">theme_mode</p>
                            <p class="text-xs text-gray-600">Temă vizuală • 6 luni</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-purple-500">
                            <p class="font-semibold text-sm">font_size</p>
                            <p class="text-xs text-gray-600">Dimensiune text • 1 an</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <div class="bg-gradient-to-r from-orange-500 to-red-600 text-white p-4">
                    <h3 class="text-xl font-bold flex items-center">
                        <i class="fas fa-bullhorn mr-2"></i>
                        Cookie-uri de Marketing
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Pentru publicitate relevantă.</p>
                    <div class="space-y-3">
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-orange-500">
                            <p class="font-semibold text-sm">_fbp</p>
                            <p class="text-xs text-gray-600">Facebook Pixel • 3 luni</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-orange-500">
                            <p class="font-semibold text-sm">ads_id</p>
                            <p class="text-xs text-gray-600">Identificare publicitate • 1 an</p>
                        </div>
                        <div class="bg-gray-50 rounded p-3 border-l-4 border-orange-500">
                            <p class="font-semibold text-sm">retargeting</p>
                            <p class="text-xs text-gray-600">Retargeting • 90 zile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl shadow-lg p-8 mb-12">
            <h2 class="text-3xl font-bold mb-6 text-center">
                <i class="fas fa-sliders-h mr-2"></i>
                Gestionează Preferințele
            </h2>
            <p class="text-center text-gray-700 mb-6">
                Ai control complet asupra cookie-urilor. Alege opțiunea care ți se potrivește.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition-all flex items-center">
                    <i class="fas fa-check mr-2"></i>
                    Acceptă Toate
                </button>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition-all flex items-center">
                    <i class="fas fa-cog mr-2"></i>
                    Personalizează
                </button>
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition-all flex items-center">
                    <i class="fas fa-times mr-2"></i>
                    Respinge Opționale
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-3xl font-bold mb-6">Setări în Browser</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition">
                <i class="fab fa-chrome text-5xl text-blue-500 mb-3"></i>
                <h4 class="font-bold mb-2">Chrome</h4>
                <p class="text-sm text-gray-600">Setări → Confidențialitate</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition">
                <i class="fab fa-firefox text-5xl text-orange-500 mb-3"></i>
                <h4 class="font-bold mb-2">Firefox</h4>
                <p class="text-sm text-gray-600">Opțiuni → Confidențialitate</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition">
                <i class="fab fa-safari text-5xl text-blue-400 mb-3"></i>
                <h4 class="font-bold mb-2">Safari</h4>
                <p class="text-sm text-gray-600">Preferințe → Confidențialitate</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition">
                <i class="fab fa-edge text-5xl text-blue-600 mb-3"></i>
                <h4 class="font-bold mb-2">Edge</h4>
                <p class="text-sm text-gray-600">Setări → Cookie-uri</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-lg shadow-md p-6">
            <h3 class="text-2xl font-bold mb-3 flex items-center text-yellow-900">
                <i class="fas fa-envelope mr-3"></i>
                Contactează-ne
            </h3>
            <p class="text-gray-700">
                Pentru întrebări despre politica de cookie-uri: 
                <a href="mailto:privacy@example.com" class="text-blue-600 font-semibold hover:underline">
                    privacy@example.com
                </a>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-800 to-gray-900 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg font-bold mb-2">CookiePolicy - Windi CSS</p>
            <p class="text-gray-400">© 2024 Toate drepturile rezervate</p>
            <p class="text-sm text-gray-500 mt-2">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 bg-purple-600 hover:bg-purple-700 text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
