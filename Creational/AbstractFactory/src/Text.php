<?php
namespace Creational\AbstractFactory;

/**
 * Class Text.
 *
 * @author ladams1776
 */
abstract class Text implements MediaInterface
{
    /**
     *
     * @var string
     */
    protected $text;
    
    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}
