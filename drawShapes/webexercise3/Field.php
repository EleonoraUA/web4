<?php

/**
 * Created by PhpStorm.
 * User: eleonoria
 * Date: 7/18/16
 * Time: 2:01 PM
 */
class Field
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
     * @var array
     */
    private $backgroundColor;

    /**
     * Field constructor.
     * @param float $x
     * @param float $y
     * @param $backgroundColor
     */
    public function __construct($x, $y, $backgroundColor) {
        $this->x = $x;
        $this->y = $y;
        $this->backgroundColor = $backgroundColor;
    }

    public function createAndDrawBackground() {
        $image = imagecreatetruecolor($this->getX(), $this->getY());
        $background = imagecolorallocate($image, $this->getBackgroundColor()["red"], $this->getBackgroundColor()["green"], $this->getBackgroundColor()["blue"]);
        imagefilledrectangle($image, 0, 0, $this->getX(), $this->getY(), $background);
        return $image;
    }

    /**
     * @return float
     */
    public function getX() {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX($x) {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY() {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY($y) {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    /**
     * @param mixed $backgroundColor
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }
}