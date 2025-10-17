<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Bulma Design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .policy-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .hero.is-primary {
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
            border-radius: 12px;
            margin-bottom: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        
        .box {
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }
        
        .section-title {
            color: #3273dc;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .section-title i {
            font-size: 2.5rem;
        }
        
        .notification.is-custom {
            background: linear-gradient(135deg, #ffe08a 0%, #ffdd57 100%);
            border-left: 5px solid #ff9800;
        }
        
        .content-box {
            background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #00d1b2;
            margin: 1rem 0;
        }
        
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
            color: white;
            border-radius: 12px 12px 0 0;
        }
        
        .card-header-title {
            color: white;
        }
        
        .tag.is-gradient {
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }
        
        .contact-hero {
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
            border-radius: 12px;
            padding: 3rem;
            color: white;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        
        .contact-hero a {
            color: white;
            text-decoration: underline;
        }
        
        .message.is-info .message-header {
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
        }
        
        .icon-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #00d1b2 0%, #3273dc 100%);
            border-radius: 50%;
            color: white;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .timeline-item {
            border-left: 3px solid #00d1b2;
            padding-left: 2rem;
            margin-left: 1rem;
            padding-bottom: 2rem;
            position: relative;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 0;
            width: 14px;
            height: 14px;
            background: #00d1b2;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="policy-wrapper">
        <!-- Hero Header -->
        <section class="hero is-primary is-medium">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <p class="title is-1">
                        <i class="fas fa-shield-halved"></i>
                        <br>Politica de Confidențialitate
                    </p>
                    <p class="subtitle is-3">Reședința Budaș</p>
                    <p class="subtitle is-5">Ultima actualizare: 01 Octombrie 2025</p>
                </div>
            </div>
        </section>

        <!-- Introducere -->
        <div class="box">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="notification is-custom">
                <p class="has-text-weight-bold"><i class="fas fa-exclamation-triangle"></i> Notă Importantă</p>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <div class="content">
                <p class="is-size-5"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
            </div>
        </div>

        <!-- Informații Colectate -->
        <div class="box">
            <h2 class="section-title">
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="columns is-multiline">
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                <i class="fas fa-user mr-2"></i> Informații Personale
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                                    <li><strong>Adresa de email</strong> - Pentru confirmări și comunicări</li>
                                    <li><strong>Număr de telefon</strong> - Pentru contact în caz de urgență</li>
                                    <li><strong>Adresa fizică</strong> - Pentru facturare (dacă este necesar)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                <i class="fas fa-cog mr-2"></i> Informații Tehnice
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><strong>Adresa IP</strong> - Pentru securitate și analiză</li>
                                    <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                                    <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                                    <li><strong>Pagini vizitate</strong> - Pentru îmbunătățirea site-ului</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                <i class="fas fa-calendar-check mr-2"></i> Informații de Rezervare
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><strong>Data de check-in și check-out</strong></li>
                                    <li><strong>Numărul de persoane</strong></li>
                                    <li><strong>Tipul de cameră dorit</strong></li>
                                    <li><strong>Cerințe speciale</strong> - Dacă sunt specificate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                <i class="fas fa-chart-line mr-2"></i> Informații de Utilizare
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
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
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="box">
            <h2 class="section-title">
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div class="tags are-large">
                <span class="tag is-gradient"><i class="fas fa-check-circle mr-2"></i> Procesarea Rezervărilor</span>
                <span class="tag is-gradient"><i class="fas fa-headset mr-2"></i> Suport Clienți</span>
                <span class="tag is-gradient"><i class="fas fa-bullhorn mr-2"></i> Marketing</span>
                <span class="tag is-gradient"><i class="fas fa-chart-bar mr-2"></i> Îmbunătățiri</span>
                <span class="tag is-gradient"><i class="fas fa-shield-alt mr-2"></i> Securitate</span>
                <span class="tag is-gradient"><i class="fas fa-gavel mr-2"></i> Conformitate</span>
            </div>
            
            <div class="content mt-4">
                <div class="timeline-item">
                    <strong>Procesarea Rezervărilor</strong>
                    <p>Pentru a-ți procesa rezervările și a-ți trimite confirmări</p>
                </div>
                <div class="timeline-item">
                    <strong>Suport Clienți</strong>
                    <p>Pentru a-ți răspunde la întrebări și a-ți oferi asistență</p>
                </div>
                <div class="timeline-item">
                    <strong>Marketing și Comunicări</strong>
                    <p>Pentru a-ți trimite oferte speciale și noutăți (doar cu consimțământul tău)</p>
                </div>
                <div class="timeline-item">
                    <strong>Îmbunătățirea Serviciilor</strong>
                    <p>Pentru a analiza utilizarea site-ului și a îmbunătăți experiența</p>
                </div>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="box">
            <h2 class="section-title">
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p class="subtitle is-5">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="columns is-multiline">
                <div class="column is-6">
                    <div class="message is-info">
                        <div class="message-header">
                            <p><i class="fas fa-eye mr-2"></i> Dreptul de Acces</p>
                        </div>
                        <div class="message-body">
                            Poți solicita o copie a datelor tale personale
                        </div>
                    </div>
                </div>
                
                <div class="column is-6">
                    <div class="message is-info">
                        <div class="message-header">
                            <p><i class="fas fa-edit mr-2"></i> Dreptul de Rectificare</p>
                        </div>
                        <div class="message-body">
                            Poți corecta informațiile inexacte
                        </div>
                    </div>
                </div>
                
                <div class="column is-6">
                    <div class="message is-info">
                        <div class="message-header">
                            <p><i class="fas fa-trash mr-2"></i> Dreptul de Ștergere</p>
                        </div>
                        <div class="message-body">
                            Poți solicita ștergerea datelor tale
                        </div>
                    </div>
                </div>
                
                <div class="column is-6">
                    <div class="message is-info">
                        <div class="message-header">
                            <p><i class="fas fa-ban mr-2"></i> Dreptul de Opoziție</p>
                        </div>
                        <div class="message-body">
                            Poți obiecta la procesarea datelor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="box">
            <h2 class="section-title">
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <div class="content">
                <p class="is-size-5">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
                
                <div class="columns is-multiline">
                    <div class="column is-4">
                        <div class="has-text-centered">
                            <div class="icon-wrapper mx-auto">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <p class="has-text-weight-bold">Criptare SSL/TLS</p>
                            <p class="is-size-7">Pentru toate comunicările</p>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="has-text-centered">
                            <div class="icon-wrapper mx-auto">
                                <i class="fas fa-server"></i>
                            </div>
                            <p class="has-text-weight-bold">Servere Securizate</p>
                            <p class="is-size-7">Cu acces restricționat</p>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="has-text-centered">
                            <div class="icon-wrapper mx-auto">
                                <i class="fas fa-database"></i>
                            </div>
                            <p class="has-text-weight-bold">Backup-uri Regulate</p>
                            <p class="is-size-7">Pentru protecția datelor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-hero">
            <h2 class="title is-2 has-text-white has-text-centered">
                <i class="fas fa-envelope"></i><br>Contact
            </h2>
            <p class="subtitle is-4 has-text-white has-text-centered">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="columns mt-5">
                <div class="column has-text-centered">
                    <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                    <p><strong>Adresa:</strong><br>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="column has-text-centered">
                    <i class="fas fa-phone fa-2x mb-3"></i>
                    <p><strong>Telefon:</strong><br><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="column has-text-centered">
                    <i class="fas fa-envelope fa-2x mb-3"></i>
                    <p><strong>Email:</strong><br><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
