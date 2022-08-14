<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class AppGuestCommand extends Command
{
    protected function configure()
    {
        $this->setName('app:guest');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('Введите ваше имя: ', 'guest');
        $name = $helper->ask($input, $output, $questionName);

        $questionOld = new Question('Введите ваш возраст: ', 18);
        $old = $helper->ask($input, $output, $questionOld);

        $sex = new ChoiceQuestion(
            'Введите ваш пол: ',
            // choices can also be PHP objects that implement __toString() method
            ['м', 'ж']
        );
        $sex->setErrorMessage('Color %s is invalid.');
        $sexData = $helper->ask($input, $output, $sex);

        $output->writeln('Здравствуйте, '. $name . ' ' . 'Ваш возраст: '. $old . ' ' . 'Ваш пол: '. $sexData);
    }
}
