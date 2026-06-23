<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Semantic UI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Menu -->
    <div class="ui inverted menu">
        <div class="ui container">
            <a href="#" class="header item">
                <i class="cookie bite icon"></i>
                CookiePolicy
            </a>
            <a href="#" class="item">Acasă</a>
            <a href="#" class="item">Despre</a>
            <a href="#" class="item">Contact</a>
        </div>
    </div>

    <!-- Hero -->
    <div class="ui inverted vertical masthead center aligned segment" style="background: linear-gradient(135deg, #2185D0 0%, #6435C9 100%); min-height: 400px; display: flex; align-items: center;">
        <div class="ui text container">
            <div style="font-size: 6rem; margin-bottom: 1rem;">🍪</div>
            <h1 class="ui inverted header" style="font-size: 4rem; font-weight: bold;">
                Politica de Cookie-uri
            </h1>
            <h2 style="font-size: 1.5rem; font-weight: normal;">Construit cu Semantic UI - User interface is the language of the web</h2>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ui container" style="margin-top: 3em; margin-bottom: 3em;">
        <!-- Info Message -->
        <div class="ui info icon message">
            <i class="info circle icon"></i>
            <div class="content">
                <div class="header">Ce sunt cookie-urile?</div>
                <p>Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău atunci când vizitezi un site web. Ele ajută site-ul să funcționeze eficient și să îți ofere o experiență personalizată.</p>
            </div>
        </div>

        <h2 class="ui header">
            <i class="settings icon"></i>
            <div class="content">
                Categorii de Cookie-uri
                <div class="sub header">Tipuri și scopuri diferite</div>
            </div>
        </h2>

        <!-- Accordion for Cookie Categories -->
        <div class="ui styled accordion">
            <!-- Essential Cookies -->
            <div class="active title">
                <i class="dropdown icon"></i>
                <i class="shield alternate icon green"></i>
                Cookie-uri Esențiale
                <div class="ui green label">Obligatorii</div>
            </div>
            <div class="active content">
                <p>Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului.</p>
                <table class="ui celled striped table">
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
                            <td>Gestionare sesiune utilizator</td>
                            <td>Sesiune</td>
                            <td><div class="ui green label">Activ</div></td>
                        </tr>
                        <tr>
                            <td><code>csrf_token</code></td>
                            <td>Protecție împotriva atacurilor CSRF</td>
                            <td>24 ore</td>
                            <td><div class="ui green label">Activ</div></td>
                        </tr>
                        <tr>
                            <td><code>cookie_consent</code></td>
                            <td>Salvează preferințele de cookie-uri</td>
                            <td>1 an</td>
                            <td><div class="ui green label">Activ</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Performance Cookies -->
            <div class="title">
                <i class="dropdown icon"></i>
                <i class="chart line icon blue"></i>
                Cookie-uri de Performanță
                <div class="ui blue label">Opțional</div>
            </div>
            <div class="content">
                <p>Aceste cookie-uri colectează informații despre modul în care vizitatorii utilizează site-ul nostru.</p>
                <div class="ui three stackable cards">
                    <div class="ui card">
                        <div class="content">
                            <div class="header"><code>_ga</code></div>
                            <div class="meta">Google Analytics</div>
                            <div class="description">Identificare utilizatori unici</div>
                        </div>
                        <div class="extra content">
                            <span><i class="clock icon"></i>2 ani</span>
                        </div>
                    </div>
                    <div class="ui card">
                        <div class="content">
                            <div class="header"><code>_gid</code></div>
                            <div class="meta">Google Analytics</div>
                            <div class="description">Stocare informații despre vizită</div>
                        </div>
                        <div class="extra content">
                            <span><i class="clock icon"></i>24 ore</span>
                        </div>
                    </div>
                    <div class="ui card">
                        <div class="content">
                            <div class="header"><code>_gat</code></div>
                            <div class="meta">Google Analytics</div>
                            <div class="description">Limitare rate de cereri</div>
                        </div>
                        <div class="extra content">
                            <span><i class="clock icon"></i>1 minut</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="title">
                <i class="dropdown icon"></i>
                <i class="cog icon purple"></i>
                Cookie-uri de Funcționalitate
                <div class="ui purple label">Opțional</div>
            </div>
            <div class="content">
                <p>Aceste cookie-uri permit site-ului să își amintească alegerile tale.</p>
                <div class="ui relaxed divided list">
                    <div class="item">
                        <i class="large language middle aligned icon"></i>
                        <div class="content">
                            <div class="header"><code>language_pref</code></div>
                            <div class="description">Stochează preferința de limbă • 1 an</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="large adjust middle aligned icon"></i>
                        <div class="content">
                            <div class="header"><code>theme_mode</code></div>
                            <div class="description">Tema preferată (light/dark) • 6 luni</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="large font middle aligned icon"></i>
                        <div class="content">
                            <div class="header"><code>font_size</code></div>
                            <div class="description">Dimensiunea fontului preferată • 1 an</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="title">
                <i class="dropdown icon"></i>
                <i class="bullhorn icon orange"></i>
                Cookie-uri de Marketing
                <div class="ui orange label">Opțional</div>
            </div>
            <div class="content">
                <p>Aceste cookie-uri sunt folosite pentru a-ți afișa reclame relevante.</p>
                <div class="ui two stackable cards">
                    <div class="ui card">
                        <div class="content">
                            <i class="right floated facebook icon large blue"></i>
                            <div class="header"><code>_fbp</code></div>
                            <div class="meta">Facebook Pixel</div>
                            <div class="description">Pentru publicitate personalizată și tracking conversii</div>
                        </div>
                        <div class="extra content">
                            <span><i class="calendar icon"></i>3 luni</span>
                        </div>
                    </div>
                    <div class="ui card">
                        <div class="content">
                            <i class="right floated ad icon large orange"></i>
                            <div class="header"><code>ads_id</code></div>
                            <div class="meta">Advertising</div>
                            <div class="description">Identificare pentru publicitate țintită</div>
                        </div>
                        <div class="extra content">
                            <span><i class="calendar icon"></i>1 an</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="ui raised very padded text container segment" style="margin-top: 3em; text-align: center; background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);">
            <h2 class="ui icon header">
                <i class="sliders horizontal icon"></i>
                <div class="content">
                    Gestionează Preferințele de Cookie-uri
                    <div class="sub header">Controlează cookie-urile utilizate pe acest site</div>
                </div>
            </h2>
            <div class="ui three column stackable center aligned grid">
                <div class="column">
                    <button class="ui large green button">
                        <i class="check icon"></i>
                        Acceptă Toate
                    </button>
                </div>
                <div class="column">
                    <button class="ui large blue button">
                        <i class="settings icon"></i>
                        Personalizează
                    </button>
                </div>
                <div class="column">
                    <button class="ui large red button">
                        <i class="times icon"></i>
                        Respinge Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="ui dividing header" style="margin-top: 3em;">
            <i class="globe icon"></i>
            <div class="content">
                Setări Browser
                <div class="sub header">Cum să gestionezi cookie-urile în diferite browsere</div>
            </div>
        </h2>

        <div class="ui four stackable cards">
            <div class="ui card">
                <div class="content" style="text-align: center;">
                    <i class="chrome icon massive blue"></i>
                    <div class="header" style="margin-top: 1em;">Google Chrome</div>
                    <div class="description">
                        Setări → Confidențialitate și securitate → Cookie-uri
                    </div>
                </div>
            </div>
            <div class="ui card">
                <div class="content" style="text-align: center;">
                    <i class="firefox icon massive orange"></i>
                    <div class="header" style="margin-top: 1em;">Mozilla Firefox</div>
                    <div class="description">
                        Opțiuni → Confidențialitate și securitate
                    </div>
                </div>
            </div>
            <div class="ui card">
                <div class="content" style="text-align: center;">
                    <i class="safari icon massive blue"></i>
                    <div class="header" style="margin-top: 1em;">Apple Safari</div>
                    <div class="description">
                        Preferințe → Confidențialitate → Cookie-uri
                    </div>
                </div>
            </div>
            <div class="ui card">
                <div class="content" style="text-align: center;">
                    <i class="edge icon massive blue"></i>
                    <div class="header" style="margin-top: 1em;">Microsoft Edge</div>
                    <div class="description">
                        Setări → Cookie-uri și permisiuni site
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="ui warning icon message" style="margin-top: 2em;">
            <i class="envelope icon"></i>
            <div class="content">
                <div class="header">Contactează-ne</div>
                <p>Pentru întrebări despre politica noastră de cookie-uri: <strong>privacy@example.com</strong></p>
            </div>
        </div>

        <!-- Stats -->
        <div class="ui four statistics" style="margin-top: 2em;">
            <div class="green statistic">
                <div class="value">
                    <i class="shield alternate icon"></i> 3
                </div>
                <div class="label">
                    Esențiale
                </div>
            </div>
            <div class="blue statistic">
                <div class="value">
                    <i class="chart line icon"></i> 3
                </div>
                <div class="label">
                    Performanță
                </div>
            </div>
            <div class="purple statistic">
                <div class="value">
                    <i class="cog icon"></i> 3
                </div>
                <div class="label">
                    Funcționalitate
                </div>
            </div>
            <div class="orange statistic">
                <div class="value">
                    <i class="bullhorn icon"></i> 2
                </div>
                <div class="label">
                    Marketing
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="ui inverted vertical footer segment" style="padding: 3em 0em; margin-top: 3em;">
        <div class="ui container">
            <div class="ui stackable center aligned grid">
                <div class="column">
                    <h4 class="ui inverted header">CookiePolicy - Semantic UI</h4>
                    <p>© 2024 Toate drepturile rezervate</p>
                    <p style="opacity: 0.7;">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="ui circular primary icon button" 
            style="position: fixed; bottom: 2rem; right: 2rem; z-index: 100;">
        <i class="arrow up icon"></i>
    </button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
    <script>
        $('.ui.accordion').accordion();
    </script>
</body>
</html>
