<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Luxury Premium Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Lato', sans-serif;
            background: #0a0a0a;
            color: #ffffff;
            line-height: 1.7;
        }
        
        .luxury-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(197, 144, 67, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(197, 144, 67, 0.1) 0%, transparent 50%),
                linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
            z-index: -1;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 40px;
        }
        
        .hero {
            text-align: center;
            padding: 100px 40px;
            position: relative;
            margin-bottom: 80px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #c59043, transparent);
        }
        
        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #c59043, transparent);
        }
        
        .hero-icon {
            font-size: 120px;
            color: #c59043;
            margin-bottom: 40px;
            text-shadow: 0 0 40px rgba(197, 144, 67, 0.5);
        }
        
        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 5.5rem;
            font-weight: 900;
            color: #c59043;
            margin-bottom: 30px;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 0 5px 20px rgba(197, 144, 67, 0.3);
        }
        
        .hero h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 400;
            color: #ffffff;
            margin-bottom: 20px;
            font-style: italic;
        }
        
        .hero p {
            font-size: 1.3rem;
            color: #c59043;
            letter-spacing: 1px;
        }
        
        .luxury-section {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.8) 0%, rgba(20, 20, 20, 0.9) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(197, 144, 67, 0.2);
            border-radius: 20px;
            padding: 60px;
            margin-bottom: 50px;
            position: relative;
            overflow: hidden;
        }
        
        .luxury-section::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #c59043, transparent, #c59043);
            border-radius: 20px;
            z-index: -1;
            opacity: 0.3;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: #c59043;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 25px;
            padding-bottom: 25px;
            border-bottom: 2px solid rgba(197, 144, 67, 0.3);
        }
        
        .section-title i {
            font-size: 4rem;
        }
        
        .alert-luxury {
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 152, 0, 0.1) 100%);
            border-left: 6px solid #c59043;
            padding: 35px;
            border-radius: 15px;
            margin: 35px 0;
            box-shadow: 0 10px 40px rgba(197, 144, 67, 0.1);
        }
        
        .alert-luxury strong {
            font-size: 1.6rem;
            color: #c59043;
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .alert-luxury p {
            font-size: 1.15rem;
            line-height: 1.9;
            color: #e0e0e0;
        }
        
        .luxury-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            margin: 45px 0;
        }
        
        .luxury-card {
            background: linear-gradient(135deg, rgba(30, 30, 30, 0.9) 0%, rgba(20, 20, 20, 0.95) 100%);
            border: 1px solid rgba(197, 144, 67, 0.3);
            border-radius: 15px;
            padding: 40px;
            transition: all 0.4s ease;
            position: relative;
        }
        
        .luxury-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #c59043, #d4a354, #c59043);
            border-radius: 15px 15px 0 0;
        }
        
        .luxury-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(197, 144, 67, 0.2);
            border-color: #c59043;
        }
        
        .luxury-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #c59043;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .luxury-card h3 i {
            font-size: 2.5rem;
        }
        
        .luxury-card ul {
            list-style: none;
            padding: 0;
        }
        
        .luxury-card ul li {
            margin-bottom: 18px;
            padding-left: 30px;
            position: relative;
            color: #d0d0d0;
            font-size: 1.1rem;
        }
        
        .luxury-card ul li::before {
            content: '◆';
            position: absolute;
            left: 0;
            color: #c59043;
            font-size: 1.2rem;
        }
        
        .luxury-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #c59043 0%, #d4a354 100%);
            color: #0a0a0a;
            padding: 15px 30px;
            border-radius: 50px;
            margin: 10px;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: 0 5px 20px rgba(197, 144, 67, 0.3);
            transition: all 0.3s ease;
        }
        
        .luxury-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(197, 144, 67, 0.5);
        }
        
        .luxury-badge i {
            font-size: 1.3rem;
        }
        
        .right-luxury {
            background: linear-gradient(135deg, rgba(30, 30, 30, 0.9) 0%, rgba(20, 20, 20, 0.95) 100%);
            border: 2px solid rgba(197, 144, 67, 0.4);
            border-radius: 15px;
            padding: 45px;
            text-align: center;
            transition: all 0.4s ease;
        }
        
        .right-luxury:hover {
            transform: scale(1.05);
            border-color: #c59043;
            box-shadow: 0 15px 50px rgba(197, 144, 67, 0.3);
        }
        
        .right-luxury i {
            font-size: 6rem;
            color: #c59043;
            margin-bottom: 25px;
            display: block;
        }
        
        .right-luxury h4 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: #c59043;
            margin-bottom: 20px;
        }
        
        .right-luxury p {
            font-size: 1.15rem;
            color: #d0d0d0;
            line-height: 1.8;
        }
        
        .contact-luxury {
            background: linear-gradient(135deg, #c59043 0%, #d4a354 100%);
            padding: 80px 60px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(197, 144, 67, 0.4);
        }
        
        .contact-luxury h2 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            color: #0a0a0a;
            margin-bottom: 30px;
        }
        
        .contact-luxury p {
            font-size: 1.4rem;
            color: #1a1a1a;
            margin-bottom: 50px;
        }
        
        .contact-luxury i {
            font-size: 5rem;
            color: #0a0a0a;
            margin-bottom: 25px;
        }
        
        .contact-luxury h3 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: #0a0a0a;
            margin-bottom: 15px;
        }
        
        .contact-luxury a {
            color: #0a0a0a;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            border-bottom: 2px solid #0a0a0a;
            transition: all 0.3s ease;
        }
        
        .contact-luxury a:hover {
            color: #2a2a2a;
            border-bottom-color: #2a2a2a;
        }
        
        @media (max-width: 768px) {
            .hero h1 { font-size: 3rem; }
            .section-title { font-size: 2.5rem; }
            .luxury-section { padding: 35px; }
        }
    </style>
