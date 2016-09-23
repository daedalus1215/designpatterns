<?php
namespace Creational\FactoryMethod\VehicleType;



class Bicycle implements \Creational\FactoryMethod\VehicleInterface
{
    /**
     *
     * @var string 
     */
    protected $color;
    
    public function setColor($rgb) 
    {
        $this->color = $rgb;
    }
}
