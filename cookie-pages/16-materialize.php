<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Materialize CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="blue darken-2">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">
                <i class="material-icons left">cookie</i>CookiePolicy
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Acasă</a></li>
                <li><a href="#">Despre</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <div class="section blue darken-1 white-text center">
        <div class="container">
            <div style="font-size: 6rem; padding: 2rem 0;">🍪</div>
            <h1 class="header" style="font-size: 4rem; font-weight: 300;">Politica de Cookie-uri</h1>
            <p class="flow-text">Construit cu Materialize CSS - A modern responsive front-end framework based on Material Design</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <!-- Info Card -->
        <div class="card-panel blue lighten-5">
            <div class="row valign-wrapper" style="margin-bottom: 0;">
                <div class="col s2 m1">
                    <i class="material-icons large blue-text">info</i>
                </div>
                <div class="col s10 m11">
                    <h5 class="blue-text text-darken-4">Ce sunt cookie-urile?</h5>
                    <p class="grey-text text-darken-2">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău atunci când vizitezi un site web. 
                        Materialize CSS este un framework modern bazat pe Material Design de la Google.
                    </p>
                </div>
            </div>
        </div>

        <h4>Categorii de Cookie-uri</h4>

        <!-- Collapsible for Cookie Categories -->
        <ul class="collapsible popout">
            <!-- Essential Cookies -->
            <li class="active">
                <div class="collapsible-header green lighten-4">
                    <i class="material-icons">security</i>
                    Cookie-uri Esențiale
                    <span class="new badge green" data-badge-caption="Obligatorii"></span>
                </div>
                <div class="collapsible-body">
                    <p>Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului.</p>
                    <table class="striped highlight responsive-table">
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
                                <td><code>session_id</code></td>
                                <td>Gestionarea sesiunii utilizatorului</td>
                                <td>Sesiune</td>
                                <td><span class="chip green white-text">Activ</span></td>
                            </tr>
                            <tr>
                                <td><code>csrf_token</code></td>
                                <td>Protecție împotriva CSRF</td>
                                <td>24 ore</td>
                                <td><span class="chip green white-text">Activ</span></td>
                            </tr>
                            <tr>
                                <td><code>cookie_consent</code></td>
                                <td>Preferințe cookie-uri</td>
                                <td>1 an</td>
                                <td><span class="chip green white-text">Activ</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>

            <!-- Performance Cookies -->
            <li>
                <div class="collapsible-header blue lighten-4">
                    <i class="material-icons">trending_up</i>
                    Cookie-uri de Performanță
                    <span class="new badge blue" data-badge-caption="Opțional"></span>
                </div>
                <div class="collapsible-body">
                    <p>Colectează informații despre modul în care utilizați site-ul.</p>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title"><code>_ga</code></span>
                                    <p>Google Analytics - identificare utilizatori</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text"><i class="material-icons tiny">schedule</i> 2 ani</span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title"><code>_gid</code></span>
                                    <p>Analytics - stocare informații</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text"><i class="material-icons tiny">schedule</i> 24 ore</span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title"><code>_gat</code></span>
                                    <p>Rate limiting cereri</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text"><i class="material-icons tiny">schedule</i> 1 minut</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Functionality Cookies -->
            <li>
                <div class="collapsible-header purple lighten-4">
                    <i class="material-icons">settings</i>
                    Cookie-uri de Funcționalitate
                    <span class="new badge purple" data-badge-caption="Opțional"></span>
                </div>
                <div class="collapsible-body">
                    <p>Pentru o experiență personalizată pe site.</p>
                    <ul class="collection">
                        <li class="collection-item">
                            <div><code>language_pref</code> - Preferință de limbă
                                <span class="secondary-content"><i class="material-icons">schedule</i> 1 an</span>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div><code>theme_mode</code> - Temă vizuală (light/dark)
                                <span class="secondary-content"><i class="material-icons">schedule</i> 6 luni</span>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div><code>font_size</code> - Dimensiune font preferată
                                <span class="secondary-content"><i class="material-icons">schedule</i> 1 an</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Marketing Cookies -->
            <li>
                <div class="collapsible-header orange lighten-4">
                    <i class="material-icons">campaign</i>
                    Cookie-uri de Marketing
                    <span class="new badge orange" data-badge-caption="Opțional"></span>
                </div>
                <div class="collapsible-body">
                    <p>Pentru publicitate relevantă și personalizată.</p>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card horizontal">
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h6><code>_fbp</code></h6>
                                        <p>Facebook Pixel pentru tracking și publicitate</p>
                                    </div>
                                    <div class="card-action">
                                        <span class="grey-text">3 luni</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card horizontal">
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h6><code>ads_id</code></h6>
                                        <p>Identificare pentru reclame personalizate</p>
                                    </div>
                                    <div class="card-action">
                                        <span class="grey-text">1 an</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <!-- Cookie Management -->
        <div class="card-panel grey lighten-4" style="margin-top: 3rem;">
            <div class="center-align">
                <h4>
                    <i class="material-icons medium">tune</i>
                    <br>Gestionează Preferințele
                </h4>
                <p class="flow-text">Controlează cookie-urile utilizate pe site</p>
                <div class="row">
                    <div class="col s12 m4">
                        <a class="waves-effect waves-light btn-large green">
                            <i class="material-icons left">check</i>Acceptă Toate
                        </a>
                    </div>
                    <div class="col s12 m4">
                        <a class="waves-effect waves-light btn-large blue">
                            <i class="material-icons left">settings</i>Personalizează
                        </a>
                    </div>
                    <div class="col s12 m4">
                        <a class="waves-effect waves-light btn-large red">
                            <i class="material-icons left">close</i>Respinge
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h4>Setări Browser</h4>
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card center-align">
                    <div class="card-content">
                        <i class="material-icons large blue-text">chrome_reader_mode</i>
                        <span class="card-title">Chrome</span>
                        <p>Setări → Confidențialitate</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card center-align">
                    <div class="card-content">
                        <i class="material-icons large orange-text">web</i>
                        <span class="card-title">Firefox</span>
                        <p>Opțiuni → Privacy</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card center-align">
                    <div class="card-content">
                        <i class="material-icons large blue-text text-lighten-2">explore</i>
                        <span class="card-title">Safari</span>
                        <p>Preferințe → Privacy</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card center-align">
                    <div class="card-content">
                        <i class="material-icons large blue-text text-darken-2">language</i>
                        <span class="card-title">Edge</span>
                        <p>Setări → Cookies</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="card-panel amber lighten-4">
            <div class="row valign-wrapper" style="margin-bottom: 0;">
                <div class="col s2 m1">
                    <i class="material-icons large amber-text text-darken-3">email</i>
                </div>
                <div class="col s10 m11">
                    <h5 class="amber-text text-darken-4">Contactează-ne</h5>
                    <p>Pentru întrebări despre politica de cookie-uri: <strong>privacy@example.com</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer blue darken-2">
        <div class="container">
            <div class="row">
                <div class="col s12 center-align">
                    <h5 class="white-text">CookiePolicy - Materialize CSS</h5>
                    <p class="grey-text text-lighten-4">© 2024 Toate drepturile rezervate</p>
                    <p class="grey-text text-lighten-3">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Action Button -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <i class="large material-icons">arrow_upward</i>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            M.Collapsible.init(elems, {accordion: false});
        });
    </script>
</body>
</html>
