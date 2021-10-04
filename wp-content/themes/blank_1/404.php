<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blank_1
 */

get_header();
?>
 <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/bijou-hd.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Radia créatrice de bijoux<br> En pierre naturelle</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Si vous recherchez plus que des bijoux, des pierres de bonheur, vous êtes au bon endroit !</p></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="<?= esc_url(home_url('services')) ?>">En savoir plus</a>
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>

<div class="content content404">
 
  <div class="text"></div>
  <a href="<?= esc_url(home_url('/')) ?>">Accueil</a>
</div>



<?php
get_footer();
