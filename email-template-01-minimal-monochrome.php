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
      .stack { display:block !important; width:100% !important; margin-bottom:12px !important; }
      .center { text-align:center !important; }
      .h1 { font-size:32px !important; line-height:38px !important; }
    }
  </style>
  <meta name="color-scheme" content="light dark">
  <meta name="supported-color-schemes" content="light dark">
</head>
<body style="margin:0; padding:0; background:#000000;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#000000;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="600" class="container" style="width:600px; background:#ffffff; border-radius:0;">
          
          <!-- Ultra Minimal Header -->
          <tr>
            <td style="padding:60px 40px 40px 40px; border-bottom:1px solid #000000;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:11px; line-height:11px; color:#000000; letter-spacing:3px; font-weight:700; text-transform:uppercase;">
                    <?php echo SITE_NAME; ?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td class="p-40" style="padding:60px 40px;">
              
              <!-- Large Checkmark -->
              <table role="presentation" width="100%" style="margin:0 0 40px 0;">
                <tr>
                  <td align="center">
                    <div style="width:80px; height:80px; border:3px solid #000000; border-radius:50%; display:inline-flex; align-items:center; justify-content:center;">
                      <span style="font-size:48px; line-height:48px;">✓</span>
                    </div>
                  </td>
                </tr>
              </table>

              <!-- Title -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td class="h1" style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:42px; line-height:48px; color:#000000; font-weight:300; text-align:center; letter-spacing:-1px;">
                    Confirmare
                  </td>
                </tr>
              </table>

              <!-- Message -->
              <table role="presentation" width="100%" style="margin:0 0 48px 0;">
                <tr>
                  <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:28px; color:#666666; text-align:center; max-width:400px; margin:0 auto;">
                    Dragă <strong style="color:#000000;"><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></strong>, am primit mesajul dumneavoastră. Vă vom contacta în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- Minimalist CTA -->
              <table role="presentation" align="center" style="margin:0 auto 48px auto;">
                <tr>
                  <td align="center" style="border:2px solid #000000; padding:16px 48px;">
                    <a href="tel:<?php echo SITE_PHONE; ?>" 
                       style="display:inline-block; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:11px; line-height:11px; color:#000000; font-weight:700; letter-spacing:2px; text-transform:uppercase;">
                      Contactează-ne
                    </a>
                  </td>
                </tr>
              </table>

              <!-- Contact Info -->
              <table role="presentation" width="100%">
                <tr>
                  <td style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:13px; line-height:22px; color:#999999; text-align:center;">
                    <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#000000;"><?php echo SITE_PHONE; ?></a>
                    <br>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#000000;"><?php echo SITE_EMAIL; ?></a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="border-top:1px solid #000000; padding:40px; text-align:center;">
              <p style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:10px; line-height:16px; color:#999999; letter-spacing:1px; text-transform:uppercase;">
                © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
