<?php
/**
 * template name: Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital_Nomad
 */

get_header(); ?>

<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
    <div class="content  wow fdeInUp">
        <header class="entry-header" >   
            <h1><?php the_title(); ?></h1>     
        </header>   
    </div>
</div>

<div id="page-body"> 
    <div class="container">
        <div class="row wow fadeInUp"> 
            <div class="col-md-12 page-block"   >
                <?php
                    if(have_posts()):
                        while ( have_posts() ) : the_post();
                ?>
                
                <p><?php the_content();?></p>               
                
                <?php endwhile;endif;?>      
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php
get_footer();
