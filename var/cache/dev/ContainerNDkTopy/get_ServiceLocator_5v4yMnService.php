<?php

namespace ContainerNDkTopy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5v4yMnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5v4y_mn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5v4y_mn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'uRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'uRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
