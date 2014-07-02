<?php

namespace Rayzoranalytics\Service\Service;

use Rayzoranalytics\Service\AnalyticsService;
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
