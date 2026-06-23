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
      .p-32 { padding:20px !important; }
      .stack { display:block !important; width:100% !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#f2f2f2;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#f2f2f2;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="600" class="container" style="width:600px; background:#ffffff; border-radius:5px; overflow:hidden; border:1px solid #e0e0e0;">
          
          <!-- MVP Header -->
          <tr>
            <td style="padding:0; background:#ffffff; border-bottom:1px solid #e0e0e0;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:system-ui, sans-serif; font-size:32px; line-height:1.35; color:#212529; font-weight:700;">
                          <?php echo SITE_NAME; ?>
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
            <td class="p-32" style="padding:40px 32px;">
              
              <!-- MVP Mark (Highlight) -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="background:#fffbea; border:1px solid #ffd803; border-radius:5px; padding:16px 20px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:system-ui, sans-serif; font-size:16px; line-height:1.5; color:#212529; font-weight:600;">
                          ✓ Mesaj trimis cu succes
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- MVP Section -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="font-family:system-ui, sans-serif; font-size:14px; line-height:1.5; color:#6c757d; padding:0 0 12px 0;">
                    Destinatar
                  </td>
                </tr>
                <tr>
                  <td style="font-family:system-ui, sans-serif; font-size:36px; line-height:1.35; color:#212529; font-weight:700; padding:0 0 20px 0;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-family:system-ui, sans-serif; font-size:16px; line-height:1.5; color:#495057;">
                    Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- MVP Aside boxes -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 12px 0 0;">
                    <table role="presentation" width="100%" style="background:#f8f9fa; border:1px solid #dee2e6; border-radius:5px; padding:20px;">
                      <tr>
                        <td style="font-size:40px; line-height:1; padding:0 0 12px 0; text-align:center;">⚡</td>
                      </tr>
                      <tr>
                        <td style="font-family:system-ui, sans-serif; font-size:18px; line-height:1.35; color:#212529; font-weight:700; text-align:center; padding:0 0 8px 0;">
                          Răspuns rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:system-ui, sans-serif; font-size:14px; line-height:1.5; color:#6c757d; text-align:center;">
                          În maximum 24 ore
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 12px;">
                    <table role="presentation" width="100%" style="background:#f8f9fa; border:1px solid #dee2e6; border-radius:5px; padding:20px;">
                      <tr>
                        <td style="font-size:40px; line-height:1; padding:0 0 12px 0; text-align:center;">💼</td>
                      </tr>
                      <tr>
                        <td style="font-family:system-ui, sans-serif; font-size:18px; line-height:1.35; color:#212529; font-weight:700; text-align:center; padding:0 0 8px 0;">
                          Profesional
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:system-ui, sans-serif; font-size:14px; line-height:1.5; color:#6c757d; text-align:center;">
                          Echipă dedicată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- MVP Links (styled as buttons) -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td bgcolor="#1e88e5" style="background:#1e88e5; border-radius:5px; text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:12px 24px; font-family:system-ui, sans-serif; font-size:16px; line-height:1.5; color:#ffffff; font-weight:600;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:#ffffff; border:2px solid #1e88e5; border-radius:5px; text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:10px 22px; font-family:system-ui, sans-serif; font-size:16px; line-height:1.5; color:#1e88e5; font-weight:600;">
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

          <!-- MVP Footer -->
          <tr>
            <td style="background:#f8f9fa; border-top:1px solid #e0e0e0; padding:24px 32px; text-align:center;">
              <p style="font-family:system-ui, sans-serif; font-size:14px; line-height:1.5; color:#6c757d;">
                <strong style="color:#212529;"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#1e88e5;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#1e88e5;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:system-ui, sans-serif; font-size:12px; line-height:1.5; color:#adb5bd; margin-top:12px !important;">
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
