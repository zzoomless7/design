<!DOCTYPE html>
<html lang="ro" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reședința Budaș - Politica Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen text-white">
    <!-- Navigation -->
    <div class="navbar glass-effect sticky top-0 z-50 border-b border-white/20">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow glass-effect rounded-box w-52">
                    <li><a href="../index.php"><i class="fas fa-home"></i> Acasă</a></li>
                    <li><a href="../despre.php"><i class="fas fa-info-circle"></i> Despre noi</a></li>
                    <li><a href="../articole.php"><i class="fas fa-newspaper"></i> Articole</a></li>
                    <li><a href="../galerie.php"><i class="fas fa-images"></i> Galerie</a></li>
                    <li><a href="../contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">
                <i class="fas fa-home"></i> Reședința Budaș
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="../index.php"><i class="fas fa-home"></i> Acasă</a></li>
                <li><a href="../despre.php"><i class="fas fa-info-circle"></i> Despre noi</a></li>
                <li><a href="../articole.php"><i class="fas fa-newspaper"></i> Articole</a></li>
                <li><a href="../galerie.php"><i class="fas fa-images"></i> Galerie</a></li>
                <li><a href="../contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header Card -->
        <div class="card glass-effect shadow-2xl mb-8">
            <div class="card-body text-center">
                <h1 class="card-title text-5xl justify-center mb-4">
                    <i class="fas fa-cookie-bite"></i> Politica Cookies
                </h1>
                <p class="text-lg opacity-90">Ultima actualizare: 01 Octombrie 2025</p>
            </div>
        </div>

        <!-- Ce sunt Cookies -->
        <div class="card glass-effect shadow-xl mb-8">
            <div class="card-body">
                <h2 class="card-title text-3xl mb-4">
                    <i class="fas fa-cookie-bite text-blue-400"></i>
                    Ce sunt Cookies?
                </h2>
                <div class="space-y-4 opacity-90">
                    <p>Cookies sunt fișiere text mici care sunt stocate pe dispozitivul tău (computer, telefon, tabletă) când vizitezi un site web. Acestea permit site-ului să-și "amintească" de acțiunile tale și preferințele tale pe o perioadă de timp.</p>
                    <p>Cookies nu conțin informații personale și nu pot accesa fișierele de pe dispozitivul tău.</p>
                </div>
            </div>
        </div>

        <!-- Tipuri de Cookies -->
        <div class="card glass-effect shadow-xl mb-8">
            <div class="card-body">
                <h2 class="card-title text-3xl mb-6">
                    <i class="fas fa-list text-blue-400"></i>
                    Tipuri de Cookies pe Site-ul Nostru
                </h2>
                
                <div class="space-y-6">
                    <!-- Collapse 1 -->
                    <div class="collapse collapse-plus bg-white/5 border border-white/10">
                        <input type="radio" name="my-accordion-3" checked="checked" /> 
                        <div class="collapse-title text-xl font-medium">
                            <i class="fas fa-shield-alt text-blue-400"></i> 1. Cookies Esențiale (Necesare)
                        </div>
                        <div class="collapse-content"> 
                            <p class="mb-3 opacity-90">Acestea sunt necesare pentru funcționarea site-ului și nu pot fi dezactivate:</p>
                            <ul class="list-disc list-inside space-y-2 opacity-80">
                                <li><strong>Session cookies</strong> - Pentru a-ți păstra sesiunea activă</li>
                                <li><strong>Security cookies</strong> - Pentru protecția site-ului</li>
                                <li><strong>Preference cookies</strong> - Pentru a-ți păstra setările</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Collapse 2 -->
                    <div class="collapse collapse-plus bg-white/5 border border-white/10">
                        <input type="radio" name="my-accordion-3" /> 
                        <div class="collapse-title text-xl font-medium">
                            <i class="fas fa-chart-line text-blue-400"></i> 2. Cookies de Analiză
                        </div>
                        <div class="collapse-content"> 
                            <p class="mb-3 opacity-90">Ne ajută să înțelegem cum folosești site-ul nostru:</p>
                            <ul class="list-disc list-inside space-y-2 opacity-80">
                                <li><strong>Google Analytics</strong> - Pentru statistici de vizitare</li>
                                <li><strong>Performance cookies</strong> - Pentru optimizarea site-ului</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Collapse 3 -->
                    <div class="collapse collapse-plus bg-white/5 border border-white/10">
                        <input type="radio" name="my-accordion-3" /> 
                        <div class="collapse-title text-xl font-medium">
                            <i class="fas fa-bullseye text-blue-400"></i> 3. Cookies de Marketing
                        </div>
                        <div class="collapse-content"> 
                            <p class="mb-3 opacity-90">Pentru a-ți oferi conținut relevant:</p>
                            <ul class="list-disc list-inside space-y-2 opacity-80">
                                <li><strong>Facebook Pixel</strong> - Pentru publicitate relevantă</li>
                                <li><strong>Google Ads</strong> - Pentru campanii publicitare</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gestionare Cookies -->
        <div class="card glass-effect shadow-xl mb-8">
            <div class="card-body">
                <h2 class="card-title text-3xl mb-4">
                    <i class="fas fa-cog text-blue-400"></i>
                    Cum Poți Gestiona Cookies?
                </h2>
                <div role="alert" class="alert bg-blue-500/20 border-blue-400/30">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="font-bold">Browserul tău îți permite să controlezi cookies-urile:</p>
                        <ul class="list-disc list-inside mt-2 space-y-1">
                            <li>Poți șterge toate cookies-urile deja salvate</li>
                            <li>Poți bloca instalarea de noi cookies</li>
                            <li>Poți seta excepții pentru anumite site-uri</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="card glass-effect shadow-xl mb-8">
            <div class="card-body">
                <h2 class="card-title text-3xl mb-4">
                    <i class="fas fa-envelope text-blue-400"></i>
                    Contact
                </h2>
                <div class="space-y-2 opacity-90">
                    <p>Pentru întrebări despre politica noastră de cookies:</p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+40758330929" class="link link-hover">+40 758 330 929</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@resedintabudas.ro" class="link link-hover">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-center glass-effect border-t border-white/20 p-10 mt-12">
        <aside>
            <p class="font-semibold">&copy; 2025 Reședința Budaș. Toate drepturile rezervate.</p>
            <div class="flex flex-wrap gap-2 justify-center mt-2">
                <a href="../legal/termeni-si-conditii.php" class="link link-hover">Termeni și Condiții</a>
                <span>|</span>
                <a href="../legal/cookies.php" class="link link-hover">Cookies</a>
                <span>|</span>
                <a href="../legal/politica-de-confidentialitate.php" class="link link-hover">Politica de Confidențialitate</a>
            </div>
        </aside> 
        <nav>
            <div class="grid grid-flow-col gap-4">
                <a href="https://facebook.com/resedintabudas" class="btn btn-circle btn-ghost" target="_blank">
                    <i class="fab fa-facebook text-xl"></i>
                </a>
                <a href="https://instagram.com/resedintabudas" class="btn btn-circle btn-ghost" target="_blank">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="https://wa.me/40758330929" class="btn btn-circle btn-ghost" target="_blank">
                    <i class="fab fa-whatsapp text-xl"></i>
                </a>
            </div>
        </nav>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" id="backToTop" class="btn btn-circle glass-effect fixed bottom-8 right-8 hidden z-50">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        window.addEventListener('scroll', () => {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('hidden');
            } else {
                backToTop.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
