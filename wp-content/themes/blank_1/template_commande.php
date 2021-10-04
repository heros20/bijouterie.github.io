<?php
/* Template Name: commande  */
get_header();
?>
 <main role="main">
      <!-- Content -->
      <article>
        <header class="section black">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Commander</h1>
            <p class="margin-bottom-0 text-size-16"></p>
          </div>  
        </header>
      </article>
    </main>
    <div class="B_G_boite">
      <h2>Bijoux et accessoires</h2>
      <div class="G_boite">
        <div class="bijou collier">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/500.jpg" alt="">
          <a class="absolute" href="<?= esc_url(home_url('collier')) ?>"><h2>Collier</h2></a>
        </div>
        <div class="bijou bracelet">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/500.jpg" alt="">
          <a class="absolute" href="<?= esc_url(home_url('bracelet')) ?>"><h2>Bracelet</h2></a>
        </div>
        <div class="bijou boucle">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/500.jpg" alt="">
          <a class="absolute" href="<?= esc_url(home_url('boucle-oreille')) ?>"><h2>boucle d'oreille</h2></a>
        </div>
      </div>
    </div>
    
<?php
get_footer();
?>