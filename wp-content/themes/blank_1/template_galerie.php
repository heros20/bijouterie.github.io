<?php
/* Template Name: galerie  */
$bracelet = array(
    'post_type' => 'bracelet',
    'post_status' => 'publish',
    'posts_per_page' =>8,
    'orderby' => 'date',
    'order' => 'ASC'
);
$collier = array(
    'post_type' => 'collier',
    'post_status' => 'publish',
    'posts_per_page' =>8,
    'orderby' => 'date',
    'order' => 'ASC'
);
$boucle_oreille = array(
    'post_type' => 'boucle_oreille',
    'post_status' => 'publish',
    'posts_per_page' =>8,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>
<main role="main">
      <!-- Content -->
      <article>
        <header class="section black">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Galerie</h1>
            <p class="margin-bottom-0 text-size-16">Retrouvez ici toutes mes créations.</p>
          </div>  
        </header>
        <div class="wrap">
            <div class="section background-white"> 
            <div class="line">
                <div class="margin">
                    <div class="s-12 m-6 l-4">
                        <?php
                        $the_query = new WP_Query($bracelet);
                        if ($the_query->have_posts()) { ?>
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                    <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                    <div class="image-hover-overlay background-primary"> 
                                        <div class="image-hover-overlay-content text-center padding-2x">
                                        <p><?= get_the_excerpt() ?></p>  
                                        </div> 
                                    </div> 
                                    <img src="<?= $featured_img_url ?>" alt="" title="Portfolio Image 1" />
                                    </div>	
                            <?php  } ?>
                        <?php } ?>
                    </div>
                    <div class="s-12 m-6 l-4">
                        <?php
                        $the_query = new WP_Query($boucle_oreille);
                        if ($the_query->have_posts()) { ?>
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                    <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                    <div class="image-hover-overlay background-primary"> 
                                        <div class="image-hover-overlay-content text-center padding-2x">
                                        <p><?= get_the_excerpt() ?></p>  
                                        </div> 
                                    </div> 
                                    <img src="<?= $featured_img_url ?>" alt="" title="Portfolio Image 1" />
                                    </div>	
                            <?php  } ?>
                        <?php } ?>
                    </div>
                    <div class="s-12 m-6 l-4">
                        <?php
                        $the_query = new WP_Query($collier);
                        if ($the_query->have_posts()) { ?>
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                                    <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                                    <div class="image-hover-overlay background-primary"> 
                                        <div class="image-hover-overlay-content text-center padding-2x">
                                        <p><?= get_the_excerpt() ?></p>  
                                        </div> 
                                    </div> 
                                    <img src="<?= $featured_img_url ?>" alt="" title="Portfolio Image 1" />
                                    </div>	
                            <?php  } ?>
                        <?php } ?>
                    </div>
                    
                    </div>  
                </div>
            </div> 
        </div>
      </article>
    </main>
<?php
get_footer();