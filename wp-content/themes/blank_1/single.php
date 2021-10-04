<?php

get_header();
?>

<main id="primary" class="site-main">
	<div class="B_get">
	<?php
		while ( have_posts() ) :
		the_post();
		?>
		<div class="get">
			<h2><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?> </a></h2>
			<p><?= nl2br(get_the_content()) ?> </p>
			<div> <?= the_post_thumbnail('thumbnail') ?></div>
		</div>
			
		<?php	endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();
