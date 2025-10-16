<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Flowbite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <i class="fas fa-cookie-bite text-blue-600 text-2xl"></i>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CookiePolicy</span>
            </a>
            <div class="hidden w-full md:block md:w-auto">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li><a href="#" class="block py-2 px-3 text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0">Acasă</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Despre</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700">
        <div class="py-16 px-4 mx-auto max-w-screen-xl text-center lg:py-24">
            <div class="text-6xl mb-4">🍪</div>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Politica de Cookie-uri</h1>
            <p class="mb-8 text-lg font-normal text-gray-100 lg:text-xl sm:px-16 lg:px-48">Dezvoltat cu Flowbite - Biblioteca de componente Tailwind CSS</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-screen-xl mx-auto px-4 py-12">
        <!-- Info Alert -->
        <div class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
            <i class="fas fa-info-circle flex-shrink-0 w-5 h-5 mt-1"></i>
            <div class="ms-3 text-sm font-medium">
                <h3 class="text-lg font-bold mb-2">Ce sunt cookie-urile?</h3>
                <p>Cookie-urile sunt fișiere text mici care sunt plasate pe computerul, tableta sau telefonul tău mobil atunci când vizitezi un site web. Acestea permit site-ului să funcționeze eficient și să îți ofere o experiență optimizată.</p>
            </div>
        </div>

        <!-- Tabs for Cookie Categories -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold mb-6">Categorii de Cookie-uri</h2>
            
            <div class="border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg text-blue-600 border-blue-600" id="essential-tab" data-tabs-target="#essential" type="button" role="tab" aria-controls="essential" aria-selected="true">
                            <i class="fas fa-shield-alt mr-2"></i>Esențiale
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="performance-tab" data-tabs-target="#performance" type="button" role="tab" aria-controls="performance" aria-selected="false">
                            <i class="fas fa-chart-line mr-2"></i>Performanță
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="functionality-tab" data-tabs-target="#functionality" type="button" role="tab" aria-controls="functionality" aria-selected="false">
                            <i class="fas fa-cog mr-2"></i>Funcționalitate
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="marketing-tab" data-tabs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">
                            <i class="fas fa-bullhorn mr-2"></i>Marketing
                        </button>
                    </li>
                </ul>
            </div>
            
            <div id="default-tab-content">
                <!-- Essential Tab -->
                <div class="hidden p-6 bg-white rounded-lg border border-gray-200 shadow-sm" id="essential" role="tabpanel" aria-labelledby="essential-tab">
                    <h3 class="text-xl font-bold mb-4 text-green-700">Cookie-uri Esențiale</h3>
                    <p class="mb-4 text-gray-700">Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului și nu pot fi dezactivate.</p>
                    
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nume Cookie</th>
                                    <th scope="col" class="px-6 py-3">Scop</th>
                                    <th scope="col" class="px-6 py-3">Durată</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-mono text-gray-900 whitespace-nowrap">session_id</th>
                                    <td class="px-6 py-4">Gestionarea sesiunii utilizatorului</td>
                                    <td class="px-6 py-4">Sesiune</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Activ</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-mono text-gray-900 whitespace-nowrap">csrf_token</th>
                                    <td class="px-6 py-4">Protecție împotriva atacurilor CSRF</td>
                                    <td class="px-6 py-4">24 ore</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Activ</span>
                                    </td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-mono text-gray-900 whitespace-nowrap">cookie_consent</th>
                                    <td class="px-6 py-4">Salvează preferințele de cookie-uri</td>
                                    <td class="px-6 py-4">1 an</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Activ</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Performance Tab -->
                <div class="hidden p-6 bg-white rounded-lg border border-gray-200 shadow-sm" id="performance" role="tabpanel" aria-labelledby="performance-tab">
                    <h3 class="text-xl font-bold mb-4 text-blue-700">Cookie-uri de Performanță</h3>
                    <p class="mb-4 text-gray-700">Colectează informații anonime despre modul în care vizitatorii utilizează site-ul nostru.</p>
                    
                    <div class="grid gap-4 md:grid-cols-3">
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900"><code>_ga</code></h5>
                            <p class="mb-3 font-normal text-gray-700 text-sm">Google Analytics - identificare utilizatori unici</p>
                            <span class="text-xs text-gray-500">⏱️ Durată: 2 ani</span>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900"><code>_gid</code></h5>
                            <p class="mb-3 font-normal text-gray-700 text-sm">Google Analytics - stocare informații</p>
                            <span class="text-xs text-gray-500">⏱️ Durată: 24 ore</span>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900"><code>_gat</code></h5>
                            <p class="mb-3 font-normal text-gray-700 text-sm">Limitare rate de cereri Analytics</p>
                            <span class="text-xs text-gray-500">⏱️ Durată: 1 minut</span>
                        </div>
                    </div>
                </div>

                <!-- Functionality Tab -->
                <div class="hidden p-6 bg-white rounded-lg border border-gray-200 shadow-sm" id="functionality" role="tabpanel" aria-labelledby="functionality-tab">
                    <h3 class="text-xl font-bold mb-4 text-purple-700">Cookie-uri de Funcționalitate</h3>
                    <p class="mb-4 text-gray-700">Aceste cookie-uri permit site-ului să își amintească alegerile tale.</p>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div>
                                <h5 class="font-bold"><code>language_pref</code></h5>
                                <p class="text-sm text-gray-600">Stochează preferința de limbă</p>
                            </div>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">1 an</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div>
                                <h5 class="font-bold"><code>theme_mode</code></h5>
                                <p class="text-sm text-gray-600">Tema preferată (light/dark)</p>
                            </div>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">6 luni</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div>
                                <h5 class="font-bold"><code>font_size</code></h5>
                                <p class="text-sm text-gray-600">Dimensiunea fontului preferată</p>
                            </div>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">1 an</span>
                        </div>
                    </div>
                </div>

                <!-- Marketing Tab -->
                <div class="hidden p-6 bg-white rounded-lg border border-gray-200 shadow-sm" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                    <h3 class="text-xl font-bold mb-4 text-orange-700">Cookie-uri de Marketing</h3>
                    <p class="mb-4 text-gray-700">Folosite pentru a-ți afișa reclame relevante și pentru măsurarea eficienței campaniilor publicitare.</p>
                    
                    <div class="grid gap-4 md:grid-cols-2">
                        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <div class="flex items-center mb-3">
                                <i class="fab fa-facebook text-2xl text-blue-600 mr-2"></i>
                                <h5 class="text-lg font-bold"><code>_fbp</code></h5>
                            </div>
                            <p class="text-sm text-gray-700 mb-2">Facebook Pixel pentru publicitate personalizată</p>
                            <span class="text-xs text-gray-500">📅 3 luni</span>
                        </div>
                        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-ad text-2xl text-orange-600 mr-2"></i>
                                <h5 class="text-lg font-bold"><code>ads_id</code></h5>
                            </div>
                            <p class="text-sm text-gray-700 mb-2">Identificare pentru publicitate țintită</p>
                            <span class="text-xs text-gray-500">📅 1 an</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="p-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg shadow-lg mb-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">
                    <i class="fas fa-sliders-h mr-2"></i>
                    Gestionează Preferințele
                </h2>
                <p class="text-gray-700 mb-6">Controlează cum sunt folosite cookie-urile pe acest site</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        <i class="fas fa-check mr-2"></i>Acceptă Toate
                    </button>
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        <i class="fas fa-cog mr-2"></i>Personalizează
                    </button>
                    <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        <i class="fas fa-times mr-2"></i>Respinge Opționale
                    </button>
                </div>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-3xl font-bold mb-6">Setări Browser</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 text-center">
                <i class="fab fa-chrome text-6xl text-blue-500 mb-3"></i>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Chrome</h5>
                <p class="font-normal text-gray-700 text-sm">Setări → Confidențialitate</p>
            </div>
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 text-center">
                <i class="fab fa-firefox text-6xl text-orange-500 mb-3"></i>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Firefox</h5>
                <p class="font-normal text-gray-700 text-sm">Opțiuni → Confidențialitate</p>
            </div>
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 text-center">
                <i class="fab fa-safari text-6xl text-blue-400 mb-3"></i>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Safari</h5>
                <p class="font-normal text-gray-700 text-sm">Preferințe → Confidențialitate</p>
            </div>
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 text-center">
                <i class="fab fa-edge text-6xl text-blue-600 mb-3"></i>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Edge</h5>
                <p class="font-normal text-gray-700 text-sm">Setări → Confidențialitate</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="flex p-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50" role="alert">
            <i class="fas fa-envelope flex-shrink-0 w-5 h-5 mt-1"></i>
            <div class="ms-3 text-sm font-medium">
                <h3 class="font-bold mb-1">Contactează-ne</h3>
                <p>Pentru întrebări despre politica de cookie-uri: 
                    <a href="mailto:privacy@example.com" class="font-semibold underline hover:no-underline">privacy@example.com</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="w-full max-w-screen-xl mx-auto p-6 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-400 sm:text-center">© 2024 <a href="#" class="hover:underline">CookiePolicy</a> - Flowbite</span>
                <span class="text-sm text-gray-500">Ultima actualizare: <?php echo date('d.m.Y'); ?></span>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg p-4 text-center inline-flex items-center">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>
