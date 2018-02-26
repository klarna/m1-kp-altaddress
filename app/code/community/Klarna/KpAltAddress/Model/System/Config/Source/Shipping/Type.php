<?php
/**
 * Copyright 2018 Klarna Bank AB (publ)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Klarna
 * @package    Klarna_KpAltAddress
 * @author     Fei Chen <jason.grim@klarna.com>
 */

/**
 * other shipping address type option
 */
class Klarna_KpAltAddress_Model_System_Config_Source_Shipping_Type
{
    /**
     * Get other shipping address type option
     *
     * @return array
     */
    public function toOptionArray()
    {
        $helper   = Mage::helper('klarna_payments');
        $options  = array(
            array(
                'label' => $helper->__('normal'),
                'value' => 'normal'
            ),
            array(
                'label' => $helper->__('express'),
                'value' => 'express'
            )
        );
        return $options;
    }
}
