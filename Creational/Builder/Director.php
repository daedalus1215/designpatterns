<?php
namespace Creational\Builder;

/**
 * Director is part of the builder pattern. It knows the interface of the builder and builds
 * a complex object with the help of the builder.
 * 
 * You can also inject many builders instead of one to build more complex objects
 */
class Director
{
    /**
     * The director doesn't know about concrete parts.
     * 
     * @param BuilderInterface $builder
     * @return type 
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();
        
        return $builder->getVehicle();
    }
    
}




