<?php

namespace Container8K1xAU1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Do0b7WPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Do0b7WP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Do0b7WP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'newz' => ['privates', '.errored..service_locator.Do0b7WP.App\\Entity\\Newz', NULL, 'Cannot autowire service ".service_locator.Do0b7WP": it needs an instance of "App\\Entity\\Newz" but this type has been excluded in "config/services.yaml".'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'entityManager' => '?',
            'newz' => 'App\\Entity\\Newz',
            'slugger' => '?',
        ]);
    }
}
