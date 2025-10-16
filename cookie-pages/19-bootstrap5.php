<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-cookie-bite me-2"></i>
                CookiePolicy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Acasă</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Despre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="bg-gradient text-white py-5" style="background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);">
        <div class="container text-center py-5">
            <div style="font-size: 6rem; margin-bottom: 1rem;">🍪</div>
            <h1 class="display-1 fw-bold mb-3">Politica de Cookie-uri</h1>
            <p class="lead fs-3">Construit cu Bootstrap 5 - The world's most popular framework</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Info Alert -->
        <div class="alert alert-primary d-flex align-items-start" role="alert">
            <i class="fas fa-info-circle fs-1 me-3"></i>
            <div>
                <h4 class="alert-heading">Ce sunt cookie-urile?</h4>
                <p class="mb-0">
                    Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău atunci când vizitezi un site web. 
                    Bootstrap 5 este cel mai popular framework HTML, CSS și JavaScript pentru dezvoltarea de site-uri web responsive.
                </p>
            </div>
        </div>

        <h2 class="display-4 mb-4">Categorii de Cookie-uri</h2>

        <!-- Accordion for Cookie Categories -->
        <div class="accordion accordion-flush mb-4" id="cookieAccordion">
            <!-- Essential Cookies -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-success bg-opacity-10" type="button" data-bs-toggle="collapse" data-bs-target="#essentialCookies" aria-expanded="true">
                        <i class="fas fa-shield-alt text-success me-2"></i>
                        <strong>Cookie-uri Esențiale</strong>
                        <span class="badge bg-success ms-2">Obligatorii</span>
                    </button>
                </h2>
                <div id="essentialCookies" class="accordion-collapse collapse show" data-bs-parent="#cookieAccordion">
                    <div class="accordion-body">
                        <p class="text-muted">Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului și nu pot fi dezactivate.</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Cookie</th>
                                        <th>Scop</th>
                                        <th>Durată</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="bg-light p-1 rounded">session_id</code></td>
                                        <td>Gestionarea sesiunii utilizatorului autentificat</td>
                                        <td>Sesiune</td>
                                        <td><span class="badge bg-success">Activ</span></td>
                                    </tr>
                                    <tr>
                                        <td><code class="bg-light p-1 rounded">csrf_token</code></td>
                                        <td>Protecție împotriva atacurilor CSRF</td>
                                        <td>24 ore</td>
                                        <td><span class="badge bg-success">Activ</span></td>
                                    </tr>
                                    <tr>
                                        <td><code class="bg-light p-1 rounded">cookie_consent</code></td>
                                        <td>Stochează preferințele tale de cookie-uri</td>
                                        <td>1 an</td>
                                        <td><span class="badge bg-success">Activ</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Cookies -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary bg-opacity-10" type="button" data-bs-toggle="collapse" data-bs-target="#performanceCookies">
                        <i class="fas fa-chart-line text-primary me-2"></i>
                        <strong>Cookie-uri de Performanță</strong>
                        <span class="badge bg-primary ms-2">Opțional</span>
                    </button>
                </h2>
                <div id="performanceCookies" class="accordion-collapse collapse" data-bs-parent="#cookieAccordion">
                    <div class="accordion-body">
                        <p class="text-muted">Aceste cookie-uri colectează informații despre modul în care vizitatorii utilizează site-ul nostru.</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><code>_ga</code></h5>
                                        <p class="card-text">Google Analytics - identificare utilizatori unici</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted"><i class="far fa-clock me-1"></i>2 ani</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><code>_gid</code></h5>
                                        <p class="card-text">Google Analytics - stocare informații despre vizită</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted"><i class="far fa-clock me-1"></i>24 ore</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><code>_gat</code></h5>
                                        <p class="card-text">Google Analytics - limitare rate de cereri</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted"><i class="far fa-clock me-1"></i>1 minut</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-secondary bg-opacity-10" type="button" data-bs-toggle="collapse" data-bs-target="#functionalityCookies">
                        <i class="fas fa-cog text-secondary me-2"></i>
                        <strong>Cookie-uri de Funcționalitate</strong>
                        <span class="badge bg-secondary ms-2">Opțional</span>
                    </button>
                </h2>
                <div id="functionalityCookies" class="accordion-collapse collapse" data-bs-parent="#cookieAccordion">
                    <div class="accordion-body">
                        <p class="text-muted">Aceste cookie-uri permit site-ului să își amintească alegerile tale pentru o experiență îmbunătățită.</p>
                        <div class="list-group">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1"><code>language_pref</code></h6>
                                    <small class="text-muted">Stochează preferința de limbă</small>
                                </div>
                                <span class="badge bg-secondary rounded-pill">1 an</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1"><code>theme_mode</code></h6>
                                    <small class="text-muted">Tema preferată (light/dark)</small>
                                </div>
                                <span class="badge bg-secondary rounded-pill">6 luni</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1"><code>font_size</code></h6>
                                    <small class="text-muted">Dimensiunea fontului preferată</small>
                                </div>
                                <span class="badge bg-secondary rounded-pill">1 an</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-warning bg-opacity-10" type="button" data-bs-toggle="collapse" data-bs-target="#marketingCookies">
                        <i class="fas fa-bullhorn text-warning me-2"></i>
                        <strong>Cookie-uri de Marketing</strong>
                        <span class="badge bg-warning text-dark ms-2">Opțional</span>
                    </button>
                </h2>
                <div id="marketingCookies" class="accordion-collapse collapse" data-bs-parent="#cookieAccordion">
                    <div class="accordion-body">
                        <p class="text-muted">Aceste cookie-uri sunt folosite pentru a-ți afișa reclame relevante.</p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card border-warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fab fa-facebook fs-1 text-primary me-3"></i>
                                            <h5 class="card-title mb-0"><code>_fbp</code></h5>
                                        </div>
                                        <p class="card-text">Facebook Pixel pentru publicitate personalizată și tracking conversii</p>
                                        <span class="badge bg-warning text-dark">3 luni</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-ad fs-1 text-warning me-3"></i>
                                            <h5 class="card-title mb-0"><code>ads_id</code></h5>
                                        </div>
                                        <p class="card-text">Identificare pentru publicitate țintită și retargeting</p>
                                        <span class="badge bg-warning text-dark">1 an</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="card bg-primary bg-gradient text-white mb-4">
            <div class="card-body text-center py-5">
                <i class="fas fa-sliders-h fs-1 mb-3"></i>
                <h2 class="display-5 mb-3">Gestionează Preferințele de Cookie-uri</h2>
                <p class="lead mb-4">Ai control complet asupra cookie-urilor utilizate pe site-ul nostru</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-success btn-lg px-4" type="button">
                        <i class="fas fa-check me-2"></i>Acceptă Toate Cookie-urile
                    </button>
                    <button class="btn btn-light btn-lg px-4" type="button">
                        <i class="fas fa-cog me-2"></i>Personalizează Setările
                    </button>
                    <button class="btn btn-danger btn-lg px-4" type="button">
                        <i class="fas fa-times me-2"></i>Respinge Cookie-urile Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="display-5 mb-4">Setări în Browser</h2>
        <div class="row g-4 mb-4">
            <div class="col-6 col-md-3">
                <div class="card text-center h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="fab fa-chrome text-primary mb-3" style="font-size: 4rem;"></i>
                        <h5 class="card-title">Google Chrome</h5>
                        <p class="card-text text-muted small">Setări → Confidențialitate și securitate → Cookie-uri</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="fab fa-firefox text-warning mb-3" style="font-size: 4rem;"></i>
                        <h5 class="card-title">Mozilla Firefox</h5>
                        <p class="card-text text-muted small">Opțiuni → Confidențialitate și securitate</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="fab fa-safari text-info mb-3" style="font-size: 4rem;"></i>
                        <h5 class="card-title">Apple Safari</h5>
                        <p class="card-text text-muted small">Preferințe → Confidențialitate → Cookie-uri</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="fab fa-edge text-primary mb-3" style="font-size: 4rem;"></i>
                        <h5 class="card-title">Microsoft Edge</h5>
                        <p class="card-text text-muted small">Setări → Cookie-uri și permisiuni site</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Alert -->
        <div class="alert alert-warning d-flex align-items-start" role="alert">
            <i class="fas fa-envelope fs-1 me-3"></i>
            <div>
                <h4 class="alert-heading">Contactează-ne</h4>
                <p class="mb-0">
                    Pentru întrebări sau nelămuriri privind politica noastră de cookie-uri, te rugăm să ne contactezi la: 
                    <strong><a href="mailto:privacy@example.com" class="alert-link">privacy@example.com</a></strong>
                </p>
            </div>
        </div>

        <!-- Statistics -->
        <div class="row g-3 text-center mb-4">
            <div class="col-6 col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fs-1 mb-2"></i>
                        <h3 class="display-6">3</h3>
                        <p class="mb-0">Esențiale</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <i class="fas fa-chart-line fs-1 mb-2"></i>
                        <h3 class="display-6">3</h3>
                        <p class="mb-0">Performanță</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <i class="fas fa-cog fs-1 mb-2"></i>
                        <h3 class="display-6">3</h3>
                        <p class="mb-0">Funcționalitate</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <i class="fas fa-bullhorn fs-1 mb-2"></i>
                        <h3 class="display-6">2</h3>
                        <p class="mb-0">Marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="mb-2">CookiePolicy - Bootstrap 5</h5>
                    <p class="text-muted mb-2">© 2024 Toate drepturile rezervate</p>
                    <p class="text-muted small">Ultima actualizare: <?php echo date('d F Y'); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="btn btn-primary btn-lg rounded-circle position-fixed bottom-0 end-0 m-4" 
            style="width: 60px; height: 60px; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
