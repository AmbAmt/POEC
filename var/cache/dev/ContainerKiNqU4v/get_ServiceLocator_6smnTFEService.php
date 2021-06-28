<?php

namespace ContainerKiNqU4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6smnTFEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6smnTFE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6smnTFE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'repo' => ['privates', 'App\\Repository\\InscriptionRepository', 'getInscriptionRepositoryService', true],
        ], [
            'mailer' => '?',
            'repo' => 'App\\Repository\\InscriptionRepository',
        ]);
    }
}
