<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Material Design</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
        }
        
        .policy-container {
            margin: 40px auto;
            max-width: 1200px;
        }
        
        .hero-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 40px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        
        .hero-card h1 {
            font-size: 3.5rem;
            font-weight: 300;
            margin-bottom: 15px;
        }
        
        .hero-card .material-icons {
            font-size: 80px;
            margin-bottom: 20px;
        }
        
        .card {
            border-radius: 8px;
            margin-bottom: 24px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }
        
        .card-content h2 {
            font-size: 2rem;
            font-weight: 500;
            color: #667eea;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .card-content h3 {
            font-size: 1.5rem;
            font-weight: 500;
            color: #764ba2;
            margin: 25px 0 15px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-panel {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 4px;
            margin: 20px 0;
        }
        
        .info-panel strong {
            color: #667eea;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .chip-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 4px;
        }
        
        .collection-item {
            display: flex;
            align-items: start;
            gap: 12px;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .collection-item:hover {
            border-left-color: #667eea;
            background-color: #f9fafb;
            transform: translateX(5px);
        }
        
        .material-icons.md-18 { font-size: 18px; }
        .material-icons.md-24 { font-size: 24px; }
        .material-icons.md-36 { font-size: 36px; }
        
        .floating-action-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .feature-box {
            background: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            border-top: 4px solid #667eea;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        
        .contact-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }
        
        .contact-card a {
            color: white;
            text-decoration: underline;
        }
        
        .waves-effect.waves-light {
            background-color: #667eea;
        }
    </style>
</head>
<body>
    <div class="policy-container">
        <!-- Hero Section -->
        <div class="hero-card center-align">
            <i class="material-icons">security</i>
            <h1>Politica de Confidențialitate</h1>
            <h5>Reședința Budaș</h5>
            <p class="flow-text">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="card">
            <div class="card-content">
                <h2>
                    <i class="material-icons md-36">info</i>
                    Introducere
                </h2>
                
                <div class="info-panel">
                    <strong><i class="material-icons md-18">warning</i> Notă Importantă</strong>
                    <p class="grey-text text-darken-2">Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
                </div>
                
                <p class="flow-text grey-text text-darken-2"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicele noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
            </div>
        </div>

        <!-- Informații Colectate -->
        <div class="card">
            <div class="card-content">
                <h2>
                    <i class="material-icons md-36">storage</i>
                    Informații Colectate
                </h2>
                
                <div class="grid-container">
                    <div class="feature-box">
                        <h3><i class="material-icons md-24">person</i> Informații Personale</h3>
                        <ul class="collection">
                            <li class="collection-item"><i class="material-icons md-18 deep-purple-text">check_circle</i> <strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                            <li class="collection-item"><i class="material-icons md-18 deep-purple-text">check_circle</i> <strong>Adresa de email</strong> - Pentru confirmări</li>
                            <li class="collection-item"><i class="material-icons md-18 deep-purple-text">check_circle</i> <strong>Număr de telefon</strong> - Pentru contact</li>
                            <li class="collection-item"><i class="material-icons md-18 deep-purple-text">check_circle</i> <strong>Adresa fizică</strong> - Pentru facturare</li>
                        </ul>
                    </div>
                    
                    <div class="feature-box">
                        <h3><i class="material-icons md-24">settings</i> Informații Tehnice</h3>
                        <ul class="collection">
                            <li class="collection-item"><i class="material-icons md-18 blue-text">check_circle</i> <strong>Adresa IP</strong> - Pentru securitate</li>
                            <li class="collection-item"><i class="material-icons md-18 blue-text">check_circle</i> <strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                            <li class="collection-item"><i class="material-icons md-18 blue-text">check_circle</i> <strong>Sistemul de operare</strong> - Pentru optimizare</li>
                            <li class="collection-item"><i class="material-icons md-18 blue-text">check_circle</i> <strong>Pagini vizitate</strong> - Pentru analiză</li>
                        </ul>
                    </div>
                    
                    <div class="feature-box">
                        <h3><i class="material-icons md-24">event</i> Informații de Rezervare</h3>
                        <ul class="collection">
                            <li class="collection-item"><i class="material-icons md-18 green-text">check_circle</i> <strong>Data de check-in/out</strong></li>
                            <li class="collection-item"><i class="material-icons md-18 green-text">check_circle</i> <strong>Numărul de persoane</strong></li>
                            <li class="collection-item"><i class="material-icons md-18 green-text">check_circle</i> <strong>Tipul de cameră</strong></li>
                            <li class="collection-item"><i class="material-icons md-18 green-text">check_circle</i> <strong>Cerințe speciale</strong></li>
                        </ul>
                    </div>
                    
                    <div class="feature-box">
                        <h3><i class="material-icons md-24">trending_up</i> Informații de Utilizare</h3>
                        <ul class="collection">
                            <li class="collection-item"><i class="material-icons md-18 orange-text">check_circle</i> <strong>Timpul pe pagini</strong></li>
                            <li class="collection-item"><i class="material-icons md-18 orange-text">check_circle</i> <strong>Link-uri accesate</strong></li>
                            <li class="collection-item"><i class="material-icons md-18 orange-text">check_circle</i> <strong>Preferințe de navigare</strong></li>
                            <li class="collection-item"><i class="material-icons md-18 orange-text">check_circle</i> <strong>Erori întâlnite</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="card">
            <div class="card-content">
                <h2>
                    <i class="material-icons md-36">assignment</i>
                    Cum Folosim Informațiile
                </h2>
                
                <div class="row">
                    <div class="col s12 m6">
                        <div class="chip-custom">
                            <i class="material-icons">done</i>
                            Procesarea Rezervărilor
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="chip-custom">
                            <i class="material-icons">headset_mic</i>
                            Suport Clienți
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="chip-custom">
                            <i class="material-icons">campaign</i>
                            Marketing și Comunicări
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="chip-custom">
                            <i class="material-icons">insights</i>
                            Îmbunătățirea Serviciilor
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="chip-custom">
                            <i class="material-icons">shield</i>
                            Securitate
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="chip-custom">
                            <i class="material-icons">gavel</i>
                            Conformitate Legală
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="card">
            <div class="card-content">
                <h2>
                    <i class="material-icons md-36">verified_user</i>
                    Drepturile Tale GDPR
                </h2>
                
                <p class="grey-text text-darken-1">În conformitate cu GDPR, ai următoarele drepturi:</p>
                
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card-panel indigo lighten-5">
                            <h6><i class="material-icons tiny">visibility</i> Dreptul de Acces</h6>
                            <p>Poți solicita o copie a datelor tale personale</p>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel blue lighten-5">
                            <h6><i class="material-icons tiny">edit</i> Dreptul de Rectificare</h6>
                            <p>Poți corecta informațiile inexacte</p>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel red lighten-5">
                            <h6><i class="material-icons tiny">delete</i> Dreptul de Ștergere</h6>
                            <p>Poți solicita ștergerea datelor tale</p>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel orange lighten-5">
                            <h6><i class="material-icons tiny">block</i> Dreptul de Opoziție</h6>
                            <p>Poți obiecta la procesarea datelor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="card">
            <div class="card-content">
                <h2>
                    <i class="material-icons md-36">lock</i>
                    Securitatea Datelor
                </h2>
                
                <p class="grey-text text-darken-2">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
                
                <ul class="collection">
                    <li class="collection-item"><i class="material-icons green-text">https</i> <strong>Criptare SSL/TLS</strong> pentru toate comunicările</li>
                    <li class="collection-item"><i class="material-icons blue-text">dns</i> <strong>Servere securizate</strong> cu acces restricționat</li>
                    <li class="collection-item"><i class="material-icons purple-text">backup</i> <strong>Backup-uri regulate</strong> pentru protecția datelor</li>
                    <li class="collection-item"><i class="material-icons orange-text">monitor</i> <strong>Monitorizare continuă</strong> pentru detectarea amenințărilor</li>
                    <li class="collection-item"><i class="material-icons red-text">school</i> <strong>Formare regulată</strong> a personalului în domeniul protecției datelor</li>
                </ul>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact-card">
            <h2 class="white-text center-align">
                <i class="material-icons large">mail</i><br>
                Contact
            </h2>
            <p class="flow-text center-align">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            
            <div class="row" style="margin-top: 30px;">
                <div class="col s12 m4 center-align">
                    <i class="material-icons large">location_on</i>
                    <p><strong>Adresa:</strong><br>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="col s12 m4 center-align">
                    <i class="material-icons large">phone</i>
                    <p><strong>Telefon:</strong><br><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="col s12 m4 center-align">
                    <i class="material-icons large">email</i>
                    <p><strong>Email:</strong><br><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fixed-action-btn floating-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <i class="material-icons">arrow_upward</i>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
