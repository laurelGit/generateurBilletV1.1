<?php

namespace Container53swQfN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0RWaF7eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0RWaF7e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0RWaF7e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator.0RWaF7e.App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator.0RWaF7e": it references class "App\\Entity\\Client" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.0RWaF7e.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.0RWaF7e": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'client' => 'App\\Entity\\Client',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
