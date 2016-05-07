<?php

namespace Acme\PhpBench\Extension\Example\Command;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Command\Command;

class FooCommand extends Command
{
    private $message;

    public function __construct($message)
    {
        parent::__construct();
        $this->message = $message;
    }

    public function configure()
    {
        $this->setName('acme:foo');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->message);
    }
}
