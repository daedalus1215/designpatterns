<?php
namespace Creational\FactoryMethod\Factory;


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
            case parent::FAST:
                return new Ferrari();
            default: 
                throw new \InvalidArgumentException("$type is not a valid vehicle.");
        }
    }
}
