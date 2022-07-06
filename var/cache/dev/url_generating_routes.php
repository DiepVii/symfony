<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'add_type' => [[], ['_controller' => 'App\\Controller\\Admin\\TypeController::index'], [], [['text', '/add_type']], [], [], []],
    'create_type' => [[], ['_controller' => 'App\\Controller\\Admin\\TypeController::create'], [], [['text', '/create_type']], [], [], []],
    'edit_type' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TypeController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit_type']], [], [], []],
    'show_type' => [[], ['_controller' => 'App\\Controller\\Admin\\TypeController::show_type'], [], [['text', '/show_type']], [], [], []],
    'update_type' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TypeController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update_type']], [], [], []],
    'delete_type' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TypeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_type']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/dashboard']], [], [], []],
];