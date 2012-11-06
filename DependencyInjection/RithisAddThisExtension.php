<?php

namespace Rithis\AddThisBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Config\Definition\Processor;

class RithisAddThisExtension extends Extension
{
    /**
     *
     * @param array            $configs    An array of configuration settings
     * @param ContainerBuilder $container  A ContainerBuilder instance
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('twig.yml');

        $configuration = new Configuration();
        $processor = new Processor();
        $config = $processor->processConfiguration($configuration, $configs);

        foreach (array('pubid', 'async', 'domready', 'ui', 'sharing') as $item) {
            $container->setParameter('rithis.addthis.' . $item, $config[$item]);
        }
    }
    
    /**
     * Configuration alias for bundle.
     *
     * @return string
     */
    public function getAlias()
    {
        return 'rithis_add_this';
    }
}