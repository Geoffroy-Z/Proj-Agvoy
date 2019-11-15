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
        '/admin/region' => [[['_route' => 'admin_region_index', '_controller' => 'App\\Controller\\BackofficeRegionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/region/new' => [[['_route' => 'admin_region_new', '_controller' => 'App\\Controller\\BackofficeRegionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontOfficeController::index'], null, null, null, true, false, null]],
        '/owner' => [[['_route' => 'owner', '_controller' => 'App\\Controller\\OwnerController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/room' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/room/new' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/room/likes' => [[['_route' => 'room_likes', '_controller' => 'App\\Controller\\RoomController::showLikes'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/unavailibilities' => [[['_route' => 'unavailibilities_index', '_controller' => 'App\\Controller\\UnavailibilityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/unavailibilities/new' => [[['_route' => 'new_unavailibility', '_controller' => 'App\\Controller\\UnavailibilityController::new'], null, null, null, false, false, null]],
        '/unavailibilities/new/booked' => [[['_route' => 'new_booking_unavailibility', '_controller' => 'App\\Controller\\UnavailibilityController::newBooked'], null, null, null, false, false, null]],
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
                .'|/admin/region/([^/]++)(?'
                    .'|(*:194)'
                    .'|/(?'
                        .'|roomList(*:214)'
                        .'|edit(*:226)'
                    .')'
                    .'|(*:235)'
                .')'
                .'|/r(?'
                    .'|eservation/([^/]++)(?'
                        .'|(*:271)'
                        .'|/(?'
                            .'|edit(*:287)'
                            .'|confirm(*:302)'
                        .')'
                        .'|(*:311)'
                    .')'
                    .'|oom/([^/]++)(?'
                        .'|(*:335)'
                        .'|/(?'
                            .'|edit(*:351)'
                            .'|like(*:363)'
                        .')'
                        .'|(*:372)'
                    .')'
                .')'
                .'|/unavailibilities/([^/]++)(?'
                    .'|/edit(*:416)'
                    .'|(*:424)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'admin_region_show', '_controller' => 'App\\Controller\\BackofficeRegionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        214 => [[['_route' => 'admin_region_rooms', '_controller' => 'App\\Controller\\BackofficeRegionController::listRegionRooms'], ['id'], ['GET' => 0], null, false, false, null]],
        226 => [[['_route' => 'admin_region_edit', '_controller' => 'App\\Controller\\BackofficeRegionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        235 => [[['_route' => 'admin_region_delete', '_controller' => 'App\\Controller\\BackofficeRegionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        271 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'reservation_confirm', '_controller' => 'App\\Controller\\ReservationController::confirm'], ['id'], null, null, false, false, null]],
        311 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        335 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\RoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'room_like', '_controller' => 'App\\Controller\\RoomController::consultRooms'], ['id'], null, null, false, false, null]],
        372 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        416 => [[['_route' => 'unavailibility_edit', '_controller' => 'App\\Controller\\UnavailibilityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [
            [['_route' => 'unavailibility_delete', '_controller' => 'App\\Controller\\UnavailibilityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
