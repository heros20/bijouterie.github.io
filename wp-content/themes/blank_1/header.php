
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Radia WEB SITE</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/owl-carousel/owl.theme.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js"></script>
	<script>
    // detect IE8 and above, and edge
    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        alert("Pour une meilleur expérience utilisateur, nous vous conseillons d\'utiliser chrome ou firefox!");
    }
   </script>
   <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- logo du site : <link href="<?= get_template_directory_uri(); ?>/assets/img/logo-tiphaine.jpg" rel="icon"> -->
  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	
    <!-- HEADER -->
    <a id="haut"></a>
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="<?= esc_url(home_url('/')) ?>" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="<?= get_template_directory_uri(); ?>/assets/img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          
          <ul class="right chevron">
            <li><a href="<?= esc_url(home_url('/')) ?>">Accueil</a></li>
            <li><a href="<?= esc_url(home_url('services')) ?>">À propos</a></li>
            <li><a href="<?= esc_url(home_url('commande')) ?>">Commander</a></li>
            <li><a href="<?= esc_url(home_url('galerie')) ?>">Galerie</a></li>
            <li><a href="<?= esc_url(home_url('contact')) ?>">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
	

