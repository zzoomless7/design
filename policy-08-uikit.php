<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - UIkit Design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #0f7173 0%, #1e4d92 100%);
            min-height: 100vh;
            padding: 40px 0;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #1e4d92 0%, #0f7173 100%);
            color: white;
            padding: 80px 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.05" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }
        
        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
        }
        
        .hero-icon {
            font-size: 6rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }
        
        .uk-card {
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }
        
        .uk-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }
        
        .section-title {
            color: #1e4d92;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .section-title i {
            font-size: 3rem;
        }
        
        .uk-alert-warning {
            background: linear-gradient(135deg, #fff3cd 0%, #ffe69c 100%);
            border-left: 5px solid #ffc107;
            border-radius: 10px;
        }
        
        .uk-card-header {
            background: linear-gradient(135deg, #1e4d92 0%, #0f7173 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            font-weight: 700;
        }
        
        .uk-badge-custom {
            background: linear-gradient(135deg, #1e4d92 0%, #0f7173 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            margin: 5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .uk-accordion-title {
            font-weight: 700;
            color: #1e4d92;
            font-size: 1.3rem;
        }
        
        .uk-accordion-title::before {
            color: #0f7173;
        }
        
        .contact-section {
            background: linear-gradient(135deg, #1e4d92 0%, #0f7173 100%);
            color: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
        }
        
        .contact-section a {
            color: white;
            text-decoration: underline;
        }
        
        .icon-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1e4d92 0%, #0f7173 100%);
            border-radius: 50%;
            color: white;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .uk-list li {
            margin-bottom: 12px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="uk-container">
        <!-- Hero -->
        <div class="hero-section">
            <div class="hero-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <h1 class="uk-heading-medium uk-margin-remove">Politica de Confidențialitate</h1>
            <h2 class="uk-heading-small">Reședința Budaș</h2>
            <p class="uk-text-large">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="uk-card uk-card-default uk-card-body">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="uk-alert-warning" uk-alert>
                <p class="uk-text-bold"><i class="fas fa-exclamation-triangle"></i> Notă Importantă</p>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p class="uk-text-lead"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="uk-card uk-card-default uk-card-body">
            <h2 class="section-title">
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-primary">
                        <div class="uk-card-header">
                            <h3 class="uk-card-title"><i class="fas fa-user"></i> Informații Personale</h3>
                        </div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                                <li><strong>Adresa de email</strong> - Pentru confirmări și comunicări</li>
                                <li><strong>Număr de telefon</strong> - Pentru contact în caz de urgență</li>
                                <li><strong>Adresa fizică</strong> - Pentru facturare (dacă este necesar)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="uk-card uk-card-primary">
                        <div class="uk-card-header">
                            <h3 class="uk-card-title"><i class="fas fa-cog"></i> Informații Tehnice</h3>
                        </div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <li><strong>Adresa IP</strong> - Pentru securitate și analiză</li>
                                <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                                <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                                <li><strong>Pagini vizitate</strong> - Pentru îmbunătățirea site-ului</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="uk-card uk-card-primary">
                        <div class="uk-card-header">
                            <h3 class="uk-card-title"><i class="fas fa-calendar-check"></i> Informații de Rezervare</h3>
                        </div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <li><strong>Data de check-in și check-out</strong></li>
                                <li><strong>Numărul de persoane</strong></li>
                                <li><strong>Tipul de cameră dorit</strong></li>
                                <li><strong>Cerințe speciale</strong> - Dacă sunt specificate</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="uk-card uk-card-primary">
                        <div class="uk-card-header">
                            <h3 class="uk-card-title"><i class="fas fa-chart-line"></i> Informații de Utilizare</h3>
                        </div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <li><strong>Timpul petrecut pe pagini</strong></li>
                                <li><strong>Link-urile pe care dai click</strong></li>
                                <li><strong>Preferințele de navigare</strong></li>
                                <li><strong>Erorile întâlnite</strong> - Pentru îmbunătățiri</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="uk-card uk-card-default uk-card-body">
            <h2 class="section-title">
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div class="uk-text-center uk-margin">
                <span class="uk-badge-custom"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="uk-badge-custom"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="uk-badge-custom"><i class="fas fa-bullhorn"></i> Marketing</span>
                <span class="uk-badge-custom"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                <span class="uk-badge-custom"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="uk-badge-custom"><i class="fas fa-gavel"></i> Conformitate</span>
            </div>
            
            <ul uk-accordion>
                <li>
                    <a class="uk-accordion-title" href="#">Procesarea Rezervărilor</a>
                    <div class="uk-accordion-content">
                        <p>Pentru a-ți procesa rezervările și a-ți trimite confirmări de rezervare.</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Suport Clienți</a>
                    <div class="uk-accordion-content">
                        <p>Pentru a-ți răspunde la întrebări și a-ți oferi asistență completă.</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Marketing și Comunicări</a>
                    <div class="uk-accordion-content">
                        <p>Pentru a-ți trimite oferte speciale și noutăți (doar cu consimțământul tău explicit).</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Drepturile Tale -->
        <div class="uk-card uk-card-default uk-card-body">
            <h2 class="section-title">
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p class="uk-text-lead">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="uk-child-width-1-2@m" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                        <h3 class="uk-card-title"><i class="fas fa-eye"></i> Dreptul de Acces</h3>
                        <p>Poți solicita o copie a datelor tale personale</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                        <h3 class="uk-card-title"><i class="fas fa-edit"></i> Dreptul de Rectificare</h3>
                        <p>Poți corecta informațiile inexacte</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                        <h3 class="uk-card-title"><i class="fas fa-trash"></i> Dreptul de Ștergere</h3>
                        <p>Poți solicita ștergerea datelor tale</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                        <h3 class="uk-card-title"><i class="fas fa-ban"></i> Dreptul de Opoziție</h3>
                        <p>Poți obiecta la procesarea datelor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="uk-card uk-card-default uk-card-body">
            <h2 class="section-title">
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p class="uk-text-lead">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="uk-child-width-1-3@m uk-text-center" uk-grid>
                <div>
                    <div class="icon-badge">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="uk-heading-small">Criptare SSL/TLS</h3>
                    <p>Pentru toate comunicările</p>
                </div>
                <div>
                    <div class="icon-badge">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="uk-heading-small">Servere Securizate</h3>
                    <p>Cu acces restricționat</p>
                </div>
                <div>
                    <div class="icon-badge">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="uk-heading-small">Backup-uri Regulate</h3>
                    <p>Pentru protecția datelor</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-section">
            <h2 class="uk-heading-medium uk-text-center">
                <i class="fas fa-envelope"></i><br>
                Contact
            </h2>
            <p class="uk-text-large uk-text-center">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="uk-child-width-1-3@m uk-text-center uk-margin-large-top" uk-grid>
                <div>
                    <i class="fas fa-map-marker-alt fa-3x uk-margin-small-bottom"></i>
                    <h3 class="uk-heading-small">Adresa</h3>
                    <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div>
                    <i class="fas fa-phone fa-3x uk-margin-small-bottom"></i>
                    <h3 class="uk-heading-small">Telefon</h3>
                    <p><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div>
                    <i class="fas fa-envelope fa-3x uk-margin-small-bottom"></i>
                    <h3 class="uk-heading-small">Email</h3>
                    <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
</body>
</html>
