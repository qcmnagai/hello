<?php
namespace Qcmnagai\Hello;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->addArgument('name', InputArgument::OPTIONAL, 'name.', 'World');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Hello %s.', ucfirst($input->getArgument('name'))));
    }
}
