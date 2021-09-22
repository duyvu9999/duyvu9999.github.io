<?php
/**
 * Admin functions
 *
 * @package Post_Grid_Elementor_Addon
 */

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function pgea_render_admin_page() {
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

		<div id="poststuff">

			<div id="post-body" class="metabox-holder columns-2">

				<div id="post-body-content">

					<div class="tab-wrapper">
						<ul class="tabs-nav">
							<li class="tab-active"><a href="#tab-features" class="button"><?php esc_html_e( 'Features', 'post-grid-elementor-addon' ); ?></a></li>
							<li><a href="#tab-free-vs-pro" class="button"><?php esc_html_e( 'Free vs Pro', 'post-grid-elementor-addon' ); ?></a></li>
						</ul>
					</div><!-- .tab-wrapper -->

					<div class="tabs-stage">
						<div id="tab-features" class="meta-box-sortables ui-sortable active">
							<div class="postbox">
								<div class="inside inside-content">
									<h4>Key features</h4>
									<ul>
										<li>Multiple customization options and easy to use</li>
										<li>Fully responsive layout for all devices</li>
										<li>Create any kind of design without coding</li>
										<li>Multiple features for blog grid block</li>
										<li>Compatible with all WordPress themes</li>
										<li>Multiple layouts for post grid block</li>
									</ul>
								</div><!-- .inside -->
							</div><!-- .postbox -->
						</div><!-- .meta-box-sortables -->

						<div id="tab-free-vs-pro" class="meta-box-sortables ui-sortable">
							<div class="postbox">
								<div class="inside inside-content">
									<img src="<?php echo plugin_dir_url( __DIR__ ) . 'assets/images/free-vs-pro.png'; ?>" alt="" />
								</div><!-- .inside -->
							</div><!-- .postbox -->
						</div><!-- .meta-box-sortables -->

					</div><!-- .tabs-stage -->

				</div><!-- #post-body-content -->

				<div id="postbox-container-1" class="postbox-container">

					<div class="meta-box-sortables">
						<div class="postbox">

							<h3><span>Upgrade to Pro</span></h3>
							<div class="inside">
								<p>Buy pro plugin unlock more awesome features.</p>
								<a href="<?php echo esc_url( PGEA_UPGRADE_URL ); ?>" id="purchase" class="button button-primary" target="_blank">Buy Pro Plugin</a>
							</div> <!-- .inside -->

						</div><!-- .postbox -->
					</div><!-- .meta-box-sortables -->

					<div class="meta-box-sortables">
						<div class="postbox">

							<h3><span>Our Products</span></h3>
							<div class="inside">
								<ul>
								<li><a href="https://wpconcern.com/plugins/woocommerce-product-tabs/" target="_blank">WooCommerce Product Tabs</a></li>
								<li><a href="https://wpconcern.com/plugins/post-grid-elementor-addon/" target="_blank">Post Grid Elementor Addon</a></li>
								<li><a href="https://wpconcern.com/plugins/advanced-google-recaptcha/" target="_blank">Advanced Google reCAPTCHA</a></li>
								</ul>
							</div> <!-- .inside -->

						</div><!-- .postbox -->
					</div><!-- .meta-box-sortables -->

					<div class="meta-box-sortables">
						<div class="postbox">

							<h3><span>Have any queries?</span></h3>
							<div class="inside">
								<p>If you have any queries or feedback, please feel free to send us an email to <code>support@wpconcern.com</code></p>
							</div><!-- .inside -->

						</div><!-- .postbox -->
					</div><!-- .meta-box-sortables -->

					<div class="meta-box-sortables">
						<div class="postbox">

							<h3><span>Important Links</span></h3>
							<div class="inside">
								<ul>
								<li><a href="https://wpconcern.com/documentation/post-grid-elementor-addon/" target="_blank">Documentation</a></li>
								<li><a href="https://wpconcern.com/request-customization/" target="_blank">Customization Request</a></li>
								<li><a href="https://wordpress.org/plugins/post-grid-elementor-addon/#reviews" target="_blank">Submit a Review</a></li>
								</ul>
							</div> <!-- .inside -->

						</div><!-- .postbox -->
					</div><!-- .meta-box-sortables -->

				</div><!-- #postbox-container-1 .postbox-container -->

			</div><!-- #post-body -->
		</div><!-- #poststuff -->

	</div><!-- .wrap -->
	<?php
}

/**
 * Register menu page.
 *
 * @since 1.0.0
 */
function pgea_register_menu() {
	add_menu_page( esc_html__( 'Post Grid Elementor Addon', 'post-grid-elementor-addon' ), esc_html__( 'Post Grid Elementor Addon', 'post-grid-elementor-addon' ), 'manage_options', 'pgea-welcome', 'pgea_render_admin_page', 'dashicons-admin-site-alt3' );
}

add_action( 'admin_menu', 'pgea_register_menu' );

/**
 * Load admin assets.
 *
 * @since 1.0.0
 *
 * @param string $hook Hook name.
 */
function pgea_load_admin_scripts( $hook ) {
	if ( 'toplevel_page_pgea-welcome' === $hook ) {
		wp_enqueue_style( 'pgea-admin-style', plugins_url( 'assets/css/admin.css', dirname( __FILE__ ) ), array(), '1.0.0' );
		wp_enqueue_script( 'pgea-admin-script', plugins_url( 'assets/js/admin.js', dirname( __FILE__ ) ), array( 'jquery' ), '1.0.0', true );
	}
}

add_action( 'admin_enqueue_scripts', 'pgea_load_admin_scripts' );
