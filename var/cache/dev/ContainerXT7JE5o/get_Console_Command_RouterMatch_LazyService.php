<?php

<<<<<<<< HEAD:var/cache/dev/ContainerXT7JE5o/get_Console_Command_RouterMatch_LazyService.php
namespace ContainerXT7JE5o;
========
namespace ContainerZ7VZQp1;
>>>>>>>> d4de6d14 (Correction AboutUs):var/cache/dev/ContainerZ7VZQp1/get_Console_Command_RouterMatch_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_RouterMatch_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.router_match.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.router_match.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('router:match', [], 'Help debug routes by simulating a path info match', false, #[\Closure(name: 'console.command.router_match', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand => ($container->privates['console.command.router_match'] ?? $container->load('getConsole_Command_RouterMatchService')));
    }
}
