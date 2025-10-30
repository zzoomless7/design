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
      .stack { display:block !important; width:100% !important; margin-bottom:16px !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#000000;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#000000;">
    <tr>
      <td align="center" style="padding:48px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#18181b; border-radius:16px; overflow:hidden; border:1px solid #27272a; box-shadow:0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);">
          
          <!-- NextUI Header -->
          <tr>
            <td style="padding:0; background:linear-gradient(135deg, #0070f3 0%, #7928ca 100%);">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:48px 32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:32px; line-height:1.2; color:#ffffff; font-weight:700; letter-spacing:-0.5px;">
                          <?php echo SITE_NAME; ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top:12px;">
                          <table role="presentation">
                            <tr>
                              <td style="background:rgba(255,255,255,0.15); backdrop-filter:blur(10px); border-radius:12px; padding:6px 14px; border:1px solid rgba(255,255,255,0.2);">
                                <span style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:12px; line-height:1.5; color:#ffffff; font-weight:500;">
                                  Message Confirmation
                                </span>
                              </td>
                            </tr>
                          </table>
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
            <td class="p-32" style="padding:48px 32px;">
              
              <!-- NextUI Alert -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="background:rgba(23,201,100,0.15); border:1px solid rgba(23,201,100,0.3); border-radius:14px; padding:18px 20px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="width:24px; vertical-align:top;">
                          <div style="width:20px; height:20px; background:#17c964; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                            <span style="font-size:12px; line-height:12px; color:#ffffff;">✓</span>
                          </div>
                        </td>
                        <td style="padding-left:16px; vertical-align:middle;">
                          <p style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.5; color:#ecedee; font-weight:600;">
                            Mesaj trimis cu succes
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- User Display -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.5; color:#71717a; font-weight:500; text-transform:uppercase; letter-spacing:0.5px; padding:0 0 12px 0;">
                    Destinatar
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:36px; line-height:1.2; color:#ffffff; font-weight:700; letter-spacing:-0.5px; padding:0 0 16px 0;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.5; color:#a1a1aa;">
                    Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- NextUI Cards -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 12px 0 0;">
                    <table role="presentation" width="100%" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); border-radius:14px; padding:24px; backdrop-filter:blur(10px);">
                      <tr>
                        <td>
                          <div style="width:56px; height:56px; background:linear-gradient(135deg, #0070f3 0%, #7928ca 100%); border-radius:12px; display:flex; align-items:center; justify-content:center; margin:0 0 16px 0;">
                            <span style="font-size:28px; line-height:28px; color:#ffffff;">⚡</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:20px; line-height:1.2; color:#ffffff; font-weight:700; padding:0 0 8px 0;">
                          Rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.5; color:#a1a1aa;">
                          În max 24h
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 12px;">
                    <table role="presentation" width="100%" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); border-radius:14px; padding:24px; backdrop-filter:blur(10px);">
                      <tr>
                        <td>
                          <div style="width:56px; height:56px; background:linear-gradient(135deg, #17c964 0%, #12a150 100%); border-radius:12px; display:flex; align-items:center; justify-content:center; margin:0 0 16px 0;">
                            <span style="font-size:28px; line-height:28px; color:#ffffff;">✓</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:20px; line-height:1.2; color:#ffffff; font-weight:700; padding:0 0 8px 0;">
                          Profesional
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.5; color:#a1a1aa;">
                          Echipă dedicată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- NextUI Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:linear-gradient(135deg, #0070f3 0%, #7928ca 100%); border-radius:12px; box-shadow:0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:14px 28px; font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.5; color:#ffffff; font-weight:600;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:rgba(255,255,255,0.05); border:2px solid rgba(255,255,255,0.2); border-radius:12px; text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:12px 26px; font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:16px; line-height:1.5; color:#ecedee; font-weight:600;">
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

          <!-- NextUI Footer -->
          <tr>
            <td style="background:rgba(255,255,255,0.03); border-top:1px solid rgba(255,255,255,0.1); padding:32px; text-align:center;">
              <p style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:14px; line-height:1.5; color:#a1a1aa;">
                <strong style="color:#ffffff;"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#0070f3;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#0070f3;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; font-size:12px; line-height:1.5; color:#71717a; margin-top:12px !important;">
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
