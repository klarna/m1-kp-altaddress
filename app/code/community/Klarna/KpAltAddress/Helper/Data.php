<?php
/**
 * This file is part of the Klarna KP AltAddress module
 *
 * (c) Klarna Bank AB (publ)
 *
 * For the full copyright and license information, please view the NOTICE
 * and LICENSE files that were distributed with this source code.
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