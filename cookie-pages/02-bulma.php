<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero.is-cookie {
            background: linear-gradient(135deg, #00d1b2 0%, #00947e 100%);
        }
        .cookie-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 100;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <strong>CookiePolicy</strong>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">Acasă</a>
                <a class="navbar-item">Despre</a>
                <a class="navbar-item">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero is-cookie is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="cookie-icon">
                    <i class="fas fa-cookie-bite"></i>
                </div>
                <h1 class="title is-1 has-text-white">
                    Politica de Cookie-uri
                </h1>
                <h2 class="subtitle is-4 has-text-white">
                    Transparență și control asupra datelor tale
                </h2>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <!-- Introduction -->
            <div class="notification is-info is-light">
                <h2 class="title is-3">
                    <i class="fas fa-info-circle"></i> Ce sunt cookie-urile?
                </h2>
                <p class="content">
                    Cookie-urile sunt fișiere text mici care sunt plasate pe computerul, tableta sau telefonul tău mobil atunci când vizitezi un site web. Cookie-urile sunt folosite pe scară largă pentru a face site-urile web să funcționeze sau să funcționeze mai eficient, precum și pentru a furniza informații proprietarilor site-ului.
                </p>
            </div>

            <!-- Cookie Types -->
            <div class="content mt-6">
                <h2 class="title is-3">Tipuri de Cookie-uri</h2>
                
                <!-- Essential Cookies -->
                <article class="message is-primary">
                    <div class="message-header">
                        <p><i class="fas fa-shield-alt"></i> Cookie-uri Esențiale</p>
                    </div>
                    <div class="message-body">
                        <p>Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului și nu pot fi dezactivate.</p>
                        <table class="table is-fullwidth is-striped is-hoverable mt-4">
                            <thead>
                                <tr>
                                    <th>Nume Cookie</th>
                                    <th>Scop</th>
                                    <th>Durată</th>
                                    <th>Tip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>session_token</code></td>
                                    <td>Menține sesiunea utilizatorului autentificat</td>
                                    <td>Sesiune</td>
                                    <td><span class="tag is-primary">Esențial</span></td>
                                </tr>
                                <tr>
                                    <td><code>csrf_protection</code></td>
                                    <td>Protecție împotriva atacurilor CSRF</td>
                                    <td>24 ore</td>
                                    <td><span class="tag is-primary">Esențial</span></td>
                                </tr>
                                <tr>
                                    <td><code>cookie_consent</code></td>
                                    <td>Stochează preferințele tale de cookie-uri</td>
                                    <td>1 an</td>
                                    <td><span class="tag is-primary">Esențial</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Performance Cookies -->
                <article class="message is-link">
                    <div class="message-header">
                        <p><i class="fas fa-chart-line"></i> Cookie-uri de Performanță</p>
                    </div>
                    <div class="message-body">
                        <p>Aceste cookie-uri colectează informații despre modul în care vizitatorii utilizează site-ul nostru.</p>
                        <table class="table is-fullwidth is-striped is-hoverable mt-4">
                            <thead>
                                <tr>
                                    <th>Nume Cookie</th>
                                    <th>Scop</th>
                                    <th>Durată</th>
                                    <th>Tip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>_ga</code></td>
                                    <td>Google Analytics - identificare utilizatori unici</td>
                                    <td>2 ani</td>
                                    <td><span class="tag is-link">Performanță</span></td>
                                </tr>
                                <tr>
                                    <td><code>_gid</code></td>
                                    <td>Google Analytics - stocare informații</td>
                                    <td>24 ore</td>
                                    <td><span class="tag is-link">Performanță</span></td>
                                </tr>
                                <tr>
                                    <td><code>_gat</code></td>
                                    <td>Google Analytics - limitare rate cereri</td>
                                    <td>1 minut</td>
                                    <td><span class="tag is-link">Performanță</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Functionality Cookies -->
                <article class="message is-success">
                    <div class="message-header">
                        <p><i class="fas fa-cog"></i> Cookie-uri de Funcționalitate</p>
                    </div>
                    <div class="message-body">
                        <p>Aceste cookie-uri permit site-ului să își amintească alegerile tale pentru o experiență îmbunătățită.</p>
                        <table class="table is-fullwidth is-striped is-hoverable mt-4">
                            <thead>
                                <tr>
                                    <th>Nume Cookie</th>
                                    <th>Scop</th>
                                    <th>Durată</th>
                                    <th>Tip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>language_pref</code></td>
                                    <td>Stochează preferința de limbă</td>
                                    <td>1 an</td>
                                    <td><span class="tag is-success">Funcționalitate</span></td>
                                </tr>
                                <tr>
                                    <td><code>theme_mode</code></td>
                                    <td>Tema preferată (light/dark)</td>
                                    <td>6 luni</td>
                                    <td><span class="tag is-success">Funcționalitate</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Marketing Cookies -->
                <article class="message is-warning">
                    <div class="message-header">
                        <p><i class="fas fa-bullhorn"></i> Cookie-uri de Marketing</p>
                    </div>
                    <div class="message-body">
                        <p>Aceste cookie-uri sunt folosite pentru a-ți afișa reclame relevante.</p>
                        <table class="table is-fullwidth is-striped is-hoverable mt-4">
                            <thead>
                                <tr>
                                    <th>Nume Cookie</th>
                                    <th>Scop</th>
                                    <th>Durată</th>
                                    <th>Tip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>_fbp</code></td>
                                    <td>Facebook Pixel pentru publicitate</td>
                                    <td>3 luni</td>
                                    <td><span class="tag is-warning">Marketing</span></td>
                                </tr>
                                <tr>
                                    <td><code>ads_preferences</code></td>
                                    <td>Preferințe pentru publicitate personalizată</td>
                                    <td>1 an</td>
                                    <td><span class="tag is-warning">Marketing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>

            <!-- Cookie Management -->
            <div class="box mt-6">
                <h2 class="title is-3">
                    <i class="fas fa-sliders-h"></i> Gestionează Preferințele
                </h2>
                <p class="content">Poți controla și/sau șterge cookie-urile după cum dorești. Poți accepta toate cookie-urile sau poți personaliza setările.</p>
                <div class="buttons">
                    <button class="button is-success is-large">
                        <span class="icon"><i class="fas fa-check"></i></span>
                        <span>Acceptă Toate</span>
                    </button>
                    <button class="button is-info is-large">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span>Personalizează</span>
                    </button>
                    <button class="button is-danger is-large">
                        <span class="icon"><i class="fas fa-times"></i></span>
                        <span>Respinge Opționale</span>
                    </button>
                </div>
            </div>

            <!-- Browser Settings -->
            <div class="content mt-6">
                <h2 class="title is-3">Setări Browser</h2>
                <div class="columns is-multiline">
                    <div class="column is-one-quarter">
                        <div class="card">
                            <div class="card-image has-text-centered pt-4">
                                <i class="fab fa-chrome" style="font-size: 3rem; color: #4285F4;"></i>
                            </div>
                            <div class="card-content">
                                <p class="title is-5">Chrome</p>
                                <p class="content is-small">Setări → Confidențialitate → Cookie-uri</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-quarter">
                        <div class="card">
                            <div class="card-image has-text-centered pt-4">
                                <i class="fab fa-firefox" style="font-size: 3rem; color: #FF7139;"></i>
                            </div>
                            <div class="card-content">
                                <p class="title is-5">Firefox</p>
                                <p class="content is-small">Opțiuni → Confidențialitate</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-quarter">
                        <div class="card">
                            <div class="card-image has-text-centered pt-4">
                                <i class="fab fa-safari" style="font-size: 3rem; color: #006CFF;"></i>
                            </div>
                            <div class="card-content">
                                <p class="title is-5">Safari</p>
                                <p class="content is-small">Preferințe → Confidențialitate</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-quarter">
                        <div class="card">
                            <div class="card-image has-text-centered pt-4">
                                <i class="fab fa-edge" style="font-size: 3rem; color: #0078D7;"></i>
                            </div>
                            <div class="card-content">
                                <p class="title is-5">Edge</p>
                                <p class="content is-small">Setări → Confidențialitate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="notification is-warning mt-6">
                <h3 class="title is-4">
                    <i class="fas fa-envelope"></i> Contactează-ne
                </h3>
                <p>Pentru întrebări privind politica noastră de cookie-uri: <strong>privacy@example.com</strong></p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer has-background-dark has-text-white">
        <div class="content has-text-centered">
            <p>
                <strong class="has-text-white">CookiePolicy</strong> - Bulma Framework
            </p>
            <p>
                © 2024 Toate drepturile rezervate. Ultima actualizare: <?php echo date('d.m.Y'); ?>
            </p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button class="button is-primary is-large back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <span class="icon">
            <i class="fas fa-arrow-up"></i>
        </span>
    </button>

    <script>
        // Navbar burger toggle
        document.addEventListener('DOMContentLoaded', () => {
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        });
    </script>
</body>
</html>
