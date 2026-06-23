<!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="x-apple-disable-message-reformatting">
  <title>Confirmare mesaj</title>
  <style>
    html,body { margin:0 !important; padding:0 !important; }
    table { border-collapse:collapse; border-spacing:0; }
    img { display:block; border:0; line-height:0; outline:none; text-decoration:none; }
    p { margin:0 !important; }
    a { text-decoration:none; }
    @media (max-width:600px){
      .container { width:100% !important; }
      .p-8 { padding:32px !important; }
      .stack { display:block !important; width:100% !important; margin-bottom:16px !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#f3f4f6;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#f3f4f6;">
    <tr>
      <td align="center" style="padding:48px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);">
          
          <!-- Tailwind Header -->
          <tr>
            <td style="padding:0; background:linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-8" style="padding:48px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:32px; line-height:1; color:#ffffff; font-weight:800; letter-spacing:-0.025em;">
                          <?php echo SITE_NAME; ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top:8px;">
                          <span style="display:inline-block; padding:4px 12px; background:rgba(255,255,255,0.2); backdrop-filter:blur(10px); border-radius:9999px; font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:12px; line-height:1; color:#ffffff; font-weight:500;">
                            Confirmation Email
                          </span>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td class="p-8" style="padding:48px;">
              
              <!-- Tailwind Alert -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="background:#d1fae5; border:1px solid #6ee7b7; border-radius:8px; padding:16px 20px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="width:24px; vertical-align:top;">
                          <div style="width:20px; height:20px; background:#10b981; border-radius:9999px; display:flex; align-items:center; justify-content:center;">
                            <span style="font-size:12px; line-height:12px; color:#ffffff;">✓</span>
                          </div>
                        </td>
                        <td style="padding-left:12px; vertical-align:middle;">
                          <p style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:20px; color:#047857; font-weight:600;">
                            Mesaj trimis cu succes
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Name Badge -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:1; color:#6b7280; font-weight:500; text-transform:uppercase; letter-spacing:0.05em; padding:0 0 12px 0;">
                    Salutare
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:36px; line-height:1; color:#111827; font-weight:800; letter-spacing:-0.025em;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
              </table>

              <!-- Message -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:16px; line-height:28px; color:#4b5563;">
                    Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil cu un răspuns personalizat.
                  </td>
                </tr>
              </table>

              <!-- Tailwind Grid Cards -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 8px 0 0;">
                    <table role="presentation" width="100%" style="background:#f9fafb; border:1px solid #e5e7eb; border-radius:12px; padding:24px;">
                      <tr>
                        <td style="font-size:32px; line-height:1; padding:0 0 16px 0;">⚡</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:18px; line-height:1; color:#111827; font-weight:700; padding:0 0 8px 0;">
                          Rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:20px; color:#6b7280;">
                          Răspuns în max 24h
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 8px;">
                    <table role="presentation" width="100%" style="background:#f9fafb; border:1px solid #e5e7eb; border-radius:12px; padding:24px;">
                      <tr>
                        <td style="font-size:32px; line-height:1; padding:0 0 16px 0;">🎯</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:18px; line-height:1; color:#111827; font-weight:700; padding:0 0 8px 0;">
                          Dedicat
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:20px; color:#6b7280;">
                          Echipă specializată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Tailwind Buttons -->
              <table role="presentation" width="100%">
                <tr>
                  <td class="stack" style="width:50%; padding:0 8px 0 0;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="background:linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%); border-radius:8px; box-shadow:0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05); text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:block; padding:14px 24px; font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:1; color:#ffffff; font-weight:600;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 8px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="background:#ffffff; border:2px solid #e5e7eb; border-radius:8px; box-shadow:0 1px 2px 0 rgba(0,0,0,0.05); text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:block; padding:12px 22px; font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:1; color:#374151; font-weight:600;">
                            Trimite email
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Tailwind Footer -->
          <tr>
            <td style="background:#f9fafb; border-top:1px solid #e5e7eb; padding:32px 48px; text-align:center;">
              <p style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:14px; line-height:24px; color:#6b7280;">
                <strong style="color:#111827;"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#3b82f6;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#3b82f6;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; font-size:12px; line-height:20px; color:#9ca3af; margin-top:12px !important;">
                © <?php echo date('Y'); ?> Toate drepturile rezervate
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
