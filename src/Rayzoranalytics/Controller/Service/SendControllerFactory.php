<?php

namespace Rayzoranalytics\Controller\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Rayzoranalytics\Controller\SendController;

class SendControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $serviceLocator = $serviceLocator->getServiceLocator();
        $controller = new SendController();
        $config = $serviceLocator->get('Config');
        $service = $serviceLocator->get('Rayzoranalytics\Service\AnalyticsService');
        /**
         * TODO: Throw exception when there is no user-agent
         */
        $service->setUserAgent($config['analytics']['user-agent']);
        $controller->setAnalyticsService($service);

        return $controller;
    }
}
