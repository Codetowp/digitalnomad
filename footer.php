<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Nomad
 */

?>

<!--/*footer*/-->
<footer class="footer-bottom">
  <div class="container">
    <div class="row text-center"> 
       
             <?php  
                $custom_logo = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo , 'full' );
                $logo_img_static   = get_template_directory_uri()."";
                
                if ( has_custom_logo() ) 
                {
                    $img='<img src="'. esc_url( $logo[0] ) .'" >';
                } 
                else 
                {
                    $img='<img src="'.$logo_img_static.'" >';
                }
			?>
      <!--website details-->
      <div class="footer-site-content"> <?php echo $img; ?>
        <p><?php echo bloginfo( 'name' ); ?></p>
      </div>
      
      <!--Page nav-->
      <div class="col-md-12 page-nav">
        <ul>  
          <?php
				wp_nav_menu( array( 
                        'theme_location'    => 'footer-menu', 
                        'menu_class'        => 'col-md-12 page-nav' ) );
            ?>
      
        </ul>
      </div>
      <!--/Page nav--> 
      
      <!--social-nav-->
      <div class="col-md-12 social-nav">
        
            <?php
                if ( is_active_sidebar( 'social' ) ) 
                    {
                         dynamic_sidebar( 'social' ); 
                    }
                    else
                    {
            ?>
          <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li></ul>
            <?php 	}?>

        
      </div>
      <!--/social nav--> 
      
      <!--social-nav-->
      <div class="col-md-12 social-nav"> </div>
      <!--/social nav--> 
      
      <!--copy-right-->
      <div class="col-md-12 copy-right">
        <p> &copy; Copyright 2017. All Rights Reserved.</p>
        <hr>
        <p> Designed by <a href="#">Dcrazed Team</a>.</p>
      </div>
      <!--/copy-right--> 
      
    </div>
  </div>
</footer>
<!--/*footer*/--> 
<?php wp_footer(); ?>

<script>
  // Bind as an event handler
$(document).on('click', '[data-lightbox]', lity);;
</script> 
<script>
new WOW().init();

</script> 
<script>
// Bind as an event handler
$(document).on('click', '[data-lightbox]', lity);
</script>
</body>
</html>
