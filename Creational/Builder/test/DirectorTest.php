<?php
namespace Creational\Builder\test;

use Creational\Builder\BikeBuilder;
use Creational\Builder\BuilderInterface;
use Creational\Builder\CarBuilder;
use Creational\Builder\Director;

/**
 * DirectorTest tests the builder pattern.
 *
 * @author theAdmin
 */
class DirectorTest 
{
    protected $director;
    
    protected function setUp()
    {
        $this->director = new Director();
    }
    
    public function getBuilder()
    {
        return array(
            array(new CarBuilder()),
            array(new BikeBuilder())
        );
    }
    
    /**
     * Here we test the builder process. Notice that the client doesn't know
     * anything about the concrete builder.
     * 
     * @dataProvider getBuilder
     */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        $this->assetInstanceOf('Creational\Builder\Parts\Vehicle', $newVehicle);
    }
    
}