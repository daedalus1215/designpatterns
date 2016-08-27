<?php
namespace Creational\AbstractFactory;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Class Picture
 *
 * @author ladams1776
 */
class Picture 
{
    /**
     *
     * @var string
     */
    protected $path;
    
    /**
     * @var string
     */
    protected $name;
    
    /**
     * 
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->name = (string) $name;
        $this->path = (string) $path;
    }    
}
