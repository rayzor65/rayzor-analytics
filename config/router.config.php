<?php

return array(
    'router' => array(
        'routes' => array(
            'index' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/analytics/send-event',
                    'defaults' => array(
                        'controller' => 'Rayzor\Analytics\Controller\SendController',
                        'action' => 'send-event',
                    ),
                ),
            ),
        ),
    ),
);