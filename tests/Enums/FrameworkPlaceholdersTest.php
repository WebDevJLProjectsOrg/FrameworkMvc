<?php

/**
 * 
 * @since Test Suite v1.0.0
 */

namespace WebDevJL\Framework\Tests\Enums;

use WebDevJL\Framework\Enums\FrameworkPlaceholders;

class FrameworkPlaceholdersTest extends \PHPUnit_Framework_TestCase {

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
    $result = new FrameworkPlaceholders();
    $this->assertInstanceOf('WebDevJL\Framework\Enums\FrameworkPlaceholders', $result);
  }
  
  //Write the next tests below...
  
}