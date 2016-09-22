<?php
namespace Creational\AbstractFactory\test;



use Creational\AbstractFactory\Factories\HtmlFactory;
use Creational\AbstractFactory\Factories\JsonFactory;
use Creational\AbstractFactory\Factories\AbstractFactory;

require_once('vendor\autoload.php');


/**
 * AbstractFactoryTest tests concrete factories.
 *
 * @author the_admin
 */
class AbstractFactoryTest extends \PHPUnit\Framework\TestCase//\PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }
    
    /**
     * This is the client of factories. Note that the client 
     * does not care which factory is given to him, he can create 
     * any component he wants and render how he wants.
     * 
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Lorem Ipsum'),
            $factory->createPicture('/image.jpg', 'caption'),
            $factory->createText('footnotes'),
        );
        
        $this->assertContainsOnly(
                'Creational\AbstractFactory\MediaInterface'
                , $article);
        
        /**
         * This is the time to look at the Builder pattern. This pattern
         * helps you to create complex objects like that article above with 
         * a given Abstract Factory.
         */
    }
}
