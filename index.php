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
                    }?>
                  
          </ul>
          <!--/Head social--> 
          
          <a href="<?php echo  $button1_url=( get_theme_mod( 'digitalnomad_header_button_url' ) )?
                ( get_theme_mod( 'digitalnomad_header_button_url' ) ):'#'; ?>" class="btn-white btn" >
              
              <?php echo  $button_text=( get_theme_mod( 'digitalnomad_header_button_text' ) )?
                ( get_theme_mod( 'digitalnomad_header_button_text' ) ):'Hire me'; ?>
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
                <a href="#">Read Article</a> </div>
              <!--/slider caption--> 
              
            </div>
            <!--/slider 1--> 
            
            <!--slider 2-->
            <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/g-2.jpg"> 
              <!--slider caption-->
              <div class="article-slider-caption"> <span>LIFESTYLE</span>
                <h2>7 things I did to reboot my life in three weeks </h2>
                <p>“Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled and heartily arena of fire.”</p>
                <a href="#">Read Article</a> </div>
              <!--/slider caption--> 
              
            </div>
            <!--/slider 2--> 
            
          </div>
          <!--/Article slider--> 
        </article>
        <article>
          <header class="entry-header">
            <div class="col-md-6"> <img src="<?php echo get_template_directory_uri(); ?>/img/05-screenshot.jpg"></div>
            <div class="home-article-content col-md-6"> <span class="tag-details"><a href="#">Fashion</a> . <span class="date-article">JULY 13 2017</span></span>
              <h2>Top 25 Free Wordpress Themes for bloggers</h2>
              <span class="byline"> By <span class="author vcard"><a href="#">Allie Kingsley</a></span></span>
              <p>Manual excerpt can be added to each post. Add 
                this nice excerpt to each post which is also have 
                this nice typography. It can be turned off in 
                theme options...<a href="#">Read more</a> </p>
            </div>
          </header>
        </article>
        <div class="clearfix"></div>
        <article>
          <header class="entry-header">
            <div class="col-md-6"> <img src="<?php echo get_template_directory_uri(); ?>/img/05-screenshot.jpg"></div>
            <div class="home-article-content col-md-6"> <span class="tag-details"><a href="#">Fashion</a> . <span class="date-article">JULY 13 2017</span></span>
              <h2>Top 25 Free Wordpress Themes for bloggers</h2>
              <span class="byline"> By <span class="author vcard"><a href="#">Allie Kingsley</a></span></span>
              <p>Manual excerpt can be added to each post. Add 
                this nice excerpt to each post which is also have 
                this nice typography. It can be turned off in 
                theme options...<a href="#">Read more</a> </p>
            </div>
          </header>
        </article>
        
        
        
        
        
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
        
        <!--user-->
        <section class="widget ">
          <div class="user-info"> <img src="<?php echo get_template_directory_uri(); ?>/img/a-2.jpg" class="banner"> <span> <img src="<?php echo get_template_directory_uri(); ?>/img/team/02.jpg">
            <h5>Rijo Abraham</h5>
            <p>Digital Nomad</p>
            </span> </div>
        </section>
        
        <!--/user--> 
        
        <!--Search-->
        <section class="widget widget_search  wow fadeInUp">
          <form>
            <div class="input-group"> <span class="input-group-btn">
              <button  type="button"><i class="fa  fa-search"></i></button>
              </span>
              <input class="form-control" type="text" placeholder="Search what you need....">
             </div>
          </form>
        </section>
        <!--/Search--> 
        
        <!--Recent Comments-->
        
        <section class="widget widget_recent_comments  wow fadeInUp">
          <h2 class="widget-title">Recent Comments</h2>
          <ul >
            <li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-18">Tips For Designing a Business</a></li>
            <li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-17">Barbecue Sauce Barbeque</a></li>
            <li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-16">What Makes A Hotel Boutique</a></li>
          </ul>
        </section>
        
        <!--Recent Comments end--> 
        
        <!--Archives start-->
        
        <section class="widget widget_archive  wow fadeInUp">
          <h2 class="widget-title">Archives</h2>
          <ul >
            <li ><a href="#"> support <span >(01)</span> </a> </li>
            <li><a href="#"> DESIGN<span >(10)</span> </a></li>
            <li ><a href="#"> USER INTERFACE<span>(100)</span> </a> </li>
            <li><a href="#"> Wiki<span >(100)</span> </a></li>
          </ul>
        </section>
        
        <!--Archives end--> 
        
        <!--Archives start-->
        
        <section class="widget widget_categories  wow fadeInUp">
          <h2 class="widget-title">category</h2>
          <ul >
            <li ><a href="#"> Budget </a> </li>
            <li><a href="#"> Industry </a></li>
            <li ><a href="#"> Factory </a> </li>
            <li><a href="#"> Business</a></li>
          </ul>
        </section>
        
        <!--Archives end--> 
        
        <!--Recent posts start-->
        
        <section  class="widget  widget_recent_entries  wow fadeInUp ">
          <h2 class="widget-title">Recent posts</h2>
          <ul class="media-list main-list">
            <li class="media"> <a class="" href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="..."> </a>
              <div class="media-body">
                <p class="media-heading"><a href="#">Tips For Designing a Business </a> </p>
              </div>
            </li>
            <li class="media"> <a class="" href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" alt="..."> </a>
              <div class="media-body">
                <p class="media-heading"><a href="#">Barbecue Sauce Barbeque</a></p>
              </div>
            </li>
            <li class="media"> <a class="" href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/02-screenshot.jpg" alt="..."> </a>
              <div class="media-body">
                <p class="media-heading"> <a href="#">What Makes A Hotel Boutique </a></p>
              </div>
            </li>
          </ul>
        </section>
        
        <!--ad -->
        <section class="widget"> <img src="<?php echo get_template_directory_uri(); ?>/img/ad-250x250.jpg" class="img-responsive"> </section>
        <!--ad end--> 
        
        <!--Recent posts end-->
        
        <section class="widget widget_social sidebar  wow fadeInUp">
          <h2 class="widget-title">Follow Us</h2>
          <ul >
            <li ><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li ><a href="#" title="twitter"><i class="fa  fa-twitter"></i></a></li>
            <li ><a href="#" title="google-plus"><i class="fa  fa-google-plus"></i></a> </li>
            <li><a href="#" title="Rss Feed"><i class="fa  fa-rss"></i></a></li>
          </ul>
        </section>
        
        <!--Tags start-->
        
        <section id="tag_cloud-2" class="widget widget_tag_cloud  wow fadeInUp">
          <h2 class="widget-title">Tags</h2>
          <div class="tagcloud"><a href="#"  title="1 topic" style="font-size: 1em;">Ideas <span>(391)</span></a> <a href="#" title="1 topic" style="font-size: 1em;">Exterior</a> <a href="#"  title="1 topic" style="font-size: 1em;">Interior</a> <a href="#" title="1 topic" style="font-size: 1em;">Architecture</a> <a href="#"  title="1 topic" style="font-size: 1em;">displays</a> <a href="#"  title="1 topic" style="font-size: 1em;">Design</a> <a href="#"  title="1 topic" style="font-size: 1em;">psd</a></div>
        </section>
        <!--Tags end--> 
        
        <!--Meta  start-->
        <section id="meta-2" class="widget widget_meta  wow fadeInUp">
          <h2 class="widget-title">Meta</h2>
          <ul >
            <li ><a href="#">Site Admin</a></li>
            <li><a href="#">Log out</a></li>
            <li ><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            <li ><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            <li ><a href="#" title="">WordPress.org</a></li>
          </ul>
        </section>
        
        <!--Meta  end--> 
        
        <!--Meta  start-->
        <section id="meta-2" class="widget widget_meta  wow fadeInUp">
          <h2 class="widget-title">Text</h2>
          <p>Subscribe to our free newsletter to be in touch with our new articles. Subscribe to our free newsletter to be in touch with our new articles. Subscribe to our free newsletter to be in touch with our new articles.</p>
        </section>
        
        <!--Meta  end--> 
        
        <!--Meta  start-->
        <section id="meta-2" class="widget  wow fadeInUp">
          <h2 class="widget-title">custom menu</h2>
          <ul>
            <li><a href="#">Magzine</a></li>
            <li><a href="#">Bootstrap</a></li>
            <li><a href="#">CSS3</a></li>
            <li><a href="#">HTML5</a></li>
          </ul>
        </section>
        
        <!--Meta  end--> 
        
      </aside>
      <!--aside--> 
      
    </div>
  </div>
</section>
<!--/Home content--> 

<?php
get_footer();
