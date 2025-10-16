<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Panda CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --panda-colors-primary: #3B82F6;
            --panda-colors-secondary: #8B5CF6;
            --panda-colors-success: #10B981;
            --panda-colors-warning: #F59E0B;
            --panda-colors-danger: #EF4444;
            --panda-radii-sm: 0.375rem;
            --panda-radii-md: 0.5rem;
            --panda-radii-lg: 0.75rem;
            --panda-radii-xl: 1rem;
        }
        
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .panda-container {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        .panda-card {
            background: white;
            border-radius: var(--panda-radii-xl);
            padding: 1.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        
        .panda-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .panda-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: var(--panda-radii-md);
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .panda-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: var(--panda-radii-md);
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .panda-button:hover {
            transform: scale(1.05);
        }
        
        .panda-button:active {
            transform: scale(0.95);
        }
        
        .panda-stack {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .panda-grid {
            display: grid;
            gap: 1.5rem;
        }
        
        @media (min-width: 768px) {
            .panda-grid-cols-2 {
                grid-template-columns: repeat(2, 1fr);
            }
            .panda-grid-cols-3 {
                grid-template-columns: repeat(3, 1fr);
            }
            .panda-grid-cols-4 {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>
<body style="background: linear-gradient(to bottom right, #F3F4F6, #E5E7EB);">
    <!-- Navbar -->
    <nav style="background: white; border-bottom: 1px solid #E5E7EB; position: sticky; top: 0; z-index: 50;">
        <div class="panda-container" style="display: flex; align-items: center; justify-content: space-between; height: 4rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div style="width: 2.5rem; height: 2.5rem; background: linear-gradient(135deg, #3B82F6, #8B5CF6); border-radius: var(--panda-radii-lg); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cookie-bite" style="color: white;"></i>
                </div>
                <span style="font-size: 1.5rem; font-weight: 700;">CookiePolicy</span>
            </div>
            <div style="display: none; gap: 1.5rem; align-items: center;">
                <a href="#" style="color: #6B7280; text-decoration: none; font-weight: 500; transition: color 0.2s;">Acasă</a>
                <a href="#" style="color: #6B7280; text-decoration: none; font-weight: 500; transition: color 0.2s;">Despre</a>
                <a href="#" style="color: #6B7280; text-decoration: none; font-weight: 500; transition: color 0.2s;">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 6rem 1rem; text-align: center; color: white;">
        <div class="panda-container">
            <div style="font-size: 5rem; margin-bottom: 1.5rem;">🍪</div>
            <h1 style="font-size: 3.75rem; font-weight: 800; margin-bottom: 1rem;">Politica de Cookie-uri</h1>
            <p style="font-size: 1.25rem; opacity: 0.9; max-width: 48rem; margin: 0 auto;">
                Construit cu Panda CSS - Build faster with composable CSS style props
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="panda-container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <!-- Info Alert -->
        <div class="panda-card" style="border-left: 4px solid var(--panda-colors-primary); background: linear-gradient(135deg, #DBEAFE 0%, #E0E7FF 100%);">
            <div style="display: flex; gap: 1rem;">
                <div style="flex-shrink: 0;">
                    <div style="width: 3rem; height: 3rem; background-color: #BFDBFE; border-radius: 9999px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-info-circle" style="font-size: 1.5rem; color: var(--panda-colors-primary);"></i>
                    </div>
                </div>
                <div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: #1E3A8A;">Ce sunt cookie-urile?</h3>
                    <p style="color: #1E40AF;">
                        Cookie-urile sunt fișiere text mici stocate pe dispozitivul tău. Panda CSS este un motor CSS atomic 
                        cu style props compozabile, oferind o experiență de dezvoltare optimă.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 style="font-size: 2.25rem; font-weight: 800; margin-top: 3rem; margin-bottom: 2rem;">Categorii de Cookie-uri</h2>

        <!-- Essential Cookies -->
        <div class="panda-card" style="border-top: 4px solid var(--panda-colors-success);">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <div style="width: 3rem; height: 3rem; background: linear-gradient(135deg, #10B981, #059669); border-radius: var(--panda-radii-lg); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-shield-alt" style="color: white; font-size: 1.25rem;"></i>
                </div>
                <div style="flex: 1;">
                    <h3 style="font-size: 1.5rem; font-weight: 700;">Cookie-uri Esențiale</h3>
                    <p style="color: #6B7280; font-size: 0.875rem;">Necesare pentru funcționarea de bază</p>
                </div>
                <span class="panda-badge" style="background-color: #D1FAE5; color: #065F46;">Obligatorii</span>
            </div>
            <div style="overflow-x: auto; margin-top: 1.5rem;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead style="background-color: #F9FAFB;">
                        <tr>
                            <th style="padding: 0.75rem; text-align: left; font-weight: 600; color: #374151; border-bottom: 2px solid #E5E7EB;">Cookie</th>
                            <th style="padding: 0.75rem; text-align: left; font-weight: 600; color: #374151; border-bottom: 2px solid #E5E7EB;">Scop</th>
                            <th style="padding: 0.75rem; text-align: left; font-weight: 600; color: #374151; border-bottom: 2px solid #E5E7EB;">Durată</th>
                            <th style="padding: 0.75rem; text-align: left; font-weight: 600; color: #374151; border-bottom: 2px solid #E5E7EB;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #E5E7EB;">
                            <td style="padding: 0.75rem;"><code style="background-color: #F3F4F6; padding: 0.25rem 0.5rem; border-radius: 0.25rem;">session_id</code></td>
                            <td style="padding: 0.75rem; color: #6B7280;">Gestionare sesiune</td>
                            <td style="padding: 0.75rem; color: #6B7280;">Sesiune</td>
                            <td style="padding: 0.75rem;">
                                <span class="panda-badge" style="background-color: #D1FAE5; color: #065F46;">Activ</span>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #E5E7EB;">
                            <td style="padding: 0.75rem;"><code style="background-color: #F3F4F6; padding: 0.25rem 0.5rem; border-radius: 0.25rem;">csrf_token</code></td>
                            <td style="padding: 0.75rem; color: #6B7280;">Protecție CSRF</td>
                            <td style="padding: 0.75rem; color: #6B7280;">24 ore</td>
                            <td style="padding: 0.75rem;">
                                <span class="panda-badge" style="background-color: #D1FAE5; color: #065F46;">Activ</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0.75rem;"><code style="background-color: #F3F4F6; padding: 0.25rem 0.5rem; border-radius: 0.25rem;">cookie_consent</code></td>
                            <td style="padding: 0.75rem; color: #6B7280;">Preferințe</td>
                            <td style="padding: 0.75rem; color: #6B7280;">1 an</td>
                            <td style="padding: 0.75rem;">
                                <span class="panda-badge" style="background-color: #D1FAE5; color: #065F46;">Activ</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Performance Cookies -->
        <div class="panda-card" style="border-top: 4px solid var(--panda-colors-primary);">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <div style="width: 3rem; height: 3rem; background: linear-gradient(135deg, #3B82F6, #2563EB); border-radius: var(--panda-radii-lg); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-chart-line" style="color: white; font-size: 1.25rem;"></i>
                </div>
                <div style="flex: 1;">
                    <h3 style="font-size: 1.5rem; font-weight: 700;">Cookie-uri de Performanță</h3>
                    <p style="color: #6B7280; font-size: 0.875rem;">Analiză și optimizare</p>
                </div>
                <span class="panda-badge" style="background-color: #DBEAFE; color: #1E40AF;">Opțional</span>
            </div>
            <div class="panda-grid panda-grid-cols-3" style="margin-top: 1.5rem;">
                <div style="background: linear-gradient(135deg, #EFF6FF, #DBEAFE); padding: 1rem; border-radius: var(--panda-radii-md); border: 2px solid #BFDBFE;">
                    <code style="font-weight: 700; color: var(--panda-colors-primary);">_ga</code>
                    <p style="font-size: 0.875rem; color: #6B7280; margin-top: 0.5rem;">Google Analytics</p>
                    <p style="font-size: 0.75rem; color: #9CA3AF; margin-top: 0.5rem;">⏱️ 2 ani</p>
                </div>
                <div style="background: linear-gradient(135deg, #EFF6FF, #DBEAFE); padding: 1rem; border-radius: var(--panda-radii-md); border: 2px solid #BFDBFE;">
                    <code style="font-weight: 700; color: var(--panda-colors-primary);">_gid</code>
                    <p style="font-size: 0.875rem; color: #6B7280; margin-top: 0.5rem;">Analytics ID</p>
                    <p style="font-size: 0.75rem; color: #9CA3AF; margin-top: 0.5rem;">⏱️ 24 ore</p>
                </div>
                <div style="background: linear-gradient(135deg, #EFF6FF, #DBEAFE); padding: 1rem; border-radius: var(--panda-radii-md); border: 2px solid #BFDBFE;">
                    <code style="font-weight: 700; color: var(--panda-colors-primary);">_gat</code>
                    <p style="font-size: 0.875rem; color: #6B7280; margin-top: 0.5rem;">Rate limiting</p>
                    <p style="font-size: 0.75rem; color: #9CA3AF; margin-top: 0.5rem;">⏱️ 1 minut</p>
                </div>
            </div>
        </div>

        <!-- Functionality & Marketing in grid -->
        <div class="panda-grid panda-grid-cols-2">
            <!-- Functionality Cookies -->
            <div class="panda-card" style="border-top: 4px solid var(--panda-colors-secondary);">
                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                    <div style="width: 2.5rem; height: 2.5rem; background: linear-gradient(135deg, #8B5CF6, #7C3AED); border-radius: var(--panda-radii-md); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-cog" style="color: white;"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 700;">Funcționalitate</h3>
                </div>
                <div class="panda-stack" style="margin-top: 1rem;">
                    <div style="background-color: #F5F3FF; padding: 0.75rem; border-radius: var(--panda-radii-sm); border-left: 3px solid #8B5CF6;">
                        <code style="font-size: 0.875rem; font-weight: 600;">language_pref</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Limbă • 1 an</p>
                    </div>
                    <div style="background-color: #F5F3FF; padding: 0.75rem; border-radius: var(--panda-radii-sm); border-left: 3px solid #8B5CF6;">
                        <code style="font-size: 0.875rem; font-weight: 600;">theme_mode</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Temă • 6 luni</p>
                    </div>
                </div>
            </div>

            <!-- Marketing Cookies -->
            <div class="panda-card" style="border-top: 4px solid var(--panda-colors-warning);">
                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                    <div style="width: 2.5rem; height: 2.5rem; background: linear-gradient(135deg, #F59E0B, #D97706); border-radius: var(--panda-radii-md); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-bullhorn" style="color: white;"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 700;">Marketing</h3>
                </div>
                <div class="panda-stack" style="margin-top: 1rem;">
                    <div style="background-color: #FFFBEB; padding: 0.75rem; border-radius: var(--panda-radii-sm); border-left: 3px solid #F59E0B;">
                        <code style="font-size: 0.875rem; font-weight: 600;">_fbp</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Facebook Pixel • 3 luni</p>
                    </div>
                    <div style="background-color: #FFFBEB; padding: 0.75rem; border-radius: var(--panda-radii-sm); border-left: 3px solid #F59E0B;">
                        <code style="font-size: 0.875rem; font-weight: 600;">ads_id</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Advertising • 1 an</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="panda-card" style="background: linear-gradient(135deg, #F3E8FF, #E0E7FF); text-align: center; margin-top: 3rem;">
            <div style="display: inline-flex; align-items: center; justify-content: center; width: 4rem; height: 4rem; background: linear-gradient(135deg, #8B5CF6, #3B82F6); border-radius: 9999px; margin-bottom: 1rem;">
                <i class="fas fa-sliders-h" style="color: white; font-size: 1.5rem;"></i>
            </div>
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">Gestionează Preferințele</h2>
            <p style="color: #6B7280; margin-bottom: 2rem; max-width: 36rem; margin-left: auto; margin-right: auto;">
                Control complet asupra cookie-urilor utilizate pe site
            </p>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
                <button class="panda-button" style="background: linear-gradient(135deg, #10B981, #059669); color: white;">
                    <i class="fas fa-check"></i>
                    Acceptă Toate
                </button>
                <button class="panda-button" style="background: linear-gradient(135deg, #3B82F6, #2563EB); color: white;">
                    <i class="fas fa-cog"></i>
                    Personalizează
                </button>
                <button class="panda-button" style="background: linear-gradient(135deg, #EF4444, #DC2626); color: white;">
                    <i class="fas fa-times"></i>
                    Respinge
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 style="font-size: 2.25rem; font-weight: 800; margin-top: 3rem; margin-bottom: 2rem;">Setări Browser</h2>
        <div class="panda-grid panda-grid-cols-4">
            <div class="panda-card" style="text-align: center;">
                <i class="fab fa-chrome" style="font-size: 4rem; color: #3B82F6; margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Chrome</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Setări → Privacy</p>
            </div>
            <div class="panda-card" style="text-align: center;">
                <i class="fab fa-firefox" style="font-size: 4rem; color: #F59E0B; margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Firefox</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Opțiuni → Privacy</p>
            </div>
            <div class="panda-card" style="text-align: center;">
                <i class="fab fa-safari" style="font-size: 4rem; color: #3B82F6; margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Safari</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Preferințe → Privacy</p>
            </div>
            <div class="panda-card" style="text-align: center;">
                <i class="fab fa-edge" style="font-size: 4rem; color: #0078D4; margin-bottom: 1rem;"></i>
                <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Edge</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="panda-card" style="border-left: 4px solid var(--panda-colors-warning); background: #FFFBEB; margin-top: 2rem;">
            <div style="display: flex; gap: 1rem;">
                <div style="width: 3rem; height: 3rem; background-color: #FEF3C7; border-radius: 9999px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--panda-colors-warning);"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Contactează-ne</h3>
                    <p style="color: #92400E;">
                        Pentru întrebări: 
                        <a href="mailto:privacy@example.com" style="font-weight: 700; color: var(--panda-colors-primary); text-decoration: none;">
                            privacy@example.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #1F2937, #111827); color: white; padding: 2.5rem 1rem; margin-top: 3rem;">
        <div class="panda-container" style="text-align: center;">
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">CookiePolicy - Panda CSS</p>
            <p style="color: #9CA3AF; margin-bottom: 0.5rem;">© 2024 Toate drepturile rezervate</p>
            <p style="font-size: 0.875rem; color: #6B7280;">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            style="position: fixed; bottom: 2rem; right: 2rem; width: 3.5rem; height: 3.5rem; background: linear-gradient(135deg, #8B5CF6, #3B82F6); color: white; border: none; border-radius: 9999px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; transition: transform 0.2s;">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
