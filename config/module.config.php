<?php

return array(
    'controllers' => array(
        'factories' => array(
            'Rayzoranalytics\Controller\SendController' => 'Rayzoranalytics\Controller\Service\SendControllerFactory',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Rayzoranalytics\Service\AnalyticsService' => 'Rayzoranalytics\Service\Service\AnalyticsServiceFactory',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view/',
        ),
    ),
);