<?php
/**
 * typography.php
 * @package logo-carousel
 */
?>
<div id="splc-tab-4" class="sp-lc-tab-content">
	<?php
	$the_pro_handler = new SPLC_Free_Loader();
?>
	<div id="sp-lc-tab-4" class="sp-lc-mbf-tab-typography">
	<div class="sp-lcpro-notice">These Typography (840+ Google Fonts) options are available in the <b><a href="https://shapedplugin.com/plugin/logo-carousel-pro/" target="_blank">Pro Version</a></b>.</div>
	</div>
	<?php
	$this->metaboxform->typography_type( array(
		'id'      => 'lc_carousel_title_font',
		'name'    => __( 'Section Title Font', 'wpl-logo-carousel' ),
		'desc'    => __( 'Set carousel title font properties.', 'wpl-logo-carousel' ),
	) );
	$this->metaboxform->typography_type( array(
		'id'      => 'lc_logo_title_font',
		'name'    => __( 'Logo Title Font', 'wpl-logo-carousel' ),
		'desc'    => __( 'Set logo title font properties.', 'wpl-logo-carousel' ),
	) );
	$this->metaboxform->typography_type( array(
		'id'      => 'lc_body_font',
		'name'    => __( 'Logo Body/Description Font', 'wpl-logo-carousel' ),
		'desc'    => __( 'Set logo description font properties.', 'wpl-logo-carousel' ),
	) );
	?>
</div>
