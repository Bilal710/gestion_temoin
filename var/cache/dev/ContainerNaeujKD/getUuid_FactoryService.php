<?php

namespace ContainerNaeujKD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUuid_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'uuid.factory' shared service.
     *
     * @return \Symfony\Component\Uid\Factory\UuidFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/uid/Factory/UuidFactory.php';

        return $container->privates['uuid.factory'] = new \Symfony\Component\Uid\Factory\UuidFactory(6, 6, 5, 'Symfony\\Component\\Uid\\UuidV4', NULL, NULL);
    }
}
