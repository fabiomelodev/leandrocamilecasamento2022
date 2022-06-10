<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section class="l-banner position-relative overflow-hidden">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <img
                class="l-banner__gif img-fluid w-100"
                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-gif.gif"
                alt="Single Temas">

                <a
                class="l-banner__navbar" 
                href="<?php echo get_home_url( null, '/' ) ?>">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/logo.png"
                    alt="Logo">
                </a>

                <div class="l-banner__box d-flex flex-column justify-content-center align-items-center">

                    <h1 class="l-banner__title u-font-weight-bold family-script-mt text-center u-color-folk-white">
                        <!-- Camile e Fabio -->
                        <?php echo get_field( 'nomes' ) ?>
                    </h1>

                    <p class="l-banner__phares u-font-style-italic family-playfair-display text-center u-color-folk-white">
                        <!-- vão casar -->
                        <?php echo get_field( 'frase' ) ?>
                    </p>

                    <p class="l-banner__date u-font-style-italic family-playfair-display text-center u-color-folk-white">
                        <?php 
                            $date_format = get_date_month( get_field( 'data_do_casamento' ) );
                            echo $date_format;
                        ?>

                        <!-- 05 . 11 . 2022 -->
                    </p>

                    <p class="l-banner__day u-font-style-italic family-playfair-display text-center u-color-folk-white">
                        <!-- Sábado, às 15h -->
                        <?php 
                            $hour_format = get_hour_format( get_field( 'horario' ) );

                            echo get_field( 'dia_da_semana') . ', às ' . $hour_format;  
                        ?>
                    </p>

                    <p class="l-banner__address u-font-style-italic family-playfair-display text-center u-color-folk-white">
                        <!-- PIB MOGI - R. Barão de Jaceguai, 1019 - Centro, Mogi das Cruzes - SP -->
                        <?php echo get_field( 'endereco' ) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<img
class="img-fluid d-none"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
