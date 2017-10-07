<?php
/**
 *   Template Name:front-page

 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital_Nomad
 */

get_header(); ?>

<?php
    $background_img   = esc_url( get_theme_mod( 'header_background_image' ) );   
    $background_img_static   = get_template_directory_uri()."/img/bg-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";   
 
    $disable    = get_theme_mod( 'digitalnomad_disable' ) == 1 ? true : false ;
        if ( digitalnomad_is_selective_refresh() ) 
        {
            $disable = false;
        }
        if ( ! $disable) :
?>

<!--Home banner-->
<section id="home-banner" style="background-image: url(<?php echo $image;?>);" class="half-height">
	<div class="content">
		<div class="container wow fdeInUp"  data-wow-duration="1s">
			<div class="row">
				<div class="col-md-6 col-md-offset-3"> 
					<!--Head content--> 
					<?php 
						$nomad_tagline  = get_theme_mod( 'digitalnomad_header_tag_line', esc_html__(' HEY I’M RIJO ABRAHAM', 'digitalnomad' ));
						if ($nomad_tagline != '') echo '<span>  ' . wp_kses_post($nomad_tagline) . ' </span>'; 
					?>

					<?php 
						$nomad_theme_title  = get_theme_mod( 'digitalnomad_header_text', esc_html__(' DIGITAL NOMAD', 'digitalnomad' ));
						if ($nomad_theme_title != '') echo '<h1>  ' . wp_kses_post($nomad_theme_title) . ' </h1>'; 
					?> 
					<!--/Head content--> 

					<!--Head social-->
					<ul class="head-social-link">
						<?php
							if ( $socials = get_theme_mod( 'social' ) ) 
								{
									$socials = $socials ? array_filter( $socials ) : array();
									foreach ( $socials as $social => $name ) 
										{
											printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li> ', esc_url( $name ), $social );
										}
								}
						?>
					</ul>
					<!--/Head social--> 

					<a href="<?php echo  $button1_url=( get_theme_mod( 'digitalnomad_header_button_url' ) )?
						( get_theme_mod( 'digitalnomad_header_button_url' ) ):'#'; ?>" class="btn-white btn" >

						<?php echo  $button_text=( get_theme_mod( 'digitalnomad_header_button_text' ) )?
						(get_theme_mod( 'digitalnomad_header_button_text' ) ):'Hire me'; ?>
					</a> 
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif;?>
<!--/Home banner--> 

<!--Home content-->
<section id="home-content">
	<div class="container">
		<div class="row"> 
			<!--content body-->
			<div class="col-md-8">
				<article> 
					<!--Article slider-->
					<div id="article-slider" class="owl-carousel owl-theme"> 
						<!--slider 1-->
						<div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/p-1.jpg"> 
							<!--slider caption-->
							<div class="article-slider-caption"> <span>LIFESTYLE</span>
								<h2>7 things I did to reboot my life in three weeks </h2>
								<p>“Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled and heartily arena of fire.”</p>
								<a href="#">Read Article</a>
							</div>
							<!--/slider caption--> 
						</div>
						<!--/slider 1--> 

						<!--slider 2-->
						<div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/g-2.jpg"> 
							<!--slider caption-->
							<div class="article-slider-caption"> <span>LIFESTYLE</span>
								<h2>7 things I did to reboot my life in three weeks </h2>
								<p>“Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled and heartily arena of fire.”</p>
								<a href="#">Read Article</a> 
							</div>
							<!--/slider caption--> 
						</div>
						<!--/slider 2--> 
					</div>
					<!--/Article slider--> 
				</article>
                <!--blog section-->
                <?php 
                    $count_blog = get_theme_mod( 'digitalnomad_blog_section_count', esc_html__('3','digitalnomad') );
                    $query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog ) );

                    if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;endif;
                    wp_reset_postdata(); 
                ?>
                <!--/blog section-->

                
                
				<div class="clearfix"></div>
				
				<!--/page nav-->
				<nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
					<ul>
						<li >
							<div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li >
							<div class="nav-next"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-right"></i></a></div>
						</li>
					</ul>
				</nav>
			</div>
			<!--/content body--> 
			
			<!--aside-->
			<aside class="col-md-4 col-sm-4" > 
                <?php get_sidebar();?>
			</aside>
			<!--aside--> 
		</div>
	</div>
</section>
<!--/Home content--> 

<?php
get_footer();
