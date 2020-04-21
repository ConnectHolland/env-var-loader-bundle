<?php

declare(strict_types=1);

/*
 * This file is part of the connectholland/env-var-loader-bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\EnvVarLoaderBundle;

use ConnectHolland\EnvVarLoaderBundle\DependencyInjection\EnvVarLoaderExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EnvVarLoaderBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new EnvVarLoaderExtension();
    }
}
