<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Foundation Design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1779ba;
            --secondary-color: #767676;
            --success-color: #3adb76;
            --warning-color: #ffae00;
            --alert-color: #cc4b37;
        }
        
        body {
            background: linear-gradient(135deg, #0a1128 0%, #1779ba 100%);
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            padding: 2rem 0;
        }
        
        .policy-container {
            max-width: 75rem;
            margin: 0 auto;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #1779ba 0%, #14679e 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .hero-section .hero-icon {
            font-size: 5rem;
            margin-bottom: 1.5rem;
        }
        
        .callout {
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .callout:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15);
        }
        
        .callout h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .callout h3 {
            color: var(--secondary-color);
            font-size: 1.75rem;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .alert-box {
            background: linear-gradient(135deg, #fff3cd 0%, #ffe69c 100%);
            border-left: 0.5rem solid var(--warning-color);
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin: 1.5rem 0;
        }
        
        .alert-box strong {
            color: var(--warning-color);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .card {
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15);
        }
        
        .card-divider {
            background: linear-gradient(135deg, #1779ba 0%, #14679e 100%);
            color: white;
            font-weight: 700;
            border-radius: 0.5rem 0.5rem 0 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .label-custom {
            background: linear-gradient(135deg, #1779ba 0%, #14679e 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 2rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin: 0.25rem;
            font-weight: 600;
        }
        
        .contact-panel {
            background: linear-gradient(135deg, #1779ba 0%, #14679e 100%);
            color: white;
            padding: 3rem;
            border-radius: 0.5rem;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.3);
        }
        
        .contact-panel a {
            color: white;
            text-decoration: underline;
        }
        
        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #1779ba 0%, #14679e 100%);
            border-radius: 50%;
            color: white;
            font-size: 2rem;
            margin: 0 auto 1rem auto;
        }
        
        .accordion-title {
            font-weight: 700;
            background: linear-gradient(135deg, #e6f2ff 0%, #cce5ff 100%);
        }
        
        .accordion-title:hover {
            background: linear-gradient(135deg, #cce5ff 0%, #b3d9ff 100%);
        }
        
        ul li {
            margin-bottom: 0.75rem;
            line-height: 1.8;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 3.5rem;
            height: 3.5rem;
            background: linear-gradient(135deg, #1779ba 0%, #14679e 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            z-index: 1000;
        }
        
        .back-to-top:hover {
            transform: translateY(-0.5rem);
        }
    </style>
</head>
<body>
    <div class="policy-container">
        <!-- Hero Header -->
        <div class="hero-section">
            <div class="hero-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <h1>Politica de Confidențialitate</h1>
            <h3>Reședința Budaș</h3>
            <p class="lead">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="callout">
            <h2>
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="alert-box">
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p class="lead"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="callout">
            <h2>
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="grid-x grid-margin-x">
                <div class="cell medium-6">
                    <div class="card">
                        <div class="card-divider">
                            <i class="fas fa-user"></i> Informații Personale
                        </div>
                        <div class="card-section">
                            <ul>
                                <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                                <li><strong>Adresa de email</strong> - Pentru confirmări și comunicări</li>
                                <li><strong>Număr de telefon</strong> - Pentru contact în caz de urgență</li>
                                <li><strong>Adresa fizică</strong> - Pentru facturare (dacă este necesar)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="cell medium-6">
                    <div class="card">
                        <div class="card-divider">
                            <i class="fas fa-cog"></i> Informații Tehnice
                        </div>
                        <div class="card-section">
                            <ul>
                                <li><strong>Adresa IP</strong> - Pentru securitate și analiză</li>
                                <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                                <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                                <li><strong>Pagini vizitate</strong> - Pentru îmbunătățirea site-ului</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="cell medium-6">
                    <div class="card">
                        <div class="card-divider">
                            <i class="fas fa-calendar-check"></i> Informații de Rezervare
                        </div>
                        <div class="card-section">
                            <ul>
                                <li><strong>Data de check-in și check-out</strong></li>
                                <li><strong>Numărul de persoane</strong></li>
                                <li><strong>Tipul de cameră dorit</strong></li>
                                <li><strong>Cerințe speciale</strong> - Dacă sunt specificate</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="cell medium-6">
                    <div class="card">
                        <div class="card-divider">
                            <i class="fas fa-chart-line"></i> Informații de Utilizare
                        </div>
                        <div class="card-section">
                            <ul>
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
        <div class="callout">
            <h2>
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div class="text-center">
                <span class="label-custom"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="label-custom"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="label-custom"><i class="fas fa-bullhorn"></i> Marketing și Comunicări</span>
                <span class="label-custom"><i class="fas fa-chart-bar"></i> Îmbunătățirea Serviciilor</span>
                <span class="label-custom"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="label-custom"><i class="fas fa-gavel"></i> Conformitate Legală</span>
            </div>
            
            <ul class="accordion" data-accordion>
                <li class="accordion-item is-active" data-accordion-item>
                    <a class="accordion-title">Procesarea Rezervărilor</a>
                    <div class="accordion-content" data-tab-content>
                        <p>Pentru a-ți procesa rezervările și a-ți trimite confirmări de rezervare</p>
                    </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                    <a class="accordion-title">Suport Clienți</a>
                    <div class="accordion-content" data-tab-content>
                        <p>Pentru a-ți răspunde la întrebări și a-ți oferi asistență completă</p>
                    </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                    <a class="accordion-title">Marketing și Comunicări</a>
                    <div class="accordion-content" data-tab-content>
                        <p>Pentru a-ți trimite oferte speciale și noutăți (doar cu consimțământul tău explicit)</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Drepturile Tale -->
        <div class="callout">
            <h2>
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p class="lead">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="grid-x grid-margin-x">
                <div class="cell medium-6">
                    <div class="callout primary">
                        <h5><i class="fas fa-eye"></i> Dreptul de Acces</h5>
                        <p>Poți solicita o copie a datelor tale personale</p>
                    </div>
                </div>
                <div class="cell medium-6">
                    <div class="callout primary">
                        <h5><i class="fas fa-edit"></i> Dreptul de Rectificare</h5>
                        <p>Poți corecta informațiile inexacte</p>
                    </div>
                </div>
                <div class="cell medium-6">
                    <div class="callout primary">
                        <h5><i class="fas fa-trash"></i> Dreptul de Ștergere</h5>
                        <p>Poți solicita ștergerea datelor tale</p>
                    </div>
                </div>
                <div class="cell medium-6">
                    <div class="callout primary">
                        <h5><i class="fas fa-ban"></i> Dreptul de Opoziție</h5>
                        <p>Poți obiecta la procesarea datelor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="callout">
            <h2>
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p class="lead">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="grid-x grid-margin-x text-center">
                <div class="cell medium-4">
                    <div class="icon-box">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Criptare SSL/TLS</h5>
                    <p>Pentru toate comunicările</p>
                </div>
                <div class="cell medium-4">
                    <div class="icon-box">
                        <i class="fas fa-server"></i>
                    </div>
                    <h5>Servere Securizate</h5>
                    <p>Cu acces restricționat</p>
                </div>
                <div class="cell medium-4">
                    <div class="icon-box">
                        <i class="fas fa-database"></i>
                    </div>
                    <h5>Backup-uri Regulate</h5>
                    <p>Pentru protecția datelor</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-panel">
            <h2 class="text-center">
                <i class="fas fa-envelope"></i><br>
                Contact
            </h2>
            <p class="lead text-center">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="grid-x grid-margin-x text-center" style="margin-top: 2rem;">
                <div class="cell medium-4">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <p><strong>Adresa:</strong><br>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="cell medium-4">
                    <i class="fas fa-phone fa-2x"></i>
                    <p><strong>Telefon:</strong><br><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="cell medium-4">
                    <i class="fas fa-envelope fa-2x"></i>
                    <p><strong>Email:</strong><br><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <div class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
