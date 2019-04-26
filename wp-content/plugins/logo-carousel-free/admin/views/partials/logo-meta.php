<?php
/**
 * This file add meta box to logo post
 * @package wpl-logo-carousel
 */

$this->metaboxform->url_disabled( array(
	'id'    => 'wpl_lcp_logo_link_option',
	'name'  => __( 'Custom URL', 'wpl-logo-carousel' ),
	'desc'  => __( 'Type logo link url.', 'wpl-logo-carousel' ),
	'after' => __( ' This feature is available in <a href="https://shapedplugin.com/plugin/logo-carousel-pro/" target="_blank">Pro Version</a> only.', 'wpl-logo-carousel' ),
	'std'   => '#',
) );
