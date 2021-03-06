<?php

namespace ContainerKiNqU4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GbAr7V5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GbAr7V5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GbAr7V5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'circuit' => ['privates', '.errored..service_locator.GbAr7V5.App\\Entity\\Circuit', NULL, 'Cannot autowire service ".service_locator.GbAr7V5": it references class "App\\Entity\\Circuit" but no such service exists.'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'repoI' => ['privates', 'App\\Repository\\InscriptionRepository', 'getInscriptionRepositoryService', true],
            'repoU' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.GbAr7V5.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.GbAr7V5": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'circuit' => 'App\\Entity\\Circuit',
            'em' => '?',
            'mailer' => '?',
            'repoI' => 'App\\Repository\\InscriptionRepository',
            'repoU' => 'App\\Repository\\UserRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
