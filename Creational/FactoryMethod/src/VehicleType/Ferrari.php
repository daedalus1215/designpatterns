<?php
namespace Creational\FactoryMethod\VehicleType;

/**
 * Description of Ferrari
 *
 * @author theAdmin
 */
class Ferrari implements \Creational\FactoryMethod\VehicleInterface
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
