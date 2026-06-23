<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - shadcn/ui</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        border: "hsl(214.3 31.8% 91.4%)",
                        input: "hsl(214.3 31.8% 91.4%)",
                        ring: "hsl(222.2 84% 4.9%)",
                        background: "hsl(0 0% 100%)",
                        foreground: "hsl(222.2 84% 4.9%)",
                        primary: {
                            DEFAULT: "hsl(222.2 47.4% 11.2%)",
                            foreground: "hsl(210 40% 98%)",
                        },
                        secondary: {
                            DEFAULT: "hsl(210 40% 96.1%)",
                            foreground: "hsl(222.2 47.4% 11.2%)",
                        },
                        destructive: {
                            DEFAULT: "hsl(0 84.2% 60.2%)",
                            foreground: "hsl(210 40% 98%)",
                        },
                        muted: {
                            DEFAULT: "hsl(210 40% 96.1%)",
                            foreground: "hsl(215.4 16.3% 46.9%)",
                        },
                        accent: {
                            DEFAULT: "hsl(210 40% 96.1%)",
                            foreground: "hsl(222.2 47.4% 11.2%)",
                        },
                        card: {
                            DEFAULT: "hsl(0 0% 100%)",
                            foreground: "hsl(222.2 84% 4.9%)",
                        },
                    },
                    borderRadius: {
                        lg: "0.5rem",
                        md: "calc(0.5rem - 2px)",
                        sm: "calc(0.5rem - 4px)",
                    },
                }
            }
        }
    </script>
    <style>
        @layer base {
            * {
                @apply border-border;
            }
            body {
                @apply bg-background text-foreground;
            }
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Header -->
    <header class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
        <div class="container mx-auto flex h-14 items-center px-4">
            <div class="mr-4 flex">
                <a class="mr-6 flex items-center space-x-2" href="#">
                    <i class="fas fa-cookie-bite text-xl"></i>
                    <span class="font-bold">CookiePolicy</span>
                </a>
                <nav class="flex items-center space-x-6 text-sm font-medium">
                    <a href="#" class="transition-colors hover:text-foreground/80 text-foreground/60">Acasă</a>
                    <a href="#" class="transition-colors hover:text-foreground/80 text-foreground/60">Despre</a>
                    <a href="#" class="transition-colors hover:text-foreground/80 text-foreground/60">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="border-b bg-gradient-to-b from-muted/50 to-muted py-20">
        <div class="container mx-auto px-4 text-center">
            <div class="text-6xl mb-6">🍪</div>
            <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl mb-4">
                Politica de Cookie-uri
            </h1>
            <p class="mx-auto max-w-[700px] text-lg text-muted-foreground">
                Construit cu shadcn/ui - Componente moderne și accesibile
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12 max-w-5xl">
        <!-- Info Alert -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 mb-8">
            <div class="flex items-start gap-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-primary-foreground">
                    <i class="fas fa-info-circle text-xl"></i>
                </div>
                <div class="space-y-2">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">
                        Ce sunt cookie-urile?
                    </h3>
                    <p class="text-sm text-muted-foreground">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău atunci când vizitezi un site web. 
                        Ele ajută site-ul să funcționeze corect și să îți ofere o experiență mai bună.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 class="text-3xl font-bold tracking-tight mb-6">Categorii de Cookie-uri</h2>

        <!-- Accordion / Tabs Style Layout -->
        <div class="space-y-4">
            <!-- Essential Cookies -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-6 bg-secondary">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-100 text-green-700">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Cookie-uri Esențiale</h3>
                    </div>
                    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                        Obligatorii
                    </span>
                </div>
                <div class="p-6">
                    <p class="text-sm text-muted-foreground mb-4">
                        Aceste cookie-uri sunt strict necesare pentru funcționarea site-ului.
                    </p>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs uppercase bg-muted">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Cookie</th>
                                    <th scope="col" class="px-6 py-3">Scop</th>
                                    <th scope="col" class="px-6 py-3">Durată</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-muted/50">
                                    <td class="px-6 py-4 font-mono text-xs">session_id</td>
                                    <td class="px-6 py-4">Gestionare sesiune</td>
                                    <td class="px-6 py-4">Sesiune</td>
                                </tr>
                                <tr class="border-b hover:bg-muted/50">
                                    <td class="px-6 py-4 font-mono text-xs">csrf_token</td>
                                    <td class="px-6 py-4">Securitate CSRF</td>
                                    <td class="px-6 py-4">24 ore</td>
                                </tr>
                                <tr class="hover:bg-muted/50">
                                    <td class="px-6 py-4 font-mono text-xs">cookie_consent</td>
                                    <td class="px-6 py-4">Preferințe cookie-uri</td>
                                    <td class="px-6 py-4">1 an</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Performance Cookies -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-6 bg-secondary">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 text-blue-700">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Cookie-uri de Performanță</h3>
                    </div>
                    <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                        Opțional
                    </span>
                </div>
                <div class="p-6">
                    <p class="text-sm text-muted-foreground mb-4">
                        Ne ajută să înțelegem cum interacționezi cu site-ul nostru.
                    </p>
                    <div class="grid gap-4 md:grid-cols-3">
                        <div class="rounded-lg border p-4 hover:shadow-md transition-shadow">
                            <code class="text-xs font-semibold">_ga</code>
                            <p class="text-sm text-muted-foreground mt-2">Google Analytics</p>
                            <p class="text-xs text-muted-foreground mt-1">⏱️ 2 ani</p>
                        </div>
                        <div class="rounded-lg border p-4 hover:shadow-md transition-shadow">
                            <code class="text-xs font-semibold">_gid</code>
                            <p class="text-sm text-muted-foreground mt-2">Analytics ID</p>
                            <p class="text-xs text-muted-foreground mt-1">⏱️ 24 ore</p>
                        </div>
                        <div class="rounded-lg border p-4 hover:shadow-md transition-shadow">
                            <code class="text-xs font-semibold">_gat</code>
                            <p class="text-sm text-muted-foreground mt-2">Rate limiting</p>
                            <p class="text-xs text-muted-foreground mt-1">⏱️ 1 minut</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-6 bg-secondary">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-100 text-purple-700">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Cookie-uri de Funcționalitate</h3>
                    </div>
                    <span class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800">
                        Opțional
                    </span>
                </div>
                <div class="p-6">
                    <p class="text-sm text-muted-foreground mb-4">
                        Pentru o experiență personalizată și memorarea preferințelor tale.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between rounded-lg border p-4 hover:bg-muted/50 transition-colors">
                            <div>
                                <code class="text-sm font-semibold">language_pref</code>
                                <p class="text-sm text-muted-foreground">Preferință de limbă</p>
                            </div>
                            <span class="text-xs text-muted-foreground">1 an</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border p-4 hover:bg-muted/50 transition-colors">
                            <div>
                                <code class="text-sm font-semibold">theme_mode</code>
                                <p class="text-sm text-muted-foreground">Temă vizuală</p>
                            </div>
                            <span class="text-xs text-muted-foreground">6 luni</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-6 bg-secondary">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-100 text-orange-700">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Cookie-uri de Marketing</h3>
                    </div>
                    <span class="inline-flex items-center rounded-full bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800">
                        Opțional
                    </span>
                </div>
                <div class="p-6">
                    <p class="text-sm text-muted-foreground mb-4">
                        Pentru publicitate relevantă și măsurarea eficienței campaniilor.
                    </p>
                    <div class="grid gap-4 md:grid-cols-2">
                        <div class="rounded-lg border p-4">
                            <code class="text-xs font-semibold">_fbp</code>
                            <p class="text-sm text-muted-foreground mt-2">Facebook Pixel</p>
                            <p class="text-xs text-muted-foreground mt-1">📅 3 luni</p>
                        </div>
                        <div class="rounded-lg border p-4">
                            <code class="text-xs font-semibold">ads_id</code>
                            <p class="text-sm text-muted-foreground mt-2">Advertising ID</p>
                            <p class="text-xs text-muted-foreground mt-1">📅 1 an</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="rounded-lg border bg-gradient-to-r from-slate-50 to-slate-100 p-8 mt-12 text-center">
            <h2 class="text-3xl font-bold tracking-tight mb-4">
                Gestionează Preferințele
            </h2>
            <p class="text-muted-foreground mb-6 max-w-2xl mx-auto">
                Ai control complet asupra cookie-urilor. Alege opțiunea care ți se potrivește cel mai bine.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 px-8">
                    <i class="fas fa-check mr-2"></i>
                    Acceptă Toate
                </button>
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-8">
                    <i class="fas fa-cog mr-2"></i>
                    Personalizează
                </button>
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-destructive text-destructive-foreground hover:bg-destructive/90 h-11 px-8">
                    <i class="fas fa-times mr-2"></i>
                    Respinge Opționale
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 class="text-3xl font-bold tracking-tight mt-12 mb-6">Setări Browser</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 text-center hover:shadow-md transition-shadow">
                <i class="fab fa-chrome text-5xl text-blue-500 mb-3"></i>
                <h4 class="font-semibold mb-2">Chrome</h4>
                <p class="text-xs text-muted-foreground">Setări → Confidențialitate</p>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 text-center hover:shadow-md transition-shadow">
                <i class="fab fa-firefox text-5xl text-orange-500 mb-3"></i>
                <h4 class="font-semibold mb-2">Firefox</h4>
                <p class="text-xs text-muted-foreground">Opțiuni → Privacy</p>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 text-center hover:shadow-md transition-shadow">
                <i class="fab fa-safari text-5xl text-blue-400 mb-3"></i>
                <h4 class="font-semibold mb-2">Safari</h4>
                <p class="text-xs text-muted-foreground">Preferințe → Privacy</p>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 text-center hover:shadow-md transition-shadow">
                <i class="fab fa-edge text-5xl text-blue-600 mb-3"></i>
                <h4 class="font-semibold mb-2">Edge</h4>
                <p class="text-xs text-muted-foreground">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="rounded-lg border-l-4 border-yellow-500 bg-yellow-50 p-6 mt-12">
            <h3 class="text-lg font-semibold mb-2 flex items-center gap-2">
                <i class="fas fa-envelope"></i>
                Contactează-ne
            </h3>
            <p class="text-sm text-muted-foreground">
                Pentru întrebări despre politica de cookie-uri: 
                <a href="mailto:privacy@example.com" class="text-primary hover:underline font-medium">
                    privacy@example.com
                </a>
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t bg-muted/50">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-sm font-semibold mb-1">CookiePolicy - shadcn/ui</p>
            <p class="text-xs text-muted-foreground mb-1">© 2024 Toate drepturile rezervate</p>
            <p class="text-xs text-muted-foreground">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 inline-flex items-center justify-center rounded-full bg-primary text-primary-foreground h-14 w-14 shadow-lg hover:bg-primary/90 transition-all hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
