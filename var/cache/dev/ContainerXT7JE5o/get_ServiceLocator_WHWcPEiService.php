<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/get_ServiceLocator_WHWcPEiService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/get_ServiceLocator_WHWcPEiService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WHWcPEiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WHWcPEi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WHWcPEi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
