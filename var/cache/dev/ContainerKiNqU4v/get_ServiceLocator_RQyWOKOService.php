<?php

namespace ContainerKiNqU4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RQyWOKOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rQyWOKO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rQyWOKO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'circuit' => ['privates', '.errored..service_locator.rQyWOKO.App\\Entity\\Circuit', NULL, 'Cannot autowire service ".service_locator.rQyWOKO": it references class "App\\Entity\\Circuit" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.rQyWOKO.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.rQyWOKO": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'circuit' => 'App\\Entity\\Circuit',
            'mailer' => '?',
            'repo' => 'App\\Repository\\UserRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
