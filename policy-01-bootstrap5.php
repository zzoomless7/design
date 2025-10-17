<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Bootstrap 5 Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 0;
        }
        
        .policy-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }
        
        .policy-header {
            background: var(--primary-gradient);
            color: white;
            padding: 60px 40px;
            text-align: center;
            position: relative;
        }
        
        .policy-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }
        
        .policy-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
        }
        
        .policy-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
        }
        
        .policy-content {
            padding: 50px;
        }
        
        .section-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            border-left: 5px solid #667eea;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .section-card h2 {
            color: #667eea;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .section-card h3 {
            color: #764ba2;
            font-size: 1.5rem;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        
        .info-box {
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        
        .info-box strong {
            color: #667eea;
        }
        
        ul li {
            margin-bottom: 10px;
            line-height: 1.8;
        }
        
        .contact-section {
            background: var(--primary-gradient);
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin-top: 30px;
        }
        
        .contact-section a {
            color: white;
            text-decoration: underline;
        }
        
        .icon-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: var(--primary-gradient);
            border-radius: 50%;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="policy-container">
            <div class="policy-header">
                <h1><i class="fas fa-shield-alt"></i> Politica de Confidențialitate</h1>
                <p>Reședința Budaș - Ultima actualizare: 01 Octombrie 2025</p>
            </div>
            
            <div class="policy-content">
                <!-- Introducere -->
                <div class="section-card">
                    <h2><i class="fas fa-info-circle"></i> Introducere</h2>
                    <div class="info-box">
                        <p><strong><i class="fas fa-exclamation-triangle"></i> Notă Importantă:</strong> Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
                    </div>
                    <p><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
                </div>

                <!-- Informații Colectate -->
                <div class="section-card">
                    <h2><i class="fas fa-database"></i> Informații Colectate</h2>
                    
                    <h3><i class="fas fa-user"></i> Informații Personale</h3>
                    <p>Colectăm informații pe care ni le furnizezi direct:</p>
                    <ul>
                        <li><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</li>
                        <li><strong>Adresa de email</strong> - Pentru confirmări și comunicări</li>
                        <li><strong>Număr de telefon</strong> - Pentru contact în caz de urgență</li>
                        <li><strong>Adresa fizică</strong> - Pentru facturare (dacă este necesar)</li>
                    </ul>
                    
                    <h3><i class="fas fa-cog"></i> Informații Tehnice</h3>
                    <p>Colectăm automat informații tehnice:</p>
                    <ul>
                        <li><strong>Adresa IP</strong> - Pentru securitate și analiză</li>
                        <li><strong>Tipul browser-ului</strong> - Pentru compatibilitate</li>
                        <li><strong>Sistemul de operare</strong> - Pentru optimizare</li>
                        <li><strong>Pagini vizitate</strong> - Pentru îmbunătățirea site-ului</li>
                    </ul>
                    
                    <h3><i class="fas fa-calendar-check"></i> Informații de Rezervare</h3>
                    <p>Pentru rezervări, colectăm:</p>
                    <ul>
                        <li><strong>Data de check-in și check-out</strong></li>
                        <li><strong>Numărul de persoane</strong></li>
                        <li><strong>Tipul de cameră dorit</strong></li>
                        <li><strong>Cerințe speciale</strong> - Dacă sunt specificate</li>
                    </ul>
                </div>

                <!-- Cum Folosim Informațiile -->
                <div class="section-card">
                    <h2><i class="fas fa-tasks"></i> Cum Folosim Informațiile</h2>
                    <ul>
                        <li><i class="fas fa-check-circle text-success"></i> <strong>Procesarea Rezervărilor</strong> - Pentru a-ți procesa rezervările și a-ți trimite confirmări</li>
                        <li><i class="fas fa-headset text-primary"></i> <strong>Suport Clienți</strong> - Pentru a-ți răspunde la întrebări și a-ți oferi asistență</li>
                        <li><i class="fas fa-bullhorn text-info"></i> <strong>Marketing și Comunicări</strong> - Pentru a-ți trimite oferte speciale și noutăți (doar cu consimțământul tău)</li>
                        <li><i class="fas fa-chart-bar text-warning"></i> <strong>Îmbunătățirea Serviciilor</strong> - Pentru a analiza utilizarea site-ului și a îmbunătăți experiența</li>
                        <li><i class="fas fa-shield-alt text-danger"></i> <strong>Securitate</strong> - Pentru a detecta și preveni activități frauduloase</li>
                        <li><i class="fas fa-gavel text-secondary"></i> <strong>Conformitate Legală</strong> - Pentru a respecta obligațiile legale și reglementările aplicabile</li>
                    </ul>
                </div>

                <!-- Drepturile Tale -->
                <div class="section-card">
                    <h2><i class="fas fa-user-shield"></i> Drepturile Tale GDPR</h2>
                    <p>În conformitate cu GDPR, ai următoarele drepturi:</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="info-box">
                                <strong><i class="fas fa-eye"></i> Dreptul de Acces</strong>
                                <p class="mt-2">Poți solicita o copie a datelor tale personale</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="info-box">
                                <strong><i class="fas fa-edit"></i> Dreptul de Rectificare</strong>
                                <p class="mt-2">Poți corecta informațiile inexacte</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="info-box">
                                <strong><i class="fas fa-trash"></i> Dreptul de Ștergere</strong>
                                <p class="mt-2">Poți solicita ștergerea datelor tale</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="info-box">
                                <strong><i class="fas fa-ban"></i> Dreptul de Opoziție</strong>
                                <p class="mt-2">Poți obiecta la procesarea datelor</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Securitatea Datelor -->
                <div class="section-card">
                    <h2><i class="fas fa-lock"></i> Securitatea Datelor</h2>
                    <p>Implementăm măsuri tehnice și organizatorice adecvate pentru a proteja datele tale:</p>
                    <ul>
                        <li><strong>Criptare SSL/TLS</strong> pentru toate comunicările</li>
                        <li><strong>Servere securizate</strong> cu acces restricționat</li>
                        <li><strong>Backup-uri regulate</strong> pentru protecția datelor</li>
                        <li><strong>Monitorizare continuă</strong> pentru detectarea amenințărilor</li>
                        <li><strong>Formare regulată</strong> a personalului în domeniul protecției datelor</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="contact-section">
                    <h2><i class="fas fa-envelope"></i> Contact</h2>
                    <p>Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Adresa:</strong> Str. Forestierului nr. 1149, Solonețu Nou, Suceava</li>
                        <li><i class="fas fa-phone"></i> <strong>Telefon:</strong> <a href="tel:+40758330929">+40 758 330 929</a></li>
                        <li><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@resedintabudas.ro">info@resedintabudas.ro</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
