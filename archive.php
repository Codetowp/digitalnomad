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
<<<<<<< HEAD
                        <article>
                            <header class="entry-header">
                                
                                <div class="col-md-6"> 
                                    <?php
                                        if  ( get_the_post_thumbnail()!='')
                                            {
                                                the_post_thumbnail('digitalnomad_category'); 
                                            }
                                        else
                                            {?>
                                                <img src="<?php echo get_template_directory_uri()?>/img/05-screenshot.jpg"  alt="image 1" >
                                        <?php 
                                            }
                                    ?> 
                                    
                                    
                                </div>
                                <div class="home-article-content col-md-6"> 
                              
                                         <?php digitalnomad_entry_category(); ?>
                                        <?php digitalnomad_posted_on(); ?>
                                   
                                    <h2><?php the_title(); ?></h2>
                                    <span class="byline"> By <span class="author vcard"><a href="#"><?php echo get_author_name();?></a></span></span>
                                    <p><?php the_excerpt(); ?><a class="article-read-more" href="<?php the_permalink();?>">Read more</a> </p>
                                </div>
                            </header>
                        </article>
=======
                        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

>>>>>>> 1981d69fb105948d0fb28ea5ebb10cc1dfcd1b86
                        <?php endwhile;?>
                    </div>
                         <aside class="col-md-4 col-sm-4" > 
                                    <?php get_sidebar(); ?>
                                </aside>
                </div>
            </div>
        </section>
    <?php endif;?>
        
    </main>
</div>
<?php

get_footer();
