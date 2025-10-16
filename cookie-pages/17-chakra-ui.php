<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Chakra UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Chakra UI inspired design system */
        :root {
            --chakra-colors-blue-500: #3182CE;
            --chakra-colors-teal-500: #38B2AC;
            --chakra-colors-green-500: #48BB78;
            --chakra-colors-orange-500: #ED8936;
            --chakra-colors-purple-500: #9F7AEA;
            --chakra-space-4: 1rem;
            --chakra-space-6: 1.5rem;
            --chakra-space-8: 2rem;
            --chakra-radii-md: 0.375rem;
            --chakra-radii-lg: 0.5rem;
            --chakra-radii-xl: 0.75rem;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
        }
        
        .chakra-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .chakra-box {
            background: white;
            border-radius: var(--chakra-radii-lg);
            padding: var(--chakra-space-6);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            margin-bottom: var(--chakra-space-6);
        }
        
        .chakra-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.125rem 0.5rem;
            border-radius: var(--chakra-radii-md);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.025em;
        }
        
        .chakra-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: var(--chakra-radii-md);
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .chakra-button:hover {
            transform: translateY(-2px);
        }
        
        .chakra-stack {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
</head>
<body style="background: linear-gradient(to bottom, #F7FAFC, #EDF2F7);">
    <!-- Header -->
    <header style="background: white; border-bottom: 1px solid #E2E8F0; position: sticky; top: 0; z-index: 50;">
        <div class="chakra-container" style="display: flex; align-items: center; justify-content: space-between; height: 4rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div style="width: 2.5rem; height: 2.5rem; background: linear-gradient(135deg, #38B2AC, #319795); border-radius: var(--chakra-radii-lg); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cookie-bite" style="color: white;"></i>
                </div>
                <span style="font-size: 1.5rem; font-weight: 700;">CookiePolicy</span>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section style="background: linear-gradient(135deg, #38B2AC 0%, #319795 50%, #2C7A7B 100%); padding: 5rem 1rem; text-align: center; color: white;">
        <div class="chakra-container">
            <div style="font-size: 5rem; margin-bottom: 1.5rem;">🍪</div>
            <h1 style="font-size: 3.75rem; font-weight: 800; margin-bottom: 1rem; letter-spacing: -0.025em;">Politica de Cookie-uri</h1>
            <p style="font-size: 1.25rem; opacity: 0.95; max-width: 48rem; margin: 0 auto;">
                Construit cu Chakra UI - Simple, Modular and Accessible UI Components
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="chakra-container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <!-- Info Alert -->
        <div class="chakra-box" style="border-left: 4px solid var(--chakra-colors-teal-500); background: linear-gradient(135deg, #E6FFFA, #B2F5EA);">
            <div style="display: flex; gap: 1rem; align-items: start;">
                <div style="flex-shrink: 0;">
                    <div style="width: 3rem; height: 3rem; background-color: #81E6D9; border-radius: 9999px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-info-circle" style="font-size: 1.5rem; color: #234E52;"></i>
                    </div>
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; color: #234E52;">Ce sunt cookie-urile?</h3>
                    <p style="color: #2C7A7B; line-height: 1.625;">
                        Cookie-urile sunt fișiere text mici. Chakra UI oferă un set de componente React simple, modulare și accesibile 
                        care îți oferă toate blocurile de construcție pentru aplicații React.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 2rem;">Categorii de Cookie-uri</h2>

        <!-- Tabs-style layout -->
        <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem;">
            <!-- Essential Cookies -->
            <div class="chakra-box" style="border-top: 4px solid var(--chakra-colors-green-500);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 3rem; height: 3rem; background: linear-gradient(135deg, #48BB78, #38A169); border-radius: var(--chakra-radii-md); display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-shield-alt" style="color: white; font-size: 1.25rem;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700;">Cookie-uri Esențiale</h3>
                            <p style="font-size: 0.875rem; color: #718096;">Strict necesare pentru funcționare</p>
                        </div>
                    </div>
                    <span class="chakra-badge" style="background-color: #C6F6D5; color: #22543D;">Obligatorii</span>
                </div>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead style="background-color: #F7FAFC;">
                            <tr>
                                <th style="padding: 0.75rem; text-align: left; font-weight: 600; border-bottom: 2px solid #E2E8F0;">Cookie</th>
                                <th style="padding: 0.75rem; text-align: left; font-weight: 600; border-bottom: 2px solid #E2E8F0;">Scop</th>
                                <th style="padding: 0.75rem; text-align: left; font-weight: 600; border-bottom: 2px solid #E2E8F0;">Durată</th>
                                <th style="padding: 0.75rem; text-align: left; font-weight: 600; border-bottom: 2px solid #E2E8F0;">Tip</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #E2E8F0;">
                                <td style="padding: 0.75rem;"><code style="background: #EDF2F7; padding: 0.25rem 0.5rem; border-radius: 0.25rem;">session_id</code></td>
                                <td style="padding: 0.75rem; color: #718096;">Gestionare sesiune</td>
                                <td style="padding: 0.75rem; color: #718096;">Sesiune</td>
                                <td style="padding: 0.75rem;">
                                    <span class="chakra-badge" style="background-color: #C6F6D5; color: #22543D;">First-party</span>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #E2E8F0;">
                                <td style="padding: 0.75rem;"><code style="background: #EDF2F7; padding: 0.25rem 0.5rem; border-radius: 0.25rem;">csrf_token</code></td>
                                <td style="padding: 0.75rem; color: #718096;">Protecție CSRF</td>
                                <td style="padding: 0.75rem; color: #718096;">24 ore</td>
                                <td style="padding: 0.75rem;">
                                    <span class="chakra-badge" style="background-color: #C6F6D5; color: #22543D;">First-party</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0.75rem;"><code style="background: #EDF2F7; padding: 0.25rem 0.5rem; border-radius: 0.25rem;">cookie_consent</code></td>
                                <td style="padding: 0.75rem; color: #718096;">Preferințe</td>
                                <td style="padding: 0.75rem; color: #718096;">1 an</td>
                                <td style="padding: 0.75rem;">
                                    <span class="chakra-badge" style="background-color: #C6F6D5; color: #22543D;">First-party</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Performance & Functionality Grid -->
            <div style="display: grid; grid-template-columns: 1fr; md:grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
                <!-- Performance Cookies -->
                <div class="chakra-box" style="border-top: 4px solid var(--chakra-colors-blue-500);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div style="width: 2.5rem; height: 2.5rem; background: var(--chakra-colors-blue-500); border-radius: var(--chakra-radii-md); display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-chart-line" style="color: white;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 700;">Performanță</h3>
                            <span class="chakra-badge" style="background-color: #BEE3F8; color: #2C5282;">Opțional</span>
                        </div>
                    </div>
                    <div class="chakra-stack" style="gap: 0.75rem;">
                        <div style="background: #EBF8FF; padding: 0.75rem; border-radius: var(--chakra-radii-md); border-left: 3px solid var(--chakra-colors-blue-500);">
                            <code style="font-weight: 600;">_ga</code>
                            <p style="font-size: 0.75rem; color: #718096; margin-top: 0.25rem;">Analytics • 2 ani</p>
                        </div>
                        <div style="background: #EBF8FF; padding: 0.75rem; border-radius: var(--chakra-radii-md); border-left: 3px solid var(--chakra-colors-blue-500);">
                            <code style="font-weight: 600;">_gid</code>
                            <p style="font-size: 0.75rem; color: #718096; margin-top: 0.25rem;">Session ID • 24h</p>
                        </div>
                        <div style="background: #EBF8FF; padding: 0.75rem; border-radius: var(--chakra-radii-md); border-left: 3px solid var(--chakra-colors-blue-500);">
                            <code style="font-weight: 600;">_gat</code>
                            <p style="font-size: 0.75rem; color: #718096; margin-top: 0.25rem;">Rate limit • 1 min</p>
                        </div>
                    </div>
                </div>

                <!-- Functionality Cookies -->
                <div class="chakra-box" style="border-top: 4px solid var(--chakra-colors-purple-500);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div style="width: 2.5rem; height: 2.5rem; background: var(--chakra-colors-purple-500); border-radius: var(--chakra-radii-md); display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-cog" style="color: white;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 700;">Funcționalitate</h3>
                            <span class="chakra-badge" style="background-color: #E9D8FD; color: #553C9A;">Opțional</span>
                        </div>
                    </div>
                    <div class="chakra-stack" style="gap: 0.75rem;">
                        <div style="background: #FAF5FF; padding: 0.75rem; border-radius: var(--chakra-radii-md); border-left: 3px solid var(--chakra-colors-purple-500);">
                            <code style="font-weight: 600;">language_pref</code>
                            <p style="font-size: 0.75rem; color: #718096; margin-top: 0.25rem;">Limbă • 1 an</p>
                        </div>
                        <div style="background: #FAF5FF; padding: 0.75rem; border-radius: var(--chakra-radii-md); border-left: 3px solid var(--chakra-colors-purple-500);">
                            <code style="font-weight: 600;">theme_mode</code>
                            <p style="font-size: 0.75rem; color: #718096; margin-top: 0.25rem;">Temă • 6 luni</p>
                        </div>
                        <div style="background: #FAF5FF; padding: 0.75rem; border-radius: var(--chakra-radii-md); border-left: 3px solid var(--chakra-colors-purple-500);">
                            <code style="font-weight: 600;">font_size</code>
                            <p style="font-size: 0.75rem; color: #718096; margin-top: 0.25rem;">Font • 1 an</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="chakra-box" style="border-top: 4px solid var(--chakra-colors-orange-500);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="width: 3rem; height: 3rem; background: linear-gradient(135deg, #ED8936, #DD6B20); border-radius: var(--chakra-radii-md); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-bullhorn" style="color: white; font-size: 1.25rem;"></i>
                    </div>
                    <div>
                        <h3 style="font-size: 1.5rem; font-weight: 700;">Cookie-uri de Marketing</h3>
                        <span class="chakra-badge" style="background-color: #FEEBC8; color: #7C2D12;">Opțional</span>
                    </div>
                </div>
                <div style="display: grid; grid-template-columns: 1fr; md:grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                    <div style="background: linear-gradient(135deg, #FFFAF0, #FEEBC8); padding: 1rem; border-radius: var(--chakra-radii-md); border: 2px solid #FBD38D;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fab fa-facebook" style="font-size: 2rem; color: #1877F2;"></i>
                            <code style="font-weight: 700; font-size: 1.125rem;">_fbp</code>
                        </div>
                        <p style="font-size: 0.875rem; color: #744210; margin-bottom: 0.5rem;">Facebook Pixel tracking</p>
                        <span style="font-size: 0.75rem; color: #975A16;">📅 3 luni</span>
                    </div>
                    <div style="background: linear-gradient(135deg, #FFFAF0, #FEEBC8); padding: 1rem; border-radius: var(--chakra-radii-md); border: 2px solid #FBD38D;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-ad" style="font-size: 2rem; color: var(--chakra-colors-orange-500);"></i>
                            <code style="font-weight: 700; font-size: 1.125rem;">ads_id</code>
                        </div>
                        <p style="font-size: 0.875rem; color: #744210; margin-bottom: 0.5rem;">Advertising identifier</p>
                        <span style="font-size: 0.75rem; color: #975A16;">📅 1 an</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="chakra-box" style="background: linear-gradient(135deg, #E6FFFA, #B2F5EA); text-align: center; margin-top: 3rem;">
            <div style="display: inline-flex; align-items: center; justify-content: center; width: 4rem; height: 4rem; background: linear-gradient(135deg, #38B2AC, #319795); border-radius: 9999px; margin-bottom: 1rem;">
                <i class="fas fa-sliders-h" style="color: white; font-size: 1.5rem;"></i>
            </div>
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 0.75rem;">Gestionează Preferințele</h2>
            <p style="color: #2C7A7B; margin-bottom: 2rem; max-width: 36rem; margin-left: auto; margin-right: auto;">
                Simple, modular și accesibil cu Chakra UI
            </p>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
                <button class="chakra-button" style="background: linear-gradient(135deg, #48BB78, #38A169); color: white;">
                    <i class="fas fa-check"></i>
                    Acceptă Toate
                </button>
                <button class="chakra-button" style="background: linear-gradient(135deg, #3182CE, #2C5282); color: white;">
                    <i class="fas fa-cog"></i>
                    Personalizează
                </button>
                <button class="chakra-button" style="background: linear-gradient(135deg, #F56565, #E53E3E); color: white;">
                    <i class="fas fa-times"></i>
                    Respinge
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-top: 3rem; margin-bottom: 2rem;">Setări Browser</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
            <div class="chakra-box" style="text-align: center;">
                <i class="fab fa-chrome" style="font-size: 4rem; color: var(--chakra-colors-blue-500); margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Chrome</h4>
                <p style="font-size: 0.875rem; color: #718096;">Setări → Privacy</p>
            </div>
            <div class="chakra-box" style="text-align: center;">
                <i class="fab fa-firefox" style="font-size: 4rem; color: var(--chakra-colors-orange-500); margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Firefox</h4>
                <p style="font-size: 0.875rem; color: #718096;">Opțiuni → Privacy</p>
            </div>
            <div class="chakra-box" style="text-align: center;">
                <i class="fab fa-safari" style="font-size: 4rem; color: #3182CE; margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Safari</h4>
                <p style="font-size: 0.875rem; color: #718096;">Preferințe → Privacy</p>
            </div>
            <div class="chakra-box" style="text-align: center;">
                <i class="fab fa-edge" style="font-size: 4rem; color: #0078D4; margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Edge</h4>
                <p style="font-size: 0.875rem; color: #718096;">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="chakra-box" style="border-left: 4px solid var(--chakra-colors-orange-500); background: #FFFAF0; margin-top: 2rem;">
            <div style="display: flex; gap: 1rem;">
                <div style="width: 3rem; height: 3rem; background: #FEEBC8; border-radius: 9999px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--chakra-colors-orange-500);"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Contactează-ne</h3>
                    <p style="color: #744210;">
                        Pentru întrebări: 
                        <a href="mailto:privacy@example.com" style="font-weight: 700; color: var(--chakra-colors-teal-500); text-decoration: none;">
                            privacy@example.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #2D3748, #1A202C); color: white; padding: 2.5rem 1rem;">
        <div class="chakra-container" style="text-align: center;">
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">CookiePolicy - Chakra UI</p>
            <p style="color: #A0AEC0; margin-bottom: 0.5rem;">© 2024 Toate drepturile rezervate</p>
            <p style="font-size: 0.875rem; color: #718096;">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            style="position: fixed; bottom: 2rem; right: 2rem; width: 3.5rem; height: 3.5rem; background: linear-gradient(135deg, #38B2AC, #319795); color: white; border: none; border-radius: 9999px; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1); cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; transition: transform 0.2s;">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
