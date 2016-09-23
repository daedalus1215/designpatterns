<?php
namespace Creational\FactoryMethod\test;


require_once('vendor\autoload.php');
/**
 * Description of FactoryMethodTest
 *
 */
class FactoryMethodTest extends \PHPUnit\Framework\TestCase
{
    protected $types = array(
        FactoryMethod::CHEAP,
        FactoryMethod::FAST        
    );
    
    
    public function getShop()
    {
        return array(
            array(new \Creational\FactoryMethod\Factory\GermanFactory()),
            array(new \Creational\FactoryMethod\Factory\ItalianFactory())
        );
    }
              
    /**
     * 
     * @dataProvider getShop
     */
    public function testCreation(\Creational\FactoryMethod\FactoryMethod $shop)
    {
        // this test method acts as a client for the factory. We don't care
        // about the factory, all we know is it can produce a vehicle.
        foreach ($this->types as $type) {
            $vehicle = $shop->create($type);
            $this->assertInstanceOf('Creational\FactoryMethod\VehicleInterface', $vehicle);
        }        
    }
    
    /**
     * @dataProvider getShop
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType(\Creational\FactoryMethod\FactoryMethod $shop)
    {
        $shop->create('spaceship');
    }    
}
