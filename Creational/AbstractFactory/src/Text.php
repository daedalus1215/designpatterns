<?php
namespace Creational\AbstractFactory;

/**
 * Class Text.
 *
 * @author the_admin
 */
class Text 
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
