<?php

namespace ContainerNTqTYxA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaleConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LocaleConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LocaleConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/LocaleConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LocaleConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LocaleConfigurator();
    }
}