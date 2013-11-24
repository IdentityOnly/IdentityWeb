<?php
return array(
    'routes' => array(
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/',
                'defaults' => array(
                    'controller' => 'IdentityWeb\Controller\Home',
                    'action' => 'index',
                )
            )
        )
    )
);
