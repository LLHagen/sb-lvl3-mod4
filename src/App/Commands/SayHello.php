<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    protected function configure()
    {
        $this->setName('say_hello')
            ->setDescription('Say hello.')
            ->setHelp('Say hello.')
            ->addArgument('welcome', InputArgument::REQUIRED, 'Pass the welcome string.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $welcome = $input->getArgument('welcome');

        return $output->writeln(sprintf('%s', 'Привет ' . $welcome));
    }
}
