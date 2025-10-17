<!DOCTYPE html>
<html lang="ro" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Pico.css</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            padding: 2rem 1rem;
        }
        
        .hero {
            background: linear-gradient(135deg, #0f7a6f 0%, #2dc989 100%);
            color: white;
            padding: 5rem 3rem;
            border-radius: 1rem;
            text-align: center;
            margin-bottom: 3rem;
            box-shadow: 0 1.5rem 5rem rgba(0, 0, 0, 0.3);
        }
        
        .hero i {
            font-size: 7rem;
            margin-bottom: 2rem;
        }
        
        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        
        article {
            background: white;
            border-radius: 1rem;
            padding: 3rem;
            margin-bottom: 2rem;
            box-shadow: 0 0.5rem 2.5rem rgba(0, 0, 0, 0.1);
        }
        
        article h2 {
            color: #11998e;
            font-size: 2.8rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        article h2 i {
            font-size: 3.5rem;
        }
        
        article h3 {
            color: #2dc989;
            font-size: 2rem;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .alert {
            background: linear-gradient(135deg, #fff9e6 0%, #ffe8b3 100%);
            border-left: 0.6rem solid #ff9900;
            padding: 2rem;
            border-radius: 0.8rem;
            margin: 2rem 0;
        }
        
        .alert strong {
            color: #ff6600;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }
        
        .info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 2.5rem;
            border-radius: 0.8rem;
            border-top: 0.5rem solid #11998e;
            box-shadow: 0 0.3rem 1.5rem rgba(0, 0, 0, 0.08);
        }
        
        .info-card h4 {
            color: #38ef7d;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .badge {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 3rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            margin: 0.5rem;
            font-weight: 700;
        }
        
        .right-card {
            background: white;
            padding: 2.5rem;
            border-radius: 0.8rem;
            text-align: center;
            border: 0.3rem solid #11998e;
        }
        
        .right-card i {
            font-size: 4rem;
            color: #11998e;
            margin-bottom: 1.5rem;
        }
        
        .right-card h4 {
            color: #2dc989;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        
        .contact {
            background: linear-gradient(135deg, #0f7a6f 0%, #2dc989 100%);
            color: white;
            padding: 4rem;
            border-radius: 1rem;
            box-shadow: 0 1.5rem 5rem rgba(0, 0, 0, 0.3);
        }
        
        .contact h2, .contact h3, .contact p, .contact a {
            color: white;
        }
        
        .contact a {
            text-decoration: underline;
        }
        
        ul li {
            margin-bottom: 1rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <main class="container">
        <!-- Hero -->
        <div class="hero">
            <i class="fas fa-shield-halved"></i>
            <h1>Politica de Confidențialitate</h1>
            <h2>Reședința Budaș</h2>
            <p style="font-size: 1.3rem; margin-top: 1rem;">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <article>
            <h2>
                <i class="fas fa-info-circle"></i>
                Introducere
            </h2>
            
            <div class="alert">
                <strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă</strong>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p style="font-size: 1.2rem; line-height: 1.8;"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </article>

        <!-- Informații Colectate -->
        <article>
            <h2>
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <div class="card-grid">
                <div class="info-card">
                    <h4><i class="fas fa-user"></i> Informații Personale</h4>
                    <ul>
                        <li><strong>Nume și prenume</strong> - Pentru rezervări</li>
                        <li><strong>Adresa de email</strong> - Pentru confirmări</li>
                        <li><strong>Număr de telefon</strong> - Pentru contact</li>
                        <li><strong>Adresa fizică</strong> - Pentru facturare</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h4><i class="fas fa-cog"></i> Informații Tehnice</h4>
                    <ul>
                        <li><strong>Adresa IP</strong> - Pentru securitate</li>
                        <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                        <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                        <li><strong>Pagini vizitate</strong> - Pentru analiză</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h4><i class="fas fa-calendar-check"></i> Informații de Rezervare</h4>
                    <ul>
                        <li><strong>Data check-in/out</strong></li>
                        <li><strong>Numărul de persoane</strong></li>
                        <li><strong>Tipul de cameră</strong></li>
                        <li><strong>Cerințe speciale</strong></li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h4><i class="fas fa-chart-line"></i> Informații de Utilizare</h4>
                    <ul>
                        <li><strong>Timpul pe pagini</strong></li>
                        <li><strong>Link-uri accesate</strong></li>
                        <li><strong>Preferințe</strong></li>
                        <li><strong>Erori întâlnite</strong></li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- Cum Folosim Informațiile -->
        <article>
            <h2>
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div style="text-align: center; margin: 2.5rem 0;">
                <span class="badge"><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</span>
                <span class="badge"><i class="fas fa-headset"></i> Suport Clienți</span>
                <span class="badge"><i class="fas fa-bullhorn"></i> Marketing</span>
                <span class="badge"><i class="fas fa-chart-bar"></i> Îmbunătățiri</span>
                <span class="badge"><i class="fas fa-shield-alt"></i> Securitate</span>
                <span class="badge"><i class="fas fa-gavel"></i> Conformitate</span>
            </div>
        </article>

        <!-- Drepturile Tale -->
        <article>
            <h2>
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p style="font-size: 1.2rem; margin-bottom: 2.5rem;">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="card-grid">
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
        </article>

        <!-- Securitatea Datelor -->
        <article>
            <h2>
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 3rem;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="card-grid">
                <div class="info-card" style="text-align: center;">
                    <i class="fas fa-shield-alt" style="font-size: 4.5rem; color: #11998e; margin-bottom: 1.5rem;"></i>
                    <h4 style="justify-content: center;">Criptare SSL/TLS</h4>
                    <p>Pentru toate comunicările</p>
                </div>
                
                <div class="info-card" style="text-align: center;">
                    <i class="fas fa-server" style="font-size: 4.5rem; color: #11998e; margin-bottom: 1.5rem;"></i>
                    <h4 style="justify-content: center;">Servere Securizate</h4>
                    <p>Cu acces restricționat</p>
                </div>
                
                <div class="info-card" style="text-align: center;">
                    <i class="fas fa-database" style="font-size: 4.5rem; color: #11998e; margin-bottom: 1.5rem;"></i>
                    <h4 style="justify-content: center;">Backup-uri Regulate</h4>
                    <p>Pentru protecția datelor</p>
                </div>
            </div>
        </article>

        <!-- Contact -->
        <div class="contact">
            <h2 style="font-size: 3rem; text-align: center; margin-bottom: 2rem;">
                <i class="fas fa-envelope" style="font-size: 5rem; display: block; margin-bottom: 2rem;"></i>
                Contact
            </h2>
            <p style="font-size: 1.3rem; text-align: center; margin-bottom: 3.5rem;">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="card-grid">
                <div style="text-align: center;">
                    <i class="fas fa-map-marker-alt" style="font-size: 3.5rem; margin-bottom: 1.5rem;"></i>
                    <h3>Adresa</h3>
                    <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                
                <div style="text-align: center;">
                    <i class="fas fa-phone" style="font-size: 3.5rem; margin-bottom: 1.5rem;"></i>
                    <h3>Telefon</h3>
                    <p><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                
                <div style="text-align: center;">
                    <i class="fas fa-envelope" style="font-size: 3.5rem; margin-bottom: 1.5rem;"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
