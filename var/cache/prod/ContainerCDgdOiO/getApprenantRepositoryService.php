<?php

namespace ContainerCDgdOiO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApprenantRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ApprenantRepository' shared autowired service.
     *
     * @return \App\Repository\ApprenantRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ApprenantRepository'] = new \App\Repository\ApprenantRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
