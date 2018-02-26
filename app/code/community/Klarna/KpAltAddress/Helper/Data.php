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
 * @package    Klarna_KpAltaddress
 * @author     Fei Chen <fei.chen@klarna.com>
 */

/**
 * Klarna KcoAltAddress helper
 */
class Klarna_KpAltAddress_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @param $store
     *
     * @return bool
     */
    public function isAltAddressEnabled($store)
    {
        return (bool)Mage::getStoreConfigFlag('payment/klarna_emd/other_delivery_address_enabled', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getShippingMethod($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_shipping_method', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getShippingType($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_shipping_type', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getFirstName($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_first_name', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getLastName($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_last_name', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getStreetAddress($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_street_address', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getStreetNumber($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_street_number', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getPostalCode($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_postcode', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getCity($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_city', $store);
    }

    /**
     * @param $store
     *
     * @return mixed
     */
    public function getCountry($store)
    {
        return Mage::getStoreConfig('payment/klarna_emd/other_delivery_address_country', $store);
    }
}