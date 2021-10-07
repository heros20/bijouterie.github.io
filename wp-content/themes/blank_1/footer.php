<!--Important link source from https://bootsnipp.com/snippets/ooa9M-->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li>
                            <a href="<?= esc_url(home_url('/')) ?>">Accueil</a>
                        </li>
                        <li>
                            <a href="<?= esc_url(home_url('mentions-legales')) ?>">Mentions-légales</a>
                        </li>
                        <li>
                            <a href="<?= esc_url(home_url('contact')) ?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellat, aspernatur dicta magni obcaecati a reiciendis velit animi reprehenderit laudantium?</p>
                </div>
                <div class="col item social">
                    <a target="_blank" href="https://www.facebook.com/radia.beaufils">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
            <p class="copyright">Copyright © <?php echo date('Y'); ?>, Tout droit réserver Radia</p>
        </div>
    </footer>
</div> 

<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/responsee.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/template-scripts.js"></script>


<?php wp_footer(); ?>

</body>
</html>