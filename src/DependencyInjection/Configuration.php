<?php

declare(strict_types=1);

/*
 * This file is part of the connectholland/env-var-loader-bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\EnvVarLoaderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('env_var_loader');

        $rootNode = $treeBuilder->getRootNode();
        if (!$rootNode instanceof ArrayNodeDefinition) {
            return $treeBuilder;
        }

        return $treeBuilder;
    }
}
