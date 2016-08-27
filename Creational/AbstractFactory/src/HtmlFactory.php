<?php
namespace Creational\AbstractFactory;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HtmlFactory
 *
 * @author ladams1776
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * Creates a picture component.
     * 
     * @param string $path
     * @param string $name
     * @return Html\Picture|Picture
     */
    public function createPicture($path, $name = '') 
    {
        return new Html\Picture($path, $name);
    }
    
    /**
     * Creates a text component.
     * 
     * @param string $content
     * @return Html\Text|Text
     */
    public function createText($content) 
    {
        return new Html\Text($content);
    }

}
