<?php

namespace ContainerA7NGqpx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaiementAdhesionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PaiementAdhesionController' shared autowired service.
     *
     * @return \App\Controller\PaiementAdhesionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PaiementAdhesionController.php';

        $container->services['App\\Controller\\PaiementAdhesionController'] = $instance = new \App\Controller\PaiementAdhesionController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\PaiementAdhesionController', $container));

        return $instance;
    }
}
