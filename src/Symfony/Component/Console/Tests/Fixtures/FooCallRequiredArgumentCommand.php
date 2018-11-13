<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FooCallRequiredArgumentCommand extends Command
{
    public $input;
    public $output;

    protected function configure()
    {
        $this
            ->setName('foo:call')
            ->setDescription('The foo:call command')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('interact called');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $output->writeln('called');
        // $command = $this->getApplication()->find('foo:bar');
        // $command->run(new ArrayInput(Array(
        //     'command'=> 'foo:bar',
        //     'fooarg'=> 'foovalue'
        // )), $output);
    }
}
