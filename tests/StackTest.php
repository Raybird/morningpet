<?php namespace Raybird\Morning\Tests;

use Slim\App;

use Raybird\Morning\Main;

class BaseTest extends \PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    /**
     * psr-4 autoload test
     */
    public function testMain() 
    {
        $main = new Main();
        $this->assertEquals('0.0.2', $main->getVersion());
    }

    /**
     * slim app contain test
     */

    public function testIssetInContainer()
    {
        $app = new App();
        $this->assertTrue(isset($app->router));
    }
}