<?php

/**
 * Created by PhpStorm.
 * User: eleonoria
 * Date: 7/18/16
 * Time: 1:32 PM
 */

class Square extends Figure
{
    /**
     * @var float
     */
    private $a;

    /**
     * Square constructor.
     * @param $a
     */
    public function __construct($x, $y, $a, $color)
    {
        parent::__construct($x, $y, $color);
        $this->a = $a;
    }

    public function drawShape($image)
    {
        $color_square = imagecolorallocate($image, $this->getColor()["red"], $this->getColor()["green"], $this->getColor()["blue"]);
        imagefilledrectangle($image, $this->getX(), $this->getY(), $this->getX() + $this->getA(), $this->getY() + $this->getA(), $color_square);
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
}