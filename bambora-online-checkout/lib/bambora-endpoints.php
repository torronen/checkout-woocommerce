<?php
/**
 * Copyright (c) 2017. All rights reserved Bambora Online.
 *
 * This program is free software. You are allowed to use the software but NOT allowed to modify the software.
 * It is also not legal to do any changes to the software and distribute it in your own name / brand.
 *
 * All use of the payment modules happens at your own risk. We offer a free test account that you can use to test the module.
 *
 * @author    Bambora Online
 * @copyright Bambora Online (http://bambora.com)
 * @license   Bambora Online
 *
 */

define( 'BAMBORA_ENDPOINT_TRANSACTION', 'https://transaction-v1.api-eu.bambora.com' );
define( 'BAMBORA_ENDPOINT_MERCHANT', 'https://merchant-v1.api-eu.bambora.com' );
define( 'BAMBORA_ENDPOINT_DATA', 'https://data-v1.api-eu.bambora.com' );
define( 'BAMBORA_ENDPOINT_SUBSCRIPTION', 'https://subscription-v1.api-eu.bambora.com' );
define( 'BAMBORA_ENDPOINT_CHECKOUT', 'https://api.v1.checkout.bambora.com' );
define( 'BAMBORA_CHECKOUT_ASSETS', 'https://v1.checkout.bambora.com/Assets' );

/**
 * Bambora Endpoints
 */
class Bambora_Endpoints {

    /**
     * Get Transaction Endpoint
     *
     * @return mixed
     */
    public static function get_transaction_endpoint() {
        return constant( 'BAMBORA_ENDPOINT_TRANSACTION' );
    }

    /**
     * Get Merchant Endpoint
     *
     * @return mixed
     */
    public static function get_merchant_endpoint() {
        return constant( 'BAMBORA_ENDPOINT_MERCHANT' );
    }

    /**
     * Get Data Endpoint
     *
     * @return mixed
     */
    public static function get_data_endpoint() {
        return constant( 'BAMBORA_ENDPOINT_DATA' );
    }

    /**
     * Get Subscription Endpoint
     *
     * @return mixed
     */
    public static function get_subscription_endpoint() {
        return constant( 'BAMBORA_ENDPOINT_SUBSCRIPTION' );
    }

    /**
     * Get Checkout Endpoint
     *
     * @return mixed
     */
    public static function get_checkout_endpoint() {
        return constant( 'BAMBORA_ENDPOINT_CHECKOUT' );
    }

    /**
     * Get Assets Endpoint
     *
     * @return mixed
     */
    public static function get_checkout_assets() {
        return constant( 'BAMBORA_CHECKOUT_ASSETS' );
    }
}
