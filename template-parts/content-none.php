<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital_Nomad
 */

?>
<section class="no-results not-found">
    <div id="page-banner-others" style="background-image: url(<?php echo get_template_directory_uri()?>/img/bg-2.jpg);">
        <div class="content  wow fdeInUp">
            <div class="container">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'digitalnomad' ); ?></h1>
                 </header><!-- .page-header -->
            </div>
        </div>
    </div>   
    <section id="home-content">
		<div class="container">
			<div class="row"> 
				<!--content body-->
				<div class="col-md-8">
					<div class="page-content">
						<?php
							if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
							<p>
								<?php
									printf(wp_kses(__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'digitalnomad' ),
										array('a' => array('href' => array(),),)
									),
									esc_url( admin_url( 'post-new.php' ) )
									);
								?>
							</p>
						<?php elseif ( is_search() ) : ?>
						<p>
							<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'digitalnomad' ); ?>
						</p>
						<?php
							get_search_form();
						else : ?>
						<p>
							<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'digitalnomad' ); ?>
						</p>
						<?php
							get_search_form();

						endif; ?>
					</div><!-- .page-content -->
				</div>
			</div>
        </div>
    </section>
</section><!-- .no-results -->
