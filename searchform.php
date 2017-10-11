<?php
/**
 * The template for displaying search forms in xtremelysocial
 *
 * @package totomo
 */
?>



<form action="<?php echo esc_url( home_url( '/' ) ); ?>">     
    <div class="input-group"> <span class="input-group-btn">
              <button  type="button" value="<?php echo esc_attr_x( 'Search', 'submit button', 'digitalnomad' ); ?>"><i class="fa  fa-search"></i></button>
              </span>
        <input class="form-control"   type="text"  placeholder="<?php echo esc_attr_x( 'Type Here&hellip;', 'placeholder', 'digitalnomad' ); ?>"  value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'digitalnomad' ); ?>">
        
        </div>
</form>

