<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <script src="https://cdn.jsdelivr.net/npm/@unocss/runtime"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @unocss-placeholder;
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .glass-effect:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Navigation -->
    <nav class="glass-effect">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center gap-2 text-white font-bold text-2xl">
                    <i class="fas fa-home"></i>
                    <span>Reședința Budaș</span>
                </div>
                
                <div class="hidden md:flex gap-4">
                    <a href="../index.php" class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-home"></i> Acasă
                    </a>
                    <a href="../despre.php" class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-info-circle"></i> Despre noi
                    </a>
                    <a href="../articole.php" class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-newspaper"></i> Articole
                    </a>
                    <a href="../galerie.php" class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-images"></i> Galerie
                    </a>
                    <a href="../contact.php" class="text-white/90 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="glass-effect rounded-3xl p-8 md:p-12 mb-8 text-center text-white transition">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <i class="fas fa-cookie-bite"></i> Politica Cookies
            </h1>
            <p class="text-lg opacity-90">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="glass-effect rounded-3xl p-8 mb-8 text-white transition">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-cookie-bite" style="color: #3b82f6;"></i>
                Ce sunt Cookies?
            </h2>
            <p class="mb-4">Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
            <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="glass-effect rounded-3xl p-8 mb-8 text-white transition">
            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                <i class="fas fa-list" style="color: #3b82f6;"></i>
                Tipuri de Cookies pe Site-ul Nostru
            </h2>
            
            <div class="bg-white/5 rounded-2xl p-6 mb-6 border border-white/10">
                <h5 class="text-xl font-semibold mb-3 flex items-center gap-2">
                    <i class="fas fa-shield-alt" style="color: #3b82f6;"></i>
                    1. Cookies Esențiale (Necesare)
                </h5>
                <p class="mb-3">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                <ul class="list-disc ml-6 space-y-2">
                    <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                    <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                    <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                </ul>
            </div>

            <div class="bg-white/5 rounded-2xl p-6 mb-6 border border-white/10">
                <h5 class="text-xl font-semibold mb-3 flex items-center gap-2">
                    <i class="fas fa-chart-line" style="color: #3b82f6;"></i>
                    2. Cookies de Analiză
                </h5>
                <p class="mb-3">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                <ul class="list-disc ml-6 space-y-2">
                    <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                    <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                </ul>
            </div>

            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                <h5 class="text-xl font-semibold mb-3 flex items-center gap-2">
                    <i class="fas fa-bullseye" style="color: #3b82f6;"></i>
                    3. Cookies de Marketing
                </h5>
                <p class="mb-3">Pentru a-ți oferi conținut relevant:</p>
                <ul class="list-disc ml-6 space-y-2">
                    <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                    <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                </ul>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="glass-effect rounded-3xl p-8 mb-8 text-white transition">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-cog" style="color: #3b82f6;"></i>
                Cum Poți Gestiona Cookies?
            </h2>
            <div class="bg-blue-500/20 rounded-2xl p-6 border border-blue-400/30">
                <p class="mb-3"><strong>Browserul tău</strong> îți permite să controlezi cookies-urile:</p>
                <ul class="list-disc ml-6 space-y-2">
                    <li>Poți șterge toate cookies-urile deja salvate</li>
                    <li>Poți bloca instalarea de noi cookies</li>
                    <li>Poți seta excepții pentru anumite site-uri</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass-effect rounded-3xl p-8 mb-8 text-white transition">
            <h2 class="text-3xl font-bold mb-4 flex items-center gap-3">
                <i class="fas fa-envelope" style="color: #3b82f6;"></i>
                Contact
            </h2>
            <p class="mb-3">Pentru întrebări despre politica noastră de cookies:</p>
            <p class="mb-2"><i class="fas fa-phone"></i> <a href="tel:+40758330929" class="hover:text-blue-300">+40 758 330 929</a></p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" class="hover:text-blue-300">info@resedintabudas.ro</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="glass-effect mt-12 py-8 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <p class="mb-4 md:mb-0">&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
                <div class="text-center md:text-right">
                    <a href="../legal/termeni-si-conditii.php" class="hover:text-blue-300">Termeni și Condiții</a> | 
                    <a href="../legal/cookies.php" class="hover:text-blue-300">Cookies</a> | 
                    <a href="../legal/politica-de-confidentialitate.php" class="hover:text-blue-300">Politica de Confidențialitate</a>
                </div>
            </div>
            <div class="flex justify-center gap-3">
                <a href="https://facebook.com/resedintabudas" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 hover:-translate-y-1 transition" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/resedintabudas" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 hover:-translate-y-1 transition" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/40758330929" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-white/20 hover:-translate-y-1 transition" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="scrollToTop()" id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 glass-effect rounded-full text-white hidden items-center justify-center hover:bg-white/20 hover:-translate-y-1 transition z-50">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

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
