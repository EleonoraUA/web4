<?php

/**
 * Created by PhpStorm.
 * User: eleonoria
 * Date: 7/18/16
 * Time: 1:32 PM
 */
class Ellipse extends Figure
{
    /**
     * @var float
     */
    private $radius1;
    
    /**
     * @var float
     */
    private $radius2;

    /**
     * Ellipse constructor.
     * @param float $radius1
     * @param float $radius2
     */
    public function __construct($x, $y, $radius1, $radius2, $color)
    {
        parent::__construct($x, $y, $color);
        $this->radius1 = $radius1;
        $this->radius2 = $radius2;
    }

    public function drawShape($image)
    {
        $color_ellipse = imagecolorallocate($image, $this->getColor()["red"], $this->getColor()["green"], $this->getColor()["blue"]);
        imagefilledellipse($image, $this->getX(), $this->getY(), $this->getRadius1(), $this->getRadius2(), $color_ellipse);
        return $image;
    }

    /**
     * @return float
     */
    public function getRadius1()
    {
        return $this->radius1;
    }

    /**
     * @param float $radius1
     */
    public function setRadius1($radius1)
    {
        $this->radius1 = $radius1;
    }

    /**
     * @return float
     */
    public function getRadius2()
    {
        return $this->radius2;
    }

    /**
     * @param float $radius2
     */
    public function setRadius2($radius2)
    {
        $this->radius2 = $radius2;
    }
    
    
}