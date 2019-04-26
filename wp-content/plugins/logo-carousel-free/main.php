<?php
/**
 * Plugin Name:       Logo Carousel
 * Plugin URI:        https://shapedplugin.com/plugin/logo-carousel-pro/
 * Description:       Display and highlight your clients, partners, supporters, and sponsors logos on your WordPress website in a Logo Carousel. Easy Shortcode Generator | Customizable | No Coding Knowledge Required!
 * Version:           3.2.4
 * Author:            ShapedPlugin
 * Author URI:        https://shapedplugin.com
 * Text Domain:       wpl-logo-carousel
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Handles core plugin hooks and action setup.
 *
 * @package wpl-logo-carousel
 * @since 3.0
 */
if ( ! class_exists( 'WPLimb_SPLC' ) ) {
	class WPLimb_SPLC {
		/**
		 * Plugin version
		 *
		 * @var string
		 */
		public $version = '3.2.4';

		/**
		 * @var WPLimb_SPLC single instance of the class
		 *
		 * @since 3.0
		 */
		protected static $_instance = null;

		/**
		 * @var SPLC_Logo $project
		 */
		public $logo;

		/**
		 * @var SPLC_Router $router
		 */
		public $router;

		/**
		 * @var SPLC_Router $shortcode
		 */
		public $shortcode;

		/**
		 * @var SPLC_MetaBox $metabox
		 */
		public $metabox;

		/**
		 * Main SPLC Instance
		 *
		 * @since 3.0
		 * @static
		 * @see wpl_lc()
		 * @return self Main instance
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

		/**
		 * Constructor for the WPLimb_SPLC class
		 */
		function __construct() {
			// Define constants.
			$this->define_constants();

			// Required class file include.
			spl_autoload_register( array( $this, 'autoload' ) );

			// Include required files.
			$this->includes();

			// instantiate classes.
			$this->instantiate();

			// Initialize the filter hooks.
			$this->init_filters();

			// Initialize the action hooks.
			$this->init_actions();
		}

		/**
		 * Flush rewrite rules
		 */
		function wpl_lc_flush_rewrites() {
			// call your CPT registration function here (it should also be hooked into 'init').
			$this->logo->register_post_type();
			flush_rewrite_rules();
		}

		/**
		 * Initialize WordPress filter hooks
		 *
		 * @return void
		 */
		function init_filters() {
			add_filter( 'plugin_action_links_' . WPL_LC_BASE, array( $this, 'add_plugin_action_links' ), 10, 2 );
			add_filter( 'plugin_row_meta', array( $this, 'after_logo_carousel_row_meta' ), 10, 4 );
			add_filter( 'manage_wpl_lcp_shortcodes_posts_columns', array( $this, 'add_shortcode_column' ) );
		}

		/**
		 * Initialize WordPress action hooks
		 *
		 * @return void
		 */
		function init_actions() {
			add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'public_scripts' ) );
			add_action( 'manage_wpl_lcp_shortcodes_posts_custom_column', array( $this, 'add_shortcode_form' ), 10, 2 );
			add_action( 'activated_plugin', array( $this, 'redirect_help_page' ) );
		}

		/**
		 * Define wpl_lc constants
		 *
		 * @since 3.0
		 */
		public function define_constants() {
			$this->define( 'WPL_LC_VERSION', $this->version );
			$this->define( 'WPL_LC_PATH', plugin_dir_path( __FILE__ ) );
			$this->define( 'WPL_LC_URL', plugin_dir_url( __FILE__ ) );
			$this->define( 'WPL_LC_BASE', plugin_basename( __FILE__ ) );
		}

		/**
		 * Define constant if not already set
		 *
		 * @since 3.0
		 *
		 * @param string $name
		 * @param string|bool $value
		 */
		public function define( $name, $value ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		/**
		 * Plugin Scripts and Styles
		 *
		 */
		function public_scripts() {
				// CSS Files.
				wp_enqueue_style( 'slick', WPL_LC_URL . 'public/assets/css/slick.css', array(), WPL_LC_VERSION );
				wp_enqueue_style( 'font-awesome-min', WPL_LC_URL . 'public/assets/css/font-awesome.min.css', array(), WPL_LC_VERSION );
				wp_enqueue_style( 'lcf-style', WPL_LC_URL . 'public/assets/css/style.css', array(), WPL_LC_VERSION );

				// JS Files.
				wp_register_script( 'slick-min-js', WPL_LC_URL . 'public/assets/js/slick.min.js', array( 'jquery' ), WPL_LC_VERSION, true );
				wp_register_script( 'splc-script', WPL_LC_URL . 'public/assets/js/splc_script.js', array( 'jquery', 'slick-min-js' ), WPL_LC_VERSION, true );
		}


		/**
		 * Load textdomain for plugin.
		 *
		 * @since 3.0
		 */
		public function load_plugin_textdomain() {
			load_textdomain( 'wpl-logo-carousel', WP_LANG_DIR . '/wpl-logo-carousel/wpl-logo-carousel-' . apply_filters( 'plugin_locale', get_locale(), 'wpl-logo-carousel' ) . '.mo' );
			load_plugin_textdomain( 'wpl-logo-carousel', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		}

		/**
		 * Add plugin action menu
		 *
		 * @since 3.0
		 *
		 * @param array $links
		 * @param string $file
		 *
		 * @return array
		 */
		public function add_plugin_action_links( $links ) {

			$new_links = array(
				sprintf( '<a href="%s" style="%s">%s</a>', 'https://shapedplugin.com/plugin/logo-carousel-pro/', 'color:#1dab87;font-weight:bold', __( 'Go Pro!', 'wpl-logo-carousel' ) ),
				sprintf( '<a href="%s">%s</a>', admin_url( 'edit.php?post_type=wpl_lcp_shortcodes' ), __( 'Shortcode Generator', 'wpl-logo-carousel' ) ),
			);

			return array_merge( $new_links, $links );

			return $links;
		}

		/**
		 * Add plugin row meta link
		 *
		 * @since 3.0
		 *
		 * @param $plugin_meta
		 * @param $file
		 *
		 * @return array
		 */

		function after_logo_carousel_row_meta( $plugin_meta, $file ) {
			if ( $file == plugin_basename( __FILE__ ) ) {
				$plugin_meta[] = '<a href="https://shapedplugin.com/plugin/logo-carousel-pro/" target="_blank">' . __( 'Live Demo', 'wpl-logo-carousel' ) . '</a>';
			}
			return $plugin_meta;
		}


		/**
		 * Autoload class files on demand
		 *
		 * @param string $class requested class name
		 */
		function autoload( $class ) {
			$name = explode( '_', $class );
			if ( isset( $name[1] ) ) {
				$class_name = strtolower( $name[1] );
				$filename   = WPL_LC_PATH . '/class/' . $class_name . '.php';

				if ( file_exists( $filename ) ) {
					require_once $filename;
				}
			}
		}

		/**
		 * Instantiate all the required classes
		 *
		 * @since 3.0
		 */
		function instantiate() {

			$this->logo      = SPLC_Logo::getInstance();
			$this->shortcode = SPLC_Shortcode::getInstance();
			$this->metabox   = SPLC_MetaBox::getInstance();

			do_action( 'splc_instantiate', $this );
		}

		/**
		 * page router instantiate
		 *
		 * @since 3.0
		 */
		function page() {
			$this->router = SPLC_Router::instance();

			return $this->router;
		}

		/**
		 * Include the required files
		 *
		 * @return void
		 */
		function includes() {
			//$this->version = WPL_LC_VERSION;
			$this->page()->splc_function();
			$this->router->includes();
		}

		/**
		 * ShortCode Column
		 *
		 * @return mixed
		 */
		function add_shortcode_column() {
			$new_columns['cb']        = '<input type="checkbox" />';
			$new_columns['title']     = __( 'Carousel Title', 'wpl-logo-carousel' );
			$new_columns['shortcode'] = __( 'Shortcode', 'wpl-logo-carousel' );
			$new_columns['']          = '';
			$new_columns['date']      = __( 'Date', 'wpl-logo-carousel' );

			return $new_columns;
		}

		/**
		 * @param $column
		 * @param $post_id
		 */
		function add_shortcode_form( $column, $post_id ) {

			switch ( $column ) {

				case 'shortcode':
					$column_field = '<input style="width: 270px;padding: 6px;" type="text" onClick="this.select();" readonly="readonly" value="[logocarousel ' . 'id=&quot;' . $post_id . '&quot;' . ']"/>';
					echo $column_field;
					break;
				default:
					break;

			} // end switch

		}

		/**
		 * Redirect after active
		 *
		 * @param $plugin
		 */
		function redirect_help_page( $plugin ) {
			if ( $plugin == WPL_LC_BASE ) {
				exit( wp_redirect( admin_url( 'edit.php?post_type=wpl_logo_carousel&page=lc_help' ) ) );
			}
		}

	}
}


/**
 * Returns the main instance.
 *
 * @since 3.0
 * @return WPLimb_SPLC
 */
function wpl_lc() {
	return WPLimb_SPLC::instance();
}

// wpl_lc instance.
$cpm = wpl_lc();
