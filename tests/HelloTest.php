<?php
namespace Qcmnagai\Hello;

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    /**
     * @var Hello
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new Hello;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Qcmnagai\Hello\Hello', $actual);
    }
}
