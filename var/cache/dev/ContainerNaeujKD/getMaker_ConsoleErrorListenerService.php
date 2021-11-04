<?php

namespace ContainerNaeujKD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_ConsoleErrorListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.console_error_listener' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php';

        return $container->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber();
    }
}
