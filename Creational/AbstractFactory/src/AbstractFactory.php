<?php
namespace Creational\AbstractFactory;

/**
 * Description of AbstractFactory
 *
 * @author heAdmin
 */
abstract class AbstractFactory 
{
    /**
     * Creates a text component.
     * 
     * @param string $content
     * 
     * @return Text
     */
    abstract public function createText($content);
}
