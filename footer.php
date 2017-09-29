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
      
      <!--website details-->
      <div class="footer-site-content"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo-s.png" >
        <p>Digital Nomad </p>
      </div>
      
      <!--Page nav-->
      <div class="col-md-12 page-nav">
        <ul>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <!--/Page nav--> 
      
      <!--social-nav-->
      <div class="col-md-12 social-nav">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
        </ul>
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
