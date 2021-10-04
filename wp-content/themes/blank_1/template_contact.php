<?php
/* Template Name: contact  */
$coordonnee = array(
    'post_type' => 'coordonnee',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$errors = array();
$success = false;


if(!empty($_POST['submitted'])){
  // FAILLE XSS
  
  $sujet = failleXSS('sujet');
  $email = failleXSS('email');
  $message = failleXSS('message');

  // fonction pour afficher les erreurs eventuelles
  $errors = validForm($errors,$sujet,'sujet',2,50);
  $errors = validEmail($errors,$email,'email',2,50);
  $errors = validForm($errors,$message,'message',2,1000);

  if(count($errors) == 0){
    global $wpdb;
    $table = $wpdb->prefix.'contact';
    $wpdb->insert( 
      $table, 
      array( 
          'email' => $email, 
          'sujet' => $sujet,
          'message' => $message,
          'created_at' => current_time('mysql')
      ), 
      array( 
          '%s',
      ) 
    );
    $success = true;
  }

}
get_header();
?>
 <main role="main">
      <!-- Content -->
      <article>
        <header class="section black">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Me contacter</h1>
            <p class="margin-bottom-0 text-size-16"></p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin margin-s">
              <?php
                    $the_query = new WP_Query($coordonnee);
                    if ($the_query->have_posts()) { ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post(); ?>
                             <div class="s-12 m-12 l-4 margin-m-bottom">
                              <div class="padding-2x block-bordered border-radius">
                                <div class="float-left hide-s">
                                  <i class="icon-sli-location-pin icon3x text-primary"></i>
                                </div>
                              <div class="margin-left-70 margin-s-left-0 margin-bottom">
                                <h3 class="margin-bottom-0"><?= get_the_title() ?></h3>
                                <p><?= get_the_content() ?></p>               
                              </div>
                              </div>
                            </div>   
                        <?php  } ?>
                    <?php } ?>
            </div>
          </div>
          <div class="line">
            <div class="margin">
              <!-- Contact Form -->
              <?php if ($success == true) { ?>
                  <div id="formincription">
                      <p>Votre message a bien été transmis, nous vous recontacterons dans les plus bref délais</p>
                       <?php 
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";
    
        $message = 
        '<style type="text/css">
            #outlook a{padding: 0;}
      			.ReadMsgBody{width: 100%;}
      			.ExternalClass{width: 100%;}
      			.ExternalClass *{line-height: 100%;}
      			body{margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
      			table, td{border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
      			img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
      			p{display: block; margin: 13px 0;}
    </style>
    <div>
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f7f7f7;background-color:#f7f7f7;width:100%;">
        <tbody>
          <tr>
            <td>
              <div style="margin:0px auto;max-width:600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:20px;text-align:center;vertical-align:top;">
                        <div class="dys-column-per-90 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="background-color:#ffffff;border:1px solid #ccc;padding:50px 15px;vertical-align:top;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="" width="100%">
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                        <div style="color:#777777;font-family:Oxygen, Helvetica neue, sans-serif;font-size:14px;line-height:21px;text-align:center;">
                                         <h1 style="text-align:center">Message depuis L\'Atelier Rose Indien</h1>
                                          <span style="font-weight:700; color: #ff6f6f; font-size: 18px;">
                                           <h2 style="text-align:center;color: #cc9999">NOUVEAU MESSAGE :</h2>
                                          </span>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                        <div style="color:#777777;font-family:Oxygen, Helvetica neue, sans-serif;font-size:14px;line-height:21px;text-align:center;">
                                          <p style="padding: 10px 0; border: 1px solid #cccccc; color: #4d4d4d; font-weight: bold; font-size: 18px; text-align: center;">
                                            <span>
                                            <b style="text-align:center;margin-bottom:5px">Email : </b>' . $_POST["email"] . '<br>
                                            <b style="text-align:center;margin-bottom:5px">sujet : </b>' . $_POST["sujet"] . '<br>
                                            <b style="text-align:center;margin-bottom:5px">message : </b>' . $_POST["message"] . '</p>
                                          </span>
                                          </p>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;" vertical-align="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                          <tr>
                                            <td align="center" role="presentation" style="background-color:#cc9999;border:none;border-radius:5px;cursor:auto;padding:10px 25px;" valign="middle">
                                              <a href="https://bay-key.fr/" style="color:#ffffff;font-family:Oxygen, Helvetica neue, sans-serif;font-size:14px;font-weight:400;line-height:21px;margin:0;text-decoration:none;text-transform:none;" target="_blank">
                                                Radia Website
                                              </a>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f7f7f7;background-color:#f7f7f7;width:100%;">
        <tbody>
          <tr>
            <td>
              <div style="margin:0px auto;max-width:600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                        <div class="dys-column-per-90 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="background-color:#ffffff;border:1px solid #ccc;padding:45px 75px;vertical-align:top;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;" vertical-align="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                          <tr>
                                            <td align="center" bgcolor="#ff6f6f" role="presentation" style="background-color: #cc9999;border:none;border-radius:5px;cursor:auto;padding:10px 25px;" valign="middle">
                                              <p style="text-align:center;margin-bottom:10px">'.date('Y').'© Radia Website</p>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>';

        $retour = mail('heros40@hotmail.fr', 'Envoi depuis la page contact', $message, $entete);
        
        $entete2  = 'MIME-Version: 1.0' . "\r\n";
        $entete2 .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete2 .= 'From: Radia Website';

        $messageClient = 
                      '<style type="text/css">
            #outlook a{padding: 0;}
      			.ReadMsgBody{width: 100%;}
      			.ExternalClass{width: 100%;}
      			.ExternalClass *{line-height: 100%;}
      			body{margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
      			table, td{border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
      			img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
      			p{display: block; margin: 13px 0;}
    </style>
    <div>
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f7f7f7;background-color:#f7f7f7;width:100%;">
        <tbody>
          <tr>
            <td>
              <div style="margin:0px auto;max-width:600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:20px;text-align:center;vertical-align:top;">
                        <div class="dys-column-per-90 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="background-color:#ffffff;border:1px solid #ccc;padding:50px 15px;vertical-align:top;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="" width="100%">
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                        <div style="color:#777777;font-family:Oxygen, Helvetica neue, sans-serif;font-size:14px;line-height:21px;text-align:center;">
                                         <h1 style="text-align:center">Tiphaine Renovation</h1>
                                          <span style="font-weight:700; color: #ff6f6f; font-size: 18px;">
                                           <h2 style="text-align:center;color: #cc9999">Votre message a bien été transmis :</h2>
                                          </span>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                        <div style="color:#777777;font-family:Oxygen, Helvetica neue, sans-serif;font-size:14px;line-height:21px;text-align:center;">
                                          <p style="padding: 10px 0; border: 1px solid #cccccc; color: #4d4d4d; font-weight: bold; font-size: 18px; text-align: center;">
                                            <span>
                                             <b style="text-align:center;margin-bottom:5px">Email : </b>' . $_POST['email'] . '<br>
                                             <b style="text-align:center;margin-bottom:5px">sujet : </b>' . $_POST['sujet'] . '<br>
                                             <b style="text-align:center;margin-bottom:5px">message : </b>' . $_POST['message'] . '</?>
                                          </span>
                                          </p>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;" vertical-align="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                          <tr>
                                            <td align="center" role="presentation" style="background-color:#cc9999;border:none;border-radius:5px;cursor:auto;padding:10px 25px;" valign="middle">
                                              <a href="https://bay-key.fr/" style="color:#ffffff;font-family:Oxygen, Helvetica neue, sans-serif;font-size:14px;font-weight:400;line-height:21px;margin:0;text-decoration:none;text-transform:none;" target="_blank">
                                                Radia Website
                                              </a>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f7f7f7;background-color:#f7f7f7;width:100%;">
        <tbody>
          <tr>
            <td>
              <div style="margin:0px auto;max-width:600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                        <div class="dys-column-per-90 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="background-color:#ffffff;border:1px solid #ccc;padding:45px 75px;vertical-align:top;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;" vertical-align="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                          <tr>
                                            <td align="center" bgcolor="#ff6f6f" role="presentation" style="background-color: #cc9999;border:none;border-radius:5px;cursor:auto;padding:10px 25px;" valign="middle">
                                              <p style="text-align:center;margin-bottom:10px">'.date('Y').'© Radia Website</p>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>';
    
        $retour2 = mail($_POST['email'], 'L\'Atelier Rose Indien', $messageClient, $entete2);
    ?>
                  </div>
              <?php } else{ ?>
              
              <div class="s-12 m-12 l-6 center">
                <h2 class="margin-bottom-10 centerh2">Une demande, une reservation ou une information ? </h2>
                <p class="margin-bottom-10 centerh2 bigP">laissez-moi un message !</p>
                <form name="contactForm" class="customform" method="post">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12">
                        <p><span class="error"><?php  if(!empty($errors['email'])) {echo $errors['email'];} ?><span></p>
                        <input type="text" id="email" class="required email" name="email" placeholder="Votre email..." value="<?php if(!empty($_POST['email'])) {echo $_POST['email'];} ?>">
                      </div>
                  </div>
                  <div class="s-12"> 
                    <p><span class="error"><?php  if(!empty($errors['sujet'])) {echo $errors['sujet'];} ?><span></p>
                    <input type="text" id="sujet" class="required subject" name="sujet" placeholder="Votre sujet..."  value="<?php if(!empty($_POST['sujet'])) {echo $_POST['sujet'];} ?>">
                  </div>
                  <div class="s-12">
                    <p><span class="error"><?php  if(!empty($errors['message'])) {echo $errors['message'];} ?><span></p>
                    <textarea name="message" id="message" class="required message"  rows="5" placeholder="Votre message..." value="<?php if(!empty($_POST['message'])) {echo $_POST['message'];} ?>"></textarea></div>
                  <div class="s-12"><input type="submit" class="btn  tm-btn-round tm-fl-right" id="btn_submit" name="submitted" value="Envoyer"></div>
                </form>
              </div>

              <?php } ?>
              
              <!-- <div class="s-12 m-12 l-4">
                <h2 class="margin-bottom-10">Office Hours</h2>
                <div class="s-6">
                  <p class="text-size-16">
                  Monday<br>
                  Tuesday<br>
                  Wednesday<br>
                  Thursday<br>
                  Friday<br>
                  Saturday<br>
                  Sunday
                  </p>
                </div>
                <div class="s-6">
                  <p class="text-size-16 text-strong">
                  08.00-18.00<br>
                  08.00-18.00<br>
                  08.00-18.00<br>
                  08.00-18.00<br>
                  08.00-14.00<br>
                  08.00-14.00<br>
                  Close
                  </p>
                </div>
              </div> -->
            </div>    
          </div>  
        </div> 
      </article>
    </main>
<?php
get_footer();
?>
  