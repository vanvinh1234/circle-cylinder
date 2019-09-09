<?php


class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height= $height;
    }
    public function calculateVolume(){
        return $this->getArea()*$this->height;
    }
    public function toString()
    {
        echo "Volume is: ". $this->calculateVolume();
    }
}