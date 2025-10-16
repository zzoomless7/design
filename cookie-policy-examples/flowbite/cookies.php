<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen text-white">
    <!-- Navigation -->
    <nav class="glass-card border-b border-white/20 sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <i class="fas fa-home text-2xl"></i>
                <span class="self-center text-2xl font-semibold whitespace-nowrap">Reședința Budaș</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/20" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                    <li>
                        <a href="../index.php" class="block py-2 px-3 text-white/90 rounded hover:bg-white/10 md:hover:bg-transparent md:border-0 md:hover:text-blue-300 md:p-0"><i class="fas fa-home"></i> Acasă</a>
                    </li>
                    <li>
                        <a href="../despre.php" class="block py-2 px-3 text-white/90 rounded hover:bg-white/10 md:hover:bg-transparent md:border-0 md:hover:text-blue-300 md:p-0"><i class="fas fa-info-circle"></i> Despre noi</a>
                    </li>
                    <li>
                        <a href="../articole.php" class="block py-2 px-3 text-white/90 rounded hover:bg-white/10 md:hover:bg-transparent md:border-0 md:hover:text-blue-300 md:p-0"><i class="fas fa-newspaper"></i> Articole</a>
                    </li>
                    <li>
                        <a href="../galerie.php" class="block py-2 px-3 text-white/90 rounded hover:bg-white/10 md:hover:bg-transparent md:border-0 md:hover:text-blue-300 md:p-0"><i class="fas fa-images"></i> Galerie</a>
                    </li>
                    <li>
                        <a href="../contact.php" class="block py-2 px-3 text-white/90 rounded hover:bg-white/10 md:hover:bg-transparent md:border-0 md:hover:text-blue-300 md:p-0"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header Card -->
        <div class="glass-card rounded-3xl p-12 mb-8 text-center shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h1 class="text-5xl font-bold mb-4">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p class="text-lg text-white/90">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass-card rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-cookie-bite text-blue-400"></i>
                Ce sunt Cookies?
            </h2>
            <div class="space-y-4 text-white/90">
                <p>Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
                <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
            </div>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="glass-card rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                <i class="fas fa-list text-blue-400"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="space-y-6">
                <!-- Accordion Item 1 -->
                <div id="accordion-collapse" data-accordion="collapse">
                    <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                        <h5 class="text-xl font-semibold mb-3 flex items-center gap-2">
                            <i class="fas fa-shield-alt text-blue-400"></i>
                            1. Cookies Esențiale (Necesare)
                        </h5>
                        <p class="mb-3 text-white/90">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                        <ul class="list-disc list-inside space-y-2 text-white/80">
                            <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                            <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                            <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                        </ul>
                    </div>

                    <div class="bg-white/5 rounded-2xl p-6 border border-white/10 mt-6">
                        <h5 class="text-xl font-semibold mb-3 flex items-center gap-2">
                            <i class="fas fa-chart-line text-blue-400"></i>
                            2. Cookies de Analiză
                        </h5>
                        <p class="mb-3 text-white/90">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                        <ul class="list-disc list-inside space-y-2 text-white/80">
                            <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                            <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                        </ul>
                    </div>

                    <div class="bg-white/5 rounded-2xl p-6 border border-white/10 mt-6">
                        <h5 class="text-xl font-semibold mb-3 flex items-center gap-2">
                            <i class="fas fa-bullseye text-blue-400"></i>
                            3. Cookies de Marketing
                        </h5>
                        <p class="mb-3 text-white/90">Pentru a-ți oferi conținut relevant:</p>
                        <ul class="list-disc list-inside space-y-2 text-white/80">
                            <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                            <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="glass-card rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-cog text-blue-400"></i>
                Cum Poți Gestiona Cookies?
            </h2>
            <div class="p-4 mb-4 text-sm bg-blue-500/20 rounded-2xl border border-blue-400/30" role="alert">
                <p class="mb-3 font-semibold">Browserul tău îți permite să controlezi cookies-urile:</p>
                <ul class="list-disc list-inside space-y-2 text-white/90">
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-card rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-envelope text-blue-400"></i>
                Contact
            </h2>
            <div class="space-y-2 text-white/90">
                <p>Pentru întrebări despre politica noastră de cookies:</p>
                <p><i class="fas fa-phone"></i> <a href="tel:+40758330929" class="hover:text-blue-300 transition">+40 758 330 929</a></p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" class="hover:text-blue-300 transition">info@resedintabudas.ro</a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="glass-card border-t border-white/20 mt-12">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-white/80 sm:text-center">&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</span>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white/80 sm:mb-0">
                    <li>
                        <a href="../legal/termeni-si-conditii.php" class="hover:text-white me-4 md:me-6">Termeni și Condiții</a>
                    </li>
                    <li>
                        <a href="../legal/cookies.php" class="hover:text-white me-4 md:me-6">Cookies</a>
                    </li>
                    <li>
                        <a href="../legal/politica-de-confidentialitate.php" class="hover:text-white">Politica de Confidențialitate</a>
                    </li>
                </ul>
            </div>
            <div class="flex justify-center space-x-4 mt-6">
                <a href="https://facebook.com/resedintabudas" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/resedintabudas" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/40758330929" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 transition" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button type="button" data-dial-toggle="speed-dial-menu-bottom-right" aria-controls="speed-dial-menu-bottom-right" aria-expanded="false" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" id="backToTop" class="fixed end-6 bottom-6 glass-card rounded-full w-14 h-14 hidden items-center justify-center hover:bg-white/20 transition z-50">
        <i class="fas fa-chevron-up text-xl"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });
    </script>
</body>
</html>
