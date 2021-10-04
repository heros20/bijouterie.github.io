<?php
/* Template Name: home  */
$bracelet = array(
    'post_type' => 'bracelet',
    'post_status' => 'publish',
    'posts_per_page' =>8,
    'orderby' => 'date',
    'order' => 'DESC'
);
$collier = array(
    'post_type' => 'collier',
    'post_status' => 'publish',
    'posts_per_page' =>8,
    'orderby' => 'date',
    'order' => 'DESC'
);
$boucle_oreille = array(
    'post_type' => 'boucle_oreille',
    'post_status' => 'publish',
    'posts_per_page' =>8,
    'orderby' => 'date',
    'order' => 'DESC'
);
$equipier = array(
    'post_type' => 'equipier',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>
  
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/lithotherapie.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Radia créatrice de bijoux<br> En pierre naturelle</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Si vous souhaitez en savoir plus sur la lithotherapie :</p></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="<?= esc_url(home_url('services')) ?>">Cliquez ici</a>
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      <div class="wrap">
       
        <section class="section-top-padding full-width">
          <h2 class="text-size-50  text-m-size-40 text-center">Notre travail</h2>
          <hr class="break-small background-primary break-center"> 
          <div class="tabs background-primary-hightlight">
              <div class="tab-item tab-active">
                <a class="tab-label active-btn">Bracelets</a>
                <div class="tab-content lightbox-gallery">
                  <?php
                    $the_query = new WP_Query($bracelet);
                    if ($the_query->have_posts()) { ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post(); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                <div class="s-12 m-6 l-3">
                                  <a class="image-with-hover-overlay image-hover-zoom" href="<?= $featured_img_url ?>">
                                    <div class="image-hover-overlay background-primary"> 
                                      <div class="image-hover-overlay-content text-center padding-2x">
                                        <h2 class="text-thin"><?= get_the_title() ?></h2> 
                                        <p><?= get_the_excerpt() ?></p> 
                                      </div> 
                                    </div> 
                                    <img src="<?= $featured_img_url ?>" alt="" title="Portfolio Image 1" />
                                  </a>	
                                </div>
                        <?php  } ?>
                    <?php } ?>
                </div>  
              </div>
              <div class="tab-item">
                <a class="tab-label">Boucle d'oreilles</a>
                 <div class="tab-content lightbox-gallery">
                  <?php
                    $the_query = new WP_Query($boucle_oreille);
                    if ($the_query->have_posts()) { ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post(); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                <div class="s-12 m-6 l-3">
                                  <a class="image-with-hover-overlay image-hover-zoom" href="<?= $featured_img_url ?>">
                                    <div class="image-hover-overlay background-primary"> 
                                      <div class="image-hover-overlay-content text-center padding-2x">
                                        <h2 class="text-thin"><?= get_the_title() ?></h2> 
                                        <p><?= get_the_excerpt() ?></p> 
                                      </div> 
                                    </div> 
                                    <img src="<?= $featured_img_url ?>" alt="" title="Portfolio Image 1" />
                                  </a>	
                                </div>
                        <?php  } ?>
                    <?php } ?>
                </div>   
              </div>
              <div class="tab-item">
                <a class="tab-label">Colliers</a>
               <div class="tab-content lightbox-gallery">
                  <?php
                    $the_query = new WP_Query($collier);
                    if ($the_query->have_posts()) { ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post(); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                <div class="s-12 m-6 l-3">
                                  <a class="image-with-hover-overlay image-hover-zoom" href="<?= $featured_img_url ?>">
                                    <div class="image-hover-overlay background-primary"> 
                                      <div class="image-hover-overlay-content text-center padding-2x">
                                        <h2 class="text-thin"><?= get_the_title() ?></h2> 
                                        <p><?= get_the_excerpt() ?></p> 
                                      </div> 
                                    </div> 
                                    <img src="<?= $featured_img_url ?>" alt="" title="Portfolio Image 1" />
                                  </a>	
                                </div>
                        <?php  } ?>
                    <?php } ?>
                </div>    
              </div>
          </div>
        </section>
        
        <!-- Section 5 -->    
        <section class="section background-white text-center">
          <div class="line">
            <h2 class="text-size-50  text-m-size-40 text-center">Notre équipe</h2>
            <hr class="break-small background-primary break-center">
            <div class="carousel-default owl-carousel carousel-wide-arrows">
              
                 <?php
                    $the_query = new WP_Query($equipier);
                    if ($the_query->have_posts()) { ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post(); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                <div class="item">
                                  <div class="s-12 m-12 l-7 center text-center">
                                  <img class="image-testimonial-small" src="<?= $featured_img_url ?>" alt="">
                                  <p class="h1 margin-bottom text-size-20"><?= get_the_content() ?></p>
                                  <p class="h1 text-size-16"><?= get_the_title() ?></h5>
                                  </div>
                              </div>
                        <?php  } ?>
                    <?php } ?>
          
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>


<?php
get_footer();