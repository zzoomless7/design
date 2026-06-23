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
<body style="margin:0; padding:0; background:#e8f0f8;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#e8f0f8;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#ffffff; border-radius:0; overflow:hidden; box-shadow:0 4px 24px rgba(0,68,136,0.12);">
          
          <!-- Professional Header -->
          <tr>
            <td style="padding:0; background:#004488;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="padding:32px 40px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:26px; line-height:26px; color:#ffffff; font-weight:600;">
                          <?php echo SITE_NAME; ?>
                        </td>
                        <td align="right" style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:12px; line-height:12px; color:#99ccff; font-weight:400;">
                          <?php echo date('d.m.Y'); ?>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Status Bar -->
          <tr>
            <td style="background:#0066cc; padding:16px 40px;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:14px; line-height:14px; color:#ffffff; font-weight:600;">
                    <span style="display:inline-block; width:8px; height:8px; background:#00ff88; border-radius:50%; margin-right:8px;"></span>
                    STATUS: CONFIRMAT
                  </td>
                  <td align="right" style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:12px; line-height:12px; color:#99d6ff;">
                    ID: <?php echo strtoupper(substr(md5($name . time()), 0, 8)); ?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td class="p-32" style="padding:48px 40px;">
              
              <!-- Professional Greeting -->
              <table role="presentation" width="100%" style="margin:0 0 8px 0;">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:15px; line-height:15px; color:#666666; font-weight:400;">
                    Stimate/ă,
                  </td>
                </tr>
              </table>

              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:24px; line-height:32px; color:#004488; font-weight:600;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
              </table>

              <!-- Message -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:16px; line-height:26px; color:#333333;">
                    Vă confirmăm primirea mesajului dumneavoastră. Echipa noastră va analiza solicitarea și vă va contacta în cel mai scurt timp posibil pentru a vă oferi suportul necesar.
                  </td>
                </tr>
              </table>

              <!-- Info Grid -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0; border:2px solid #e0e8f0; border-radius:8px;">
                <tr>
                  <td style="padding:0;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="padding:24px; border-bottom:1px solid #e0e8f0; background:#f8fbff;">
                          <table role="presentation" width="100%">
                            <tr>
                              <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:12px; line-height:12px; color:#0066cc; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; padding:0 0 8px 0;">
                                Timp de răspuns estimat
                              </td>
                            </tr>
                            <tr>
                              <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:18px; line-height:18px; color:#004488; font-weight:600;">
                                Maximum 24 ore
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding:24px; background:#ffffff;">
                          <table role="presentation" width="100%">
                            <tr>
                              <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:12px; line-height:12px; color:#0066cc; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; padding:0 0 8px 0;">
                                Echipa de suport
                              </td>
                            </tr>
                            <tr>
                              <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:18px; line-height:18px; color:#004488; font-weight:600;">
                                Dedicată solicitării dumneavoastră
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Professional CTA -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:14px; line-height:22px; color:#666666; padding:0 0 16px 0;">
                    Pentru asistență urgentă, ne puteți contacta direct:
                  </td>
                </tr>
                <tr>
                  <td>
                    <table role="presentation">
                      <tr>
                        <td class="stack" align="center" bgcolor="#0066cc" style="background:#0066cc; border-radius:4px;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:16px 32px; font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:15px; line-height:15px; color:#ffffff; font-weight:600;">
                            Apelați <?php echo SITE_PHONE; ?>
                          </a>
                        </td>
                        <td style="width:16px;"></td>
                        <td class="stack" align="center" style="background:#ffffff; border:2px solid #0066cc; border-radius:4px;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:14px 30px; font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:15px; line-height:15px; color:#0066cc; font-weight:600;">
                            Trimiteți email
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Signature -->
              <table role="presentation" width="100%" style="border-top:2px solid #e0e8f0; padding-top:24px;">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:14px; line-height:22px; color:#333333;">
                    Cu stimă,<br>
                    <strong style="color:#004488;">Echipa <?php echo SITE_NAME; ?></strong>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f8fbff; border-top:1px solid #e0e8f0; padding:32px 40px;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:12px; line-height:18px; color:#666666;">
                    <strong><?php echo SITE_NAME; ?></strong><br>
                    Tel: <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#0066cc;"><?php echo SITE_PHONE; ?></a> | 
                    Email: <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#0066cc;"><?php echo SITE_EMAIL; ?></a>
                  </td>
                </tr>
                <tr>
                  <td style="padding-top:16px;">
                    <p style="font-family:'Segoe UI', 'Roboto', Arial, sans-serif; font-size:11px; line-height:16px; color:#999999;">
                      © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Toate drepturile rezervate. Acesta este un mesaj automat de confirmare.
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
