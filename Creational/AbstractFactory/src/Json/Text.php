<?php
namespace Creational\AbstractFactory\Json;
use Creational\AbstractFactory\Text as BaseText;

/**
 * Class Text
 * 
 * Text is a text component with a JSON rendering
 *
 * @author ladams1776
 */
class Text extends BaseText
{
    public function render() 
    {
        return json_encode(array(
            'content' => $this->text
        ));
    }
}
