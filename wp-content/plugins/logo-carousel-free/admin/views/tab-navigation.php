<?php
/**
 * This file display meta box tab
 * @package wpl-logo-carousel
 */

$current_screen        = get_current_screen();
$the_current_post_type = $current_screen->post_type;
if ( $the_current_post_type == 'wpl_lcp_shortcodes' ) {
	global $post;
	?>
	<div class="wpl-metabox-framework">
		<div class="sp_lc_shortcode_header">
			<div class="sp_lc_shortcode_header_logo">
				<img src="<?php echo WPL_LC_URL . 'admin/assets/images/logo.png' ?>" alt="Logo Carousel">
			</div>
			<div class="sp_lc_shortcode_header_support">
				<a href="https://shapedplugin.com/support-forum/" target="_blank"><i
						class="fa fa-support"></i><span>Support</span></a>
			</div>
		</div>
		<div class="lc_shortcode text-center">
			<div class="lc-col-lg-3">
				<div class="lc_shortcode_content">
					<h2 class="lc-shortcode-title"><?php _e( 'Shortcode', 'wpl-logo-carousel' ); ?> </h2>
					<p><?php _e( 'Copy and paste this shortcode into your posts or pages:', 'wpl-logo-carousel' ); ?></p>
					<div class="lc-sc-code selectable" >[logocarousel <?php echo 'id="' . $post->ID . '"';
					?>]</div>
				</div>
			</div>
			<div class="lc-col-lg-3">
				<div class="lc_shortcode_content">
					<h2 class="lc-shortcode-title"><?php _e( 'Template Include', 'wpl-logo-carousel' ); ?> </h2>
					<p><?php _e( 'Paste the PHP code into your template file:', 'wpl-logo-carousel' ); ?></p>
					<div class="lc-sc-code selectable">
						&lt;?php echo do_shortcode('[logocarousel id="<?php echo $post->ID ?>"]'); ?&gt;</div>
				</div>
			</div>
			<div class="lc-col-lg-3">
				<div class="lc_shortcode_content">
					<h2 class="lc-shortcode-title"><?php _e( 'Post or Page editor', 'wpl-logo-carousel' ); ?> </h2>
					<p><?php _e( 'Insert the shortcode with the TinyMCE button:', 'wpl-logo-carousel' ); ?></p>
					<img class="back-image" src="<?php echo WPL_LC_URL . 'admin/assets/images/lc-tiny-mce.png' ?>" alt="">
				</div>
			</div>
		</div>

		<div class="splc-shortcode-body">
			<div class="wplmb-nav nav-tab-wrapper current">
				<a class="nav-tab nav-tab-active" data-tab="splc-tab-1"><i class="sp-icon fa fa-wrench"></i>General
					Settings</a>
				<a class="nav-tab" data-tab="splc-tab-2"><i class="sp-icon fa fa-sliders"></i>Carousel Settings</a>
				<a class="nav-tab" data-tab="splc-tab-3"><i class="sp-icon fa fa-paint-brush"></i>Style Settings</a>
				<a class="nav-tab" data-tab="splc-tab-4"><i class="sp-icon fa fa-font"></i>Typography</a>
				<a class="nav-tab" data-tab="splc-tab-5 "><i class="sp-icon fa fa-rocket"></i>Upgrade to Pro</a>
			</div>
			<?php
			include_once( 'partials/general-settings.php' );
			include_once( 'partials/carousel-settings.php' );
			include_once( 'partials/stylization.php' );
			include_once( 'partials/typography.php' );
			include_once( 'partials/upgrade-to-pro.php' );
			?>
			<div class="splc-nav-background"></div>
		</div>

	</div>
	<?php
}
