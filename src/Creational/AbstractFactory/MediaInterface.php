<?php
namespace Creational\AbstractFactory;

/**
 * Interface MediaInterface.
 * 
 * This contract is not part of the pattern, in general case, each cmponent are not related.
 *
 * @author ladams1776
 */
interface MediaInterface 
{

    /**
     * some crude rendering from JSON or html output (dependend on concrete class).
     * 
     * @return string
     */
    public function render();
}
