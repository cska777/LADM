<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/getNewzEditTypeService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/getNewzEditTypeService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewzEditTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NewzEditType' shared autowired service.
     *
     * @return \App\Form\NewzEditType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NewzEditType.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Form\\NewzEditType'])) {
            return $container->privates['App\\Form\\NewzEditType'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Form\\NewzEditType'])) {
            return $container->privates['App\\Form\\NewzEditType'];
        }

        return $container->privates['App\\Form\\NewzEditType'] = new \App\Form\NewzEditType($a, $b);
    }
}
