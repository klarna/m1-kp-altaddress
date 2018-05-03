<?php
/**
 * This file is part of the Klarna KP AltAddress module
 *
 * (c) Klarna Bank AB (publ)
 *
 * For the full copyright and license information, please view the NOTICE
 * and LICENSE files that were distributed with this source code.
 */

class Klarna_KpAltAddress_Model_System_Config_Source_Shipping_Method
{
    /**
     * Get other address shipping method option
     *
     * @return array
     */
    public function toOptionArray()
    {
        $helper   = Mage::helper('klarna_payments');
        $options  = array(
            array(
                'label' => $helper->__('store pick-up'),
                'value' => 'store pick-up'
            ),
            array(
                'label' => $helper->__('pick-up point'),
                'value' => 'pick-up point'
            ),
            array(
                'label' => $helper->__('registered box'),
                'value' => 'registered box'
            ),
            array(
                'label' => $helper->__('unregistered box'),
                'value' => 'unregistered box'
            )
        );
        return $options;
    }
}
