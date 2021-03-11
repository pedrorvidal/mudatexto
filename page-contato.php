<?php
/**
 * Template Name: Contact template
 * The template for displaying CONTACT PAGE
 *
 * This is the template that displays CONTACT PAGE by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Muda_Texto
 */

get_header();
?>

    <main id="primary" class="site-main">


<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1 text-center">Desenvolvido por:</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4 offset-md-4 offset-sm-3">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/images/avatar.jpg" alt="card image"></p>
                                    <h4 class="card-title">Pedro Vidal</h4>
                                    <p class="card-text">Web Developer, using PHP, JS.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Pedro Vidal</h4>
                                    <p class="card-text">Desenvolvedor Web, formado em Ciências da Computação. Desde 2005 desenvolvendo para a web utilizando PHP, Javascript e WordPress.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/vidaldeveloper">
                                                <!-- <i class="fa fa-twitter"></i> -->
                                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/twitter.svg" alt="Linkedin Pedro Vidal">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/pedrorvidal/">
                                                <!-- <i class="fa fa-linkedin"></i> -->
                                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/linkedin.svg" alt="Linkedin Pedro Vidal">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team -->

    </main><!-- #main -->

<?php
get_footer();
