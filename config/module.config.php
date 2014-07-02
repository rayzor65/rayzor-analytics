<?php

return array(
    'controllers' => array(
        'factories' => array(
            'Rayzor\Analytics\Controller\SendController' => 'Rayzor\Analytics\Controller\Service\SendControllerFactory',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Rayzor\Analytics\Service\AnalyticsService' => 'Rayzor\Analytics\Service\Service\AnalyticsServiceFactory',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view/',
        ),
    ),
);