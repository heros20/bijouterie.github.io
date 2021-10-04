<!--Important link source from https://bootsnipp.com/snippets/ooa9M-->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/Pierres-naturelles.jpg" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                           Pour toute question ou autre demande<br>
                           <a href="<?= esc_url(home_url('contact')) ?>">Contactez-moi !</a>
                        </p>
                        <div class="footer-social-link">
                            <h3>Retrouvez moi sur les réseaux sociaux</h3>
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/radia.beaufils">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <p>5 rue du vermont</p>
                                    <h3>Honfleur</h3>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <p>06.xx.xx.xx.xx</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="roww">
                        <div class="col-md-12 col-lg-6 foot">
                            <div class="footer-widget footer-left-widget footHEAD">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="<?= esc_url(home_url('/')) ?>">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="<?= esc_url(home_url('services')) ?>">À propos</a>
                                    </li>
                                    <li>
                                        <a href="<?= esc_url(home_url('contact')) ?>">Contact</a>
                                    </li>
                                    <li>
                                        <a href="<?= esc_url(home_url('galerie')) ?>">Galerie</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © <?php echo date('Y'); ?>, Tout droit réserver Radia</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
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
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <a href="#haut">
                <button class="btn btn-dark" title="Back to Top" style="display: block;">
                    <i class="fa fa-angle-up"></i>
                </button>
            </a>
        </div>
        <!-- End Back to top -->
</footer>

    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/responsee.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/template-scripts.js"></script>


<?php wp_footer(); ?>

</body>
</html>