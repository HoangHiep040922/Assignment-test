<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'app_api_login', '_controller' => 'App\\Controller\\ApiLoginController::index'], null, null, null, false, false, null]],
        '/category/details' => [[['_route' => 'category_details', '_controller' => 'App\\Controller\\CategoryController::detailsCategory'], null, null, null, false, false, null]],
        '/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::createCategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::listAction'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\ProductController::listAction'], null, null, null, false, false, null],
        ],
        '/insertUser' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::insertAction'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/category/(?'
                    .'|view/([^/]++)(*:195)'
                    .'|delete/([^/]++)(*:218)'
                    .'|edit/([^/]++)(*:239)'
                .')'
                .'|/product/(?'
                    .'|de(?'
                        .'|tails/([^/]++)(*:279)'
                        .'|lete/([^/]++)(*:300)'
                    .')'
                    .'|productByCat/([^/]++)(*:330)'
                    .'|edit/([^/]++)(*:351)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'category_view', '_controller' => 'App\\Controller\\CategoryController::viewCategory'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::editAction'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'product_details', '_controller' => 'App\\Controller\\ProductController::detailsAction'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::deleteAction'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'productByCat', '_controller' => 'App\\Controller\\ProductController::productByCatAction'], ['id'], null, null, false, true, null]],
        351 => [
            [['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::editAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
