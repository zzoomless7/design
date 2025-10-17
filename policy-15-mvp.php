<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - MVP.css</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }
        
        header {
            background: linear-gradient(135deg, #0f3460 0%, #16213e 100%);
            color: white;
            text-align: center;
            padding: 60px 30px;
            margin-bottom: 40px;
            border-radius: 12px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
        }
        
        header i {
            font-size: 90px;
            margin-bottom: 25px;
            display: block;
        }
        
        header h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
        }
        
        header p {
            font-size: 1.3rem;
        }
        
        main {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        
        h2 {
            color: #0f3460;
            font-size: 2.5rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            border-bottom: 4px solid #e94560;
            padding-bottom: 15px;
        }
        
        h2 i {
            font-size: 3rem;
        }
        
        h3 {
            color: #16213e;
            font-size: 1.8rem;
            margin-top: 25px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        aside {
            background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
            border-left: 6px solid #ff9800;
            padding: 25px;
            border-radius: 8px;
            margin: 25px 0;
        }
        
        aside strong {
            color: #f57c00;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }
        
        article {
            background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
            padding: 30px;
            margin-bottom: 25px;
            border-radius: 10px;
            border-top: 5px solid #0f3460;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        mark {
            background: linear-gradient(135deg, #0f3460 0%, #16213e 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            margin: 6px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
        }
        
        section {
            margin: 35px 0;
        }
        
        footer {
            background: linear-gradient(135deg, #0f3460 0%, #16213e 100%);
            color: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
        }
        
        footer h2, footer h3, footer p, footer a {
            color: white;
        }
        
        footer a {
            text-decoration: underline;
            font-weight: 600;
        }
        
        .icon-box {
            text-align: center;
            padding: 25px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin: 15px 0;
        }
        
        .icon-box i {
            font-size: 4rem;
            margin-bottom: 15px;
            display: block;
        }
        
        ul li {
            margin-bottom: 12px;
            line-height: 1.8;
        }
        
        details {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin: 15px 0;
            border-left: 4px solid #0f3460;
        }
        
        summary {
            font-weight: 700;
            font-size: 1.3rem;
            color: #0f3460;
            cursor: pointer;
            padding: 10px;
        }
        
        summary:hover {
            color: #e94560;
        }
    </style>
</head>
<body>
    <header>
        <i class="fas fa-shield-halved"></i>
        <h1>Politica de Confidențialitate</h1>
        <p>Reședința Budaș</p>
        <p><small>Ultima actualizare: 01 Octombrie 2025</small></p>
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
            
            <p style="font-size: 1.1rem; line-height: 1.8;"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </section>

        <!-- Informații Colectate -->
        <section>
            <h2>
                <i class="fas fa-database"></i>
                Informații Colectate
            </h2>
            
            <details open>
                <summary><i class="fas fa-user"></i> Informații Personale</summary>
                <ul>
                    <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                    <li><strong>Adresa de email</strong> - Pentru confirmări și comunicări</li>
                    <li><strong>Număr de telefon</strong> - Pentru contact în caz de urgență</li>
                    <li><strong>Adresa fizică</strong> - Pentru facturare (dacă este necesar)</li>
                </ul>
            </details>
            
            <details>
                <summary><i class="fas fa-cog"></i> Informații Tehnice</summary>
                <ul>
                    <li><strong>Adresa IP</strong> - Pentru securitate și analiză</li>
                    <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                    <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                    <li><strong>Pagini vizitate</strong> - Pentru îmbunătățirea site-ului</li>
                </ul>
            </details>
            
            <details>
                <summary><i class="fas fa-calendar-check"></i> Informații de Rezervare</summary>
                <ul>
                    <li><strong>Data de check-in și check-out</strong></li>
                    <li><strong>Numărul de persoane</strong></li>
                    <li><strong>Tipul de cameră dorit</strong></li>
                    <li><strong>Cerințe speciale</strong> - Dacă sunt specificate</li>
                </ul>
            </details>
            
            <details>
                <summary><i class="fas fa-chart-line"></i> Informații de Utilizare</summary>
                <ul>
                    <li><strong>Timpul petrecut pe pagini</strong></li>
                    <li><strong>Link-urile pe care dai click</strong></li>
                    <li><strong>Preferințele de navigare</strong></li>
                    <li><strong>Erorile întâlnite</strong> - Pentru îmbunătățiri</li>
                </ul>
            </details>
        </section>

        <!-- Cum Folosim Informațiile -->
        <section>
            <h2>
                <i class="fas fa-tasks"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div style="text-align: center; margin: 30px 0;">
                <mark><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</mark>
                <mark><i class="fas fa-headset"></i> Suport Clienți</mark>
                <mark><i class="fas fa-bullhorn"></i> Marketing</mark>
                <mark><i class="fas fa-chart-bar"></i> Îmbunătățiri</mark>
                <mark><i class="fas fa-shield-alt"></i> Securitate</mark>
                <mark><i class="fas fa-gavel"></i> Conformitate</mark>
            </div>
            
            <article>
                <h3><i class="fas fa-check-circle"></i> Procesarea Rezervărilor</h3>
                <p>Pentru a-ți procesa rezervările și a-ți trimite confirmări de rezervare</p>
            </article>
            
            <article>
                <h3><i class="fas fa-headset"></i> Suport Clienți</h3>
                <p>Pentru a-ți răspunde la întrebări și a-ți oferi asistență completă</p>
            </article>
            
            <article>
                <h3><i class="fas fa-bullhorn"></i> Marketing și Comunicări</h3>
                <p>Pentru a-ți trimite oferte speciale și noutăți (doar cu consimțământul tău explicit)</p>
            </article>
        </section>

        <!-- Drepturile Tale -->
        <section>
            <h2>
                <i class="fas fa-user-shield"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p style="font-size: 1.1rem; margin-bottom: 30px;">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <article style="text-align: center;">
                <i class="fas fa-eye" style="font-size: 3.5rem; color: #0f3460; margin-bottom: 15px;"></i>
                <h3 style="justify-content: center;">Dreptul de Acces</h3>
                <p>Poți solicita o copie a datelor tale personale</p>
            </article>
            
            <article style="text-align: center;">
                <i class="fas fa-edit" style="font-size: 3.5rem; color: #0f3460; margin-bottom: 15px;"></i>
                <h3 style="justify-content: center;">Dreptul de Rectificare</h3>
                <p>Poți corecta informațiile inexacte</p>
            </article>
            
            <article style="text-align: center;">
                <i class="fas fa-trash" style="font-size: 3.5rem; color: #0f3460; margin-bottom: 15px;"></i>
                <h3 style="justify-content: center;">Dreptul de Ștergere</h3>
                <p>Poți solicita ștergerea datelor tale</p>
            </article>
            
            <article style="text-align: center;">
                <i class="fas fa-ban" style="font-size: 3.5rem; color: #0f3460; margin-bottom: 15px;"></i>
                <h3 style="justify-content: center;">Dreptul de Opoziție</h3>
                <p>Poți obiecta la procesarea datelor</p>
            </article>
        </section>

        <!-- Securitatea Datelor -->
        <section>
            <h2>
                <i class="fas fa-lock"></i>
                Securitatea Datelor
            </h2>
            
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 35px;">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <article style="text-align: center;">
                <i class="fas fa-shield-alt" style="font-size: 4rem; color: #0f3460; margin-bottom: 20px;"></i>
                <h3 style="justify-content: center;">Criptare SSL/TLS</h3>
                <p>Pentru toate comunicările</p>
            </article>
            
            <article style="text-align: center;">
                <i class="fas fa-server" style="font-size: 4rem; color: #0f3460; margin-bottom: 20px;"></i>
                <h3 style="justify-content: center;">Servere Securizate</h3>
                <p>Cu acces restricționat</p>
            </article>
            
            <article style="text-align: center;">
                <i class="fas fa-database" style="font-size: 4rem; color: #0f3460; margin-bottom: 20px;"></i>
                <h3 style="justify-content: center;">Backup-uri Regulate</h3>
                <p>Pentru protecția datelor</p>
            </article>
        </section>
    </main>

    <!-- Contact -->
    <footer>
        <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 30px;">
            <i class="fas fa-envelope" style="font-size: 4rem; display: block; margin-bottom: 20px;"></i>
            Contact
        </h2>
        <p style="font-size: 1.2rem; text-align: center; margin-bottom: 40px;">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
        
        <div class="icon-box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Adresa</h3>
            <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
        </div>
        
        <div class="icon-box">
            <i class="fas fa-phone"></i>
            <h3>Telefon</h3>
            <p><a href="tel:+40758330929">+40 758 330 929</a></p>
        </div>
        
        <div class="icon-box">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
        </div>
    </footer>
</body>
</html>
