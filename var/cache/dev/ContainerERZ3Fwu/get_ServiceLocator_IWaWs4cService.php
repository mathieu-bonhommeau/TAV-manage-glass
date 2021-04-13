<?php

namespace ContainerERZ3Fwu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IWaWs4cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iWaWs4c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iWaWs4c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'matiereRepository' => ['privates', 'App\\Repository\\MatiereRepository', 'getMatiereRepositoryService', true],
        ], [
            'manager' => '?',
            'matiereRepository' => 'App\\Repository\\MatiereRepository',
        ]);
    }
}