<?php

namespace Container53swQfN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegisterFormType' shared autowired service.
     *
     * @return \App\Form\RegisterFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RegisterFormType.php';

        return $container->privates['App\\Form\\RegisterFormType'] = new \App\Form\RegisterFormType();
    }
}
