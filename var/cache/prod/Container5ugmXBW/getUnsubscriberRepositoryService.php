<?php

namespace Container5ugmXBW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnsubscriberRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\UnsubscriberRepository' shared autowired service.
     *
     * @return \App\Repository\UnsubscriberRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\UnsubscriberRepository'] = new \App\Repository\UnsubscriberRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
