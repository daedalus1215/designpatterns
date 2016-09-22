<?php
namespace Creational\Builder\test;

use Creational\Builder\BikeBuilder;
use Creational\Builder\BuilderInterface;
use Creational\Builder\CarBuilder;
use Creational\Builder\Director;

//require_once('vendor\autoload.php');
/**
 * DirectorTest tests the builder pattern.
 *
 * @author theAdmin
 */
class DirectorTest extends \PHPUnit\Framework\TestCase
{
    protected $directory;
    
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
        $this->assertInstanceOf('Creational\Builder\Parts\Vehicle', $newVehicle);
    }
    
}
