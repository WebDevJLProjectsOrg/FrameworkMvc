<?php

/**
 * 
 * @since Test Suite v1.0.0
 */

namespace WebDevJL\Framework\Tests\Dal;

use WebDevJL\Framework\Dal\DbResult;

class DbResultTest extends \PHPUnit_Framework_TestCase {

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
    $result = new DbResult();
    $this->assertInstanceOf('WebDevJL\Framework\Dal\DbResult', $result);
  }
  
  //Write the next tests below...
  
}