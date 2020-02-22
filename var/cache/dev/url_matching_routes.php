<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/things' => [
            [['_route' => 'things-index', '_controller' => 'App\\Controller\\ThingController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'things-store', '_controller' => 'App\\Controller\\ThingController::store'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'things-update', '_controller' => 'App\\Controller\\ThingController::update'], null, ['PUT' => 0], null, false, false, null],
            [['_route' => 'things-delete', '_controller' => 'App\\Controller\\ThingController::delete'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/things/create' => [[['_route' => 'things-create', '_controller' => 'App\\Controller\\ThingController::create'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/things/(?'
                    .'|([^/]++)(*:61)'
                    .'|edit/([^/]++)(*:81)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'things-show', '_controller' => 'App\\Controller\\ThingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        81 => [
            [['_route' => 'things-edit', '_controller' => 'App\\Controller\\ThingController::edit'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
