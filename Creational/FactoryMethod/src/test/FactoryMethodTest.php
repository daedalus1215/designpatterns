<?php
namespace Creational\FactoryMethod\test;

use Creational\FactoryMethod\Factory\FactoryMethod;
use Creational\FactoryMethod\Factory\GermanFactory;
use Creational\FactoryMethod\Factory\ItalianFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;


require_once('vendor\autoload.php');
/**
 * Description of FactoryMethodTest
 *
 */
class FactoryMethodTest extends TestCase
{
    protected $types = array(
        FactoryMethod::CHEAP,
        FactoryMethod::FAST        
    );
    
    
    public function getShop()
    {
        return array(
            array(new GermanFactory()),
            array(new ItalianFactory())
        );
    }
              
    /**
     * 
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
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
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType(FactoryMethod $shop)
    {
        $shop->create('spaceship');        
    }    
}
