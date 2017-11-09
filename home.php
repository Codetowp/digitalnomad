<?php
/**
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

<section id="home-banner" style="background-image: url(<?php echo esc_html($image);?>);" class="<?php echo get_theme_mod( 'digitalnomad_banner_setting', esc_html( 'half-height' ) ); ?>">
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
                                        printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li> ', esc_url( $name ), esc_html($social) );
                                    }
                                }
                        ?>
                    </ul>
                    <!--/Head social--> 
                    <a href="<?php echo  $button1_url=( get_theme_mod( 'digitalnomad_header_button_url' ) )?
                        ( esc_url(get_theme_mod( 'digitalnomad_header_button_url' )) ):'#'; ?>" class="btn-white btn" >

                        <?php echo  $button_text=( get_theme_mod( 'digitalnomad_header_button_text' ) )?
                        esc_html((get_theme_mod( 'digitalnomad_header_button_text' ) )):'Hire me'; ?>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<!--/Home banner--> 
<!--Home content-->
<section id="home-content-layout" class="<?php echo get_theme_mod( 'digitalnomad_sidebar_setting' )?>">
    <div class="container">
        <div class="row"> 
            <!--content body-->
            <div class="col-md-8 content-layout-set">
                <?php  
                    get_theme_mod( 'digitalnomad_slider_disable' );
                    $disable    = get_theme_mod( 'digitalnomad_slider_disable' ) == 1 ? true : false ;
                    if ( digitalnomad_is_selective_refresh() ) 
                    {
                        $disable = false;
                    }
                    if (  !$disable) :
                ?>
        
                <article> 
                    <!--Article slider-->
                    <div id="article-slider" class="owl-carousel owl-theme"> 
                        <?php  digitalnomad_featured_slider(); ?>        
                    </div>
                    <!--/Article slider--> 
                </article>
                <?php endif;?>
                <!--blog section-->
                <?php 
					$count_blog = get_theme_mod( 'digitalnomad_blog_section_count', esc_html__('3','digitalnomad') );
					$query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog ) );

           if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();
						$home_layouts = get_theme_mod('digitalnomad_home_layouts');
                            get_template_part( 'template-parts/content', $home_layouts );

                    endwhile;endif;
                    wp_reset_postdata(); 
                ?>
                <!--/blog section-->
      
				<div class="clearfix"></div>
                <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
					<ul>
						<li>
							<?php
							the_posts_pagination(
								array(
									'prev_text' => '<i class="fa fa-chevron-left"></i>' . __( 'Newer posts', 'digitalnomad' ),
									'next_text' => __( 'Older posts', 'digitalnomad' ) . '<i class="fa fa-chevron-right"></i>',
								)
							);
							?>
                           <?php wp_reset_postdata(); ?>
                        </li>
                    </ul>
                </nav>
          </div>
          <!--/content body--> 
          <!--aside-->
          <aside class="col-md-4 col-sm-4 aside-layout-set" >
            <?php get_sidebar();?>
          </aside>
          <!--aside--> 
    </div>
  </div>
</section>
<!--/Home content-->
<?php
get_footer();

