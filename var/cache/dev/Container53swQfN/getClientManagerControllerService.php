<?php

namespace Container53swQfN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientManagerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ClientManagerController' shared autowired service.
     *
     * @return \App\Controller\ClientManagerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ClientManagerController.php';

        $container->services['App\\Controller\\ClientManagerController'] = $instance = new \App\Controller\ClientManagerController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ClientManagerController', $container));

        return $instance;
    }
}
