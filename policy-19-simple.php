<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Simple.css</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --accent: #4b7bec;
            --accent-light: #5a8dee;
        }
        
        body {
            background: linear-gradient(135deg, #4b7bec 0%, #5a8dee 100%);
            padding: 40px 20px;
        }
        
        header {
            background: linear-gradient(135deg, #3867d6 0%, #4b7bec 100%);
            padding: 70px 40px;
            text-align: center;
            border-radius: 15px;
            margin-bottom: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        header i {
            font-size: 100px;
            margin-bottom: 30px;
        }
        
        header h1 {
            font-size: 4.5rem;
            margin-bottom: 20px;
        }
        
        header p {
            font-size: 1.5rem;
        }
        
        main {
            background: var(--bg);
            padding: 45px;
            border-radius: 15px;
            margin-bottom: 35px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }
        
        h2 {
            color: var(--accent);
            font-size: 3rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 5px solid var(--accent-light);
            padding-bottom: 20px;
        }
        
        h2 i {
            font-size: 3.5rem;
        }
        
        h3 {
            color: var(--accent-light);
            font-size: 2rem;
            margin: 30px 0 20px 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        aside {
            background: #fff9e6;
            border-left: 8px solid #ff9800;
            padding: 30px;
            margin: 30px 0;
            border-radius: 10px;
        }
        
        aside strong {
            color: #ff6600;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin: 35px 0;
        }
        
        .card {
            background: #f5f5f5;
            padding: 35px;
            border-radius: 12px;
            border-top: 6px solid var(--accent);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }
        
        .card h4 {
            color: var(--accent-light);
            font-size: 2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        mark {
            background: linear-gradient(135deg, #4b7bec 0%, #5a8dee 100%);
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            margin: 8px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
        }
        
        .right-card {
            background: white;
            padding: 35px;
            border-radius: 12px;
            text-align: center;
            border: 4px solid var(--accent);
            transition: all 0.3s ease;
        }
        
        .right-card:hover {
            transform: scale(1.05);
            border-color: var(--accent-light);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .right-card i {
            font-size: 5rem;
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .right-card h4 {
            color: var(--accent-light);
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        footer {
            background: linear-gradient(135deg, #3867d6 0%, #4b7bec 100%);
            color: white;
            padding: 55px;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        footer h2, footer h3, footer p, footer a {
            color: white;
        }
        
        footer a {
            text-decoration: underline;
            font-weight: 700;
        }
        
        ul li {
            margin-bottom: 15px;
            line-height: 1.9;
        }
    </style>
</head>
<body>
    <header>
        <i class="fas fa-shield-halved"></i>
        <h1>Politica de Confidențialitate</h1>
        <p><strong>Reședința Budaș</strong></p>
        <p>Ultima actualizare: 01 Octombrie 2025</p>
    </header>

    <main>
        <!-- Introducere -->
        <section>
            <h2>
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <aside>
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </aside>
            
            <p style="font-size: 1.2rem; line-height: 1.9;"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </section>
        
        <!-- Informații Colectate -->
        <section>
            <h2>
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="grid">
                <div class="card">
                    <h4><i class="fas fa-user"></i> Informații Personale</h4>
                    <ul>
                        <li><strong>Nume și prenume</strong> - Pentru rezervări</li>
                        <li><strong>Adresa de email</strong> - Pentru confirmări</li>
                        <li><strong>Număr de telefon</strong> - Pentru contact</li>
                        <li><strong>Adresa fizică</strong> - Pentru facturare</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h4><i class="fas fa-cog"></i> Informații Tehnice</h4>
                    <ul>
                        <li><strong>Adresa IP</strong> - Pentru securitate</li>
                        <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                        <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                        <li><strong>Pagini vizitate</strong> - Pentru analiză</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h4><i class="fas fa-calendar-check"></i> Informații de Rezervare</h4>
                    <ul>
                        <li><strong>Data check-in/out</strong></li>
                        <li><strong>Numărul de persoane</strong></li>
                        <li><strong>Tipul de cameră</strong></li>
                        <li><strong>Cerințe speciale</strong></li>
                    </ul>
                </div>
                
                <div class="card">
                    <h4><i class="fas fa-chart-line"></i> Informații de Utilizare</h4>
                    <ul>
                        <li><strong>Timpul pe pagini</strong></li>
                        <li><strong>Link-uri accesate</strong></li>
                        <li><strong>Preferințe</strong></li>
                        <li><strong>Erori întâlnite</strong></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Cum Folosim Informațiile -->
        <section>
            <h2>
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div style="text-align: center; margin: 40px 0;">
                <mark><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</mark>
                <mark><i class="fas fa-headset"></i> Suport Clienți</mark>
                <mark><i class="fas fa-bullhorn"></i> Marketing</mark>
                <mark><i class="fas fa-chart-bar"></i> Îmbunătățiri</mark>
                <mark><i class="fas fa-shield-alt"></i> Securitate</mark>
                <mark><i class="fas fa-gavel"></i> Conformitate</mark>
            </div>
        </section>
        
        <!-- Drepturile Tale -->
        <section>
            <h2>
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p style="font-size: 1.2rem; margin-bottom: 35px;">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="grid">
                <div class="right-card">
                    <i class="fas fa-eye"></i>
                    <h4>Dreptul de Acces</h4>
                    <p>Poți solicita o copie a datelor tale personale</p>
                </div>
                
                <div class="right-card">
                    <i class="fas fa-edit"></i>
                    <h4>Dreptul de Rectificare</h4>
                    <p>Poți corecta informațiile inexacte</p>
                </div>
                
                <div class="right-card">
                    <i class="fas fa-trash"></i>
                    <h4>Dreptul de Ștergere</h4>
                    <p>Poți solicita ștergerea datelor tale</p>
                </div>
                
                <div class="right-card">
                    <i class="fas fa-ban"></i>
                    <h4>Dreptul de Opoziție</h4>
                    <p>Poți obiecta la procesarea datelor</p>
                </div>
            </div>
        </section>
        
        <!-- Securitatea Datelor -->
        <section>
            <h2>
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p style="font-size: 1.2rem; line-height: 1.9; margin-bottom: 40px;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="grid">
                <div class="card" style="text-align: center;">
                    <i class="fas fa-shield-alt" style="font-size: 5.5rem; color: #4b7bec; margin-bottom: 25px;"></i>
                    <h4 style="justify-content: center;">Criptare SSL/TLS</h4>
                    <p>Pentru toate comunicările</p>
                </div>
                
                <div class="card" style="text-align: center;">
                    <i class="fas fa-server" style="font-size: 5.5rem; color: #4b7bec; margin-bottom: 25px;"></i>
                    <h4 style="justify-content: center;">Servere Securizate</h4>
                    <p>Cu acces restricționat</p>
                </div>
                
                <div class="card" style="text-align: center;">
                    <i class="fas fa-database" style="font-size: 5.5rem; color: #4b7bec; margin-bottom: 25px;"></i>
                    <h4 style="justify-content: center;">Backup-uri Regulate</h4>
                    <p>Pentru protecția datelor</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <h2 style="font-size: 3.5rem; text-align: center; margin-bottom: 35px;">
            <i class="fas fa-envelope" style="font-size: 6rem; display: block; margin-bottom: 30px;"></i>
            Contact
        </h2>
        <p style="font-size: 1.4rem; text-align: center; margin-bottom: 50px;">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
        
        <div class="grid">
            <div style="text-align: center;">
                <i class="fas fa-map-marker-alt" style="font-size: 4.5rem; margin-bottom: 20px;"></i>
                <h3 style="font-size: 2rem;">Adresa</h3>
                <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
            </div>
            
            <div style="text-align: center;">
                <i class="fas fa-phone" style="font-size: 4.5rem; margin-bottom: 20px;"></i>
                <h3 style="font-size: 2rem;">Telefon</h3>
                <p><a href="tel:+40758330929">+40 758 330 929</a></p>
            </div>
            
            <div style="text-align: center;">
                <i class="fas fa-envelope" style="font-size: 4.5rem; margin-bottom: 20px;"></i>
                <h3 style="font-size: 2rem;">Email</h3>
                <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
