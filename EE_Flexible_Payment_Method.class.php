<?php if ( ! defined( 'EVENT_ESPRESSO_VERSION' )) { exit('NO direct script access allowed'); }
// Define the plugin directory path and URL.
define( 'EE_FLEXIBLE_BASENAME', plugin_basename( EE_FLEXIBLE_PLUGIN_FILE ) );
define( 'EE_FLEXIBLE_PATH', plugin_dir_path( __FILE__ ) );
define( 'EE_FLEXIBLE_URL', plugin_dir_url( __FILE__ ) );
/**
 *
 * Class  EE_Flexible_Payment_Method
 *
 * @package			Event Espresso
 * @subpackage		espresso-flexible-payment-method
 * @author			Event Espresso
 * 
 */
class EE_Flexible_Payment_Method extends EE_Addon {

	/**
	 *    class constructor
	 * @return EE_Flexible_Payment_Method
	 */
	function __construct() {
	}

	public static function register_addon() {
		// Register addon via Plugin API.
		EE_Register_Addon::register(
			'Flexible_Payment_Method',
			array(
				'version' => EE_FLEXIBLE_VERSION,
				'min_core_version' => '4.6.0.dev.000',
				'main_file_path' => EE_FLEXIBLE_PLUGIN_FILE,
				'admin_callback' => 'additional_flexible_admin_hooks',
				// if plugin update engine is being used for auto-updates. not needed if PUE is not being used.
				'pue_options' => array(
					'pue_plugin_slug' => 'eea-flexible-payment-method',
					'plugin_basename' => EE_FLEXIBLE_BASENAME,
					'checkPeriod' => '24',
					'use_wp_update' => FALSE,
				),
				'payment_method_paths' => array(
					EE_FLEXIBLE_PATH . 'payment_methods' . DS . 'Flexible_Onsite'
				),
		));
	}



	/**
	 * 	Additional admin hooks.
	 *
	 *  @access 	public
	 *  @return 	void
	 */
	public static function additional_flexible_admin_hooks() {
		// is admin and not in M-Mode ?
		if ( is_admin() && ! EE_Maintenance_Mode::instance()->level() ) {
			add_filter( 'plugin_action_links', array( 'EE_Flexible_Payment_Method', 'plugin_actions' ), 10, 2 );
		}
	}

	/**
	 * Add a settings link to the Plugins page.
	 *
	 * Add a settings link to the Plugins page, so people can go straight from the plugin page to the settings page.
	 * @param $links
	 * @param $file
	 * @return array
	 */
	public static function plugin_actions( $links, $file ) {
		if ( $file == EE_FLEXIBLE_BASENAME ) {
			// Before flexible links
			array_unshift( $links, '<a href="admin.php?page=espresso_payment_settings">' . __('Settings') . '</a>' );
		}
		return $links;
	}
}
// End of file EE_Flexible_Payment_Method.class.php
// Location: wp-content/plugins/ee4-flexible-payment-method/EE_Flexible_Payment_Method.class.php
