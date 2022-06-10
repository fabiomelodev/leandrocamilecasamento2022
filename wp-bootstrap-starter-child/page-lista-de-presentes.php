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
<section class="l-banner position-relative overflow-hidden" style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-gif.gif)">

    <div class="container position-relative" style="z-index:99">

        <div class="row">

            <div class="col-12 px-0">

                <div class="row">

                    <div class="col-5">

                        <form>

                            <div class="row">

                                <div class="col-12 d-flex flex-column my-3">

                                    <label
                                    class="u-font-size-14 u-font-weight-bold u-color-folk-white"
                                    for="name">
                                        Nome completo:
                                    </label>

                                    <input
                                    class="c-input-pattern u-font-size-12 py-2 px-3"
                                    type="text"
                                    id="name">
                                </div>

                                <div class="col-12 d-flex flex-column my-3">

                                    <label
                                    class="u-font-size-14 u-font-weight-bold u-color-folk-white"
                                    for="whatsapp">
                                        Whatsapp com DDD:
                                    </label>

                                    <input
                                    class="c-input-pattern u-font-size-12 py-2 px-3"
                                    type="text"
                                    id="whatsapp"
                                    placeholder="Ex: (xx) 99999-9999">
                                </div>

                                <div class="col-4">

                                    <input
                                    class="c-label-checkbox d-none"
                                    type="checkbox"
                                    id="jogo-panela">

                                    <label
                                    class="c-label-checkbox u-font-size-12 u-font-weight-medium text-center u-color-folk-white py-2 px-3"
                                    for="jogo-panela">
                                        Jogo de panela
                                    </label>
                                </div>

                                <div class="col-4">

                                    <input
                                    class="c-label-checkbox d-none"
                                    type="checkbox"
                                    id="jogo-panelaa">

                                    <label
                                    class="c-label-checkbox u-font-size-12 u-font-weight-medium text-center u-color-folk-white py-2 px-3"
                                    for="jogo-panela">
                                        Jogo de panela
                                    </label>
                                </div>

                                <div class="col-4">

                                    <input
                                    class="c-label-checkbox d-none"
                                    type="checkbox"
                                    id="jogo-panela">

                                    <label
                                    class="c-label-checkbox u-font-size-12 u-font-weight-medium text-center u-color-folk-white py-2 px-3"
                                    for="jogo-panela">
                                        Jogo de panela
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
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
