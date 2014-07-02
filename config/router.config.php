<?php

return array(
    'router' => array(
        'routes' => array(
            'index' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/analytics/send-event',
                    'defaults' => array(
                        'controller' => 'Rayzoranalytics\Controller\SendController',
                        'action' => 'send-event',
                    ),
                ),
            ),
        ),
    ),
);