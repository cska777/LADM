<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/getSecurity_Logout_Listener_CsrfTokenClearingService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/getSecurity_Logout_Listener_CsrfTokenClearingService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_CsrfTokenClearingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/CsrfTokenClearingLogoutListener.php';

        return $container->privates['security.logout.listener.csrf_token_clearing'] = new \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener(($container->privates['security.csrf.token_storage'] ?? self::getSecurity_Csrf_TokenStorageService($container)));
    }
}
