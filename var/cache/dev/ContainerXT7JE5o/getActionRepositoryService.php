<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/getActionRepositoryService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/getActionRepositoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ActionRepository' shared autowired service.
     *
     * @return \App\Repository\ActionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepositoryProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ActionRepository.php';

        return $container->privates['App\\Repository\\ActionRepository'] = new \App\Repository\ActionRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
