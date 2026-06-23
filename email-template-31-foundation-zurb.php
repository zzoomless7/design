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
      .p-32 { padding:16px !important; }
      .stack { display:block !important; width:100% !important; margin-bottom:16px !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#f3f3f3;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#f3f3f3;">
    <tr>
      <td align="center" style="padding:32px 16px;">
        <table role="presentation" width="600" class="container" style="width:600px; background:#fefefe; border-radius:3px; overflow:hidden;">
          
          <!-- Foundation Header -->
          <tr>
            <td style="padding:0; background:#1779ba;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:32px; line-height:1.3; color:#fefefe; font-weight:700;">
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
            <td class="p-32" style="padding:32px;">
              
              <!-- Foundation Callout -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="background:#d7ecfa; border:1px solid #1779ba; border-left:4px solid #1779ba; border-radius:3px; padding:16px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.6; color:#0a0a0a; font-weight:600;">
                          ✓ Mesaj primit cu succes
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Foundation Panel -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0; background:#f2f2f2; border:1px solid #d0d0d0; border-radius:3px; padding:24px;">
                <tr>
                  <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#8a8a8a; padding:0 0 8px 0;">
                    Destinatar
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:28px; line-height:1.3; color:#0a0a0a; font-weight:700; padding:0 0 16px 0;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.6; color:#0a0a0a;">
                    Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- Foundation Grid -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 8px 0 0;">
                    <table role="presentation" width="100%" style="background:#f2f2f2; border:1px solid #d0d0d0; border-radius:3px; padding:20px; text-align:center;">
                      <tr>
                        <td style="font-size:48px; line-height:1; padding:0 0 16px 0;">⚡</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; line-height:1.3; color:#0a0a0a; font-weight:700; padding:0 0 8px 0;">
                          Răspuns rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#8a8a8a;">
                          În max 24h
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 8px;">
                    <table role="presentation" width="100%" style="background:#f2f2f2; border:1px solid #d0d0d0; border-radius:3px; padding:20px; text-align:center;">
                      <tr>
                        <td style="font-size:48px; line-height:1; padding:0 0 16px 0;">💼</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; line-height:1.3; color:#0a0a0a; font-weight:700; padding:0 0 8px 0;">
                          Profesional
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#8a8a8a;">
                          Echipă dedicată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Foundation Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td bgcolor="#1779ba" style="background:#1779ba; border-radius:3px; text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:12px 24px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.3; color:#fefefe; font-weight:400;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:#fefefe; border:2px solid #1779ba; border-radius:3px; text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:10px 22px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.3; color:#1779ba; font-weight:400;">
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

          <!-- Foundation Footer -->
          <tr>
            <td style="background:#f3f3f3; padding:24px 32px; text-align:center;">
              <p style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#8a8a8a;">
                <strong style="color:#0a0a0a;"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#1779ba;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#1779ba;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:1.6; color:#cacaca; margin-top:12px !important;">
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
