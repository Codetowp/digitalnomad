<?php
/**
 * @package Image Upload Widget digitalnomady
 */
/*
Plugin Name: Author widget
Plugin URI: http://www.digitalnomady.com/
Description: Image Upload Widget is a simple widget to upload an image.
Version: 1.0
Author: Rijo digitalnomady
Author URI: http://www.digitalnomady.com/
License: 
*/


class image_widget extends WP_Widget {
 
	/**
	 * Register widget with WordPress.
	 */
public function __construct() {
		parent::__construct(
	 		'image_widget', // Base ID
			'Author Widget', // Name
 
			array( 'description' => __( 'A widget to upload image', 'digitalnomad' ), ) // Args
		);
	}
 
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_name', $instance['title'] );
		$project= apply_filters('widget_sub_heading',$instance['project']);
		$link = apply_filters( 'widget_link', $instance['link'] );
		$image_uri = apply_filters( 'widget_image_uri', $instance['image_uri'] );
		echo $before_widget; ?>
        	
        	  <section class="widget ">
          <div class="user-info"> <img src="<?php echo esc_html($link); ?>" class="banner"> <span> <img src="<?php echo esc_url($instance['image_uri']); ?>">
            <h5><?php echo esc_html($title); ?></h5>
            <p><?php echo esc_html($project); ?></p>
            </span> </div>
        </section>
        
    <?php
		echo $after_widget;
	}
 
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
		$instance['project'] = ( ! empty( $new_instance['project'] ) ) ? strip_tags( $new_instance['project'] ) : '';
		$instance['image_uri'] = ( ! empty( $new_instance['image_uri'] ) ) ? strip_tags( $new_instance['image_uri'] ) : '';
		return $instance;
	}
 
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        if ( isset( $instance[ 'image_uri' ] ) ) {
			$image_uri = $instance[ 'image_uri' ];
		}
		else {
			$image_uri = __( '', 'digitalnomady' );
		}
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'digitalnomady' );
		}
		if ( isset( $instance[ 'link' ] ) ) {
			$link = $instance[ 'link' ];
		}
		else {
			$link = __( 'http://', 'digitalnomady' );
		}
		if ( isset( $instance[ 'project' ] ) ) {
			$project = $instance[ 'project' ];
		}
		else {
			$project = __( 'Demo', 'digitalnomady' );
		}
		
		
		?>
		<p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'digitalnomady'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('background url', 'digitalnomady'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php echo $link; ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('project'); ?>"><?php _e('project', 'digitalnomady'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('project'); ?>" id="<?php echo $this->get_field_id('project'); ?>" value="<?php echo $project; ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />
        <img class="custom_media_image" src="<?php echo $image_uri; ?>" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" />
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $image_uri; ?>">
       </p>
       <p>
        <input type="button" value="<?php _e( 'Upload Image', 'digitalnomady' ); ?>" class="button custom_media_upload" id="custom_image_uploader"/>
    </p>
   <!--  <input type="button" class="upload-button" data-target="input_1" value="Upload button 1" />
<input type="button" class="upload-button" data-target="input_2" value="Upload button 2" />
<input type="button" class="upload-button" data-target="input_3" value="Upload button 3" /> -->

<!-- inputs to receive the value -->
<!-- <input type="text" id="input_1" value="" />
<input type="text" id="input_2" value="" />
<input type="text" id="input_3" value="" /> -->
		<?php 
	}
	
}
add_action( 'widgets_init', create_function( '', 'register_widget( "image_widget" );' ) );
function digitalnomad_Script(){
  wp_enqueue_media();
  wp_enqueue_script('adsScript', get_template_directory_uri() .'/inc/widget/image-upload-widget.js');
}
add_action('admin_enqueue_scripts','digitalnomad_Script');