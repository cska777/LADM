<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/getSecurity_Authenticator_RememberMe_MainService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/getSecurity_Authenticator_RememberMe_MainService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMe_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/RememberMeAuthenticator.php';

        return $container->privates['security.authenticator.remember_me.main'] = new \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator(($container->privates['security.authenticator.remember_me_handler.main'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_MainService')), $container->getEnv('APP_SECRET'), ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), 'REMEMBERME', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
    }
}
