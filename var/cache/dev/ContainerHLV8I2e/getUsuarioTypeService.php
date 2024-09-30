<?php

namespace ContainerHLV8I2e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsuarioTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UsuarioType' shared autowired service.
     *
     * @return \App\Form\UsuarioType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UsuarioType.php';

        return $container->privates['App\\Form\\UsuarioType'] = new \App\Form\UsuarioType();
    }
}
