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
        '/client' => [[['_route' => 'client.index', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, true, false, null]],
        '/client/creerClient' => [[['_route' => 'client.creerClient', '_controller' => 'App\\Controller\\ClientController::creerClient'], null, null, null, false, false, null]],
        '/client/acceuil' => [[['_route' => 'client.acceuil', '_controller' => 'App\\Controller\\ClientController::acceuil'], null, null, null, false, false, null]],
        '/client/dashboard/dashboard' => [[['_route' => 'client.dashboard_mixte', '_controller' => 'App\\Controller\\ClientController::dashboardMixte'], null, null, null, false, false, null]],
        '/client/dashboard/dashboardUtilisateur' => [[['_route' => 'client.dashboard_utilisateur', '_controller' => 'App\\Controller\\ClientController::dashboardUtilisateur'], null, null, null, false, false, null]],
        '/client/listImages' => [[['_route' => 'client.list_images', '_controller' => 'App\\Controller\\ClientController::getListImages'], null, null, null, false, false, null]],
        '/client/login' => [[['_route' => 'client.login', '_controller' => 'App\\Controller\\ClientController::connexion'], null, null, null, false, false, null]],
        '/client/inscription' => [[['_route' => 'client.enregistrement', '_controller' => 'App\\Controller\\ClientController::enregistrement'], null, null, null, false, false, null]],
        '/client/tarif' => [[['_route' => 'client.tarif', '_controller' => 'App\\Controller\\ClientController::tarif'], null, null, null, false, false, null]],
        '/client/manager/index' => [[['_route' => 'client_manager_index', '_controller' => 'App\\Controller\\ClientManagerController::index'], null, null, null, false, false, null]],
        '/client/manager/react' => [[['_route' => 'client_manager_react', '_controller' => 'App\\Controller\\ClientManagerController::clientManagerReact'], null, null, null, false, false, null]],
        '/client/manager/read' => [[['_route' => 'client_manager_read', '_controller' => 'App\\Controller\\ClientManagerController::read'], null, null, null, false, false, null]],
        '/client/manager/create' => [[['_route' => 'client_manager_create', '_controller' => 'App\\Controller\\ClientManagerController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::searchBar'], null, null, null, false, false, null]],
        '/searchC' => [[['_route' => 'searchC', '_controller' => 'App\\Controller\\SearchController::searchBarC'], null, null, null, false, false, null]],
        '/handleSearch' => [[['_route' => 'handleSearch', '_controller' => 'App\\Controller\\SearchController::handleSearch'], null, null, null, false, false, null]],
        '/handleSearchClient' => [[['_route' => 'handleSearchClient', '_controller' => 'App\\Controller\\SearchController::handleSearchClient'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|d(?'
                            .'|ecode/([^/]++)(*:200)'
                            .'|ownload_img/([^/]++)(*:228)'
                            .'|ashboard/(?'
                                .'|his_caisse/([^/]++)/([^/]++)(*:276)'
                                .'|details/([^/]++)/([^/]++)(*:309)'
                            .')'
                        .')'
                        .'|gen_billet/([^/]++)(*:338)'
                        .'|scan_(?'
                            .'|decoder(?:/([^/]++))?(*:375)'
                            .'|results/([^/]++)(*:399)'
                        .')'
                        .'|manager/json(?:/([^/]++))?(*:434)'
                    .')'
                    .'|ustom(?:/([^/]++))?(*:462)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:499)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'client.decode', '_controller' => 'App\\Controller\\ClientController::decode'], ['qrcode'], null, null, false, true, null]],
        228 => [[['_route' => 'client.download_img', '_controller' => 'App\\Controller\\ClientController::downloadImg'], ['imgName'], null, null, false, true, null]],
        276 => [[['_route' => 'client.his_caisse', '_controller' => 'App\\Controller\\ClientController::historiqueCaisse'], ['id', 'nom'], null, null, false, true, null]],
        309 => [[['_route' => 'client.details', '_controller' => 'App\\Controller\\ClientController::details'], ['id', 'nom'], null, null, false, true, null]],
        338 => [[['_route' => 'client.gen_billet', '_controller' => 'App\\Controller\\ClientController::genererBillet'], ['qrcode'], null, null, false, true, null]],
        375 => [[['_route' => 'client.scan_decoder', 'contentData' => null, '_controller' => 'App\\Controller\\ClientController::scanDecoder'], ['contentData'], null, null, false, true, null]],
        399 => [[['_route' => 'client.scan_results', '_controller' => 'App\\Controller\\ClientController::scanResults'], ['contact'], null, null, false, true, null]],
        434 => [[['_route' => 'client_manager_json', 'id' => null, '_controller' => 'App\\Controller\\ClientManagerController::clientManagerObject'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'custom', 'name' => null, '_controller' => 'App\\Controller\\MainController::custom'], ['name'], null, null, false, true, null]],
        499 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
