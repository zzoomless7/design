<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate - Tailwind Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 min-h-screen py-12 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden mb-8 animate-fade-in-up">
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-16 text-white text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute transform rotate-45 bg-white h-96 w-96 -top-48 -left-48"></div>
                    <div class="absolute transform -rotate-45 bg-white h-96 w-96 -bottom-48 -right-48"></div>
                </div>
                <div class="relative z-10">
                    <i class="fas fa-shield-halved text-6xl mb-4"></i>
                    <h1 class="text-5xl font-bold mb-4">Politica de Confidențialitate</h1>
                    <p class="text-xl opacity-90">Reședința Budaș</p>
                    <p class="text-sm mt-2 opacity-75">Ultima actualizare: 01 Octombrie 2025</p>
                </div>
            </div>
        </div>

        <!-- Introducere -->
        <div class="bg-white rounded-3xl shadow-xl p-8 mb-6 animate-fade-in-up hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center text-white text-2xl">
                        <i class="fas fa-info-circle"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Introducere</h2>
                    <div class="bg-gradient-to-r from-amber-50 to-orange-50 border-l-4 border-amber-500 p-4 rounded-r-lg mb-4">
                        <p class="text-amber-900 font-semibold"><i class="fas fa-exclamation-triangle mr-2"></i>Notă Importantă</p>
                        <p class="text-amber-800 mt-2">Protecția datelor tale personale este o prioritate pentru noi. Această politică explică cum colectăm, folosim și protejăm informațiile tale când vizitezi site-ul nostru sau folosești serviciile noastre.</p>
                    </div>
                    <p class="text-gray-600 leading-relaxed"><strong>Reședința Budaș</strong> ("noi", "nostru", "noastră") se angajează să protejeze confidențialitatea și securitatea datelor tale personale. Această politică de confidențialitate descrie practicile noastre privind colectarea, utilizarea și protecția informațiilor tale.</p>
                </div>
            </div>
        </div>

        <!-- Informații Colectate -->
        <div class="bg-white rounded-3xl shadow-xl p-8 mb-6 animate-fade-in-up hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-start gap-4 mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                    <i class="fas fa-database"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mt-3">Informații Colectate</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 mt-6">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 flex items-center gap-2">
                        <i class="fas fa-user"></i> Informații Personale
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span><strong>Nume și prenume</strong> - Pentru rezervări și comunicare</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span><strong>Adresa de email</strong> - Pentru confirmări și comunicări</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span><strong>Număr de telefon</strong> - Pentru contact în caz de urgență</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-blue-500 mt-1"></i>
                            <span><strong>Adresa fizică</strong> - Pentru facturare (dacă este necesar)</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-2xl border border-purple-200">
                    <h3 class="text-xl font-bold text-purple-900 mb-3 flex items-center gap-2">
                        <i class="fas fa-cog"></i> Informații Tehnice
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span><strong>Adresa IP</strong> - Pentru securitate și analiză</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span><strong>Tipul browser-ului</strong> - Pentru compatibilitate</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span><strong>Sistemul de operare</strong> - Pentru optimizare</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-purple-500 mt-1"></i>
                            <span><strong>Pagini vizitate</strong> - Pentru îmbunătățirea site-ului</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200">
                    <h3 class="text-xl font-bold text-green-900 mb-3 flex items-center gap-2">
                        <i class="fas fa-calendar-check"></i> Informații de Rezervare
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span><strong>Data de check-in și check-out</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span><strong>Numărul de persoane</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span><strong>Tipul de cameră dorit</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span><strong>Cerințe speciale</strong> - Dacă sunt specificate</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 p-6 rounded-2xl border border-orange-200">
                    <h3 class="text-xl font-bold text-orange-900 mb-3 flex items-center gap-2">
                        <i class="fas fa-chart-line"></i> Informații de Utilizare
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span><strong>Timpul petrecut pe pagini</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span><strong>Link-urile pe care dai click</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span><strong>Preferințele de navigare</strong></span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-orange-500 mt-1"></i>
                            <span><strong>Erorile întâlnite</strong> - Pentru îmbunătățiri</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Drepturile Tale -->
        <div class="bg-white rounded-3xl shadow-xl p-8 mb-6 animate-fade-in-up hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-start gap-4 mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-rose-500 to-pink-500 rounded-2xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mt-3">Drepturile Tale GDPR</h2>
            </div>
            
            <p class="text-gray-600 mb-6">În conformitate cu GDPR, ai următoarele drepturi:</p>
            
            <div class="grid md:grid-cols-2 gap-4">
                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border border-indigo-200">
                    <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Dreptul de Acces</h4>
                        <p class="text-sm text-gray-600">Poți solicita o copie a datelor tale personale</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl border border-blue-200">
                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Dreptul de Rectificare</h4>
                        <p class="text-sm text-gray-600">Poți corecta informațiile inexacte</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-red-50 to-pink-50 rounded-xl border border-red-200">
                    <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-trash"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Dreptul de Ștergere</h4>
                        <p class="text-sm text-gray-600">Poți solicita ștergerea datelor tale</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4 p-4 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl border border-amber-200">
                    <div class="w-12 h-12 bg-amber-500 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Dreptul de Opoziție</h4>
                        <p class="text-sm text-gray-600">Poți obiecta la procesarea datelor</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl shadow-xl p-8 text-white animate-fade-in-up">
            <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                <i class="fas fa-envelope text-4xl"></i> Contact
            </h2>
            <p class="mb-4 opacity-90">Pentru orice întrebări despre această politică de confidențialitate, ne poți contacta:</p>
            <div class="grid md:grid-cols-3 gap-4 mt-6">
                <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                    <i class="fas fa-map-marker-alt text-2xl mb-2"></i>
                    <p class="text-sm opacity-75 mb-1">Adresa</p>
                    <p class="font-semibold">Str. Forestierului nr. 1149<br>Solonețu Nou, Suceava</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                    <i class="fas fa-phone text-2xl mb-2"></i>
                    <p class="text-sm opacity-75 mb-1">Telefon</p>
                    <a href="tel:+40758330929" class="font-semibold hover:underline">+40 758 330 929</a>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl">
                    <i class="fas fa-envelope text-2xl mb-2"></i>
                    <p class="text-sm opacity-75 mb-1">Email</p>
                    <a href="mailto:info@resedintabudas.ro" class="font-semibold hover:underline">info@resedintabudas.ro</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
