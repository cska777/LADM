<?php

namespace Container8K1xAU1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V5NSJjBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v5NSJjB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v5NSJjB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'actionRepository' => ['privates', 'App\\Repository\\ActionRepository', 'getActionRepositoryService', true],
        ], [
            'actionRepository' => 'App\\Repository\\ActionRepository',
        ]);
    }
}
