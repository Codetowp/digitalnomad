<?php
/**
 * Class to display upsells.
 *
 * @package digitalnomad
 */
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}

/**
 * Class digitalnomad_info
 */
class dblogger_info extends WP_Customize_Control {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'info';

	/**
	 * Control label
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $label = '';


	/**
	 * The render function for the controler
	 */
	public function render_content() {
		$links = array(
			array(
				'name' => __( 'Documentation','digitalnomad' ),
				'link' => esc_url( '#' ),
			),
			array(
				'name' => __( 'Demo','digitalnomad' ),
				'link' => esc_url( '#' ),
			),
			array(
				'name' => __( 'Leave a review','digitalnomad' ),
				'link' => esc_url( '#' ),
			),
			array(
				'name' => __( 'Buy us a coffee','digitalnomad' ),
				'link' => esc_url( '#' ),
			),
		); ?>


		<div class="dblogger-theme-info">
			<?php
			foreach ( $links as $item ) {  ?>
				<a href="<?php echo esc_url( $item['link'] ); ?>" target="_blank"><?php echo esc_html( $item['name'] ); ?></a>
				<?php
			} ?>
		</div>
		<?php
	}
}
