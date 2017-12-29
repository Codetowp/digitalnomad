<?php
/*
Plugin Name: Author-wdiget
Plugin URI:  http://burstfly.com
Description: A plugin containing various widgets created in a TutsPlus series on WordPress widgets
Version: 0.1
Author: Rijo Burstfly
Author URI: http://burstfly.com
Text Domain: author-wdiget
License: GPLv2
 
*/
 
 
class TutsplusText_Widget extends WP_Widget {
 
    public function __construct() {
     
        parent::__construct(
            'tutsplustext_widget',
            __( 'Author-Widget', 'tutsplustextdomain' ),
            array(
                'classname'   => 'tutsplustext_widget',
                'description' => __( 'A basic text widget for Author details', 'tutsplustextdomain' )
                )
        );
       
        load_plugin_textdomain( 'tutsplustextdomain', false, basename( dirname( __FILE__ ) ) . '/languages' );
       
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
        $title      = apply_filters( 'widget_title', $instance['title'] );
        $message    = $instance['message'];
        $user_img_src =$instance['user_img_src'];
        $bg_src  = $instance['bg_src'];
         
        echo $before_widget;
         
       
               ?>              
        <section class="widget ">
          <div class="user-info"> <?php if($bg_src !== ''){ ?><img src="<?php echo esc_html($bg_src); ?>" class="banner"> <?php } ?><span><?php if($user_img_src !== ''){ ?> <img src="<?php echo esc_html($user_img_src) ; ?>"><?php }?>
            <h5><?php echo esc_html( $title); ?></h5>
            <p><?php echo esc_html($message); ?></p>
            </span> </div>
        </section>
     <?php  
         
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
         
        $instance = $old_instance;
         
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['message'] = strip_tags( $new_instance['message'] );
        $instance['user_img_src'] = strip_tags($new_instance['user_img_src']);
        $instance['bg_src']=strip_tags($new_instance['bg_src']);
         
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
     
        $title      = esc_attr( $instance['title'] );
        $message    = esc_attr( $instance['message'] );
        $user_img_src    = esc_attr($instance['user_img_src']);
        $bg_src     = esc_attr($instance['bg_src']);
        ?>
         
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Simple Message'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"type="text" value="<?php echo $message; ?>" />
        </p>
        <label for="<?php echo $this->get_field_id('user_img_src'); ?>"><?php _e('Author Image Url'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('user_img_src'); ?>" name="<?php echo $this->get_field_name('user_img_src'); ?>"type="text" value="<?php echo $user_img_src; ?>" />
        <p>
          <p>
            <label for="<?php echo $this->get_field_id('bg_src'); ?>"><?php _e('Background Image Url'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('bg_src'); ?>" name="<?php echo $this->get_field_name('bg_src'); ?>"type="text" value="<?php echo $bg_src; ?>" />

          </p>
     
    <?php 
    }
     
}
 
/* Register the widget */
add_action( 'widgets_init', function(){
     register_widget( 'TutsplusText_Widget' );
});