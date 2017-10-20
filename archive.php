<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital_Nomad
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>
        <div id="page-banner-others" style="background-image: url(<?php header_image(); ?>);">
            <div class="content  wow fdeInUp">
                <div class="container">
                    <?php
                        the_archive_title( '<h1 >', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </div>
            </div>
        </div>     
        <!--Home content-->
        <section id="home-content">
            <div class="container">
                <div class="row"> 
                    <!--content body-->
                    <div class="col-md-8">
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                        ?>
                        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                        <?php endwhile;?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    </main>
</div>
<?php

get_footer();
