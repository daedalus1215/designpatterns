<?php
namespace Creational\FactoryMethod;

/**
 * Description of GermanFactory
 *
 */
class GermanFactory extends FactoryMethod
{
    /**
     * 
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch($type)
        {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $obj = new Porsche();
                // we can specialize the way we want some concrete Vehicle since
                // we know the class.
                $obj->addTuningAMG();
                
                return $obj;
            default:
                throw new \InvalidArgumentException("$type is not a valid Vehicle");
        }
    }
}
