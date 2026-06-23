<!DOCTYPE html>
<html lang="ro" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - DaisyUI 4</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-lg">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
            </div>
            <a class="btn btn-ghost text-xl">
                <i class="fas fa-cookie-bite text-primary"></i>
                CookiePolicy
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Acasă</a></li>
                <li><a>Despre</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <label class="swap swap-rotate">
                <input type="checkbox" class="theme-controller" value="dark" />
                <i class="fas fa-sun swap-off text-xl"></i>
                <i class="fas fa-moon swap-on text-xl"></i>
            </label>
        </div>
    </div>

    <!-- Hero -->
    <div class="hero min-h-[50vh] bg-gradient-to-br from-primary to-secondary">
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <div class="text-6xl mb-4">🍪</div>
                <h1 class="mb-5 text-5xl font-bold">Politica de Cookie-uri</h1>
                <p class="mb-5 text-lg">Construită cu DaisyUI 4 - Design elegant și componente moderne</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- Info Alert -->
        <div role="alert" class="alert alert-info mb-8">
            <i class="fas fa-info-circle text-2xl"></i>
            <div>
                <h3 class="font-bold text-lg">Ce sunt cookie-urile?</h3>
                <p class="text-sm">Cookie-urile sunt fișiere mici de text stocate pe dispozitivul tău pentru a îmbunătăți experiența de navigare și pentru a permite funcționarea corectă a site-ului.</p>
            </div>
        </div>

        <!-- Cookie Categories with Collapse -->
        <h2 class="text-4xl font-bold mb-6">Categorii de Cookie-uri</h2>

        <!-- Essential Cookies -->
        <div class="collapse collapse-arrow bg-base-200 mb-4">
            <input type="radio" name="cookie-accordion" checked="checked" /> 
            <div class="collapse-title text-xl font-medium flex items-center gap-3">
                <div class="badge badge-success gap-2">
                    <i class="fas fa-shield-alt"></i>
                </div>
                Cookie-uri Esențiale
            </div>
            <div class="collapse-content"> 
                <p class="mb-4">Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului.</p>
                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Scop</th>
                                <th>Durată</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><kbd class="kbd kbd-sm">session_id</kbd></td>
                                <td>Gestionare sesiune utilizator</td>
                                <td>Sesiune</td>
                                <td><div class="badge badge-success">Activ</div></td>
                            </tr>
                            <tr>
                                <td><kbd class="kbd kbd-sm">csrf_token</kbd></td>
                                <td>Protecție securitate CSRF</td>
                                <td>24 ore</td>
                                <td><div class="badge badge-success">Activ</div></td>
                            </tr>
                            <tr>
                                <td><kbd class="kbd kbd-sm">cookie_consent</kbd></td>
                                <td>Preferințe cookie-uri</td>
                                <td>1 an</td>
                                <td><div class="badge badge-success">Activ</div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Performance Cookies -->
        <div class="collapse collapse-arrow bg-base-200 mb-4">
            <input type="radio" name="cookie-accordion" /> 
            <div class="collapse-title text-xl font-medium flex items-center gap-3">
                <div class="badge badge-info gap-2">
                    <i class="fas fa-chart-line"></i>
                </div>
                Cookie-uri de Performanță
            </div>
            <div class="collapse-content"> 
                <p class="mb-4">Colectează informații anonime despre utilizarea site-ului.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-sm"><code>_ga</code></h2>
                            <p class="text-sm">Google Analytics - identificare</p>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">2 ani</div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-sm"><code>_gid</code></h2>
                            <p class="text-sm">Analytics - stocare date</p>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">24 ore</div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-sm"><code>_gat</code></h2>
                            <p class="text-sm">Rate limiting</p>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">1 minut</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Functionality Cookies -->
        <div class="collapse collapse-arrow bg-base-200 mb-4">
            <input type="radio" name="cookie-accordion" /> 
            <div class="collapse-title text-xl font-medium flex items-center gap-3">
                <div class="badge badge-secondary gap-2">
                    <i class="fas fa-cog"></i>
                </div>
                Cookie-uri de Funcționalitate
            </div>
            <div class="collapse-content"> 
                <p class="mb-4">Pentru o experiență personalizată pe site.</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between p-4 bg-base-100 rounded-lg">
                        <div>
                            <div class="font-bold"><code>language_pref</code></div>
                            <div class="text-sm text-base-content/70">Preferință de limbă</div>
                        </div>
                        <div class="badge badge-secondary">1 an</div>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-base-100 rounded-lg">
                        <div>
                            <div class="font-bold"><code>theme_mode</code></div>
                            <div class="text-sm text-base-content/70">Temă vizuală</div>
                        </div>
                        <div class="badge badge-secondary">6 luni</div>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-base-100 rounded-lg">
                        <div>
                            <div class="font-bold"><code>font_size</code></div>
                            <div class="text-sm text-base-content/70">Dimensiune font</div>
                        </div>
                        <div class="badge badge-secondary">1 an</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marketing Cookies -->
        <div class="collapse collapse-arrow bg-base-200 mb-8">
            <input type="radio" name="cookie-accordion" /> 
            <div class="collapse-title text-xl font-medium flex items-center gap-3">
                <div class="badge badge-warning gap-2">
                    <i class="fas fa-bullhorn"></i>
                </div>
                Cookie-uri de Marketing
            </div>
            <div class="collapse-content"> 
                <p class="mb-4">Pentru publicitate relevantă și personalizată.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fab fa-facebook text-2xl text-blue-600"></i>
                                <h2 class="card-title"><code>_fbp</code></h2>
                            </div>
                            <p class="text-sm">Facebook Pixel pentru tracking publicitar</p>
                            <div class="card-actions justify-end mt-4">
                                <div class="badge badge-warning">3 luni</div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-ad text-2xl text-orange-600"></i>
                                <h2 class="card-title"><code>ads_id</code></h2>
                            </div>
                            <p class="text-sm">Identificare pentru reclame personalizate</p>
                            <div class="card-actions justify-end mt-4">
                                <div class="badge badge-warning">1 an</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="card bg-gradient-to-r from-primary/10 to-secondary/10 shadow-2xl mb-8">
            <div class="card-body items-center text-center">
                <h2 class="card-title text-3xl mb-4">
                    <i class="fas fa-sliders-h mr-2"></i>
                    Gestionează Preferințele
                </h2>
                <p class="mb-6">Controlează cookie-urile utilizate pe acest site</p>
                <div class="card-actions flex-wrap justify-center">
                    <button class="btn btn-success btn-lg gap-2">
                        <i class="fas fa-check"></i>
                        Acceptă Toate
                    </button>
                    <button class="btn btn-primary btn-lg gap-2">
                        <i class="fas fa-cog"></i>
                        Personalizează
                    </button>
                    <button class="btn btn-error btn-lg gap-2">
                        <i class="fas fa-times"></i>
                        Respinge Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-4xl font-bold mb-6">Setări Browser</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                <figure class="px-10 pt-10">
                    <i class="fab fa-chrome text-6xl text-blue-500"></i>
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Chrome</h2>
                    <p class="text-sm">Setări → Confidențialitate</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                <figure class="px-10 pt-10">
                    <i class="fab fa-firefox text-6xl text-orange-500"></i>
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Firefox</h2>
                    <p class="text-sm">Opțiuni → Privacy</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                <figure class="px-10 pt-10">
                    <i class="fab fa-safari text-6xl text-blue-400"></i>
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Safari</h2>
                    <p class="text-sm">Preferințe → Privacy</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
                <figure class="px-10 pt-10">
                    <i class="fab fa-edge text-6xl text-blue-600"></i>
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Edge</h2>
                    <p class="text-sm">Setări → Cookies</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div role="alert" class="alert alert-warning">
            <i class="fas fa-envelope text-2xl"></i>
            <div>
                <h3 class="font-bold">Contactează-ne</h3>
                <div class="text-sm">Pentru întrebări: <a href="mailto:privacy@example.com" class="link link-hover font-bold">privacy@example.com</a></div>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats stats-vertical lg:stats-horizontal shadow mt-8 w-full">
            <div class="stat">
                <div class="stat-figure text-success">
                    <i class="fas fa-shield-alt text-3xl"></i>
                </div>
                <div class="stat-title">Cookie-uri Esențiale</div>
                <div class="stat-value text-success">3</div>
                <div class="stat-desc">Întotdeauna active</div>
            </div>
            <div class="stat">
                <div class="stat-figure text-info">
                    <i class="fas fa-chart-line text-3xl"></i>
                </div>
                <div class="stat-title">Performanță</div>
                <div class="stat-value text-info">3</div>
                <div class="stat-desc">Analytics</div>
            </div>
            <div class="stat">
                <div class="stat-figure text-warning">
                    <i class="fas fa-bullhorn text-3xl"></i>
                </div>
                <div class="stat-title">Marketing</div>
                <div class="stat-value text-warning">2</div>
                <div class="stat-desc">Publicitate</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <div>
            <div class="grid grid-flow-col gap-4">
                <i class="fab fa-facebook text-2xl"></i>
                <i class="fab fa-twitter text-2xl"></i>
                <i class="fab fa-youtube text-2xl"></i>
            </div>
        </div>
        <div>
            <p class="font-bold">CookiePolicy - DaisyUI 4</p> 
            <p>© 2024 Toate drepturile rezervate</p>
            <p class="text-sm">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="btn btn-circle btn-primary fixed bottom-8 right-8 shadow-lg">
        <i class="fas fa-arrow-up text-lg"></i>
    </button>
</body>
</html>
