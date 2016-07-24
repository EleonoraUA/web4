<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
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
        $toDraw = array();
        $hasField = false;
        foreach ($argv as $figureParams) {
            $figure = NULL;
            $params = explode(":", $figureParams);
            switch ($params[0]) {
                case "field":
                    $hasField = true;
                    $figure = new Field($params[1], $params[2], array('red' => $params[2], 'green' => $params[3], 'blue' => $params[5]));
                    break;
                case "rectangle":
                    $figure = new Rectangle($params[1], $params[2], $params[3], $params[4], array('red' => $params[5], 'green' => $params[6], 'blue' => $params[7]));
                    break;
                case "square":
                    $figure = new Square($params[1], $params[2], $params[3], array('red' => $params[4], 'green' => $params[5], 'blue' => $params[6]));
                    break;
                case "circle":
                    $figure = new Circle($params[1], $params[2], $params[3], array('red' => $params[4], 'green' => $params[5], 'blue' => $params[6]));
                    break;
                case "ellipse":
                    $figure = new Ellipse($params[1], $params[2], $params[3], $params[4], array('red' => $params[5], 'green' => $params[6], 'blue' => $params[7]));
                    break;
            }
            $toDraw[] = $figure;
        }
        if (!$hasField) {
            $toDraw["field"] = new Field(1000, 1000, array('red' => 200, 'green' => 255, 'blue' => 255));
        }
        $this->drawAndDownloadImage($toDraw);
    }

    private function drawAndDownloadImage($figures)
    {
        $image = $figures["field"]->createAndDrawBackground();
        unset($figures["field"]);
        foreach ($figures as $figure) {
            $figure->drawShape($image);
        }
        header('Content-Type: image/jpeg');
        imagejpeg($image, 'image.jpeg');
    }

}