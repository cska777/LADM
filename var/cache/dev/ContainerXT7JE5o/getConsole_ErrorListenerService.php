<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/getConsole_ErrorListenerService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/getConsole_ErrorListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_ErrorListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

        $a = new \Monolog\Logger('console');
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        ($container->privates['debug.debug_logger_configurator'] ?? self::getDebug_DebugLoggerConfiguratorService($container))->pushDebugLogger($a);

        return $container->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }
}
