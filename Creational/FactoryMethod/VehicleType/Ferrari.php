<?php
namespace Creational\FactoryMethod\VehicleType;

/**
 * Description of Ferrari
 *
 * @author theAdmin
 */
class Ferrari implements VehicleInterface
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
