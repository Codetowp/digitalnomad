<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Digital_Nomad
 */

get_header(); ?>

<!-- banner Page
    ==========================================-->
<div id="page-banner-others" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>/img/bg-2.jpg);">
  <div class="content  wow fdeInUp">
  <div class="container">
    <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'digitalnomad' ); ?></h1>
    </div>
  </div>
</div>

<section id="home-content">
  <div class="container">
    <div class="row"> 
      
      <!--content body-->
      <div class="col-md-10 col-md-offset-1 col-sm-12">
        
      <h1>404.</h1>
       <p><strong><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'digitalnoamd' ); ?></strong></p> 
        
           <!--Search-->
        <section class="widget widget_search  wow fadeInUp" style="width:50%; margin-bottom:80px;" >
          <form>
            <div class="input-group"> <span class="input-group-btn">
              <button  type="button"><i class="fa  fa-search"></i></button>
              </span>
              <input class="form-control" type="text" placeholder="Search what you need....">
             </div>
          </form>
        </section>
        <!--/Search--> 
        
      </div>
      <!--/content body--> 
     
      
    </div>
  </div>
</section>

<?php
get_footer();
