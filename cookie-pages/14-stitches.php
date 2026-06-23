<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Cookie-uri - Stitches/Vanilla Extract</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Stitches-inspired CSS-in-JS approach with type-safe variants */
        :root {
            --colors-blue500: #3B82F6;
            --colors-purple500: #8B5CF6;
            --colors-green500: #10B981;
            --colors-orange500: #F59E0B;
            --colors-red500: #EF4444;
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --radii-sm: 0.375rem;
            --radii-md: 0.5rem;
            --radii-lg: 1rem;
            --radii-full: 9999px;
        }
        
        .stitches-box {
            box-sizing: border-box;
        }
        
        .stitches-flex {
            display: flex;
        }
        
        .stitches-container {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: var(--space-4);
            padding-right: var(--space-4);
        }
        
        .stitches-card {
            background: white;
            border-radius: var(--radii-lg);
            padding: var(--space-6);
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
            margin-bottom: var(--space-6);
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stitches-card:hover {
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            transform: translateY(-2px);
        }
        
        /* Variant system inspired by Stitches */
        .stitches-badge[data-variant="success"] {
            background-color: #D1FAE5;
            color: #065F46;
        }
        
        .stitches-badge[data-variant="info"] {
            background-color: #DBEAFE;
            color: #1E40AF;
        }
        
        .stitches-badge[data-variant="warning"] {
            background-color: #FEF3C7;
            color: #92400E;
        }
        
        .stitches-badge[data-variant="purple"] {
            background-color: #F3E8FF;
            color: #6B21A8;
        }
        
        .stitches-badge {
            display: inline-flex;
            align-items: center;
            padding: var(--space-1) var(--space-3);
            border-radius: var(--radii-md);
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .stitches-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: var(--space-2);
            padding: var(--space-3) var(--space-6);
            border-radius: var(--radii-md);
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            font-family: inherit;
        }
        
        .stitches-button[data-variant="primary"] {
            background: linear-gradient(135deg, var(--colors-blue500), var(--colors-purple500));
            color: white;
        }
        
        .stitches-button[data-variant="success"] {
            background: var(--colors-green500);
            color: white;
        }
        
        .stitches-button[data-variant="danger"] {
            background: var(--colors-red500);
            color: white;
        }
        
        .stitches-button:hover {
            transform: scale(1.05);
        }
        
        .stitches-button:active {
            transform: scale(0.95);
        }
        
        .stitches-stack {
            display: flex;
            flex-direction: column;
            gap: var(--space-4);
        }
        
        .stitches-grid {
            display: grid;
            gap: var(--space-6);
        }
        
        @media (min-width: 768px) {
            .stitches-grid[data-cols="2"] {
                grid-template-columns: repeat(2, 1fr);
            }
            .stitches-grid[data-cols="3"] {
                grid-template-columns: repeat(3, 1fr);
            }
            .stitches-grid[data-cols="4"] {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>
<body style="background: linear-gradient(to bottom, #F9FAFB, #F3F4F6); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    <!-- Header -->
    <header style="background: white; border-bottom: 1px solid #E5E7EB; position: sticky; top: 0; z-index: 50;">
        <div class="stitches-container stitches-flex" style="align-items: center; justify-content: space-between; height: 4rem;">
            <div class="stitches-flex" style="align-items: center; gap: var(--space-3);">
                <div style="width: 2.5rem; height: 2.5rem; background: linear-gradient(135deg, #6366F1, #8B5CF6); border-radius: var(--radii-lg); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cookie-bite" style="color: white;"></i>
                </div>
                <span style="font-size: 1.5rem; font-weight: 700;">CookiePolicy</span>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section style="background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 50%, #EC4899 100%); padding: 5rem 1rem; text-align: center; color: white;">
        <div class="stitches-container">
            <div style="font-size: 5rem; margin-bottom: 1.5rem;">🍪</div>
            <h1 style="font-size: 3.75rem; font-weight: 800; margin-bottom: 1rem; letter-spacing: -0.025em;">Politica de Cookie-uri</h1>
            <p style="font-size: 1.25rem; opacity: 0.95; max-width: 48rem; margin: 0 auto;">
                Construit cu Stitches & Vanilla Extract - Type-safe styling at build time
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="stitches-container" style="padding-top: var(--space-8); padding-bottom: var(--space-8);">
        <!-- Info Box -->
        <div class="stitches-card" style="border-left: 4px solid var(--colors-blue500); background: linear-gradient(135deg, #EFF6FF, #E0E7FF);">
            <div class="stitches-flex" style="gap: var(--space-4);">
                <div style="flex-shrink: 0;">
                    <div style="width: 3rem; height: 3rem; background-color: #BFDBFE; border-radius: var(--radii-full); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-info-circle" style="font-size: 1.5rem; color: var(--colors-blue500);"></i>
                    </div>
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: var(--space-2); color: #1E3A8A;">Ce sunt cookie-urile?</h3>
                    <p style="color: #1E40AF; line-height: 1.6;">
                        Cookie-urile sunt fișiere text mici. Stitches și Vanilla Extract oferă CSS-in-JS type-safe 
                        cu performanță optimă și coliziune zero a numelor de clase.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cookie Categories -->
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-top: 3rem; margin-bottom: 2rem;">Categorii de Cookie-uri</h2>

        <!-- Essential Cookies -->
        <div class="stitches-card" style="border-top: 4px solid var(--colors-green500);">
            <div class="stitches-flex" style="align-items: center; justify-content: space-between; margin-bottom: var(--space-4);">
                <div class="stitches-flex" style="align-items: center; gap: var(--space-3);">
                    <div style="width: 3rem; height: 3rem; background: linear-gradient(135deg, #10B981, #059669); border-radius: var(--radii-md); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-shield-alt" style="color: white; font-size: 1.25rem;"></i>
                    </div>
                    <div>
                        <h3 style="font-size: 1.5rem; font-weight: 700;">Cookie-uri Esențiale</h3>
                        <p style="font-size: 0.875rem; color: #6B7280;">Strict necesare</p>
                    </div>
                </div>
                <span class="stitches-badge" data-variant="success">Obligatorii</span>
            </div>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead style="background-color: #F9FAFB;">
                        <tr>
                            <th style="padding: var(--space-3); text-align: left; font-weight: 600; border-bottom: 2px solid #E5E7EB;">Cookie</th>
                            <th style="padding: var(--space-3); text-align: left; font-weight: 600; border-bottom: 2px solid #E5E7EB;">Scop</th>
                            <th style="padding: var(--space-3); text-align: left; font-weight: 600; border-bottom: 2px solid #E5E7EB;">Durată</th>
                            <th style="padding: var(--space-3); text-align: left; font-weight: 600; border-bottom: 2px solid #E5E7EB;">Tip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #E5E7EB;">
                            <td style="padding: var(--space-3);"><code style="background: #F3F4F6; padding: 0.25rem 0.5rem; border-radius: var(--radii-sm);">session_id</code></td>
                            <td style="padding: var(--space-3); color: #6B7280;">Gestionare sesiune utilizator</td>
                            <td style="padding: var(--space-3); color: #6B7280;">Sesiune</td>
                            <td style="padding: var(--space-3);">
                                <span class="stitches-badge" data-variant="success">First-party</span>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid #E5E7EB;">
                            <td style="padding: var(--space-3);"><code style="background: #F3F4F6; padding: 0.25rem 0.5rem; border-radius: var(--radii-sm);">csrf_token</code></td>
                            <td style="padding: var(--space-3); color: #6B7280;">Protecție securitate CSRF</td>
                            <td style="padding: var(--space-3); color: #6B7280;">24 ore</td>
                            <td style="padding: var(--space-3);">
                                <span class="stitches-badge" data-variant="success">First-party</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: var(--space-3);"><code style="background: #F3F4F6; padding: 0.25rem 0.5rem; border-radius: var(--radii-sm);">cookie_consent</code></td>
                            <td style="padding: var(--space-3); color: #6B7280;">Preferințe cookie-uri</td>
                            <td style="padding: var(--space-3); color: #6B7280;">1 an</td>
                            <td style="padding: var(--space-3);">
                                <span class="stitches-badge" data-variant="success">First-party</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Performance & Functionality Grid -->
        <div class="stitches-grid" data-cols="2">
            <!-- Performance Cookies -->
            <div class="stitches-card" style="border-top: 4px solid var(--colors-blue500);">
                <div class="stitches-flex" style="align-items: center; gap: var(--space-3); margin-bottom: var(--space-4);">
                    <div style="width: 2.5rem; height: 2.5rem; background: var(--colors-blue500); border-radius: var(--radii-md); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-chart-line" style="color: white;"></i>
                    </div>
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: 700;">Performanță</h3>
                        <span class="stitches-badge" data-variant="info">Opțional</span>
                    </div>
                </div>
                <div class="stitches-stack" style="gap: var(--space-3);">
                    <div style="background: #EFF6FF; padding: var(--space-3); border-radius: var(--radii-sm); border-left: 3px solid var(--colors-blue500);">
                        <code style="font-weight: 600;">_ga</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Analytics • 2 ani</p>
                    </div>
                    <div style="background: #EFF6FF; padding: var(--space-3); border-radius: var(--radii-sm); border-left: 3px solid var(--colors-blue500);">
                        <code style="font-weight: 600;">_gid</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Session ID • 24h</p>
                    </div>
                    <div style="background: #EFF6FF; padding: var(--space-3); border-radius: var(--radii-sm); border-left: 3px solid var(--colors-blue500);">
                        <code style="font-weight: 600;">_gat</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Rate limit • 1 min</p>
                    </div>
                </div>
            </div>

            <!-- Functionality Cookies -->
            <div class="stitches-card" style="border-top: 4px solid var(--colors-purple500);">
                <div class="stitches-flex" style="align-items: center; gap: var(--space-3); margin-bottom: var(--space-4);">
                    <div style="width: 2.5rem; height: 2.5rem; background: var(--colors-purple500); border-radius: var(--radii-md); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-cog" style="color: white;"></i>
                    </div>
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: 700;">Funcționalitate</h3>
                        <span class="stitches-badge" data-variant="purple">Opțional</span>
                    </div>
                </div>
                <div class="stitches-stack" style="gap: var(--space-3);">
                    <div style="background: #F5F3FF; padding: var(--space-3); border-radius: var(--radii-sm); border-left: 3px solid var(--colors-purple500);">
                        <code style="font-weight: 600;">language_pref</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Limbă • 1 an</p>
                    </div>
                    <div style="background: #F5F3FF; padding: var(--space-3); border-radius: var(--radii-sm); border-left: 3px solid var(--colors-purple500);">
                        <code style="font-weight: 600;">theme_mode</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Temă • 6 luni</p>
                    </div>
                    <div style="background: #F5F3FF; padding: var(--space-3); border-radius: var(--radii-sm); border-left: 3px solid var(--colors-purple500);">
                        <code style="font-weight: 600;">font_size</code>
                        <p style="font-size: 0.75rem; color: #6B7280; margin-top: 0.25rem;">Font • 1 an</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marketing Cookies -->
        <div class="stitches-card" style="border-top: 4px solid var(--colors-orange500);">
            <div class="stitches-flex" style="align-items: center; gap: var(--space-3); margin-bottom: var(--space-4);">
                <div style="width: 3rem; height: 3rem; background: linear-gradient(135deg, #F59E0B, #D97706); border-radius: var(--radii-md); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-bullhorn" style="color: white; font-size: 1.25rem;"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 700;">Cookie-uri de Marketing</h3>
                    <span class="stitches-badge" data-variant="warning">Opțional</span>
                </div>
            </div>
            <div class="stitches-grid" data-cols="2">
                <div style="background: linear-gradient(135deg, #FFFBEB, #FEF3C7); padding: var(--space-4); border-radius: var(--radii-md); border: 2px solid #FDE68A;">
                    <div class="stitches-flex" style="align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                        <i class="fab fa-facebook" style="font-size: 2rem; color: #1877F2;"></i>
                        <code style="font-weight: 700; font-size: 1.125rem;">_fbp</code>
                    </div>
                    <p style="font-size: 0.875rem; color: #78350F; margin-bottom: var(--space-2);">Facebook Pixel pentru tracking</p>
                    <span style="font-size: 0.75rem; color: #92400E;">📅 3 luni</span>
                </div>
                <div style="background: linear-gradient(135deg, #FFFBEB, #FEF3C7); padding: var(--space-4); border-radius: var(--radii-md); border: 2px solid #FDE68A;">
                    <div class="stitches-flex" style="align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                        <i class="fas fa-ad" style="font-size: 2rem; color: var(--colors-orange500);"></i>
                        <code style="font-weight: 700; font-size: 1.125rem;">ads_id</code>
                    </div>
                    <p style="font-size: 0.875rem; color: #78350F; margin-bottom: var(--space-2);">Identificare publicitate</p>
                    <span style="font-size: 0.75rem; color: #92400E;">📅 1 an</span>
                </div>
            </div>
        </div>

        <!-- Cookie Management -->
        <div class="stitches-card" style="background: linear-gradient(135deg, #F5F3FF, #EDE9FE); text-align: center; margin-top: 3rem;">
            <div style="display: inline-flex; align-items: center; justify-content: center; width: 4rem; height: 4rem; background: linear-gradient(135deg, #6366F1, #8B5CF6); border-radius: var(--radii-full); margin-bottom: var(--space-4);">
                <i class="fas fa-sliders-h" style="color: white; font-size: 1.5rem;"></i>
            </div>
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: var(--space-3);">Gestionează Preferințele</h2>
            <p style="color: #6B7280; margin-bottom: 2rem; max-width: 36rem; margin-left: auto; margin-right: auto;">
                Type-safe control cu Stitches & Vanilla Extract
            </p>
            <div class="stitches-flex" style="flex-wrap: wrap; justify-content: center; gap: var(--space-4);">
                <button class="stitches-button" data-variant="success">
                    <i class="fas fa-check"></i>
                    Acceptă Toate
                </button>
                <button class="stitches-button" data-variant="primary">
                    <i class="fas fa-cog"></i>
                    Personalizează
                </button>
                <button class="stitches-button" data-variant="danger">
                    <i class="fas fa-times"></i>
                    Respinge
                </button>
            </div>
        </div>

        <!-- Browser Settings -->
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-top: 3rem; margin-bottom: 2rem;">Setări Browser</h2>
        <div class="stitches-grid" data-cols="4">
            <div class="stitches-card" style="text-align: center;">
                <i class="fab fa-chrome" style="font-size: 4rem; color: var(--colors-blue500); margin-bottom: var(--space-3);"></i>
                <h4 style="font-weight: 700; margin-bottom: var(--space-2);">Chrome</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Setări → Privacy</p>
            </div>
            <div class="stitches-card" style="text-align: center;">
                <i class="fab fa-firefox" style="font-size: 4rem; color: var(--colors-orange500); margin-bottom: var(--space-3);"></i>
                <h4 style="font-weight: 700; margin-bottom: var(--space-2);">Firefox</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Opțiuni → Privacy</p>
            </div>
            <div class="stitches-card" style="text-align: center;">
                <i class="fab fa-safari" style="font-size: 4rem; color: #3B82F6; margin-bottom: var(--space-3);"></i>
                <h4 style="font-weight: 700; margin-bottom: var(--space-2);">Safari</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Preferințe → Privacy</p>
            </div>
            <div class="stitches-card" style="text-align: center;">
                <i class="fab fa-edge" style="font-size: 4rem; color: #0078D4; margin-bottom: var(--space-3);"></i>
                <h4 style="font-weight: 700; margin-bottom: var(--space-2);">Edge</h4>
                <p style="font-size: 0.875rem; color: #6B7280;">Setări → Cookies</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="stitches-card" style="border-left: 4px solid var(--colors-orange500); background: #FFFBEB;">
            <div class="stitches-flex" style="gap: var(--space-4);">
                <div style="width: 3rem; height: 3rem; background: #FEF3C7; border-radius: var(--radii-full); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--colors-orange500);"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: var(--space-2);">Contactează-ne</h3>
                    <p style="color: #78350F;">
                        Pentru întrebări: 
                        <a href="mailto:privacy@example.com" style="font-weight: 700; color: var(--colors-blue500); text-decoration: none;">
                            privacy@example.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #1F2937, #111827); color: white; padding: 2.5rem 1rem;">
        <div class="stitches-container" style="text-align: center;">
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">CookiePolicy - Stitches & Vanilla Extract</p>
            <p style="color: #9CA3AF; margin-bottom: 0.5rem;">© 2024 Toate drepturile rezervate</p>
            <p style="font-size: 0.875rem; color: #6B7280;">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            style="position: fixed; bottom: 2rem; right: 2rem; width: 3.5rem; height: 3.5rem; background: linear-gradient(135deg, #6366F1, #8B5CF6); color: white; border: none; border-radius: var(--radii-full); box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1); cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; transition: transform 0.2s;">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
