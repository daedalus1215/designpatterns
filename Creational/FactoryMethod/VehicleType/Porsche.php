<?php
namespace Creational\FactoryMethod\VehicleType;


class Porsche implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;
    
    /**
     * 
     * @param string $rgb
     */
    public function setColor($rgb) 
    {
        $this->color = $rgb;
    }
    
    /**
     * Although tuning by AMG is only offered for Mercedes
     * cars, this is a valid coding example.
     */
    public function addTuningAMG()
    {
        
    }         
}
