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
      .stack { display:block !important; width:100% !important; margin-bottom:12px !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#0a0e27;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#0a0e27;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#0f1629; border-radius:16px; overflow:hidden; border:1px solid #00ffff; box-shadow:0 0 40px rgba(0,255,255,0.3), 0 0 80px rgba(255,0,255,0.2);">
          
          <!-- Cyberpunk Neon Header -->
          <tr>
            <td style="padding:0; background:linear-gradient(135deg, #0f1629 0%, #1a1f3a 100%); border-bottom:2px solid #00ffff; position:relative;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="padding:32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Orbitron', 'Courier New', monospace; font-size:28px; line-height:28px; color:#00ffff; font-weight:700; text-shadow:0 0 20px #00ffff, 0 0 40px #00ffff;">
                          [[ <?php echo SITE_NAME; ?> ]]
                        </td>
                        <td align="right">
                          <span style="display:inline-block; width:12px; height:12px; background:#00ff00; border-radius:50%; box-shadow:0 0 10px #00ff00; animation:pulse 2s infinite;"></span>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Glitch Effect Banner -->
          <tr>
            <td style="background:linear-gradient(90deg, #ff00ff 0%, #00ffff 50%, #ff00ff 100%); padding:3px 32px;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="font-family:'Orbitron', 'Courier New', monospace; font-size:11px; line-height:11px; color:#0a0e27; font-weight:700; letter-spacing:2px; text-transform:uppercase;">
                    &gt;&gt; MESSAGE RECEIVED &lt;&lt;
                  </td>
                  <td align="right" style="font-family:'Courier New', monospace; font-size:10px; line-height:10px; color:#0a0e27;">
                    [OK]
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td class="p-32" style="padding:40px 32px;">
              
              <!-- Neon Success Box -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="background:rgba(0,255,255,0.1); border:2px solid #00ffff; border-radius:12px; padding:20px; box-shadow:inset 0 0 30px rgba(0,255,255,0.2), 0 0 20px rgba(0,255,255,0.4);">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:'Orbitron', 'Courier New', monospace; font-size:18px; line-height:18px; color:#00ffff; font-weight:700; text-align:center; text-shadow:0 0 10px #00ffff;">
                          ✓ TRANSMISSION SUCCESSFUL
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Terminal-style greeting -->
              <table role="presentation" width="100%" style="margin:0 0 8px 0;">
                <tr>
                  <td style="font-family:'Courier New', monospace; font-size:14px; line-height:24px; color:#00ff00;">
                    <span style="color:#ff00ff;">&gt;</span> user.identify()<br>
                    <span style="color:#00ffff;">→</span> Nume: <span style="color:#ffffff; font-weight:700;"><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></span>
                  </td>
                </tr>
              </table>

              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Courier New', monospace; font-size:14px; line-height:24px; color:#00ff00;">
                    <span style="color:#ff00ff;">&gt;</span> message.status()<br>
                    <span style="color:#00ffff;">→</span> Status: <span style="color:#00ff00; font-weight:700;">DELIVERED</span>
                  </td>
                </tr>
              </table>

              <!-- Message Content -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td style="font-family:'Arial', sans-serif; font-size:15px; line-height:26px; color:#b8c5d6;">
                    Mesajul tău a fost procesat cu succes și transmis către sistemul nostru. Echipa noastră va analiza cererea și va reveni cu un răspuns în cel mai scurt timp posibil.
                  </td>
                </tr>
              </table>

              <!-- System Stats Grid -->
              <table role="presentation" width="100%" style="margin:0 0 32px 0;">
                <tr>
                  <td class="stack" style="width:33.33%; padding:8px;">
                    <table role="presentation" width="100%" style="background:rgba(255,0,255,0.1); border:1px solid #ff00ff; border-radius:8px; padding:16px;">
                      <tr>
                        <td style="font-family:'Orbitron', monospace; font-size:12px; line-height:12px; color:#ff00ff; text-align:center; padding:0 0 8px 0;">
                          RESPONSE TIME
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Orbitron', monospace; font-size:20px; line-height:20px; color:#ffffff; text-align:center; font-weight:700;">
                          &lt;24h
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:33.33%; padding:8px;">
                    <table role="presentation" width="100%" style="background:rgba(0,255,255,0.1); border:1px solid #00ffff; border-radius:8px; padding:16px;">
                      <tr>
                        <td style="font-family:'Orbitron', monospace; font-size:12px; line-height:12px; color:#00ffff; text-align:center; padding:0 0 8px 0;">
                          PRIORITY
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Orbitron', monospace; font-size:20px; line-height:20px; color:#ffffff; text-align:center; font-weight:700;">
                          HIGH
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:33.33%; padding:8px;">
                    <table role="presentation" width="100%" style="background:rgba(0,255,0,0.1); border:1px solid #00ff00; border-radius:8px; padding:16px;">
                      <tr>
                        <td style="font-family:'Orbitron', monospace; font-size:12px; line-height:12px; color:#00ff00; text-align:center; padding:0 0 8px 0;">
                          STATUS
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Orbitron', monospace; font-size:20px; line-height:20px; color:#ffffff; text-align:center; font-weight:700;">
                          LIVE
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Neon CTA Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td align="center" style="background:rgba(0,255,255,0.2); border:2px solid #00ffff; border-radius:8px; box-shadow:0 0 20px rgba(0,255,255,0.4);">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:16px 28px; font-family:'Orbitron', monospace; font-size:13px; line-height:13px; color:#00ffff; font-weight:700; text-shadow:0 0 10px #00ffff;">
                            [CALL_NOW]
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td align="center" style="background:rgba(255,0,255,0.2); border:2px solid #ff00ff; border-radius:8px; box-shadow:0 0 20px rgba(255,0,255,0.4);">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:16px 28px; font-family:'Orbitron', monospace; font-size:13px; line-height:13px; color:#ff00ff; font-weight:700; text-shadow:0 0 10px #ff00ff;">
                            [SEND_MSG]
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Terminal Contact Info -->
              <table role="presentation" width="100%" style="margin:32px 0 0 0; border-top:1px solid #1a1f3a; padding-top:24px;">
                <tr>
                  <td style="font-family:'Courier New', monospace; font-size:12px; line-height:20px; color:#00ff00; text-align:center;">
                    <span style="color:#ff00ff;">&gt;</span> contact.info()<br>
                    <span style="color:#00ffff;">→</span> Phone: <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#00ffff; text-decoration:none;"><?php echo SITE_PHONE; ?></a><br>
                    <span style="color:#00ffff;">→</span> Email: <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#00ffff; text-decoration:none;"><?php echo SITE_EMAIL; ?></a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#0a0e27; border-top:2px solid #00ffff; padding:24px 32px; text-align:center;">
              <p style="font-family:'Courier New', monospace; font-size:11px; line-height:18px; color:#00ffff;">
                © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?> | ALL RIGHTS RESERVED
              </p>
              <p style="font-family:'Courier New', monospace; font-size:10px; line-height:16px; color:#666; margin-top:8px !important;">
                [AUTOMATED_CONFIRMATION_MESSAGE]
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
