<?php

namespace Container8K1xAU1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaginatorFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Orm/EntityPaginator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityPaginator((isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']($container) : self::getAdminUrlGeneratorService($container)), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? self::getEntityFactoryService($container))));
    }
}
