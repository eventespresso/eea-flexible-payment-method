<?php
/*
  Plugin Name: Event Espresso - Flexible Payment Method (EE 4.6+)
  Plugin URI: http://www.eventespresso.com
  Description: Flexible payments is an off-site payment option for Event Espresso for accepting payments. You can provide your registrants/attendee with specific information on how to pay for their registrations (e.g. call a phone number to pay, pay at the event, etc).

  Version: 1.0.1.rc.007

  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2014 Event Espresso (email : support@eventespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
 *
 * ------------------------------------------------------------------------
 *
 * Event Espresso
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @ package		Event Espresso
 * @ author			Event Espresso
 * @ copyright	(c) 2008-2014 Event Espresso  All Rights Reserved.
 * @ license		http://eventespresso.com/support/terms-conditions/   * see Plugin Licensing *
 * @ link				http://www.eventespresso.com
 * @ version	 	EE4
 *
 * ------------------------------------------------------------------------
 */
define('EE_FLEXIBLE_VERSION', '1.0.1.rc.007');
define('EE_FLEXIBLE_PLUGIN_FILE', __FILE__);

function load_espresso_flexible()
{
    if (class_exists('EE_Addon')) {
        require_once(plugin_dir_path(__FILE__) . 'EE_Flexible_Payment_Method.class.php');
        EE_Flexible_Payment_Method::register_addon();
    }
}

add_action('AHEE__EE_System__load_espresso_addons', 'load_espresso_flexible');


// End of file espresso_flexible_payment_method.php
// Location: wp-content/plugins/ee4-flexible-payment-method/espresso-flexible-payment-method.php
