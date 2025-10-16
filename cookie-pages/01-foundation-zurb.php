<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Foundation 6 Zurb</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-icon-fonts@3.0.0/foundation-icons.css">
    <style>
        .cookie-hero {
            background: linear-gradient(135deg, #1779ba 0%, #0a3e5c 100%);
            color: white;
            padding: 4rem 0;
            margin-bottom: 2rem;
        }
        .cookie-section {
            margin-bottom: 2rem;
        }
        .cookie-table {
            margin-top: 1rem;
        }
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">CookiePolicy</li>
                <li><a href="#">Acasă</a></li>
                <li><a href="#">Despre</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="cookie-hero">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="cell small-12 medium-10 large-8 text-center">
                    <h1><i class="fi-web"></i> Politica de Cookie-uri</h1>
                    <p class="lead">Informații despre utilizarea cookie-urilor pe site-ul nostru</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12">
                <!-- Introduction -->
                <div class="callout primary cookie-section">
                    <h2>Ce sunt cookie-urile?</h2>
                    <p>Cookie-urile sunt fișiere mici de text pe care site-ul web le stochează pe dispozitivul tău atunci când îl vizitezi. Acestea ajută site-ul să funcționeze eficient și să îți ofere o experiență personalizată.</p>
                </div>

                <!-- Cookie Types -->
                <div class="cookie-section">
                    <h3>Tipuri de Cookie-uri Utilizate</h3>
                    
                    <div class="accordion" data-accordion>
                        <div class="accordion-item is-active" data-accordion-item>
                            <a href="#" class="accordion-title">Cookie-uri Esențiale</a>
                            <div class="accordion-content" data-tab-content>
                                <p>Aceste cookie-uri sunt necesare pentru funcționarea corectă a site-ului și nu pot fi dezactivate.</p>
                                <table class="hover cookie-table">
                                    <thead>
                                        <tr>
                                            <th>Nume</th>
                                            <th>Scop</th>
                                            <th>Durată</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>session_id</td>
                                            <td>Gestionează sesiunea utilizatorului</td>
                                            <td>Sesiune</td>
                                        </tr>
                                        <tr>
                                            <td>csrf_token</td>
                                            <td>Securitate împotriva atacurilor CSRF</td>
                                            <td>24 ore</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="accordion-item" data-accordion-item>
                            <a href="#" class="accordion-title">Cookie-uri de Performanță</a>
                            <div class="accordion-content" data-tab-content>
                                <p>Acestea ne ajută să înțelegem cum vizitatorii interacționează cu site-ul nostru.</p>
                                <table class="hover cookie-table">
                                    <thead>
                                        <tr>
                                            <th>Nume</th>
                                            <th>Scop</th>
                                            <th>Durată</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>_ga</td>
                                            <td>Google Analytics - identificare utilizatori</td>
                                            <td>2 ani</td>
                                        </tr>
                                        <tr>
                                            <td>_gid</td>
                                            <td>Google Analytics - stocare informații</td>
                                            <td>24 ore</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="accordion-item" data-accordion-item>
                            <a href="#" class="accordion-title">Cookie-uri de Marketing</a>
                            <div class="accordion-content" data-tab-content>
                                <p>Utilizate pentru a afișa reclame relevante pentru tine.</p>
                                <table class="hover cookie-table">
                                    <thead>
                                        <tr>
                                            <th>Nume</th>
                                            <th>Scop</th>
                                            <th>Durată</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>_fbp</td>
                                            <td>Facebook Pixel</td>
                                            <td>3 luni</td>
                                        </tr>
                                        <tr>
                                            <td>ads_id</td>
                                            <td>Identificare pentru publicitate</td>
                                            <td>1 an</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cookie Management -->
                <div class="cookie-section">
                    <div class="callout secondary">
                        <h3>Gestionarea Cookie-urilor</h3>
                        <p>Poți gestiona preferințele tale de cookie-uri în orice moment:</p>
                        <div class="button-group">
                            <a href="#" class="button success">Acceptă Toate</a>
                            <a href="#" class="button">Personalizează</a>
                            <a href="#" class="button alert">Respinge Opționale</a>
                        </div>
                    </div>
                </div>

                <!-- Browser Settings -->
                <div class="cookie-section">
                    <h3>Setările Browser-ului</h3>
                    <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-4">
                        <div class="cell">
                            <div class="card">
                                <div class="card-divider">
                                    <h4>Chrome</h4>
                                </div>
                                <div class="card-section">
                                    <p>Setări → Confidențialitate și securitate → Cookie-uri</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell">
                            <div class="card">
                                <div class="card-divider">
                                    <h4>Firefox</h4>
                                </div>
                                <div class="card-section">
                                    <p>Opțiuni → Confidențialitate și securitate</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell">
                            <div class="card">
                                <div class="card-divider">
                                    <h4>Safari</h4>
                                </div>
                                <div class="card-section">
                                    <p>Preferințe → Confidențialitate → Cookie-uri</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell">
                            <div class="card">
                                <div class="card-divider">
                                    <h4>Edge</h4>
                                </div>
                                <div class="card-section">
                                    <p>Setări → Cookie-uri și permisiuni site</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="callout warning">
                    <h3><i class="fi-mail"></i> Contactează-ne</h3>
                    <p>Pentru întrebări despre politica noastră de cookie-uri, te rugăm să ne contactezi la: <strong>privacy@example.com</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="cell" style="background: #2c3840; color: white; padding: 2rem; margin-top: 3rem;">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 text-center">
                    <p>© 2024 CookiePolicy. Toate drepturile rezervate.</p>
                    <p><small>Ultima actualizare: <?php echo date('d.m.Y'); ?></small></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="button back-to-top"><i class="fi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"></script>
    <script>
        $(document).foundation();
        
        // Smooth scroll to top
        $('.back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 600);
        });
    </script>
</body>
</html>
