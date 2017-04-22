<?php

/**
 * Test class for eea-flexible-payment method main file
 *
 * @since         1.0.0
 * @package       EventEspresso\FlexiblePaymentMethod
 * @subpackage    tests
 */
class eea_flexible_payment_method_tests extends EE_UnitTestCase
{

    /**
     * Tests the loading of the main file
     *
     * @since 0.0.1.dev.002
     */
    function test_loading_new_payment_method()
    {
        $this->assertEquals(10, has_action('AHEE__EE_System__load_espresso_addons', 'load_espresso_flexible'));
        $this->assertTrue(class_exists('EE_Flexible_Payment_Method'));
    }
}
