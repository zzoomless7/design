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
<body style="margin:0; padding:0; background:#f0f2f5;">
  <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
    Mulțumim pentru mesaj — îți răspundem în cel mai scurt timp.
  </div>

  <table role="presentation" width="100%" style="background:#f0f2f5;">
    <tr>
      <td align="center" style="padding:40px 20px;">
        <table role="presentation" width="640" class="container" style="width:640px; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.09);">
          
          <!-- Ant Design Header -->
          <tr>
            <td style="padding:0; background:#1890ff;">
              <table role="presentation" width="100%">
                <tr>
                  <td class="p-32" style="padding:40px 32px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:32px; line-height:32px; color:#ffffff; font-weight:600;">
                          <?php echo SITE_NAME; ?>
                        </td>
                        <td align="right">
                          <table role="presentation">
                            <tr>
                              <td style="background:rgba(255,255,255,0.2); border-radius:4px; padding:4px 12px;">
                                <span style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:12px; color:#ffffff; font-weight:400;">
                                  Confirmation
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
            <td class="p-32" style="padding:40px 32px;">
              
              <!-- Ant Design Alert -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td style="background:#f6ffed; border:1px solid #b7eb8f; border-radius:4px; padding:16px 20px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="width:24px; vertical-align:top;">
                          <div style="width:20px; height:20px; background:#52c41a; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                            <span style="font-size:12px; line-height:12px; color:#ffffff;">✓</span>
                          </div>
                        </td>
                        <td style="padding-left:16px; vertical-align:middle;">
                          <p style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; color:#52c41a; font-weight:400;">
                            Mesaj trimis cu succes
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Ant Design Descriptions -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0; background:#fafafa; border:1px solid #d9d9d9; border-radius:4px;">
                <tr>
                  <td style="background:#fafafa; border-bottom:1px solid #d9d9d9; padding:16px 24px;">
                    <span style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:16px; color:rgba(0,0,0,0.85); font-weight:600;">
                      Detalii Confirmare
                    </span>
                  </td>
                </tr>
                <tr>
                  <td style="padding:24px;">
                    <table role="presentation" width="100%">
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:14px; color:rgba(0,0,0,0.45); padding:0 0 8px 0;">
                          Destinatar
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:28px; line-height:36px; color:rgba(0,0,0,0.85); font-weight:600; padding:0 0 16px 0;">
                          <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:24px; color:rgba(0,0,0,0.65);">
                          Vă mulțumim pentru mesaj. Am recepționat solicitarea dumneavoastră și vă vom contacta în cel mai scurt timp posibil.
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Ant Design Cards -->
              <table role="presentation" width="100%" style="margin:0 0 24px 0;">
                <tr>
                  <td class="stack" style="width:50%; padding:0 12px 0 0;">
                    <table role="presentation" width="100%" style="background:#ffffff; border:1px solid #d9d9d9; border-radius:4px; padding:24px;">
                      <tr>
                        <td>
                          <div style="width:48px; height:48px; background:#1890ff; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 0 16px 0;">
                            <span style="font-size:24px; line-height:24px; color:#ffffff;">⚡</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; line-height:18px; color:rgba(0,0,0,0.85); font-weight:600; padding:0 0 8px 0;">
                          Răspuns rapid
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; color:rgba(0,0,0,0.45);">
                          În maximum 24 ore
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="width:50%; padding:0 0 0 12px;">
                    <table role="presentation" width="100%" style="background:#ffffff; border:1px solid #d9d9d9; border-radius:4px; padding:24px;">
                      <tr>
                        <td>
                          <div style="width:48px; height:48px; background:#52c41a; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 0 16px 0;">
                            <span style="font-size:24px; line-height:24px; color:#ffffff;">✓</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; line-height:18px; color:rgba(0,0,0,0.85); font-weight:600; padding:0 0 8px 0;">
                          Profesional
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; color:rgba(0,0,0,0.45);">
                          Echipă dedicată
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Ant Design Buttons -->
              <table role="presentation" align="center">
                <tr>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td bgcolor="#1890ff" style="background:#1890ff; border:1px solid #1890ff; border-radius:4px; box-shadow:0 2px 0 rgba(0,0,0,0.045); text-align:center;">
                          <a href="tel:<?php echo SITE_PHONE; ?>" 
                             style="display:inline-block; padding:10px 24px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; color:#ffffff; font-weight:400;">
                            Apelează
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="stack" style="padding:0 8px;">
                    <table role="presentation">
                      <tr>
                        <td style="background:#ffffff; border:1px solid #d9d9d9; border-radius:4px; box-shadow:0 2px 0 rgba(0,0,0,0.016); text-align:center;">
                          <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                             style="display:inline-block; padding:10px 24px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; color:rgba(0,0,0,0.65); font-weight:400;">
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

          <!-- Ant Design Footer -->
          <tr>
            <td style="background:#fafafa; border-top:1px solid #d9d9d9; padding:32px; text-align:center;">
              <p style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:24px; color:rgba(0,0,0,0.45);">
                <strong style="color:rgba(0,0,0,0.85);"><?php echo SITE_NAME; ?></strong><br>
                <a href="tel:<?php echo SITE_PHONE; ?>" style="color:#1890ff;"><?php echo SITE_PHONE; ?></a> • 
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:#1890ff;"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:20px; color:rgba(0,0,0,0.25); margin-top:12px !important;">
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
