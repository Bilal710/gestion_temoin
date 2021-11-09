<?php

namespace ContainerPY4YFzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_WriteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.write' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\WriteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/WriteListener.php';

        return $container->privates['api_platform.listener.view.write'] = new \ApiPlatform\Core\EventListener\WriteListener(($container->privates['debug.api_platform.data_persister'] ?? $container->getDebug_ApiPlatform_DataPersisterService()), ($container->privates['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()));
    }
}
