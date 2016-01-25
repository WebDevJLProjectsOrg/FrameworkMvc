<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\Framework\Tests\BO;

use WebDevJL\Framework\BO\NewFileItem;

class NewFileItemTest extends \PHPUnit_Framework_TestCase {

    protected $app;

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        $this->app = new \WebDevJL\Framework\Tests\TestApplication();
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $this->assertNotNull($this->app);
        $result = new NewFileItem($this->app);
        $this->assertInstanceOf('WebDevJL\Framework\BO\NewFileItem', $result);
    }

    //Write the next tests below...
}
