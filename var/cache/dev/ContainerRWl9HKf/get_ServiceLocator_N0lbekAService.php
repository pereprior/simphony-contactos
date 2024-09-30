<?php

namespace ContainerRWl9HKf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N0lbekAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.N0lbekA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.N0lbekA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form' => ['privates', '.errored..service_locator.N0lbekA.Symfony\\Component\\Form\\FormInterface', NULL, 'Cannot autowire service ".service_locator.N0lbekA": it references interface "Symfony\\Component\\Form\\FormInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'doctrine' => '?',
            'form' => 'Symfony\\Component\\Form\\FormInterface',
        ]);
    }
}