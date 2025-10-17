<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Glassmorphism Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            padding: 40px 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: backgroundMove 20s linear infinite;
        }
        
        @keyframes backgroundMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .glass:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.2);
        }
        
        .glass-dark {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(30px);
        }
        
        .hero {
            text-align: center;
            padding: 80px 40px;
            color: white;
        }
        
        .hero i {
            font-size: 100px;
            margin-bottom: 30px;
            text-shadow: 0 0 40px rgba(255, 255, 255, 0.5);
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }
        
        .hero p {
            font-size: 1.5rem;
            opacity: 0.95;
        }
        
        h2 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        h3 {
            color: white;
            font-size: 1.8rem;
            margin: 25px 0 15px 0;
            font-weight: 600;
        }
        
        p, li {
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.8;
            font-size: 1.1rem;
        }
        
        .alert-box {
            background: rgba(255, 235, 59, 0.2);
            border-left: 5px solid #ffc107;
            padding: 25px;
            border-radius: 15px;
            margin: 25px 0;
            backdrop-filter: blur(10px);
        }
        
        .alert-box strong {
            color: #ffc107;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, background 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255, 255, 255, 0.3);
        }
        
        .card h3 {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }
        
        .card i {
            font-size: 2rem;
        }
        
        ul {
            list-style: none;
            padding: 0;
        }
        
        ul li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }
        
        ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4caf50;
            font-weight: bold;
            font-size: 1.3rem;
        }
        
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            padding: 12px 25px;
            border-radius: 50px;
            margin: 8px;
            color: white;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        
        .badge:hover {
            background: rgba(255, 255, 255, 0.35);
            transform: scale(1.05);
        }
        
        .rights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .right-item {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease;
        }
        
        .right-item:hover {
            transform: translateY(-5px);
        }
        
        .right-item i {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .contact-section {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(25px);
            padding: 50px;
            text-align: center;
        }
        
        .contact-section a {
            color: white;
            text-decoration: underline;
            font-weight: 600;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .contact-item {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .contact-item i {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            .glass { padding: 25px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero -->
        <div class="glass glass-dark hero">
            <i class="fas fa-shield-halved"></i>
            <h1>Politica de Confidențialitate</h1>
            <p>Reședința Budaș</p>
            <p style="font-size: 1.2rem; margin-top: 10px; opacity: 0.8;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="glass">
            <h2><i class="fas fa-info-circle"></i> Introducere</h2>
            
            <div class="alert-box">
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="glass">
            <h2><i class="fas fa-database"></i> Informații Colectate</h2>
            
            <div class="grid">
                <div class="card">
                    <h3><i class="fas fa-user"></i> Informații Personale</h3>
                    <ul>
                        <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                        <li><strong>Adresa de email</strong> - Pentru confirmări</li>
                        <li><strong>Număr de telefon</strong> - Pentru contact</li>
                        <li><strong>Adresa fizică</strong> - Pentru facturare</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3><i class="fas fa-cog"></i> Informații Tehnice</h3>
                    <ul>
                        <li><strong>Adresa IP</strong> - Pentru securitate</li>
                        <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                        <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                        <li><strong>Pagini vizitate</strong> - Pentru analiză</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3><i class="fas fa-calendar-check"></i> Informații de Rezervare</h3>
                    <ul>
                        <li><strong>Data de check-in/out</strong></li>
                        <li><strong>Numărul de persoane</strong></li>
                        <li><strong>Tipul de cameră</strong></li>
                        <li><strong>Cerințe speciale</strong></li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3><i class="fas fa-chart-line"></i> Informații de Utilizare</h3>
                    <ul>
                        <li><strong>Timpul pe pagini</strong></li>
                        <li><strong>Link-uri accesate</strong></li>
                        <li><strong>Preferințe de navigare</strong></li>
                        <li><strong>Erori întâlnite</strong></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="glass">
            <h2><i class="fas fa-tasks"></i> Cum Folosim Informațiile</h2>
            
            <div style="text-align: center; margin: 30px 0;">
                <span class="badge"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="badge"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="badge"><i class="fas fa-bullhorn"></i> Marketing</span>
                <span class="badge"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                <span class="badge"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="badge"><i class="fas fa-gavel"></i> Conformitate</span>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="glass">
            <h2><i class="fas fa-user-shield"></i> Drepturile Tale GDPR</h2>
            <p>În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="rights-grid">
                <div class="right-item">
                    <i class="fas fa-eye"></i>
                    <h3 style="font-size: 1.3rem;">Dreptul de Acces</h3>
                    <p style="font-size: 1rem;">Poți solicita o copie a datelor tale personale</p>
                </div>
                <div class="right-item">
                    <i class="fas fa-edit"></i>
                    <h3 style="font-size: 1.3rem;">Dreptul de Rectificare</h3>
                    <p style="font-size: 1rem;">Poți corecta informațiile inexacte</p>
                </div>
                <div class="right-item">
                    <i class="fas fa-trash"></i>
                    <h3 style="font-size: 1.3rem;">Dreptul de Ștergere</h3>
                    <p style="font-size: 1rem;">Poți solicita ștergerea datelor tale</p>
                </div>
                <div class="right-item">
                    <i class="fas fa-ban"></i>
                    <h3 style="font-size: 1.3rem;">Dreptul de Opoziție</h3>
                    <p style="font-size: 1rem;">Poți obiecta la procesarea datelor</p>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="glass">
            <h2><i class="fas fa-lock"></i> Securitatea Datelor</h2>
            <p>Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="card" style="text-align: center;">
                    <i class="fas fa-shield-alt" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem;">Criptare SSL/TLS</h3>
                    <p style="font-size: 1rem;">Pentru toate comunicările</p>
                </div>
                <div class="card" style="text-align: center;">
                    <i class="fas fa-server" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem;">Servere Securizate</h3>
                    <p style="font-size: 1rem;">Cu acces restricționat</p>
                </div>
                <div class="card" style="text-align: center;">
                    <i class="fas fa-database" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem;">Backup-uri Regulate</h3>
                    <p style="font-size: 1rem;">Pentru protecția datelor</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="glass glass-dark contact-section">
            <h2 style="justify-content: center;"><i class="fas fa-envelope"></i> Contact</h2>
            <p>Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="contact-grid">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3 style="font-size: 1.2rem;">Adresa</h3>
                    <p style="font-size: 1rem;">Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <h3 style="font-size: 1.2rem;">Telefon</h3>
                    <p style="font-size: 1rem;"><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <h3 style="font-size: 1.2rem;">Email</h3>
                    <p style="font-size: 1rem;"><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
