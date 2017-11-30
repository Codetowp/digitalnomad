<?php
/*
 * Template Name: Post-full-width
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>
<!--body content-->
<div id="Blog-post"> 
   <?php
		if(have_posts()):		  
		while ( have_posts() ) : the_post();
	?> 
  	<?php get_template_part( 'template-parts/content', 'fullwidth' ); ?>	
	<?php endwhile;endif;?>
	<div class="clearfix"></div>
	<div class="publisher-info">
		<?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?>
		<h6>
			<a href="#"><?php echo esc_html_e('By', 'digitalnomad'); ?><?php esc_url(the_author_posts_link()); ?></a>
		</h6>
	</div>
    <div class="clearfix"></div>
  <!--publisher-info --> 
  <!--share --> 
<div class="share-article">
<ul>
			<li>
				<a data-original-title="Facebook"  data-placement="left" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html('Share this post on Facebook!', 'digitalnomad')?>"><i class="fa fa-facebook"></i></a> 
			</li>
			<li>
				<a data-original-title="Twitter" data-placement="left" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php esc_html('Share this post on Twitter!', 'digitalnomad')?>"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
				<a data-original-title="Dribbble"  data-placement="left" target="_blank" href="https://dribbble.com?url=<?php the_permalink(); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=Dribbble" title="<?php esc_html('Share this post on Dribbble!', 'digitalnomad')?>"><i class="fa fa-dribbble"></i></a> 
			</li>
			<li>
				<a data-original-title="linkedin"  data-placement="left" target="_blank" href="https://www.linkedin.com/?hl=en?url=<?php the_permalink();?>&description=<?php the_title();?> on <?php bloginfo('name'); ?> <?php echo esc_url( site_url() );?>" class="pin-it-button" count-layout="horizontal" title="<?php esc_html('Share on linkedin','digitalnomad') ?>"><i class="fa fa-linkedin"></i></a> 
			</li>
		</ul>
</div>
  <!--/share--> 
<hr>
        <div class="clearfix"></div>   
        <!--posts navigation-->
        <nav class="navigation posts-navigation"  role="navigation">
          <ul>
          	<?php 
					the_posts_pagination( array(
						'prev_text' => '<i class="fa fa-chevron-left"></i>' . __( 'Newer posts', 'digitalnomad' ),
						'next_text' => __( 'Older posts', 'digitalnomad' ) . '<i class="fa fa-chevron-right"></i>',
						)
					 );
				?>
				<?php wp_reset_postdata(); ?>
            <!-- <li class="pull-left">
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i> Previous post</a></div>
            </li>
            <li class="pull-right">
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/">Next post <i class="fa fa-chevron-right"></i></a></div>
            </li> -->
          </ul>
        </nav>
        <!--/posts navigation-->
        <div class="clearfix"></div>
        <!--Also like-->
        <div class="also-like-block"> 
          <h5>
			<i class="fa fa-link"></i>
		<?php echo esc_html_e('YOU MAY ALSO LIKE', 'digitalnomad'); ?>
		</h5>
		<?php digitalnomad_related_post(); ?>
        </div>
        <!--/Also like-->
        <div class="clearfix"></div>
        <!--comment-->
        <div id="comments" class="comments-area text-left">
         <?php comments_template(); ?>
        </div>
        <!--/comment--> 
      </div>
      <!--blog posts container--> 
        <!--aside-->
      <aside class="col-md-4 col-sm-4 " > 
       <?php get_sidebar(); ?>
      </aside>
      <!--aside--> 
      <div class="clearfix"></div>
     </div>
 </div>
</div>
<?php
get_footer();

