<?php
/**
 * Bootstrap for eea-flexible-payment-method tests
 */

use EETests\bootstrap\AddonLoader;

$core_tests_dir = dirname(dirname(dirname(__FILE__))) . '/event-espresso-core/tests/';
//if still don't have $core_tests_dir, then let's check tmp folder.
if (! is_dir($core_tests_dir)) {
    $core_tests_dir = '/tmp/event-espresso-core/tests/';
}
require $core_tests_dir . 'includes/CoreLoader.php';
require $core_tests_dir . 'includes/AddonLoader.php';

define('EEA_FLEXIBLE_PAYMENT_METHOD_PLUGIN_DIR', dirname(dirname(__FILE__)) . '/');
define('EEA_FLEXIBLE_PAYMENT_METHOD_TESTS_DIR', EEA_FLEXIBLE_PAYMENT_METHOD_PLUGIN_DIR . 'tests/');


$addon_loader = new AddonLoader(
    EEA_FLEXIBLE_PAYMENT_METHOD_TESTS_DIR,
    EEA_FLEXIBLE_PAYMENT_METHOD_PLUGIN_DIR,
    'eea-flexible-payment-method.php'
);
$addon_loader->init();
