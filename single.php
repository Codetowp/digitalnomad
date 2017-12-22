<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Digital_Nomad
 */
get_header(); ?>
<!--body content-->
<div id="Blog-post"> 
	<?php
		if(have_posts()):		  
		while ( have_posts() ) : the_post();
	?> 
  	<?php get_template_part( 'template-parts/content', 'single' ); ?>	
	<?php endwhile;endif;?>
	<div class="entry-content">
		<?php
		

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grit' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	 <?php if ( get_edit_post_link() ) : ?>
          <footer class="entry-footer">
            <?php
            edit_post_link(
              sprintf(
                wp_kses(
                  /* translators: %s: Name of current post. Only visible to screen readers */
                  __( 'Edit <span class="screen-reader-text">%s</span>', 'digitalnomad' ),
                  array(
                    'span' => array(
                      'class' => array(),
                    ),
                  )
                ),
                get_the_title()
              ),
              '<span class="edit-link">',
              '</span>'
            );
            ?>
          </footer><!-- .entry-footer -->
        <?php endif; ?>  
	<div class="clearfix"></div>
	<div class="publisher-info">
		<?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?>
		<h6>
			<a href="#"><?php echo esc_html_e('By', 'digitalnomad'); ?><?php esc_url(the_author_posts_link()); ?></a>
		</h6>
	</div>
	<div class="share-article">
		<ul>
			<li>
				<a data-original-title="Facebook"  data-placement="left" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html('Share this post on Facebook!', 'dblogger')?>"><i class="fa fa-facebook"></i></a> 
			</li>
			<li>
				<a data-original-title="Twitter" data-placement="left" target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php esc_html('Share this post on Twitter!', 'dblogger')?>"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
				<a data-original-title="Dribbble"  data-placement="left" target="_blank" href="https://dribbble.com?url=<?php the_permalink(); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=Dribbble" title="<?php esc_html('Share this post on Dribbble!', 'dblogger')?>"><i class="fa fa-dribbble"></i></a> 
			</li>
			<li>
				<a data-original-title="linkedin"  data-placement="left" target="_blank" href="https://www.linkedin.com/?hl=en?url=<?php the_permalink();?>&description=<?php the_title();?> on <?php bloginfo('name'); ?> <?php echo esc_url( site_url() );?>" class="pin-it-button" count-layout="horizontal" title="<?php esc_html('Share on linkedin','dblogger') ?>"><i class="fa fa-linkedin"></i></a> 
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
	<!--posts navigation-->
	<nav class="navigation posts-navigation"  role="navigation">
		<ul>
			<li>
				<?php 
					the_posts_pagination( array(
						'prev_text' => '<i class="fa fa-chevron-left"></i>' . __( 'Newer posts', 'digitalnomad' ),
						'next_text' => __( 'Older posts', 'digitalnomad' ) . '<i class="fa fa-chevron-right"></i>',
						)
					 );
				?>
				<?php wp_reset_postdata(); ?>
			</li> 
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
	<div class="clearfix"></div>
	</div>
	</div>
	</div>
</div>

<?php
get_footer();