</head>
<body>
    <div class="luxury-bg"></div>
    
    <div class="container">
        <!-- Hero -->
        <div class="hero">
            <div class="hero-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <h1>Politica de Confidențialitate</h1>
            <h2>Reședința Budaș</h2>
            <p>ULTIMA ACTUALIZARE: 01 OCTOMBRIE 2025</p>
        </div>

        <!-- Introducere -->
        <div class="luxury-section">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="alert-luxury">
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p style="font-size: 1.2rem; line-height: 2; color: #e0e0e0;"><strong style="color: #c59043;">Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="luxury-section">
            <h2 class="section-title">
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="luxury-grid">
                <div class="luxury-card">
                    <h3><i class="fas fa-user"></i> Informații Personale</h3>
                    <ul>
                        <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                        <li><strong>Adresa de email</strong> - Pentru confirmări</li>
                        <li><strong>Număr de telefon</strong> - Pentru contact</li>
                        <li><strong>Adresa fizică</strong> - Pentru facturare</li>
                    </ul>
                </div>
                
                <div class="luxury-card">
                    <h3><i class="fas fa-cog"></i> Informații Tehnice</h3>
                    <ul>
                        <li><strong>Adresa IP</strong> - Pentru securitate</li>
                        <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                        <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                        <li><strong>Pagini vizitate</strong> - Pentru analiză</li>
                    </ul>
                </div>
                
                <div class="luxury-card">
                    <h3><i class="fas fa-calendar-check"></i> Informații de Rezervare</h3>
                    <ul>
                        <li><strong>Data de check-in/out</strong></li>
                        <li><strong>Numărul de persoane</strong></li>
                        <li><strong>Tipul de cameră</strong></li>
                        <li><strong>Cerințe speciale</strong></li>
                    </ul>
                </div>
                
                <div class="luxury-card">
                    <h3><i class="fas fa-chart-line"></i> Informații de Utilizare</h3>
                    <ul>
                        <li><strong>Timpul pe pagini</strong></li>
                        <li><strong>Link-uri accesate</strong></li>
                        <li><strong>Preferințe</strong></li>
                        <li><strong>Erori întâlnite</strong></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="luxury-section">
            <h2 class="section-title">
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div style="text-align: center; margin: 50px 0;">
                <span class="luxury-badge"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="luxury-badge"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="luxury-badge"><i class="fas fa-bullhorn"></i> Marketing</span>
                <span class="luxury-badge"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                <span class="luxury-badge"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="luxury-badge"><i class="fas fa-gavel"></i> Conformitate</span>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="luxury-section">
            <h2 class="section-title">
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p style="font-size: 1.25rem; margin-bottom: 45px; color: #e0e0e0;">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="luxury-grid">
                <div class="right-luxury">
                    <i class="fas fa-eye"></i>
                    <h4>Dreptul de Acces</h4>
                    <p>Poți solicita o copie a datelor tale personale</p>
                </div>
                
                <div class="right-luxury">
                    <i class="fas fa-edit"></i>
                    <h4>Dreptul de Rectificare</h4>
                    <p>Poți corecta informațiile inexacte</p>
                </div>
                
                <div class="right-luxury">
                    <i class="fas fa-trash"></i>
                    <h4>Dreptul de Ștergere</h4>
                    <p>Poți solicita ștergerea datelor tale</p>
                </div>
                
                <div class="right-luxury">
                    <i class="fas fa-ban"></i>
                    <h4>Dreptul de Opoziție</h4>
                    <p>Poți obiecta la procesarea datelor</p>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="luxury-section">
            <h2 class="section-title">
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p style="font-size: 1.2rem; line-height: 2; color: #e0e0e0; margin-bottom: 50px;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="luxury-grid">
                <div class="luxury-card" style="text-align: center;">
                    <i class="fas fa-shield-alt" style="font-size: 6.5rem; color: #c59043; margin-bottom: 30px;"></i>
                    <h3 style="justify-content: center;">Criptare SSL/TLS</h3>
                    <p style="color: #d0d0d0;">Pentru toate comunicările</p>
                </div>
                
                <div class="luxury-card" style="text-align: center;">
                    <i class="fas fa-server" style="font-size: 6.5rem; color: #c59043; margin-bottom: 30px;"></i>
                    <h3 style="justify-content: center;">Servere Securizate</h3>
                    <p style="color: #d0d0d0;">Cu acces restricționat</p>
                </div>
                
                <div class="luxury-card" style="text-align: center;">
                    <i class="fas fa-database" style="font-size: 6.5rem; color: #c59043; margin-bottom: 30px;"></i>
                    <h3 style="justify-content: center;">Backup-uri Regulate</h3>
                    <p style="color: #d0d0d0;">Pentru protecția datelor</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-luxury">
            <i class="fas fa-envelope"></i>
            <h2>Contact</h2>
            <p>Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="luxury-grid">
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Adresa</h3>
                    <p style="color: #1a1a1a; font-size: 1.15rem;">Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                
                <div>
                    <i class="fas fa-phone"></i>
                    <h3>Telefon</h3>
                    <p><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                
                <div>
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
