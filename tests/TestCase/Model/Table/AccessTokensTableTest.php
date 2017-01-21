<?php
/**
 * CakePHPify : CakePHP Plugin for Shopify API Authentication
 * Copyright (c) Multidimension.al (http://multidimension.al)
 * Github : https://github.com/multidimension-al/cakephpify
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     (c) Multidimension.al (http://multidimension.al)
 * @link          https://github.com/multidimension-al/cakephpify CakePHPify Github
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Multidimensional\Cakephpify\Test\Model\Table;

use Multidimensional\Cakephpify\Model\Table\AccessTokensTable;

use Cake\TestSuite\TestCase;

class AccessTokensTableTest extends TestCase
{

    public $fixtures = ['plugin.Multidimensional/Cakephpify.AccessTokens'];

    public function setUp()
    {
        parent::setUp();
    }
}