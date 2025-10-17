<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Water.css</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            max-width: 1200px;
            padding: 40px 20px;
        }
        
        .hero {
            text-align: center;
            padding: 60px 30px;
            background: linear-gradient(135deg, var(--background) 0%, var(--background-alt) 100%);
            border-radius: 15px;
            margin-bottom: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        
        .hero-icon {
            font-size: 80px;
            margin-bottom: 25px;
            opacity: 0.9;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
        }
        
        .section {
            background: var(--background);
            padding: 35px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            border-left: 6px solid var(--links);
        }
        
        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--links);
        }
        
        .section h2 i {
            font-size: 2.8rem;
        }
        
        .alert {
            background: #fff3cd;
            border-left: 5px solid #ffc107;
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
        }
        
        .alert strong {
            color: #ff9800;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 25px 0;
        }
        
        .card {
            background: var(--background-alt);
            padding: 25px;
            border-radius: 10px;
            border-top: 4px solid var(--links);
        }
        
        .card h3 {
            font-size: 1.6rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .badge {
            display: inline-block;
            padding: 10px 20px;
            background: var(--links);
            color: var(--background);
            border-radius: 25px;
            margin: 6px;
            font-weight: 600;
        }
        
        .badge i {
            margin-right: 8px;
        }
        
        .right-box {
            background: var(--background-alt);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            border: 2px solid var(--links);
        }
        
        .right-box i {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--links);
        }
        
        .right-box h4 {
            font-size: 1.5rem;
            margin-bottom: 12px;
        }
        
        .contact {
            background: var(--links);
            color: var(--background);
            padding: 45px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }
        
        .contact h2, .contact h3, .contact p, .contact a {
            color: var(--background);
        }
        
        .contact a {
            text-decoration: underline;
            font-weight: 600;
        }
        
        .icon-large {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        ul li {
            margin-bottom: 12px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <!-- Hero -->
    <div class="hero">
        <div class="hero-icon">
            <i class="fas fa-shield-halved"></i>
        </div>
        <h1>Politica de Confidențialitate</h1>
        <h2>Reședința Budaș</h2>
        <p style="font-size: 1.2rem; margin-top: 10px;">Ultima actualizare: 01 Octombrie 2025</p>
    </div>

    <!-- Introducere -->
    <div class="section">
        <h2>
            <i class="fas fa-info-circle"></i>
            Introducere
        </h2>
        
        <div class="alert">
            <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
            <p style="margin-top: 10px;">Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
        </div>
        
        <p style="font-size: 1.1rem; line-height: 1.8;"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
    </div>

    <!-- Informații Colectate -->
    <div class="section">
        <h2>
            <i class="fas fa-database"></i>
            Informații Colectate
        </h2>
        
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
                    <li><strong>Data de check-in și check-out</strong></li>
                    <li><strong>Numărul de persoane</strong></li>
                    <li><strong>Tipul de cameră dorit</strong></li>
                    <li><strong>Cerințe speciale</strong></li>
                </ul>
            </div>
            
            <div class="card">
                <h3><i class="fas fa-chart-line"></i> Informații de Utilizare</h3>
                <ul>
                    <li><strong>Timpul petrecut pe pagini</strong></li>
                    <li><strong>Link-urile accesate</strong></li>
                    <li><strong>Preferințele de navigare</strong></li>
                    <li><strong>Erorile întâlnite</strong></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Cum Folosim Informațiile -->
    <div class="section">
        <h2>
            <i class="fas fa-tasks"></i>
            Cum Folosim Informațiile
        </h2>
        
        <div style="text-align: center; margin: 30px 0;">
            <span class="badge"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
            <span class="badge"><i class="fas fa-headset"></i> Suport Clienți</span>
            <span class="badge"><i class="fas fa-bullhorn"></i> Marketing</span>
            <span class="badge"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
            <span class="badge"><i class="fas fa-shield-alt"></i> Securitate</span>
            <span class="badge"><i class="fas fa-gavel"></i> Conformitate</span>
        </div>
        
        <p style="font-size: 1.1rem; line-height: 1.8;">Folosim informațiile colectate pentru:</p>
        <ul>
            <li><strong>Procesarea rezervărilor</strong> - Pentru a-ți procesa rezervările și a-ți trimite confirmări</li>
            <li><strong>Suport clienți</strong> - Pentru a-ți răspunde la întrebări și a-ți oferi asistență</li>
            <li><strong>Marketing</strong> - Pentru a-ți trimite oferte speciale (doar cu consimțământul tău)</li>
            <li><strong>Îmbunătățiri</strong> - Pentru a analiza utilizarea site-ului și a îmbunătăți experiența</li>
        </ul>
    </div>

    <!-- Drepturile Tale -->
    <div class="section">
        <h2>
            <i class="fas fa-user-shield"></i>
            Drepturile Tale GDPR
        </h2>
        
        <p style="font-size: 1.1rem; margin-bottom: 30px;">În conformitate cu GDPR, ai următoarele drepturi:</p>
        
        <div class="grid">
            <div class="right-box">
                <i class="fas fa-eye"></i>
                <h4>Dreptul de Acces</h4>
                <p>Poți solicita o copie a datelor tale personale</p>
            </div>
            
            <div class="right-box">
                <i class="fas fa-edit"></i>
                <h4>Dreptul de Rectificare</h4>
                <p>Poți corecta informațiile inexacte</p>
            </div>
            
            <div class="right-box">
                <i class="fas fa-trash"></i>
                <h4>Dreptul de Ștergere</h4>
                <p>Poți solicita ștergerea datelor tale</p>
            </div>
            
            <div class="right-box">
                <i class="fas fa-ban"></i>
                <h4>Dreptul de Opoziție</h4>
                <p>Poți obiecta la procesarea datelor</p>
            </div>
        </div>
    </div>

    <!-- Securitatea Datelor -->
    <div class="section">
        <h2>
            <i class="fas fa-lock"></i>
            Securitatea Datelor
        </h2>
        
        <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 35px;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
        
        <div class="grid">
            <div class="card" style="text-align: center;">
                <i class="icon-large fas fa-shield-alt"></i>
                <h3>Criptare SSL/TLS</h3>
                <p>Pentru toate comunicările</p>
            </div>
            
            <div class="card" style="text-align: center;">
                <i class="icon-large fas fa-server"></i>
                <h3>Servere Securizate</h3>
                <p>Cu acces restricționat</p>
            </div>
            
            <div class="card" style="text-align: center;">
                <i class="icon-large fas fa-database"></i>
                <h3>Backup-uri Regulate</h3>
                <p>Pentru protecția datelor</p>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact">
        <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 30px;">
            <i class="fas fa-envelope icon-large"></i><br>
            Contact
        </h2>
        <p style="font-size: 1.2rem; text-align: center; margin-bottom: 40px;">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
        
        <div class="grid">
            <div style="text-align: center;">
                <i class="icon-large fas fa-map-marker-alt"></i>
                <h3>Adresa</h3>
                <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
            </div>
            
            <div style="text-align: center;">
                <i class="icon-large fas fa-phone"></i>
                <h3>Telefon</h3>
                <p><a href="tel:+40758330929">+40 758 330 929</a></p>
            </div>
            
            <div style="text-align: center;">
                <i class="icon-large fas fa-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
            </div>
        </div>
    </div>
</body>
</html>
