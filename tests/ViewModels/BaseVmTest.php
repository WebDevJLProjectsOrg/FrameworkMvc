<?php

/**
 * @locked
 * @since Test Suite v1.0.0
 */

namespace WebDevJL\Framework\Tests\ViewModels;

use WebDevJL\Framework\ViewModels\BaseVm;

class BaseVmTest extends \PHPUnit_Framework_TestCase {

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
        $result = new BaseVm($this->app);
        $this->assertInstanceOf('WebDevJL\Framework\ViewModels\BaseVm', $result);
    }

    //Write the next tests below...
}
