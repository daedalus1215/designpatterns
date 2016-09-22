<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Json;
/**
 * Class JsonFactory
 * 
 * JsonFactory is a factory for creating a family of JSON component
 * (example for ajax).
 *
 * @author ladams1776
 */
class JsonFactory extends AbstractFactory
{
    /**
     * Creates a picture component.
     * 
     * @param string $path
     * @param string $name
     * 
     * @return Json\Picture|Picture
     */
    public function createPicture($path, $name = '') 
    {
        return new Json\Picture($path, $name);
    }
    /**
     * Creates a text component.
     * 
     * 
     * @param string $content
     * @return \Creational\AbstractFactory\Json\Text
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }            
}
