<?php
namespace Creational\FactoryMethod\Factory;

use Creational\FactoryMethod\VehicleType\Bicycle;
use Creational\FactoryMethod\VehicleType\Ferrari;
use InvalidArgumentException;


/**
 * ItalianFactory is vehicle factory in Italy.
 *
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default: 
                throw new InvalidArgumentException("$type is not a valid vehicle.");
        }
    }
}
