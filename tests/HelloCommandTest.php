<?php
namespace Qcmnagai\Hello;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

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

    public function testExecute()
    {
        $application = new Application();

        $application->add(new HelloCommand());

        $command = $application->find('hello');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command' => $command->getName(),
            'name' => 'foo'
        ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertContains('Hello Foo.', $output);
    }
}
