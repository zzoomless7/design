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
<body style="margin:0; padding:0; background:#212529;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#212529;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="600" class="container" style="width:600px; background:#209cee; border-radius:0; overflow:hidden; border:4px solid #000000; box-shadow:4px 4px 0 #000000;">
          
          <!-- NES.css Header -->
          <tr>
            <td style="padding:0; background:#209cee; border-bottom:4px solid #000000;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:20px; line-height:1.5; color:#ffffff; font-weight:400; text-shadow:2px 2px 0 #000000;">
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
            <td class="p-32" style="padding:40px 32px; background:#ffffff;">
              
              <!-- NES Success Dialog -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="background:#92cc41; border:4px solid #000000; padding:20px; position:relative;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:12px; line-height:1.8; color:#000000; text-align:center;">
                          ! SUCCESS !<br>
                          MESSAGE<br>
                          RECEIVED
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Pixel Content -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:10px; line-height:1.8; color:#212529; padding:0 0 16px 0;">
                    PLAYER:
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:16px; line-height:1.8; color:#212529; padding:0 0 24px 0;">
                    <?php echo strtoupper(htmlspecialchars($name, ENT_QUOTES, "UTF-8")); ?>
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:10px; line-height:1.8; color:#212529;">
                    YOUR MESSAGE<br>
                    HAS BEEN<br>
                    SAVED!<br><br>
                    WE WILL<br>
                    CONTACT YOU<br>
                    SOON.
                  </td>
                </tr>
              </table>

              <!-- NES Pixel Boxes -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 12px 0 0;">
                    <table role="presentation" width="100%" style="background:#f7d51d; border:4px solid #000000; padding:16px; text-align:center;">
                      <tr>
                        <td style="font-size:32px; line-height:1; padding:0 0 12px 0;">⚡</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:10px; line-height:1.8; color:#000000;">
                          FAST<br>
                          &lt;24H
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 12px;">
                    <table role="presentation" width="100%" style="background:#e76e55; border:4px solid #000000; padding:16px; text-align:center;">
                      <tr>
                        <td style="font-size:32px; line-height:1; padding:0 0 12px 0;">💼</td>
                      </tr>
                      <tr>
                        <td style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:10px; line-height:1.8; color:#000000;">
                          PRO<br>
                          TEAM
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- NES Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px 16px 8px;">
                    <table role="presentation">
                      <tr>
                        <td bgcolor="#209cee" style="background:#209cee; border:4px solid #000000; padding:12px 24px; text-align:center; box-shadow:4px 4px 0 #000000;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:10px; line-height:1; color:#ffffff;">
                            [A] CALL
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px 16px 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:#ffffff; border:4px solid #000000; padding:12px 24px; text-align:center; box-shadow:4px 4px 0 #000000;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:10px; line-height:1; color:#212529;">
                            [B] MAIL
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- NES Footer -->
          <tr>
            <td style="background:#212529; border-top:4px solid #000000; padding:24px 32px; text-align:center;">
              <p style="font-family:'Press Start 2P', 'Courier New', Courier, monospace; font-size:8px; line-height:1.8; color:#ffffff;">
                (C)<?php echo date('Y'); ?><br>
                <?php echo strtoupper(SITE_NAME); ?><br>
                <?php echo SITE_PHONE; ?><br>
                <?php echo SITE_EMAIL; ?>
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
