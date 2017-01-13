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
 
namespace Multidimensional\Shopify\Tests\Controller\Component;

use Multidimensional\Shopify\Controller\Component\ShopifyAPIComponent;

use App\Controller\Component\PagematronComponent;
use Cake\Controller\Controller;
use Cake\Controller\ComponentRegistry;
use Cake\Event\Event;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\TestSuite\TestCase;

class ShopifyAPIComponentTest extends TestCase {
 
     public $component = null;
     public $controller = null;
 
     public function setUp() {
        parent::setUp();
        $request = new Request();
        $response = new Response();
        $this->controller = $this->getMockBuilder('Cake\Controller\Controller')
            ->setConstructorArgs([$request, $response])
            ->setMethods(null)
            ->getMock();
        $registry = new ComponentRegistry($this->controller);
        $this->component = new PagematronComponent($registry);
        $event = new Event('Controller.startup', $this->controller);
        $this->component->startup($event);
    }
    
    public function tearDown() {
        parent::tearDown();
        unset($this->component, $this->controller);
    }
    
    public function testSetShopDomain() {
        
        
    }
    
    public function testGetShopDomain() {
        
    }
    
    public function testSetAccessToken() {
        
    }
    
    public function testGetAuthorizeUrl() {
        
    }
    
    public function testGetAccessToken() {
        
    }
    
    public function testSetNonce() {
        
    }
    
    public function testGetNonce() {
        
    }
 
}
