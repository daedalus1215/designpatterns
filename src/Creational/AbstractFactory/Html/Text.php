<?php

namespace Creational\AbstractFactory\Html;
use Creational\AbstractFactory\Text as BaseText;


/**
 * Class Text
 *
 * @author ladams1776
 */
class Text extends BaseText
{
    /**
     * Some crude rendering from HTML output.
     * 
     * @return string
     */
    public function render() 
    {
        return '<div>'.htmlspecialchars($this->text).'</div>';
    }
}
