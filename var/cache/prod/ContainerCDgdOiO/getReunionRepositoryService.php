<?php

namespace ContainerCDgdOiO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReunionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ReunionRepository' shared autowired service.
     *
     * @return \App\Repository\ReunionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ReunionRepository'] = new \App\Repository\ReunionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
