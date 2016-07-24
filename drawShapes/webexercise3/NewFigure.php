<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Created by PhpStorm.
 * User: Eleonora
 * Date: 19.07.2016
 * Time: 21:20
 */
class NewFigure extends Command
{
    protected function configure()
    {
        $this
            ->setName('new')
            ->setDescription('enter figure and params')
            ->addArgument(
                'new',
                InputArgument::IS_ARRAY,
                'Figure and parameters'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argv = $input->getArgument("new");
        switch ($argv[0]) {
            case "rectangle":
                $figure = new Rectangle($argv[1], $argv[2], $argv[3], $argv[4], array('red' => $argv[5], 'green' => $argv[6], 'blue' => $argv[7]));
                break;
            case "square":
                $figure = new Square($argv[1], $argv[2], $argv[3], array('red' => $argv[4], 'green' => $argv[5], 'blue' => $argv[6]));
                break;
            case "circle":
                $figure = new Circle($argv[1], $argv[2], $argv[3], array('red' => $argv[4], 'green' => $argv[5], 'blue' => $argv[6]));
                break;
            case "ellipse":
                $figure = new Ellipse($argv[1], $argv[2], $argv[3], $argv[4], array('red' => $argv[5], 'green' => $argv[6], 'blue' => $argv[7]));
                break;
            default:
                $figure = new Ellipse($argv[1], $argv[2], $argv[3], $argv[4], array('red' => $argv[5], 'green' => $argv[6], 'blue' => $argv[7]));
                break;
        }
        $serialized_figure = serialize($figure);
        file_put_contents('figures.txt', $serialized_figure);
        //$output->writeln($text);
    }

}