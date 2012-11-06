<?php

namespace Rithis\AddThisBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rithis_add_this');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('pubid')->isRequired()->end()
                ->scalarNode('async')->defaultValue(0)->end()
                ->scalarNode('domready')->defaultValue(0)->end()

                ->arrayNode('ui')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('services_exclude')->end()
                        ->arrayNode('services_compact')->end()
                        ->arrayNode('services_expanded')->end()
                        ->booleanNode('ui_click')->end()
                        ->scalarNode('ui_delay')->end()
                        ->scalarNode('ui_hover_direction')->end()
                        ->scalarNode('ui_open_windows')->end()
                        ->scalarNode('ui_offset_top')->end()
                        ->scalarNode('ui_offset_left')->end()
                        ->scalarNode('ui_cobrand')->end()
                        ->scalarNode('ui_language')->end()
                        ->booleanNode('ui_use_css')->end()
                        ->booleanNode('ui_use_addressbook')->end()
                        ->booleanNode('ui_508_compliant')->end()
                        ->booleanNode('data_track_clickback')->end()
                        ->scalarNode('data_ga_tracker')->end()
                    ->end()
                ->end()

                ->arrayNode('sharing')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('url')->end()
                        ->scalarNode('title')->end()
                        ->scalarNode('description')->end()
                        ->scalarNode('swfurl')->end()
                        ->scalarNode('width')->end()
                        ->scalarNode('height')->end()
                        ->scalarNode('email_template')->end()
                        ->arrayNode('email_vars')->end()
                        ->arrayNode('templates')->end()
                    ->end()
                ->end()
                
            ->end()
        ->end();

        return $treeBuilder;
    }
}
