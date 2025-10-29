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
  <meta name="color-scheme" content="light dark">
</head>
<body style="margin:0; padding:0; background:linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#667eea;">
    <tr>
      <td align="center" style="padding:48px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#ffffff; border-radius:24px; overflow:hidden; box-shadow:0 20px 60px rgba(0,0,0,0.3);">
          
          <!-- Vibrant Header with Animated Gradient -->
          <tr>
            <td style="padding:0; background:linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);">
              <table role="presentation" width="100%">
                <tr>
                  <td style="padding:48px 32px; text-align:center;">
                    <table role="presentation" align="center">
                      <tr>
                        <td style="background:rgba(255,255,255,0.2); backdrop-filter:blur(10px); border-radius:16px; padding:20px 32px; border:1px solid rgba(255,255,255,0.3);">
                          <span style="font-family:'SF Pro Display', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:28px; line-height:28px; color:#ffffff; font-weight:700; letter-spacing:-0.5px;">
                            <?php echo SITE_NAME; ?>
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
            <td class="p-32" style="padding:48px 32px;">
              
              <!-- Success Badge -->
              <table role="presentation" align="center" style="margin:0 auto 32px auto;">
                <tr>
                  <td style="background:linear-gradient(135deg, #667eea 0%, #f093fb 100%); border-radius:50px; padding:16px 32px; box-shadow:0 8px 24px rgba(102,126,234,0.3);">
                    <span style="font-family:'SF Pro Display', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:16px; line-height:16px; color:#ffffff; font-weight:700;">
                      ✨ Trimis cu succes!
                    </span>
                  </td>
                </tr>
              </table>

              <!-- Greeting -->
              <table role="presentation" width="100%" style="margin:0 0 16px 0;">
                <tr>
                  <td style="font-family:'SF Pro Display', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:32px; line-height:40px; color:#1a1a1a; font-weight:700; text-align:center;">
                    Salut, <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>! 👋
                  </td>
                </tr>
              </table>

              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'SF Pro Text', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:17px; line-height:28px; color:#666666; text-align:center;">
                    Ne bucurăm că ne-ai contactat! Mesajul tău este deja în drumul său către echipa noastră și îți vom răspunde foarte curând.
                  </td>
                </tr>
              </table>

              <!-- Feature Cards -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="padding:24px; background:linear-gradient(135deg, rgba(102,126,234,0.1) 0%, rgba(240,147,251,0.1) 100%); border-radius:20px; border:2px solid transparent; background-clip:padding-box;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'SF Pro Display', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:18px; line-height:24px; color:#667eea; font-weight:700; padding:0 0 12px 0;">
                          ⚡ Răspuns rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'SF Pro Text', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:15px; line-height:24px; color:#666666;">
                          Echipa noastră îți va răspunde în maxim 24 de ore cu soluții personalizate.
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- CTA Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td align="center" style="background:linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius:30px; box-shadow:0 8px 24px rgba(102,126,234,0.4);">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:16px 32px; font-family:'SF Pro Display', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:16px; line-height:16px; color:#ffffff; font-weight:700;">
                            📞 Sună acum
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td align="center" style="background:#ffffff; border:2px solid #667eea; border-radius:30px;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:14px 30px; font-family:'SF Pro Display', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:16px; line-height:16px; color:#667eea; font-weight:700;">
                            ✉️ Scrie-ne
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
            <td style="background:linear-gradient(135deg, #f8f9ff 0%, #fff5fb 100%); padding:32px; text-align:center; border-top:1px solid #f0f0f0;">
              <p style="font-family:'SF Pro Text', -apple-system, BlinkMacSystemFont, Arial, sans-serif; font-size:13px; line-height:20px; color:#999999;">
                © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?> • <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#667eea;"><?php echo SITE_PHONE; ?></a> • <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#667eea;"><?php echo SITE_EMAIL; ?></a>
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
