<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Spectre Design</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #5755d9;
            --secondary-color: #f1f3f5;
        }
        
        body {
            background: linear-gradient(135deg, #5755d9 0%, #8b5cf6 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .policy-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .hero-banner {
            background: linear-gradient(135deg, #5755d9 0%, #4c4ab5 100%);
            color: white;
            padding: 5rem 3rem;
            border-radius: 1rem;
            text-align: center;
            box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.3);
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero-banner::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255,255,255,0.03) 10px,
                rgba(255,255,255,0.03) 20px
            );
            animation: slide 20s linear infinite;
        }
        
        @keyframes slide {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }
        
        .hero-banner h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }
        
        .hero-banner .hero-icon {
            font-size: 5rem;
            margin-bottom: 2rem;
            position: relative;
            z-index: 1;
        }
        
        .panel {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .panel:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15);
        }
        
        .panel-header {
            background: linear-gradient(135deg, #5755d9 0%, #4c4ab5 100%);
            color: white;
            padding: 1.5rem 2rem;
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .panel-body {
            padding: 2rem;
        }
        
        .panel-footer {
            background: var(--secondary-color);
            padding: 1rem 2rem;
        }
        
        .alert-box {
            background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
            border-left: 0.4rem solid #ff9800;
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin: 1.5rem 0;
        }
        
        .alert-box strong {
            color: #e65100;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .chip-custom {
            background: linear-gradient(135deg, #5755d9 0%, #4c4ab5 100%);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 2rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin: 0.3rem;
            font-weight: 600;
        }
        
        .card-custom {
            background: white;
            border-radius: 0.8rem;
            box-shadow: 0 0.3rem 1rem rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-custom:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 0.6rem 2rem rgba(0, 0, 0, 0.12);
        }
        
        .card-header-custom {
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .contact-panel {
            background: linear-gradient(135deg, #5755d9 0%, #4c4ab5 100%);
            color: white;
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.3);
        }
        
        .contact-panel a {
            color: white;
            text-decoration: underline;
        }
        
        .icon-circle {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #5755d9 0%, #4c4ab5 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin: 0 auto 1rem auto;
        }
        
        .columns {
            display: flex;
            gap: 1.5rem;
            margin: 1.5rem 0;
        }
        
        .column {
            flex: 1;
        }
        
        .list-custom li {
            margin-bottom: 0.75rem;
            line-height: 1.8;
        }
        
        @media (max-width: 768px) {
            .columns {
                flex-direction: column;
            }
            .hero-banner h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="policy-container">
        <!-- Hero -->
        <div class="hero-banner">
            <div class="hero-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <h1>Politica de Confidențialitate</h1>
            <h2>Reședința Budaș</h2>
            <p class="text-large">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="panel">
            <div class="panel-header">
                <i class="fas fa-info-circle"></i>
                Introducere
            </div>
            <div class="panel-body">
                <div class="alert-box">
                    <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                    <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
                </div>
                
                <p class="text-large"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
            </div>
        </div>

        <!-- Informații Colectate -->
        <div class="panel">
            <div class="panel-header">
                <i class="fas fa-database"></i>
                Informații Colectate
            </div>
            <div class="panel-body">
                <div class="columns">
                    <div class="column">
                        <div class="card-custom">
                            <div class="card-header-custom">
                                <i class="fas fa-user"></i> Informații Personale
                            </div>
                            <ul class="list-custom">
                                <li>✓ <strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                                <li>✓ <strong>Adresa de email</strong> - Pentru confirmări</li>
                                <li>✓ <strong>Număr de telefon</strong> - Pentru contact</li>
                                <li>✓ <strong>Adresa fizică</strong> - Pentru facturare</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card-custom">
                            <div class="card-header-custom">
                                <i class="fas fa-cog"></i> Informații Tehnice
                            </div>
                            <ul class="list-custom">
                                <li>✓ <strong>Adresa IP</strong> - Pentru securitate</li>
                                <li>✓ <strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                                <li>✓ <strong>Sistemul de operare</strong> - Pentru optimizare</li>
                                <li>✓ <strong>Pagini vizitate</strong> - Pentru analiză</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="columns">
                    <div class="column">
                        <div class="card-custom">
                            <div class="card-header-custom">
                                <i class="fas fa-calendar-check"></i> Informații de Rezervare
                            </div>
                            <ul class="list-custom">
                                <li>✓ <strong>Data de check-in/out</strong></li>
                                <li>✓ <strong>Numărul de persoane</strong></li>
                                <li>✓ <strong>Tipul de cameră</strong></li>
                                <li>✓ <strong>Cerințe speciale</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card-custom">
                            <div class="card-header-custom">
                                <i class="fas fa-chart-line"></i> Informații de Utilizare
                            </div>
                            <ul class="list-custom">
                                <li>✓ <strong>Timpul pe pagini</strong></li>
                                <li>✓ <strong>Link-uri accesate</strong></li>
                                <li>✓ <strong>Preferințe de navigare</strong></li>
                                <li>✓ <strong>Erori întâlnite</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="panel">
            <div class="panel-header">
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </div>
            <div class="panel-body">
                <div class="text-center">
                    <span class="chip-custom"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                    <span class="chip-custom"><i class="fas fa-headset"></i> Suport Clienți</span>
                    <span class="chip-custom"><i class="fas fa-bullhorn"></i> Marketing</span>
                    <span class="chip-custom"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                    <span class="chip-custom"><i class="fas fa-shield-alt"></i> Securitate</span>
                    <span class="chip-custom"><i class="fas fa-gavel"></i> Conformitate</span>
                </div>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="panel">
            <div class="panel-header">
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </div>
            <div class="panel-body">
                <p class="text-large">În conformitate cu GDPR, ai următoarele drepturi:</p>
                
                <div class="columns">
                    <div class="column">
                        <div class="card-custom text-center">
                            <div class="icon-circle">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>Dreptul de Acces</h3>
                            <p>Poți solicita o copie a datelor tale personale</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card-custom text-center">
                            <div class="icon-circle">
                                <i class="fas fa-edit"></i>
                            </div>
                            <h3>Dreptul de Rectificare</h3>
                            <p>Poți corecta informațiile inexacte</p>
                        </div>
                    </div>
                </div>
                
                <div class="columns">
                    <div class="column">
                        <div class="card-custom text-center">
                            <div class="icon-circle">
                                <i class="fas fa-trash"></i>
                            </div>
                            <h3>Dreptul de Ștergere</h3>
                            <p>Poți solicita ștergerea datelor tale</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card-custom text-center">
                            <div class="icon-circle">
                                <i class="fas fa-ban"></i>
                            </div>
                            <h3>Dreptul de Opoziție</h3>
                            <p>Poți obiecta la procesarea datelor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="panel">
            <div class="panel-header">
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </div>
            <div class="panel-body">
                <p class="text-large">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
                
                <div class="columns">
                    <div class="column text-center">
                        <div class="icon-circle">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Criptare SSL/TLS</h3>
                        <p>Pentru toate comunicările</p>
                    </div>
                    <div class="column text-center">
                        <div class="icon-circle">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>Servere Securizate</h3>
                        <p>Cu acces restricționat</p>
                    </div>
                    <div class="column text-center">
                        <div class="icon-circle">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Backup-uri Regulate</h3>
                        <p>Pentru protecția datelor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-panel text-center">
            <h2 class="text-large">
                <i class="fas fa-envelope fa-3x"></i><br><br>
                Contact
            </h2>
            <p class="text-large">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="columns" style="margin-top: 2rem;">
                <div class="column">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <h3>Adresa</h3>
                    <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="column">
                    <i class="fas fa-phone fa-2x"></i>
                    <h3>Telefon</h3>
                    <p><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="column">
                    <i class="fas fa-envelope fa-2x"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
