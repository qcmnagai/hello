<?php
namespace Qcmnagai\Hello;

use PHPUnit\Framework\TestCase;

class HelloCommandTest extends TestCase
{
    /**
     * @var HelloCommand
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new HelloCommand;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Qcmnagai\Hello\HelloCommand', $actual);
    }
}
