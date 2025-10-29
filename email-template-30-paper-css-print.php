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
      .p-40 { padding:24px !important; }
      .stack { display:block !important; width:100% !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#f5f5f5;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#f5f5f5;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#ffffff; border-radius:0; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
          
          <!-- Paper Header -->
          <tr>
            <td style="padding:0; background:#ffffff; border-bottom:3px solid #333333;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-40" style="padding:48px 56px 40px 56px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Courier New', 'Courier', monospace; font-size:32px; line-height:32px; color:#333333; font-weight:700; text-transform:uppercase; letter-spacing:2px;">
                          <?php echo SITE_NAME; ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding-top:12px;">
                          <span style="font-family:'Courier New', 'Courier', monospace; font-size:12px; line-height:12px; color:#666666; font-weight:400;">
                            Document No. <?php echo date('Ymd') . '-' . substr(md5($name), 0, 6); ?>
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
            <td class="p-40" style="padding:56px;">
              
              <!-- Paper Stamp -->
              <table role="presentation" align="center" style="margin:0 auto 40px auto;">
                <tr>
                  <td style="border:3px solid #32cd32; border-radius:50%; padding:20px;">
                    <table role="presentation">
                      <tr>
                        <td style="text-align:center;">
                          <p style="font-family:'Courier New', 'Courier', monospace; font-size:12px; line-height:12px; color:#32cd32; font-weight:700; text-transform:uppercase; margin:0 0 8px 0 !important;">
                            Confirmed
                          </p>
                          <p style="font-size:32px; line-height:32px; margin:0 0 8px 0 !important;">✓</p>
                          <p style="font-family:'Courier New', 'Courier', monospace; font-size:10px; line-height:10px; color:#32cd32; font-weight:400;">
                            <?php echo date('Y.m.d'); ?>
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Document Header -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0; border-top:2px solid #333333; border-bottom:2px solid #333333; padding:16px 0;">
                <tr>
                  <td style="font-family:'Courier New', 'Courier', monospace; font-size:14px; line-height:14px; color:#666666; text-transform:uppercase; padding:0 0 8px 0;">
                    To:
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Courier New', 'Courier', monospace; font-size:24px; line-height:32px; color:#333333; font-weight:700;">
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                  </td>
                </tr>
              </table>

              <!-- Document Body -->
              <table role="presentation" width="100%" style="margin:0 0 40px 0;">
                <tr>
                  <td style="font-family:'Courier New', 'Courier', monospace; font-size:14px; line-height:14px; color:#666666; text-transform:uppercase; padding:0 0 16px 0;">
                    Subject: Message Confirmation
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Times New Roman', 'Times', serif; font-size:16px; line-height:28px; color:#333333;">
                    Respectate domn/doamnă,
                    <br><br>
                    Prin prezenta vă confirmăm primirea mesajului dumneavoastră în data de <?php echo date('d.m.Y'); ?>. Solicitarea a fost înregistrată și va fi procesată de echipa noastră în cel mai scurt timp posibil.
                    <br><br>
                    Vă vom contacta în maximum 24 de ore cu un răspuns detaliat.
                  </td>
                </tr>
              </table>

              <!-- Paper Grid -->
              <table role="presentation" width="100%" style="margin:0 0 40px 0; border:1px solid #cccccc;">
                <tr>
                  <td style="width:50%; padding:20px; border-right:1px solid #cccccc; border-bottom:1px solid #cccccc; vertical-align:top;">
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:12px; line-height:12px; color:#666666; text-transform:uppercase; margin:0 0 12px 0 !important;">
                      Response Time
                    </p>
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:20px; line-height:20px; color:#333333; font-weight:700;">
                      &lt; 24 HOURS
                    </p>
                  </td>
                  <td style="width:50%; padding:20px; border-bottom:1px solid #cccccc; vertical-align:top;">
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:12px; line-height:12px; color:#666666; text-transform:uppercase; margin:0 0 12px 0 !important;">
                      Priority Level
                    </p>
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:20px; line-height:20px; color:#333333; font-weight:700;">
                      HIGH
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width:50%; padding:20px; border-right:1px solid #cccccc; vertical-align:top;">
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:12px; line-height:12px; color:#666666; text-transform:uppercase; margin:0 0 12px 0 !important;">
                      Contact Phone
                    </p>
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:16px; line-height:16px; color:#333333;">
                      <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#333333;"><?php echo SITE_PHONE; ?></a>
                    </p>
                  </td>
                  <td style="width:50%; padding:20px; vertical-align:top;">
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:12px; line-height:12px; color:#666666; text-transform:uppercase; margin:0 0 12px 0 !important;">
                      Contact Email
                    </p>
                    <p style="font-family:'Courier New', 'Courier', monospace; font-size:16px; line-height:16px; color:#333333;">
                      <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#333333;"><?php echo SITE_EMAIL; ?></a>
                    </p>
                  </td>
                </tr>
              </table>

              <!-- Signature -->
              <table role="presentation" width="100%" style="margin:40px 0 0 0; border-top:1px solid #cccccc; padding-top:24px;">
                <tr>
                  <td style="font-family:'Courier New', 'Courier', monospace; font-size:14px; line-height:24px; color:#333333;">
                    Cu respect,
                    <br><br>
                    <strong><?php echo SITE_NAME; ?></strong>
                    <br>
                    Customer Service Department
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Paper Footer -->
          <tr>
            <td style="background:#f9f9f9; border-top:3px solid #333333; padding:32px 56px; text-align:center;">
              <p style="font-family:'Courier New', 'Courier', monospace; font-size:11px; line-height:20px; color:#666666;">
                <?php echo SITE_NAME; ?> | <?php echo SITE_PHONE; ?> | <?php echo SITE_EMAIL; ?>
              </p>
              <p style="font-family:'Courier New', 'Courier', monospace; font-size:10px; line-height:18px; color:#999999; margin-top:12px !important;">
                Document generated on <?php echo date('F j, Y \a\t g:i A'); ?> | © <?php echo date('Y'); ?> All Rights Reserved
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
