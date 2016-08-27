<?php
namespace Creational\AbstractFactory\Html;
use Creational\AbstractFactory\Picture as BasePicture;
/**
 * Description of Picture
 *
 * @author ladams1776
 */
class Picture extends BasePicture
{
    /**
     * Some crude rendering from HTML output.
     * @return string
     */
    public function render() 
    {
        return sprintf('<img src="%s" title="%s" />', $this->path, $this->name);
    }
}
