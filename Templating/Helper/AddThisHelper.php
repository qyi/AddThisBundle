<?php

namespace Rithis\AddThisBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\Templating\EngineInterface;

class AddThisHelper extends Helper
{
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating  = $templating;
    }

    public function initialize($parameters = array(), $name = null)
    {
        $name = $name ?: 'RithisAddThisBundle::initialize.html.php';

        return $this->templating->render($name, $parameters + array());
    }
    
    public function renderButtons($style = 1)
    {
        $name = is_string($style) ? $style : 'RithisAddThisBundle::style/php/' . $style . '.html.php';
        
        return $this->templating->render($name, array());
    }

    public function getName()
    {
        return 'addthis';
    }
}
