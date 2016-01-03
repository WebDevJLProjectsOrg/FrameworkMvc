<?php

/**
 * 
 * @since Test Suite v1.0.0
 */

namespace WebDevJL\Framework\Tests\Core;

use WebDevJL\Framework\Core\Globalization;

class GlobalizationTest extends \PHPUnit_Framework_TestCase {

  protected $app;

  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
      $this->app = new \WebDevJL\Framework\Tests\TestApplication();
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $result = new Globalization();
    $this->assertInstanceOf('WebDevJL\Framework\Core\Globalization', $result);
  }
  
  //Write the next tests below...
  
}