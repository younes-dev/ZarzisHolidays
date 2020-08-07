<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'appartement_index' => [[], ['_controller' => 'App\\Controller\\AppartementController::index'], [], [['text', '/appartement/']], [], []],
    'appartement_new' => [[], ['_controller' => 'App\\Controller\\AppartementController::new'], [], [['text', '/appartement/new']], [], []],
    'appartement_show' => [['id'], ['_controller' => 'App\\Controller\\AppartementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/appartement']], [], []],
    'appartement_edit' => [['id'], ['_controller' => 'App\\Controller\\AppartementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/appartement']], [], []],
    'appartement_delete' => [['id'], ['_controller' => 'App\\Controller\\AppartementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/appartement']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'facture_index' => [[], ['_controller' => 'App\\Controller\\FactureController::index'], [], [['text', '/facture/']], [], []],
    'facture_new' => [[], ['_controller' => 'App\\Controller\\FactureController::new'], [], [['text', '/facture/new']], [], []],
    'facture_show' => [['id'], ['_controller' => 'App\\Controller\\FactureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], []],
    'facture_edit' => [['id'], ['_controller' => 'App\\Controller\\FactureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], []],
    'facture_delete' => [['id'], ['_controller' => 'App\\Controller\\FactureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], []],
    'gallery' => [[], ['_controller' => 'App\\Controller\\GalleryController::index'], [], [['text', '/gallery']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\RegistrationController::addUser'], [], [['text', '/inscription']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\RegistrationController::logout'], [], [['text', '/logout']], [], []],
    'reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], []],
    'reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], []],
    'reservation_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\admin\\AdminController::index'], [], [['text', '/dashboard']], [], []],
];
