<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Skeleton Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%);
            padding: 40px 0;
            font-family: "Raleway", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        
        .hero {
            background: linear-gradient(135deg, #d6006b 0%, #e64e00 100%);
            color: white;
            padding: 80px 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            margin-bottom: 40px;
        }
        
        .hero-icon {
            font-size: 100px;
            margin-bottom: 30px;
        }
        
        .hero h1 {
            font-size: 60px;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
        }
        
        .hero h3 {
            color: white;
            font-weight: 300;
        }
        
        .content-box {
            background: white;
            border-radius: 10px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        
        .content-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        
        .section-title {
            color: #ee0979;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .section-title i {
            font-size: 42px;
        }
        
        .alert-warning {
            background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
            border-left: 6px solid #ff9800;
            padding: 25px;
            border-radius: 8px;
            margin: 25px 0;
        }
        
        .alert-warning strong {
            color: #f57c00;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        
        .info-card {
            background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
            border-radius: 8px;
            padding: 30px;
            margin-bottom: 20px;
            border-top: 4px solid #ee0979;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
        }
        
        .info-card h5 {
            color: #ff6a00;
            font-size: 24px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .tag {
            background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 6px;
            font-weight: 600;
        }
        
        .right-card {
            background: white;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .right-card:hover {
            transform: scale(1.05);
        }
        
        .right-card i {
            font-size: 60px;
            color: #ee0979;
            margin-bottom: 20px;
        }
        
        .right-card h5 {
            color: #ff6a00;
            font-size: 22px;
            margin-bottom: 15px;
        }
        
        .contact-box {
            background: linear-gradient(135deg, #d6006b 0%, #e64e00 100%);
            color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }
        
        .contact-box a {
            color: white;
            text-decoration: underline;
        }
        
        .icon-circle {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }
        
        .icon-circle i {
            font-size: 40px;
        }
        
        ul li {
            margin-bottom: 15px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero -->
        <div class="hero">
            <div class="hero-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <h1>Politica de Confidențialitate</h1>
            <h3>Reședința Budaș</h3>
            <p style="font-size: 20px; margin-top: 15px;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="content-box">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="alert-warning">
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p style="font-size: 18px; line-height: 1.8;"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="content-box">
            <h2 class="section-title">
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="row">
                <div class="six columns">
                    <div class="info-card">
                        <h5><i class="fas fa-user"></i> Informații Personale</h5>
                        <ul>
                            <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                            <li><strong>Adresa de email</strong> - Pentru confirmări</li>
                            <li><strong>Număr de telefon</strong> - Pentru contact</li>
                            <li><strong>Adresa fizică</strong> - Pentru facturare</li>
                        </ul>
                    </div>
                </div>
                
                <div class="six columns">
                    <div class="info-card">
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
                <div class="six columns">
                    <div class="info-card">
                        <h5><i class="fas fa-calendar-check"></i> Informații de Rezervare</h5>
                        <ul>
                            <li><strong>Data de check-in/out</strong></li>
                            <li><strong>Numărul de persoane</strong></li>
                            <li><strong>Tipul de cameră</strong></li>
                            <li><strong>Cerințe speciale</strong></li>
                        </ul>
                    </div>
                </div>
                
                <div class="six columns">
                    <div class="info-card">
                        <h5><i class="fas fa-chart-line"></i> Informații de Utilizare</h5>
                        <ul>
                            <li><strong>Timpul pe pagini</strong></li>
                            <li><strong>Link-uri accesate</strong></li>
                            <li><strong>Preferințe de navigare</strong></li>
                            <li><strong>Erori întâlnite</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="content-box">
            <h2 class="section-title">
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div style="text-align: center; margin: 30px 0;">
                <span class="tag"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="tag"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="tag"><i class="fas fa-bullhorn"></i> Marketing</span>
                <span class="tag"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                <span class="tag"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="tag"><i class="fas fa-gavel"></i> Conformitate</span>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="content-box">
            <h2 class="section-title">
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p style="font-size: 18px; margin-bottom: 30px;">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="row">
                <div class="six columns">
                    <div class="right-card">
                        <i class="fas fa-eye"></i>
                        <h5>Dreptul de Acces</h5>
                        <p>Poți solicita o copie a datelor tale personale</p>
                    </div>
                </div>
                <div class="six columns">
                    <div class="right-card">
                        <i class="fas fa-edit"></i>
                        <h5>Dreptul de Rectificare</h5>
                        <p>Poți corecta informațiile inexacte</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="six columns">
                    <div class="right-card">
                        <i class="fas fa-trash"></i>
                        <h5>Dreptul de Ștergere</h5>
                        <p>Poți solicita ștergerea datelor tale</p>
                    </div>
                </div>
                <div class="six columns">
                    <div class="right-card">
                        <i class="fas fa-ban"></i>
                        <h5>Dreptul de Opoziție</h5>
                        <p>Poți obiecta la procesarea datelor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="content-box">
            <h2 class="section-title">
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p style="font-size: 18px; line-height: 1.8; margin-bottom: 40px;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="row">
                <div class="four columns" style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 style="color: #ee0979;">Criptare SSL/TLS</h5>
                    <p>Pentru toate comunicările</p>
                </div>
                <div class="four columns" style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-server"></i>
                    </div>
                    <h5 style="color: #ee0979;">Servere Securizate</h5>
                    <p>Cu acces restricționat</p>
                </div>
                <div class="four columns" style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-database"></i>
                    </div>
                    <h5 style="color: #ee0979;">Backup-uri Regulate</h5>
                    <p>Pentru protecția datelor</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-box">
            <h2 style="font-size: 42px; text-align: center; margin-bottom: 30px;">
                <i class="fas fa-envelope" style="font-size: 60px; display: block; margin-bottom: 20px;"></i>
                Contact
            </h2>
            <p style="font-size: 20px; text-align: center; margin-bottom: 40px;">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="row">
                <div class="four columns" style="text-align: center;">
                    <i class="fas fa-map-marker-alt" style="font-size: 40px; margin-bottom: 15px;"></i>
                    <h5>Adresa</h5>
                    <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="four columns" style="text-align: center;">
                    <i class="fas fa-phone" style="font-size: 40px; margin-bottom: 15px;"></i>
                    <h5>Telefon</h5>
                    <p><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="four columns" style="text-align: center;">
                    <i class="fas fa-envelope" style="font-size: 40px; margin-bottom: 15px;"></i>
                    <h5>Email</h5>
                    <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
