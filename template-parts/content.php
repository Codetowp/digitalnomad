<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 */
?>


<article>
    <header class="entry-header">
        <div class="col-md-6">
             <?php
                if  ( get_the_post_thumbnail()!='')
                {
                    the_post_thumbnail('digitalnomad_post_preview'); 
                }
                else
                {   ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/05-screenshot.jpg">
                    <?php 
                }   ?>
        </div>            
        
        <?php $categories = get_the_category(); ?>

        <div class="home-article-content col-md-6" style="padding-top:0"> 
              
            <?php digitalnomad_entry_category(); ?>

            <?php digitalnomad_posted_on(); ?>
            
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <span class="byline"> By <span class="author vcard"><?php the_author_posts_link(); ?></span></span>
            <p><?php the_excerpt(); ?>
                <a class="article-read-more" href="<?php the_permalink();?>">Read more</a> 
            </p>
        </div>
    </header>
</article>