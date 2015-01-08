<?php

if (!defined('EVENT_ESPRESSO_VERSION'))
	exit('No direct script access allowed');
/**
 * Event Espresso
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @ package			Event Espresso
 * @ author			Seth Shoultes
 * @ copyright		(c) 2008-2011 Event Espresso  All Rights Reserved.
 * @ license			http://eventespresso.com/support/terms-conditions/   * see Plugin Licensing *
 * @ link					http://www.eventespresso.com
 * @ version		 	4.3
 *
 * ------------------------------------------------------------------------
 *
 * flexible_payment_details_content
 *
 * @package			Event Espresso
 * @subpackage		
 * @author				Mike Nelson
 *
 * ------------------------------------------------------------------------
 */
?>
		<div class="event-display-boxes">
			<h4 id="flexible_title" class="payment_type_title section-heading"><?php echo $flexible_title ?></h4>
			<p class="instruct"><?php echo $payment_instructions; ?></p>
			</div>
		</div>
		<?php
// End of file flexible_payment_details_content.template.php
// Location: wp-content/plugins/ee4-flexible-payment-method/payment-methods/Flexible_Onsite/templates/flexible_payment_details_content.template.php