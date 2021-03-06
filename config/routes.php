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

use Cake\Core\Configure;
use Cake\Routing\Router;

Router::plugin(
    'Multidimensional/Cakephpify',
    ['path' => '/'],
    function ($routes) {
        $routes->prefix('shopify', function ($routes) {
        $shopifyApiKeys = array_keys(Configure::read('Multidimensional/Cakephpify'));
        if (is_array($shopifyApiKeys) && count($shopifyApiKeys) >= 0) {
            $routes->connect(
                '/:apiKey/install',
                ['controller' => 'Install', 'action' => 'index'],
                ['apiKey' => implode('|', $shopifyApiKeys), 'pass' => ['apiKey']]
            );
        }
        });
    }
);

