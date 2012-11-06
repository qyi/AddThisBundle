<?php

namespace Rithis\AddThisBundle\Twig\Extension;

use Twig_Extension;
use Twig_Function_Method;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AddThisExtension extends Twig_Extension
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            'addthis'               => new Twig_Function_Method($this, 'renderAddThis'),
            'addthis_buttons'       => new Twig_Function_Method($this, 'renderAddThisButtons'),
            'addthis_initialize'    => new Twig_Function_Method($this, 'renderAddThisInitialize'),
        );
    }

    public function renderAddThis()
    {
        return $this->renderAddThisButtons() . "\n" . $this->renderAddThisInitialize();
    }

    public function renderAddThisButtons($style = 1)
    {
        return $this->container->get('rithis.addthis.helper')
            ->renderButtons('RithisAddThisBundle::style/twig/' . $style . '.html.twig');
    }

    public function renderAddThisInitialize($parameters = array())
    {
        $parameters = array(
            'pubid' => $this->container->getParameter('rithis.addthis.pubid'),
            'async' => $this->container->getParameter('rithis.addthis.async'),
            'domready' => $this->container->getParameter('rithis.addthis.domready'),
            'parameters' => array_merge(
                $this->container->getParameter('rithis.addthis.ui'),
                $this->container->getParameter('rithis.addthis.sharing'),
                $parameters
            )
        );
            
        return $this->container->get('rithis.addthis.helper')
            ->initialize($parameters, 'RithisAddThisBundle::initialize.html.twig');
    }

    public function getName()
    {
        return 'rithis_addthis';
    }
}
