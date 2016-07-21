<?php

/**
 * Created by PhpStorm.
 * User: eleonoria
 * Date: 7/18/16
 * Time: 1:36 PM
 */

require_once "Shape.php";

abstract class Figure implements Shape
{

    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    /**
     * @var float
     */
    private $color;

    /**
     * Figure constructor.
     * @param float $x
     * @param float $y
     * @param float $color
     */
    public function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param float $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }



    public function drawShape($image)
    {
        return $image;
    }
}