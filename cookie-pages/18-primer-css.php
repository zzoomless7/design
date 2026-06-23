<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Primer CSS</title>
    <link href="https://unpkg.com/@primer/css@^20.2.4/dist/primer.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-light">
    <!-- Header -->
    <header class="Header bg-white border-bottom">
        <div class="Header-item">
            <a href="#" class="Header-link f4 d-flex flex-items-center">
                <i class="fas fa-cookie-bite mr-2"></i>
                <strong>CookiePolicy</strong>
            </a>
        </div>
        <div class="Header-item Header-item--full">
            <nav class="UnderlineNav">
                <div class="UnderlineNav-body">
                    <a class="UnderlineNav-item" href="#">Acasă</a>
                    <a class="UnderlineNav-item" href="#">Despre</a>
                    <a class="UnderlineNav-item" href="#">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <div class="py-6 text-center" style="background: linear-gradient(135deg, #0969DA, #0550AE); color: white;">
        <div class="container-xl p-responsive">
            <div style="font-size: 5rem; margin-bottom: 1rem;">🍪</div>
            <h1 class="h0-mktg mb-3">Politica de Cookie-uri</h1>
            <p class="f2-light">Construit cu Primer CSS - GitHub's design system</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-xl p-responsive py-6">
        <!-- Info Flash -->
        <div class="flash flash-full mb-4">
            <div class="d-flex flex-items-start">
                <div class="mr-3">
                    <i class="fas fa-info-circle text-blue" style="font-size: 2rem;"></i>
                </div>
                <div>
                    <h3 class="mb-2">Ce sunt cookie-urile?</h3>
                    <p class="m-0">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău. Primer CSS este sistemul de design 
                        open-source al GitHub, oferind componente și ghiduri pentru construirea interfețelor consistente.
                    </p>
                </div>
            </div>
        </div>

        <h2 class="h1-mktg mb-4">Categorii de Cookie-uri</h2>

        <!-- Essential Cookies -->
        <div class="Box mb-4">
            <div class="Box-header d-flex flex-justify-between flex-items-center" style="background: #dafbe1;">
                <div class="d-flex flex-items-center">
                    <i class="fas fa-shield-alt text-green mr-2" style="font-size: 1.5rem;"></i>
                    <h3 class="Box-title">Cookie-uri Esențiale</h3>
                </div>
                <span class="Label Label--success">Obligatorii</span>
            </div>
            <div class="Box-body">
                <p class="text-gray mb-3">Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului.</p>
                <table class="width-full">
                    <thead>
                        <tr class="border-bottom">
                            <th class="py-2">Cookie</th>
                            <th class="py-2">Scop</th>
                            <th class="py-2">Durată</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom">
                            <td class="py-3"><code class="px-2 py-1 bg-gray-light rounded-1">session_id</code></td>
                            <td class="py-3 text-gray">Gestionare sesiune utilizator</td>
                            <td class="py-3 text-gray">Sesiune</td>
                            <td class="py-3"><span class="Label Label--success">Activ</span></td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="py-3"><code class="px-2 py-1 bg-gray-light rounded-1">csrf_token</code></td>
                            <td class="py-3 text-gray">Protecție CSRF</td>
                            <td class="py-3 text-gray">24 ore</td>
                            <td class="py-3"><span class="Label Label--success">Activ</span></td>
                        </tr>
                        <tr>
                            <td class="py-3"><code class="px-2 py-1 bg-gray-light rounded-1">cookie_consent</code></td>
                            <td class="py-3 text-gray">Preferințe cookie-uri</td>
                            <td class="py-3 text-gray">1 an</td>
                            <td class="py-3"><span class="Label Label--success">Activ</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Performance & Functionality Grid -->
        <div class="d-flex flex-wrap gutter mb-4">
            <!-- Performance Cookies -->
            <div class="col-12 col-md-6">
                <div class="Box mb-3">
                    <div class="Box-header d-flex flex-items-center" style="background: #ddf4ff;">
                        <i class="fas fa-chart-line text-blue mr-2"></i>
                        <h3 class="Box-title">Cookie-uri de Performanță</h3>
                        <span class="Label Label--primary ml-2">Opțional</span>
                    </div>
                    <div class="Box-body">
                        <p class="text-gray mb-3">Analiză și optimizare site</p>
                        <div class="mb-2 p-3 border rounded-2 bg-gray-light">
                            <code class="text-bold">_ga</code>
                            <p class="text-small text-gray mt-1 mb-0">Google Analytics • 2 ani</p>
                        </div>
                        <div class="mb-2 p-3 border rounded-2 bg-gray-light">
                            <code class="text-bold">_gid</code>
                            <p class="text-small text-gray mt-1 mb-0">Session ID • 24 ore</p>
                        </div>
                        <div class="p-3 border rounded-2 bg-gray-light">
                            <code class="text-bold">_gat</code>
                            <p class="text-small text-gray mt-1 mb-0">Rate limiting • 1 minut</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="col-12 col-md-6">
                <div class="Box mb-3">
                    <div class="Box-header d-flex flex-items-center" style="background: #fbefff;">
                        <i class="fas fa-cog text-purple mr-2"></i>
                        <h3 class="Box-title">Cookie-uri de Funcționalitate</h3>
                        <span class="Label Label--accent ml-2">Opțional</span>
                    </div>
                    <div class="Box-body">
                        <p class="text-gray mb-3">Personalizare experiență</p>
                        <div class="mb-2 p-3 border rounded-2 bg-gray-light">
                            <code class="text-bold">language_pref</code>
                            <p class="text-small text-gray mt-1 mb-0">Preferință limbă • 1 an</p>
                        </div>
                        <div class="mb-2 p-3 border rounded-2 bg-gray-light">
                            <code class="text-bold">theme_mode</code>
                            <p class="text-small text-gray mt-1 mb-0">Temă vizuală • 6 luni</p>
                        </div>
                        <div class="p-3 border rounded-2 bg-gray-light">
                            <code class="text-bold">font_size</code>
                            <p class="text-small text-gray mt-1 mb-0">Dimensiune font • 1 an</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marketing Cookies -->
        <div class="Box mb-4">
            <div class="Box-header d-flex flex-justify-between flex-items-center" style="background: #fff8c5;">
                <div class="d-flex flex-items-center">
                    <i class="fas fa-bullhorn text-orange mr-2" style="font-size: 1.5rem;"></i>
                    <h3 class="Box-title">Cookie-uri de Marketing</h3>
                </div>
                <span class="Label Label--attention">Opțional</span>
            </div>
            <div class="Box-body">
                <p class="text-gray mb-3">Pentru publicitate relevantă și măsurarea campaniilor.</p>
                <div class="d-flex flex-wrap gutter">
                    <div class="col-12 col-md-6">
                        <div class="border rounded-2 p-3 bg-yellow-light">
                            <div class="d-flex flex-items-center mb-2">
                                <i class="fab fa-facebook text-blue mr-2" style="font-size: 2rem;"></i>
                                <code class="h4">_fbp</code>
                            </div>
                            <p class="text-small mb-2">Facebook Pixel pentru tracking</p>
                            <span class="Label Label--attention">3 luni</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="border rounded-2 p-3 bg-yellow-light">
                            <div class="d-flex flex-items-center mb-2">
                                <i class="fas fa-ad text-orange mr-2" style="font-size: 2rem;"></i>
                                <code class="h4">ads_id</code>
                            </div>
                            <p class="text-small mb-2">Advertising identifier</p>
                            <span class="Label Label--attention">1 an</span>
                        </div>
                    </div>
                </div>
            </div>
        </Box>

        <!-- Cookie Management -->
        <div class="Box bg-blue-light mb-4">
            <div class="Box-body text-center">
                <div class="mb-3">
                    <i class="fas fa-sliders-h" style="font-size: 3rem; color: #0969DA;"></i>
                </div>
                <h2 class="h2-mktg mb-3">Gestionează Preferințele</h2>
                <p class="text-gray mb-4">Control complet cu design system-ul GitHub</p>
                <div class="d-flex flex-wrap flex-justify-center gutter-condensed">
                    <div class="col-auto mb-2">
                        <button class="btn btn-primary btn-large">
                            <i class="fas fa-check mr-1"></i>
                            Acceptă Toate
                        </button>
                    </div>
                    <div class="col-auto mb-2">
                        <button class="btn btn-outline btn-large">
                            <i class="fas fa-cog mr-1"></i>
                            Personalizează
                        </button>
                    </div>
                    <div class="col-auto mb-2">
                        <button class="btn btn-danger btn-large">
                            <i class="fas fa-times mr-1"></i>
                            Respinge
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="h1-mktg mb-4">Setări Browser</h2>
        <div class="d-flex flex-wrap gutter mb-4">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="Box text-center">
                    <div class="Box-body">
                        <i class="fab fa-chrome text-blue mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-2">Chrome</h4>
                        <p class="text-small text-gray m-0">Setări → Privacy</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="Box text-center">
                    <div class="Box-body">
                        <i class="fab fa-firefox text-orange mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-2">Firefox</h4>
                        <p class="text-small text-gray m-0">Opțiuni → Privacy</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="Box text-center">
                    <div class="Box-body">
                        <i class="fab fa-safari text-blue mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-2">Safari</h4>
                        <p class="text-small text-gray m-0">Preferințe → Privacy</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="Box text-center">
                    <div class="Box-body">
                        <i class="fab fa-edge text-blue mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-2">Edge</h4>
                        <p class="text-small text-gray m-0">Setări → Cookies</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="flash flash-warn">
            <div class="d-flex flex-items-start">
                <div class="mr-3">
                    <i class="fas fa-envelope" style="font-size: 2rem;"></i>
                </div>
                <div>
                    <h4 class="mb-2">Contactează-ne</h4>
                    <p class="m-0">
                        Pentru întrebări despre politica de cookie-uri: 
                        <a href="mailto:privacy@example.com" class="text-bold">privacy@example.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-gray-dark text-white py-5 mt-6">
        <div class="container-xl p-responsive text-center">
            <p class="h3 mb-2">CookiePolicy - Primer CSS</p>
            <p class="text-gray mb-2">© 2024 Toate drepturile rezervate</p>
            <p class="text-small text-gray">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="btn btn-primary CircleBadge CircleBadge--large" 
            style="position: fixed; bottom: 2rem; right: 2rem; z-index: 100;">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
