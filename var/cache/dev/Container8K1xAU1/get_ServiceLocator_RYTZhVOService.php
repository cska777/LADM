<?php

namespace Container8K1xAU1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RYTZhVOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RYTZhVO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RYTZhVO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'aboutUsRepository' => ['privates', 'App\\Repository\\AboutUsRepository', 'getAboutUsRepositoryService', true],
            'actionRepository' => ['privates', 'App\\Repository\\ActionRepository', 'getActionRepositoryService', true],
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'newzRepository' => ['privates', 'App\\Repository\\NewzRepository', 'getNewzRepositoryService', true],
        ], [
            'aboutUsRepository' => 'App\\Repository\\AboutUsRepository',
            'actionRepository' => 'App\\Repository\\ActionRepository',
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'newzRepository' => 'App\\Repository\\NewzRepository',
        ]);
    }
}
