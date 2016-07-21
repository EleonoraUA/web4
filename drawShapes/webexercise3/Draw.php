<?php

/**
 * Created by PhpStorm.
 * User: Eleonora
 * Date: 19.07.2016
 * Time: 22:09
 */

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Draw extends Command
{
    protected function configure()
    {
        $this
            ->setName('draw')
            ->setDescription('Draw figures')
            ->addArgument(
                'draw',
                InputArgument::IS_ARRAY,
                'Draw figures'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "DRAw";
        //$output->writeln($text);
    }
}