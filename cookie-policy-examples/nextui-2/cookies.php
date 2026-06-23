<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/@nextui-org/react@2.2.9/dist/index.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen text-white">
    <!-- Navigation -->
    <nav class="glass-effect sticky top-0 z-50 border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2 text-2xl font-bold">
                    <i class="fas fa-home"></i>
                    <span>Reședința Budaș</span>
                </div>
                <div class="hidden md:flex items-center gap-2">
                    <a href="../index.php" class="px-4 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-home"></i> Acasă
                    </a>
                    <a href="../despre.php" class="px-4 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-info-circle"></i> Despre noi
                    </a>
                    <a href="../articole.php" class="px-4 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-newspaper"></i> Articole
                    </a>
                    <a href="../galerie.php" class="px-4 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-images"></i> Galerie
                    </a>
                    <a href="../contact.php" class="px-4 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header Card -->
        <div class="glass-effect rounded-3xl p-12 mb-8 text-center shadow-2xl transition-all duration-300 hover:shadow-3xl hover:-translate-y-1">
            <h1 class="text-5xl font-bold mb-4">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p class="text-lg text-white/90">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass-effect rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
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
        <div class="glass-effect rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                <i class="fas fa-list text-blue-400"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="space-y-6">
                <!-- Cookie Type 1 -->
                <div class="bg-white/5 rounded-2xl p-6 border border-white/10 transition-all duration-200 hover:bg-white/10">
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

                <!-- Cookie Type 2 -->
                <div class="bg-white/5 rounded-2xl p-6 border border-white/10 transition-all duration-200 hover:bg-white/10">
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

                <!-- Cookie Type 3 -->
                <div class="bg-white/5 rounded-2xl p-6 border border-white/10 transition-all duration-200 hover:bg-white/10">
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

        <!-- Gestionare Cookies -->
        <div class="glass-effect rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-cog text-blue-400"></i>
                Cum Poți Gestiona Cookies?
            </h2>
            <div class="bg-blue-500/20 rounded-2xl p-6 border border-blue-400/30">
                <p class="mb-3 font-semibold">Browserul tău îți permite să controlezi cookies-urile:</p>
                <ul class="list-disc list-inside space-y-2 text-white/90">
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-effect rounded-3xl p-8 mb-8 shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
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
    </main>

    <!-- Footer -->
    <footer class="glass-effect border-t border-white/20 py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <p class="mb-4 md:mb-0 text-white/80">&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div class="text-center space-x-2 text-white/80">
                    <a href="../legal/termeni-si-conditii.php" class="hover:text-white transition">Termeni și Condiții</a>
                    <span>|</span>
                    <a href="../legal/cookies.php" class="hover:text-white transition">Cookies</a>
                    <span>|</span>
                    <a href="../legal/politica-de-confidentialitate.php" class="hover:text-white transition">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="https://facebook.com/resedintabudas" class="w-12 h-12 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 hover:-translate-y-1 transition-all duration-200" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/resedintabudas" class="w-12 h-12 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 hover:-translate-y-1 transition-all duration-200" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/40758330929" class="w-12 h-12 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 hover:-translate-y-1 transition-all duration-200" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" id="backToTop" class="fixed bottom-8 right-8 w-14 h-14 glass-effect rounded-full hidden items-center justify-center hover:bg-white/20 hover:-translate-y-1 transition-all duration-200 shadow-xl z-50">
        <i class="fas fa-chevron-up text-xl"></i>
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
    </script>
</body>
</html>
