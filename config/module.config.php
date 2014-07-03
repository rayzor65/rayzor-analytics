<?php

return array(
    'controllers' => array(
        'factories' => array(
            'RayzorAnalytics\Controller\SendController' => 'RayzorAnalytics\Controller\Service\SendControllerFactory',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'RayzorAnalytics\Service\AnalyticsService' => 'RayzorAnalytics\Service\Service\AnalyticsServiceFactory',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view/',
        ),
    ),
);