<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Semantic UI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #2185d0 0%, #21ba45 100%);
            min-height: 100vh;
            padding: 3rem 0;
        }
        
        .policy-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .hero.segment {
            background: linear-gradient(135deg, #2185d0 0%, #1678c2 100%) !important;
            color: white !important;
            padding: 5rem 3rem !important;
            border-radius: 1rem !important;
            box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.3) !important;
            margin-bottom: 2rem !important;
        }
        
        .hero h1 {
            font-size: 4rem !important;
            margin-bottom: 1rem !important;
        }
        
        .ui.segment {
            border-radius: 1rem !important;
            box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.1) !important;
            margin-bottom: 2rem !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        }
        
        .ui.segment:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15) !important;
        }
        
        .section-header {
            color: #2185d0 !important;
            font-size: 2.5rem !important;
            font-weight: 700 !important;
            margin-bottom: 1.5rem !important;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .ui.message.custom {
            background: linear-gradient(135deg, #fff3cd 0%, #ffecb5 100%) !important;
            border-left: 0.5rem solid #fbbd08 !important;
            box-shadow: none !important;
        }
        
        .ui.card {
            border-radius: 1rem !important;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08) !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        }
        
        .ui.card:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.12) !important;
        }
        
        .ui.card > .content > .header {
            background: linear-gradient(135deg, #2185d0 0%, #1678c2 100%);
            color: white !important;
            padding: 1rem !important;
            margin: -1rem -1rem 1rem -1rem !important;
            border-radius: 1rem 1rem 0 0 !important;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .ui.label.gradient {
            background: linear-gradient(135deg, #2185d0 0%, #21ba45 100%) !important;
            color: white !important;
            font-weight: 600 !important;
            padding: 0.75rem 1.5rem !important;
            border-radius: 2rem !important;
            margin: 0.25rem !important;
        }
        
        .contact-segment {
            background: linear-gradient(135deg, #2185d0 0%, #1678c2 100%) !important;
            color: white !important;
            padding: 3rem !important;
            border-radius: 1rem !important;
        }
        
        .contact-segment a {
            color: white !important;
            text-decoration: underline;
        }
        
        .icon-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 5rem;
            height: 5rem;
            background: linear-gradient(135deg, #2185d0 0%, #21ba45 100%);
            border-radius: 50%;
            color: white;
            font-size: 2.5rem;
            margin: 0 auto 1rem auto;
        }
        
        .ui.items > .item > .content > .header {
            color: #2185d0 !important;
        }
    </style>
</head>
<body>
    <div class="policy-wrapper">
        <!-- Hero -->
        <div class="ui center aligned hero segment">
            <i class="massive shield alternate icon"></i>
            <h1 class="ui inverted header">Politica de Confidențialitate</h1>
            <h2 class="ui inverted header">Reședința Budaș</h2>
            <p class="ui large text">Ultima actualizare: 01 Octombrie 2025</p>
        </div>

        <!-- Introducere -->
        <div class="ui segment">
            <h2 class="section-header">
                <i class="info circle icon"></i>
                Introducere
            </h2>
            
            <div class="ui message custom">
                <div class="header">
                    <i class="exclamation triangle icon"></i>
                    Notă Importantă
                </div>
                <p>Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
            </div>
            
            <p class="ui large text"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
        </div>

        <!-- Informații Colectate -->
        <div class="ui segment">
            <h2 class="section-header">
                <i class="database icon"></i>
                Informații Colectate
            </h2>
            
            <div class="ui stackable four cards">
                <div class="ui card">
                    <div class="content">
                        <div class="header">
                            <i class="user icon"></i> Informații Personale
                        </div>
                        <div class="description">
                            <div class="ui list">
                                <div class="item">
                                    <i class="check circle blue icon"></i>
                                    <div class="content">
                                        <strong>Nume și prenume</strong> - Pentru rezervări și comunicare
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle blue icon"></i>
                                    <div class="content">
                                        <strong>Adresa de email</strong> - Pentru confirmări
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle blue icon"></i>
                                    <div class="content">
                                        <strong>Număr de telefon</strong> - Pentru contact
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle blue icon"></i>
                                    <div class="content">
                                        <strong>Adresa fizică</strong> - Pentru facturare
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ui card">
                    <div class="content">
                        <div class="header">
                            <i class="cog icon"></i> Informații Tehnice
                        </div>
                        <div class="description">
                            <div class="ui list">
                                <div class="item">
                                    <i class="check circle green icon"></i>
                                    <div class="content">
                                        <strong>Adresa IP</strong> - Pentru securitate
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle green icon"></i>
                                    <div class="content">
                                        <strong>Tipul browser-ului</strong> - Pentru compatibilitate
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle green icon"></i>
                                    <div class="content">
                                        <strong>Sistemul de operare</strong> - Pentru optimizare
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle green icon"></i>
                                    <div class="content">
                                        <strong>Pagini vizitate</strong> - Pentru analiză
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ui card">
                    <div class="content">
                        <div class="header">
                            <i class="calendar check icon"></i> Informații de Rezervare
                        </div>
                        <div class="description">
                            <div class="ui list">
                                <div class="item">
                                    <i class="check circle teal icon"></i>
                                    <div class="content">
                                        <strong>Data de check-in/out</strong>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle teal icon"></i>
                                    <div class="content">
                                        <strong>Numărul de persoane</strong>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle teal icon"></i>
                                    <div class="content">
                                        <strong>Tipul de cameră</strong>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle teal icon"></i>
                                    <div class="content">
                                        <strong>Cerințe speciale</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ui card">
                    <div class="content">
                        <div class="header">
                            <i class="chart line icon"></i> Informații de Utilizare
                        </div>
                        <div class="description">
                            <div class="ui list">
                                <div class="item">
                                    <i class="check circle orange icon"></i>
                                    <div class="content">
                                        <strong>Timpul pe pagini</strong>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle orange icon"></i>
                                    <div class="content">
                                        <strong>Link-uri accesate</strong>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle orange icon"></i>
                                    <div class="content">
                                        <strong>Preferințe de navigare</strong>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="check circle orange icon"></i>
                                    <div class="content">
                                        <strong>Erori întâlnite</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cum Folosim Informațiile -->
        <div class="ui segment">
            <h2 class="section-header">
                <i class="tasks icon"></i>
                Cum Folosim Informațiile
            </h2>
            
            <div class="ui center aligned basic segment">
                <div class="ui label gradient"><i class="check icon"></i> Procesarea Rezervărilor</div>
                <div class="ui label gradient"><i class="headset icon"></i> Suport Clienți</div>
                <div class="ui label gradient"><i class="bullhorn icon"></i> Marketing</div>
                <div class="ui label gradient"><i class="chart bar icon"></i> Îmbunătățiri</div>
                <div class="ui label gradient"><i class="shield icon"></i> Securitate</div>
                <div class="ui label gradient"><i class="gavel icon"></i> Conformitate</div>
            </div>
            
            <div class="ui relaxed divided items">
                <div class="item">
                    <i class="large check circle middle aligned icon"></i>
                    <div class="content">
                        <div class="header">Procesarea Rezervărilor</div>
                        <div class="description">Pentru a-ți procesa rezervările și a-ți trimite confirmări</div>
                    </div>
                </div>
                <div class="item">
                    <i class="large headphones middle aligned icon"></i>
                    <div class="content">
                        <div class="header">Suport Clienți</div>
                        <div class="description">Pentru a-ți răspunde la întrebări și a-ți oferi asistență</div>
                    </div>
                </div>
                <div class="item">
                    <i class="large bullhorn middle aligned icon"></i>
                    <div class="content">
                        <div class="header">Marketing și Comunicări</div>
                        <div class="description">Pentru a-ți trimite oferte speciale și noutăți (doar cu consimțământul tău)</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="ui segment">
            <h2 class="section-header">
                <i class="user shield icon"></i>
                Drepturile Tale GDPR
            </h2>
            
            <p class="ui large text">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="ui stackable four column grid">
                <div class="column">
                    <div class="ui fluid blue card">
                        <div class="content">
                            <div class="center aligned header">
                                <i class="eye icon"></i><br>
                                Dreptul de Acces
                            </div>
                            <div class="center aligned description">
                                Poți solicita o copie a datelor tale personale
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid green card">
                        <div class="content">
                            <div class="center aligned header">
                                <i class="edit icon"></i><br>
                                Dreptul de Rectificare
                            </div>
                            <div class="center aligned description">
                                Poți corecta informațiile inexacte
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid red card">
                        <div class="content">
                            <div class="center aligned header">
                                <i class="trash icon"></i><br>
                                Dreptul de Ștergere
                            </div>
                            <div class="center aligned description">
                                Poți solicita ștergerea datelor tale
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid orange card">
                        <div class="content">
                            <div class="center aligned header">
                                <i class="ban icon"></i><br>
                                Dreptul de Opoziție
                            </div>
                            <div class="center aligned description">
                                Poți obiecta la procesarea datelor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Securitatea Datelor -->
        <div class="ui segment">
            <h2 class="section-header">
                <i class="lock icon"></i>
                Securitatea Datelor
            </h2>
            
            <p class="ui large text">Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
            
            <div class="ui three column centered grid">
                <div class="column center aligned">
                    <div class="icon-container">
                        <i class="shield icon"></i>
                    </div>
                    <h3 class="ui header">Criptare SSL/TLS</h3>
                    <p>Pentru toate comunicările</p>
                </div>
                <div class="column center aligned">
                    <div class="icon-container">
                        <i class="server icon"></i>
                    </div>
                    <h3 class="ui header">Servere Securizate</h3>
                    <p>Cu acces restricționat</p>
                </div>
                <div class="column center aligned">
                    <div class="icon-container">
                        <i class="database icon"></i>
                    </div>
                    <h3 class="ui header">Backup-uri Regulate</h3>
                    <p>Pentru protecția datelor</p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="ui center aligned contact-segment segment">
            <h2 class="ui inverted header">
                <i class="huge envelope icon"></i>
                <div class="content">
                    Contact
                    <div class="sub header">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</div>
                </div>
            </h2>
            
            <div class="ui three column stackable grid" style="margin-top: 2rem;">
                <div class="column">
                    <i class="big map marker alternate icon"></i>
                    <h3 class="ui inverted header">Adresa</h3>
                    <p>Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="column">
                    <i class="big phone icon"></i>
                    <h3 class="ui inverted header">Telefon</h3>
                    <p><a href="tel:+40758330929">+40 758 330 929</a></p>
                </div>
                <div class="column">
                    <i class="big envelope icon"></i>
                    <h3 class="ui inverted header">Email</h3>
                    <p><a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
</body>
</html>
