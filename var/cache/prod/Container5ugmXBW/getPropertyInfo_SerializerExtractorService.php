<?php

namespace Container5ugmXBW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyInfo_SerializerExtractorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($container->privates['serializer.mapping.cache_class_metadata_factory'] ?? self::getSerializer_Mapping_CacheClassMetadataFactoryService($container)));
    }
}
