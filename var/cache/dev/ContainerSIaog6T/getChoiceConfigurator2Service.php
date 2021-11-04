<?php

namespace ContainerSIaog6T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChoiceConfigurator2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Filter/FilterConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Filter/Configurator/ChoiceConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator();
    }
}
