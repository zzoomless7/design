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
<body style="margin:0; padding:0; background:#ffffff;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#ffffff;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="600" class="container" style="width:600px; background:#ffffff; border-radius:0; overflow:hidden; border:1px solid #bbb;">
          
          <!-- Skeleton Header -->
          <tr>
            <td style="padding:0; background:#ffffff; border-bottom:1px solid #bbb;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:32px; line-height:1.25; color:#222222; font-weight:600;">
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
              
              <!-- Success message -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="background:#f0f9ff; border:1px solid #33c3f0; padding:16px 20px;">
                    <span style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px; line-height:1.6; color:#1eaedb; font-weight:600;">
                      ✓ Mesaj primit cu succes
                    </span>
                  </td>
                </tr>
              </table>

              <!-- Content -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#555555; padding:0 0 12px 0;">
                    Destinatar
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:36px; line-height:1.25; color:#222222; font-weight:600; padding:0 0 20px 0;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.6; color:#222222;">
                    Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- Simple Grid -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 12px 0 0;">
                    <table role="presentation" width="100%" style="border:1px solid #bbb; padding:20px; text-align:center;">
                      <tr>
                        <td style="font-size:40px; line-height:1; padding:0 0 12px 0;">⚡</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; line-height:1.25; color:#222222; font-weight:600; padding:0 0 8px 0;">
                          Răspuns rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#555555;">
                          În maximum 24 ore
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 12px;">
                    <table role="presentation" width="100%" style="border:1px solid #bbb; padding:20px; text-align:center;">
                      <tr>
                        <td style="font-size:40px; line-height:1; padding:0 0 12px 0;">💼</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; line-height:1.25; color:#222222; font-weight:600; padding:0 0 8px 0;">
                          Profesional
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#555555;">
                          Echipă dedicată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Skeleton Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td bgcolor="#33c3f0" style="background:#33c3f0; border:1px solid #33c3f0; padding:11px 30px; text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1; color:#ffffff; font-weight:400; text-transform:uppercase; letter-spacing:0.1rem;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:#ffffff; border:1px solid #33c3f0; padding:11px 30px; text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1; color:#33c3f0; font-weight:400; text-transform:uppercase; letter-spacing:0.1rem;">
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
            <td style="background:#ffffff; border-top:1px solid #bbb; padding:24px 32px; text-align:center;">
              <p style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.6; color:#555555;">
                <strong style="color:#222222;"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#33c3f0;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#33c3f0;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:'Raleway', 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:1.6; color:#999999; margin-top:12px !important;">
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
