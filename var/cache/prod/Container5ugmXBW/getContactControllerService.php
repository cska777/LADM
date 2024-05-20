<?php

namespace Container5ugmXBW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ContactController', $container));

        return $instance;
    }
}
