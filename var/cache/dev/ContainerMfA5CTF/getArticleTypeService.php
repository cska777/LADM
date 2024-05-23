<?php

namespace ContainerMfA5CTF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ArticleType' shared autowired service.
     *
     * @return \App\Form\ArticleType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ArticleType.php';

        return $container->privates['App\\Form\\ArticleType'] = new \App\Form\ArticleType();
    }
}
