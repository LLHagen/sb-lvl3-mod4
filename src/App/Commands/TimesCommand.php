<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TimesCommand extends Command
{
    protected function configure()
    {
        $this->setName('times')
            ->setDescription('Outputs the string --times times.')
            ->setHelp('Lets loop the line. Pass the --times option to specify how many times to output the string.')
            ->addArgument('string-circulation', InputArgument::REQUIRED, 'Pass a string to output.')
            ->addOption(
                'times',
                't',
                InputOption::VALUE_OPTIONAL,
                'Send the number of repetitions of the string. Default times=2',
                2
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $stringCirculation = $input->getArgument('string-circulation');

        $argument = $input->getOption('times');

        for ($i=0; $i < $argument; $i++) {
            $output->writeln(sprintf('%s', $stringCirculation));
        }
    }
}
