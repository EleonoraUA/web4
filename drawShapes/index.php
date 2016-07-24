<?php
require_once 'vendor/autoload.php';


use Symfony\Component\Console\Application;

/*
 * Figure constructor takes parameters in order
 * 1. x
 * 2. y
 * 3. radius or side sizes (x2 and y2 in rectangle case)
 * 4. color
 */

spl_autoload_register(function($className) {
    include $className.'.php';
});


$application = new Application();
$application->add(new NewFigure());
$application->add(new Draw());
$application->run();





//$field = new Field(1000, 1000, array('red' => 200, 'green' => 255, 'blue' => 255));
//$circleLeft = new Circle(300, 700, 150, array('red' => 102, 'green' => 0, 'blue' => 0));
//$circleRight = new Circle(700, 700, 150, array('red' => 102, 'green' => 0, 'blue' => 0));
//$square = new Square(380, 300, 250, array('red' => 0, 'green' => 76, 'blue' => 153));
//$ellipse = new Ellipse(710, 470, 80, 55, array('red' => 255, 'green' => 255, 'blue' => 0));
//$rectangle = new Rectangle(200, 410, 800, 650, array('red' => 0, 'green' => 76, 'blue' => 150));
//
//
//$image = $field->createAndDrawBackground();
//$image = $circleLeft->drawShape($image);
//$image = $circleRight->drawShape($image);
//$image = $rectangle->drawShape($image);
//$image = $ellipse->drawShape($image);
//$image = $square->drawShape($image);

//header('Content-Type: image/jpeg');
//imagejpeg($image, 'img.jpeg');