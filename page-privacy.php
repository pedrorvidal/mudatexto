<?php
/**
 * Template Name: Privacidade Template
 * The template for displaying PRIVACY POLILCY PAGE
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

<!-- <main id="primary" class="site-main"> -->
<main id="primary" class="site-main mt-5 privacy-page">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <?php mudatexto_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
            the_content();

            // wp_link_pages(
            //     array(
            //         'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mudatexto' ),
            //         'after'  => '</div>',
            //     )
            // );
            ?>
        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
