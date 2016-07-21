<?php

/**
 * Created by PhpStorm.
 * User: eleonoria
 * Date: 7/18/16
 * Time: 1:31 PM
 */

class Circle extends Figure
{
    private $radius;

    public function drawShape($image)
    {
        $color_circle = imagecolorallocate($image, $this->getColor()["red"], $this->getColor()["green"], $this->getColor()["blue"]);
        imagefilledellipse($image, $this->getX(), $this->getY(), $this->getRadius(), $this->getRadius(), $color_circle);
        return $image;
    }

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($x, $y, $radius, $color)
    {
        parent::__construct($x, $y, $color);
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    
    
}