<?php

namespace ContainerCDgdOiO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfessionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProfessionRepository' shared autowired service.
     *
     * @return \App\Repository\ProfessionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProfessionRepository'] = new \App\Repository\ProfessionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
