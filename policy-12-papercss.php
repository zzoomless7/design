<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Paper CSS</title>
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.1/dist/paper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #41295a 0%, #2f0743 100%);
            padding: 40px 20px;
        }
        
        .hero-paper {
            background: linear-gradient(135deg, #553c9a 0%, #b393d3 100%);
            color: white;
            padding: 60px 40px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.2);
            border: 3px solid #41295a;
        }
        
        .hero-paper h1 {
            font-size: 60px;
            margin-bottom: 20px;
            text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.2);
        }
        
        .hero-icon {
            font-size: 80px;
            margin-bottom: 25px;
        }
        
        .card-custom {
            background: white;
            padding: 35px;
            margin-bottom: 25px;
            box-shadow: 8px 8px 0 rgba(0, 0, 0, 0.1);
            border: 3px solid #41295a;
            transition: transform 0.3s ease;
        }
        
        .card-custom:hover {
            transform: rotate(-1deg) scale(1.02);
        }
        
        .title-handwritten {
            font-size: 38px;
            color: #553c9a;
            margin-bottom: 25px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .title-handwritten i {
            font-size: 45px;
        }
        
        .alert-paper {
            background: #fff9c4;
            border-left: 8px solid #f57f17;
            padding: 25px;
            margin: 25px 0;
            box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.1);
        }
        
        .alert-paper strong {
            color: #f57f17;
            font-size: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-box {
            background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
            padding: 30px;
            margin-bottom: 20px;
            border-top: 6px solid #553c9a;
            box-shadow: 6px 6px 0 rgba(0, 0, 0, 0.1);
            border-left: 3px solid #41295a;
            border-right: 3px solid #41295a;
            border-bottom: 3px solid #41295a;
        }
        
        .info-box h5 {
            color: #b393d3;
            font-size: 26px;
            margin-bottom: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .badge-paper {
            background: linear-gradient(135deg, #553c9a 0%, #b393d3 100%);
            color: white;
            padding: 12px 25px;
            display: inline-block;
            margin: 8px;
            font-weight: 700;
            box-shadow: 4px 4px 0 rgba(0, 0, 0, 0.2);
            border: 2px solid #41295a;
        }
        
        .right-box {
            background: white;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 6px 6px 0 rgba(0, 0, 0, 0.1);
            border: 3px solid #553c9a;
            transition: transform 0.3s ease;
        }
        
        .right-box:hover {
            transform: rotate(1deg);
        }
        
        .right-box i {
            font-size: 55px;
            color: #553c9a;
            margin-bottom: 20px;
        }
        
        .right-box h5 {
            color: #b393d3;
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .contact-paper {
            background: linear-gradient(135deg, #553c9a 0%, #b393d3 100%);
            color: white;
            padding: 50px;
            box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.2);
            border: 4px solid #41295a;
        }
        
        .contact-paper a {
            color: white;
            text-decoration: underline;
            font-weight: 700;
        }
        
        ul li {
            margin-bottom: 12px;
            line-height: 1.8;
            font-size: 17px;
        }
        
        .row {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }
        
        .col-6 {
            flex: 1;
        }
        
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="paper container">
        <!-- Hero -->
        <div class="hero-paper">
            <div class="hero-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <h1>Politica de Confidențialitate</h1>
            <h2>Reședința Budaș</h2>
            <p class="text-large" style="margin-top: 15px; font-size: 20px;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="card-custom">
            <h2 class="title-handwritten">
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="alert-paper">
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p style="margin-top: 10px; font-size: 17px;">Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p style="font-size: 18px; line-height: 1.8;"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="card-custom">
            <h2 class="title-handwritten">
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="row">
                <div class="col-6">
                    <div class="info-box">
                        <h5><i class="fas fa-user"></i> Informații Personale</h5>
                        <ul>
                            <li><strong>Nume și prenume</strong> - Pentru rezervări</li>
                            <li><strong>Adresa de email</strong> - Pentru confirmări</li>
                            <li><strong>Număr de telefon</strong> - Pentru contact</li>
                            <li><strong>Adresa fizică</strong> - Pentru facturare</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="info-box">
                        <h5><i class="fas fa-cog"></i> Informații Tehnice</h5>
                        <ul>
                            <li><strong>Adresa IP</strong> - Pentru securitate</li>
                            <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                            <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                            <li><strong>Pagini vizitate</strong> - Pentru analiză</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="info-box">
                        <h5><i class="fas fa-calendar-check"></i> Informații de Rezervare</h5>
                        <ul>
                            <li><strong>Data de check-in/out</strong></li>
                            <li><strong>Numărul de persoane</strong></li>
                            <li><strong>Tipul de cameră</strong></li>
                            <li><strong>Cerințe speciale</strong></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="info-box">
                        <h5><i class="fas fa-chart-line"></i> Informații de Utilizare</h5>
                        <ul>
                            <li><strong>Timpul pe pagini</strong></li>
                            <li><strong>Link-uri accesate</strong></li>
                            <li><strong>Preferințe</strong></li>
                            <li><strong>Erori întâlnite</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="card-custom">
            <h2 class="title-handwritten">
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div class="text-center" style="margin: 30px 0;">
                <span class="badge-paper"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="badge-paper"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="badge-paper"><i class="fas fa-bullhorn"></i> Marketing</span>
                <span class="badge-paper"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                <span class="badge-paper"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="badge-paper"><i class="fas fa-gavel"></i> Conformitate</span>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="card-custom">
            <h2 class="title-handwritten">
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p style="font-size: 18px; margin-bottom: 30px;">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="row">
                <div class="col-6">
                    <div class="right-box">
                        <i class="fas fa-eye"></i>
                        <h5>Dreptul de Acces</h5>
                        <p>Poți solicita o copie a datelor tale personale</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="right-box">
                        <i class="fas fa-edit"></i>
                        <h5>Dreptul de Rectificare</h5>
                        <p>Poți corecta informațiile inexacte</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="right-box">
                        <i class="fas fa-trash"></i>
                        <h5>Dreptul de Ștergere</h5>
                        <p>Poți solicita ștergerea datelor tale</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="right-box">
                        <i class="fas fa-ban"></i>
                        <h5>Dreptul de Opoziție</h5>
                        <p>Poți obiecta la procesarea datelor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="card-custom">
            <h2 class="title-handwritten">
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p style="font-size: 18px; line-height: 1.8; margin-bottom: 35px;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="row">
                <div class="col-6" style="text-align: center;">
                    <i class="fas fa-shield-alt" style="font-size: 60px; color: #553c9a; margin-bottom: 15px;"></i>
                    <h4 style="color: #b393d3; font-size: 24px;">Criptare SSL/TLS</h4>
                    <p>Pentru toate comunicările</p>
                </div>
                <div class="col-6" style="text-align: center;">
                    <i class="fas fa-server" style="font-size: 60px; color: #553c9a; margin-bottom: 15px;"></i>
                    <h4 style="color: #b393d3; font-size: 24px;">Servere Securizate</h4>
                    <p>Cu acces restricționat</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
                <i class="fas fa-database" style="font-size: 60px; color: #553c9a; margin-bottom: 15px; display: block;"></i>
                <h4 style="color: #b393d3; font-size: 24px;">Backup-uri Regulate</h4>
                <p>Pentru protecția datelor</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-paper">
            <h2 style="font-size: 48px; text-align: center; margin-bottom: 30px;">
                <i class="fas fa-envelope" style="font-size: 70px; display: block; margin-bottom: 25px;"></i>
                Contact
            </h2>
            <p style="font-size: 22px; text-align: center; margin-bottom: 45px;">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="row">
                <div class="col-6" style="text-align: center; padding: 20px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 45px; margin-bottom: 15px; display: block;"></i>
                    <h4 style="font-size: 26px; margin-bottom: 10px;">Adresa</h4>
                    <p style="font-size: 18px;">Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="col-6" style="text-align: center; padding: 20px;">
                    <i class="fas fa-phone" style="font-size: 45px; margin-bottom: 15px; display: block;"></i>
                    <h4 style="font-size: 26px; margin-bottom: 10px;">Telefon</h4>
                    <p style="font-size: 18px;"><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
            </div>
            
            <div style="text-align: center; padding: 20px; margin-top: 20px;">
                <i class="fas fa-envelope" style="font-size: 45px; margin-bottom: 15px; display: block;"></i>
                <h4 style="font-size: 26px; margin-bottom: 10px;">Email</h4>
                <p style="font-size: 18px;"><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
            </div>
        </div>
    </div>
</body>
</html>
