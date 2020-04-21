<?php

declare(strict_types=1);

/*
 * This file is part of the connectholland/env-var-loader-bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\EnvVarLoaderBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class EnvVarLoaderExtension extends Extension
{
    /**
     * @param array<int,array> $configs
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yaml');
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return 'env_var_loader';
    }
}
