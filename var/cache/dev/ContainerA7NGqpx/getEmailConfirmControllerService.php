<?php

namespace ContainerA7NGqpx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailConfirmControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmailConfirmController' shared autowired service.
     *
     * @return \App\Controller\EmailConfirmController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EmailConfirmController.php';

        $container->services['App\\Controller\\EmailConfirmController'] = $instance = new \App\Controller\EmailConfirmController(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\EmailConfirmController', $container));

        return $instance;
    }
}
