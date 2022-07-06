<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/add_type' => [[['_route' => 'add_type', '_controller' => 'App\\Controller\\Admin\\TypeController::index'], null, null, null, false, false, null]],
        '/create_type' => [[['_route' => 'create_type', '_controller' => 'App\\Controller\\Admin\\TypeController::create'], null, ['POST' => 0], null, false, false, null]],
        '/show_type' => [[['_route' => 'show_type', '_controller' => 'App\\Controller\\Admin\\TypeController::show_type'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/edit_type/([^/]++)(*:61)'
                .'|/update_type/([^/]++)(*:89)'
                .'|/delete_type/([^/]++)(*:117)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'edit_type', '_controller' => 'App\\Controller\\Admin\\TypeController::edit'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'update_type', '_controller' => 'App\\Controller\\Admin\\TypeController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [
            [['_route' => 'delete_type', '_controller' => 'App\\Controller\\Admin\\TypeController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
