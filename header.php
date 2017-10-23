<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Nomad
 */

?>
<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php //echo esc_html(add_theme_support( 'title-tag' )); ?>
<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>
<header id="menutop"> 
  
  <!-- Navigation
    ==========================================-->
  <nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
       
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
            
            
            
         <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">    
            <?php echo $img; ?><?php echo bloginfo( 'name' ); ?>  <span><?php echo esc_html(GET_OPTION('blogdescription')); ?></span>
        </a> </div>
      <!--search icon-->
       <a class="search-up pull-right"><i class="fa fa-search"></i></a> 
      
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
        
        	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
            <?php
				wp_nav_menu( array( 
                        'theme_location'    => 'menu-1', 
                        'menu_class'        => 'nav navbar-nav navbar-right' ) );
            ?>
            <?php else : ?>
				<li ><a  href=" <?php echo esc_url(admin_url( 'nav-menus.php' ));?>  "><?php echo esc_html_e( 'Add a Primary Menu', 'digitalnomad' );?>  </a></li>
			<?php endif; ?>

      </div>
      <!-- /.navbar-collapse --> 
     </div>
    <!-- /.container-fluid --> 
    
  </nav>
  <div class="clearfix"></div>
  <!-- search-block -->
  <div class="search-block" style="">
   <a class="search-up pull-right"><i class="fa fa-close"></i></a> 
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
        
           <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="search">
						<input  type="text"  placeholder="<?php echo esc_attr_x( 'Type Here&hellip;', 'placeholder', 'digitalnomad' ); ?>"  value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'digitalnomad' ); ?>" size="40" />
           </form>
      </div>
      </div>
    </div>
  </div>
  <!-- /search-block --> 
</header>
