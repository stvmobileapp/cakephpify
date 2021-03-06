<?php
/**
 *      __  ___      ____  _     ___                           _                    __
 *     /  |/  /_  __/ / /_(_)___/ (_)___ ___  ___  ____  _____(_)___  ____   ____ _/ /
 *    / /|_/ / / / / / __/ / __  / / __ `__ \/ _ \/ __ \/ ___/ / __ \/ __ \ / __ `/ /
 *   / /  / / /_/ / / /_/ / /_/ / / / / / / /  __/ / / (__  ) / /_/ / / / // /_/ / /
 *  /_/  /_/\__,_/_/\__/_/\__,_/_/_/ /_/ /_/\___/_/ /_/____/_/\____/_/ /_(_)__,_/_/
 *
 * CakePHPify : CakePHP Plugin for Shopify API Authentication
 * Copyright (c) Multidimension.al (http://multidimension.al)
 * Github : https://github.com/multidimension-al/cakephpify
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright  Copyright © 2016-2017 Multidimension.al (http://multidimension.al)
 * @link       https://github.com/multidimension-al/cakephpify CakePHPify Github
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Multidimensional\Cakephpify\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ShopsFixture extends TestFixture
{

    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10],
        'domain' => ['type' => 'string', 'length' => 255, 'null' => false],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false],
        'shop_owner' => ['type' => 'string', 'length' => 255, 'null' => false],
        'address1' => ['type' => 'string', 'length' => 255, 'null' => false],
        'address2' => ['type' => 'string', 'length' => 255, 'null' => false],
        'city' => ['type' => 'string', 'length' => 255, 'null' => false],
        'province_code' => ['type' => 'string', 'length' => 10, 'null' => false],
        'province' => ['type' => 'string', 'length' => 255, 'null' => false],
        'zip' => ['type' => 'string', 'length' => 10, 'null' => false],
        'country' => ['type' => 'string', 'length' => 2, 'null' => false],
        'country_code' => ['type' => 'string', 'length' => 2, 'null' => false],
        'country_name' => ['type' => 'string', 'length' => 255, 'null' => false],
        'source' => ['type' => 'string', 'length' => 255, 'null' => true],
        'phone' => ['type' => 'string', 'length' => 100, 'null' => false],
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'customer_email' => ['type' => 'string', 'length' => 255, 'null' => true],
        'latitude' => ['type' => 'decimal', 'length' => 10, 'precision' => 8],
        'longitude' => ['type' => 'decimal', 'length' => 11, 'precision' => 8],
        'primary_location_id' => ['type' => 'integer', 'length' => 10, 'null' => true],
        'primary_locale' => ['type' => 'string', 'length' => 10, 'default' => 'en'],
        'currency' => ['type' => 'string', 'length' => 10, 'default' => 'USD'],
        'iana_timezone' => ['type' => 'string', 'length' => 255, 'null' => false],
        'money_format' => ['type' => 'string', 'length' => 255, 'default' => '${{amount}}', 'null' => false],
        'money_with_currency_format' => ['type' => 'string', 'length' => 255, 'default' => '${{amount}} USD', 'null' => false],
        'taxes_included' => ['type' => 'boolean', 'null' => true],
        'tax_shipping' => ['type' => 'boolean', 'null' => true],
        'country_taxes' => ['type' => 'boolean', 'null' => true],
        'plan_display_name' => ['type' => 'string', 'length' => 255, 'null' => false],
        'plan_name' => ['type' => 'string', 'length' => 255, 'null' => false],
        'has_discounts' => ['type' => 'integer', 'length' => 1, 'null' => true],
        'has_gift_cards' => ['type' => 'integer', 'length' => 1, 'null' => true],
        'myshopify_domain' => ['type' => 'string', 'length' => 255, 'null' => false],
        'google_apps_domain' => ['type' => 'string', 'length' => 255, 'null' => true],
        'google_apps_login_enabled' => ['type' => 'string', 'length' => 255, 'null' => true],
        'money_in_emails_format' => ['type' => 'string', 'length' => 255, 'default' => '${{amount}}', 'null' => false],
        'money_with_currency_in_emails_format' => ['type' => 'string', 'length' => 255, 'default' => '${{amount}} USD', 'null' => false],
        'eligible_for_payments' => ['type' => 'boolean', 'null' => true],
        'requires_extra_payments_agreement' => ['type' => 'boolean', 'null' => true],
        'password_enabled' => ['type' => 'boolean', 'null' => true],
        'has_storefont' => ['type' => 'boolean', 'null' => true],
        'eligible_for_card_reader_giveaway' => ['type' => 'boolean', 'null' => true],
        'finances' => ['type' => 'boolean', 'null' => true],
        'setup_required' => ['type' => 'boolean', 'null' => true],
        'force_ssl' => ['type' => 'boolean', 'null' => true],
        '_constraints' => [
            'PRIMARY' => ['type' => 'primary', 'columns' => ['id']]
            ],
        '_indexes' => [
                'domain' => ['type' => 'index', 'columns' => ['myshopify_domain']]
        ]
    ];
}
