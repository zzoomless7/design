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
<body style="margin:0; padding:0; background:#f4f4f4;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#f4f4f4;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="600" class="container" style="width:600px; background:#ffffff; border-radius:2px; overflow:hidden;">
          
          <!-- Simple.css Header -->
          <tr>
            <td style="padding:0; background:#ffffff; border-bottom:4px solid #4a90e2;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Verdana', Geneva, sans-serif; font-size:32px; line-height:1.3; color:#212121; font-weight:700;">
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
              
              <!-- Notice -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="background:#e7f3ff; border:1px solid #4a90e2; padding:16px 20px;">
                    <span style="font-family:'Verdana', Geneva, sans-serif; font-size:16px; line-height:1.5; color:#1a5490; font-weight:600;">
                      ✓ Mesaj trimis cu succes
                    </span>
                  </td>
                </tr>
              </table>

              <!-- Main content -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="font-family:'Verdana', Geneva, sans-serif; font-size:14px; line-height:1.5; color:#666666; padding:0 0 12px 0;">
                    Destinatar
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Verdana', Geneva, sans-serif; font-size:28px; line-height:1.3; color:#212121; font-weight:700; padding:0 0 20px 0;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Verdana', Geneva, sans-serif; font-size:16px; line-height:1.6; color:#333333;">
                    Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- Info boxes -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 12px 0 0;">
                    <table role="presentation" width="100%" style="background:#f9f9f9; padding:20px; text-align:center;">
                      <tr>
                        <td style="font-size:40px; line-height:1; padding:0 0 12px 0;">⚡</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Verdana', Geneva, sans-serif; font-size:18px; line-height:1.3; color:#212121; font-weight:700; padding:0 0 8px 0;">
                          Răspuns rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Verdana', Geneva, sans-serif; font-size:14px; line-height:1.5; color:#666666;">
                          În maximum 24 ore
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 12px;">
                    <table role="presentation" width="100%" style="background:#f9f9f9; padding:20px; text-align:center;">
                      <tr>
                        <td style="font-size:40px; line-height:1; padding:0 0 12px 0;">💼</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Verdana', Geneva, sans-serif; font-size:18px; line-height:1.3; color:#212121; font-weight:700; padding:0 0 8px 0;">
                          Profesional
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Verdana', Geneva, sans-serif; font-size:14px; line-height:1.5; color:#666666;">
                          Echipă dedicată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td bgcolor="#4a90e2" style="background:#4a90e2; padding:12px 24px; text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; font-family:'Verdana', Geneva, sans-serif; font-size:16px; line-height:1.5; color:#ffffff; font-weight:700;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:#ffffff; border:2px solid #4a90e2; padding:10px 22px; text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; font-family:'Verdana', Geneva, sans-serif; font-size:16px; line-height:1.5; color:#4a90e2; font-weight:700;">
                            Email
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f9f9f9; border-top:1px solid #e0e0e0; padding:24px 32px; text-align:center;">
              <p style="font-family:'Verdana', Geneva, sans-serif; font-size:14px; line-height:1.5; color:#666666;">
                <strong style="color:#212121;"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#4a90e2;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#4a90e2;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:'Verdana', Geneva, sans-serif; font-size:12px; line-height:1.5; color:#999999; margin-top:12px !important;">
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
