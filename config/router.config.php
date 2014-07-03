<?php

return array(
    'router' => array(
        'routes' => array(
            'analytics' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/analytics/send-event',
                    'defaults' => array(
                        'controller' => 'RayzorAnalytics\Controller\SendController',
                        'action' => 'send-event',
                    ),
                ),
            ),
        ),
    ),
);