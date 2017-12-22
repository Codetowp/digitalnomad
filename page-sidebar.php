<?php
/**
 * template name: Page Sidebar
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
<div id="page-banner" style="background-image: url(<?php echo the_post_thumbnail_url('digitalnomad_full_banner'); ?>);">
    <div class="content  wow fdeInUp">
        <header class="entry-header" >
            <h1><?php the_title(); ?></h1>
        </header>
    </div>
</div>
<!--body content-->
<div id="page-body"> 
    <div class="container">
        <div class="row wow fadeInUp"> 
            <div class="col-md-8  col-sm-12 page-block <?php echo get_theme_mod( 'digitalnomad_sidebar_setting' );?>"   >
                <?php
                    if(have_posts()):
                        while ( have_posts() ) : the_post();
                ?>
                <p><?php the_content();?></p>       
                <?php endwhile;endif;?>   
            </div>
              <?php 
               $class= get_theme_mod( 'digitalnomad_sidebar_setting','right-sidebar');
               ?>
               <aside class="<?php if($class !== 'col-md-8 pull-right'): ?>col-md-4 col-sm-4 pull-right<?php else :?>col-md-4 col-sm-4 pull-left<?php endif; ?>">
                <?php get_sidebar(); ?>
            </aside>  
        </div>
    </div>
</div>
<?php
get_footer();
