<?php

/**
 * Created by PhpStorm.
 * User: eleonoria
 * Date: 7/18/16
 * Time: 1:31 PM
 */
class Rectangle extends Figure
{
    /**
     * @var float
     */
    private $a;

    /**
     * @var float
     */
    private $b;

    /**
     * Rectangle constructor.
     * @param float $a
     * @param float $b
     */
    public function __construct($x, $y, $a, $b, $color)
    {
        parent::__construct($x, $y, $color);
        $this->a = $a;
        $this->b = $b;
    }

    public function drawShape($image)
    {
        $color_rectangle = imagecolorallocate($image, $this->getColor()["red"], $this->getColor()["green"], $this->getColor()["blue"]);
        imagefilledrectangle($image, $this->getX(), $this->getY(), $this->getA(), $this->getB(), $color_rectangle);
        return $image;
    }

    /**
     * @return float
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param float $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return float
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param float $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }
}