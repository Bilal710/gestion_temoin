<?php

namespace ContainerSIaog6T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_UriGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fragment.uri_generator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/UriSigner.php';

        return $container->privates['fragment.uri_generator'] = new \Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator('/_fragment', ($container->privates['uri_signer'] ?? ($container->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET')))), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
