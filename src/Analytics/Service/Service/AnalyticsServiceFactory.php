<?php

namespace Rayzor\Analytics\Service\Service;

use Rayzor\Analytics\Service\AnalyticsService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AnalyticsServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $service = new AnalyticsService();

        return $service;
    }

}
