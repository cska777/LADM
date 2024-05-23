<?php

namespace ContainerUo4fz7p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\MailerController' shared autowired service.
     *
     * @return \App\Controller\Admin\MailerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/MailerController.php';

        $container->services['App\\Controller\\Admin\\MailerController'] = $instance = new \App\Controller\Admin\MailerController(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['router'] ?? self::getRouterService($container)), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\SubscriberRepository'] ?? $container->load('getSubscriberRepositoryService')), ($container->privates['twig'] ?? self::getTwigService($container)), ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Admin\\MailerController', $container));

        return $instance;
    }
}
