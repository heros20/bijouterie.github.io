<?php
/* Template Name: collier  */
$errors = array();
$success = false;


if(!empty($_POST['submitted'])){
  // FAILLE XSS
  $email = failleXSS('email');
  $message = failleXSS('message');
  $collier = $_POST['colliers'];
  $pierre = $_POST['pierre'];
  if ($pierre) {
     $pierre = implode(' ; ', $_POST['pierre']);
  }
 
  // pour afficher faire un unserialize
  
  // fonction pour afficher les erreurs eventuelles
  $errors = validCheck($errors,$pierre,'pierre');
  $errors = validEmail($errors,$email,'email',2,255);

  if(count($errors) == 0){
    global $wpdb;
    $table = $wpdb->prefix.'collier';
    $wpdb->insert( 
      $table, 
      array( 
          'email' => $email, 
          'message' => $message,
          'pierre' => $pierre,
          'collier' => $collier,
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
<script>
  function showDiv(select){
   if(select.value==1){
    document.getElementById('hidden_div').style.display = "block";
   } else{
    document.getElementById('hidden_div').style.display = "none";
   }
    if(select.value==2){
    document.getElementById('hidden_div2').style.display = "block";
   } else{
    document.getElementById('hidden_div2').style.display = "none";
   }
} 
</script>
 <main role="main">
      <!-- Content -->
      <article>
        <header class="section black">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Collier</h1>
            <p class="margin-bottom-0 text-size-16"></p>
          </div>  
        </header>
      </article>
    </main>

 <div class="content">
      <?php
      if ($success == true) { ?>
        <p>Votre commande à bien été passer, nous vous recontacterons dans les plus bref délais</p>
        <?php } else { ?>
          <div class="div_select">
            <select id="select_Command" name="form_select" onchange="showDiv(this)">
              <option value="">-- Selectionner le type de collier --</option>
              <option value="1">Pierre naturelle</option>
              <option value="2">Fantaisiste</option>
            </select>
          </div>
          
<!-- 
      <input type="checkbox" id="myCheck1" onclick="myFunction()"> collier en pierre
      <input type="checkbox" id="myCheck2" onclick="myFunction()"> collier fantaisiste -->
      <form class="form_pierre" id="hidden_div" action="" method="POST" novalidate>
          <div class="form">
            <h2>Selection de collier</h2>
            <div class="form-group mb-4">
              <select name="colliers" id="collier">
                  <option value="">--choisissez un support--</option>
                  <option  value="élastique">support élastique</option>
                  <option  value="rigide">support rigide</option>
              </select>
            </div>
            <div class="form-group mb-4">
              <h3>pierre souhaité dans le collier</h3>
              <div class="check">

                <div class="pierre">
                  <div class="label"><label class="citrine" for="pierre">citrine</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="citrine">
                </div>

                <div class="pierre">
                  <div class="label"><label class="agate" for="pierre">agate</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="agate"> 
                </div>

                <div class="pierre">
                  <div class="label"><label class="jade" for="pierre">jade</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="jade"> 
                </div>

                <div class="pierre">
                  <div class="label"><label class="ambre" for="pierre">ambre</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="ambre"> 
                </div>

                <div class="pierre">
                  <div class="label"><label class="saphir" for="pierre">saphir</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="saphir"> 
                </div>

                <div class="pierre">
                  <div class="label"><label class="rubis" for="pierre">rubis</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="rubis"> 
                </div>

                <div class="pierre">
                  <div class="label"><label class="emeraude" for="pierre">emeraude</label></div>
                  <input type="checkbox" id="pierre" name="pierre[]" value="emeraude"> 
                </div>

            </div>
              <p><span class="error"><?php  if(!empty($errors['pierre'])) {echo $errors['pierre'];} ?><span></p>
            </div>
            <div class="form-group margin2">
              <input type="text" id="email" class="form-control mb-4" name="email" placeholder="Votre email..." value="<?php if(!empty($_POST['email'])) {echo $_POST['email'];} ?>">
              <p><span class="error"><?php  if(!empty($errors['email'])) {echo $errors['email'];} ?><span></p>
            </div>
            <div class="form-group margin2">
              <input type="textarea" id="message" class="form-control mb-4" name="message" placeholder="Message optionnel..." value="<?php if(!empty($_POST['message'])) {echo $_POST['message'];} ?>">
              <p><span class="error"><?php  if(!empty($errors['message'])) {echo $errors['message'];} ?><span></p>
            </div>
            <div class="form-group mb-0">
              <input type="submit" class="btn btn-primary tm-btn-round tm-fl-right" id="btn_submit" name="submitted" value="Envoyer">
            </div>
          </div>
      </form>

      <form class="form_pierre" id="hidden_div2" action="" method="POST" novalidate>
          <div class="form">
            <h2>Selection de support</h2>
            <div class="form-group mb-4">
              <select name="colliers" id="collier">
                  <option  value="rigide">support rigide</option>
              </select>
            </div>
            <div class="form-group mb-4">
              <h3>contenant souhaité</h3>
              <select name="colliers" id="collier">
                  <option  value="">--Selectionnez votre contenant--</option>
                  <option  value="bouteille">bouteille</option>
                  <option  value="vase">vase</option>
                  <option  value="autre">autre</option>
              </select>
            </div>
            <div class="form-group mb-4">
              <h3>Contenu souhaité dans le collier</h3>
              <select name="colliers" id="collier">
                  <option  value="">--Selectionnez votre contenu--</option>
                  <option  value="Paillette">Paillette</option>
                  <option  value="etoile">etoile</option>
                  <option  value="autre">autre</option>
              </select>
            </div>
              <p><span class="error"><?php  if(!empty($errors['pierre'])) {echo $errors['pierre'];} ?><span></p>
            </div>
            <div class="form-group margin2">
              <input type="text" id="email" class="form-control mb-4" name="email" placeholder="Votre email..." value="<?php if(!empty($_POST['email'])) {echo $_POST['email'];} ?>">
              <p><span class="error"><?php  if(!empty($errors['email'])) {echo $errors['email'];} ?><span></p>
            </div>
            <div class="form-group margin2">
              <input type="textarea" id="message" class="form-control mb-4" name="message" placeholder="Message optionnel..." value="<?php if(!empty($_POST['message'])) {echo $_POST['message'];} ?>">
              <p><span class="error"><?php  if(!empty($errors['message'])) {echo $errors['message'];} ?><span></p>
            </div>
            <div class="form-group mb-0">
              <input type="submit" class="btn btn-primary tm-btn-round tm-fl-right mb-4" id="btn_submit" name="submitted" value="Envoyer">
            </div>
          </div>
          
      </form>
      <?php } ?>
 </div>
   
    
<?php
get_footer();
?>