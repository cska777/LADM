<?php

namespace Container5ugmXBW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController(($container->privates['security.csrf.token_generator'] ??= new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator()), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\SecurityController', $container));

        return $instance;
    }
}
