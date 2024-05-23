<?php

namespace ContainerMfA5CTF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IbHHsVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ib_HHsV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ib_HHsV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'newzRepository' => ['privates', 'App\\Repository\\NewzRepository', 'getNewzRepositoryService', true],
        ], [
            'newzRepository' => 'App\\Repository\\NewzRepository',
        ]);
    }
}
