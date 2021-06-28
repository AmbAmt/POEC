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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/accueil/inscription' => [[['_route' => 'inscriptionCourse', '_controller' => 'App\\Controller\\AccueilController::inscriptionCourse'], null, null, null, false, false, null]],
        '/admin/course' => [[['_route' => 'admin_consulter_course', '_controller' => 'App\\Controller\\Admin\\CourseController::consulterCourse'], null, null, null, false, false, null]],
        '/admin/course/ajouter' => [[['_route' => 'admin_ajouter_course', '_controller' => 'App\\Controller\\Admin\\CourseController::ajouterCourse'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user', '_controller' => 'App\\Controller\\Admin\\UserController::recherche_user'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_welcome', '_controller' => 'App\\Controller\\Admin\\WelcomeController::index'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/edit/user' => [[['_route' => 'edit_user', '_controller' => 'App\\Controller\\EditUserController::index'], null, null, null, false, false, null]],
        '/header' => [[['_route' => 'header', '_controller' => 'App\\Controller\\HeaderController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|cou(?'
                        .'|rse(?'
                            .'|/(?'
                                .'|([^/]++)(*:203)'
                                .'|participants/([^/]++)(*:232)'
                                .'|supp/([^/]++)/([^/]++)(*:262)'
                            .')'
                            .'|s/participants/([^/]++)/([^/]++)(*:303)'
                        .')'
                        .'|se/participants/pdf/([^/]++)(*:340)'
                    .')'
                    .'|user/(?'
                        .'|([^/]++)(*:365)'
                        .'|supprimer/([^/]++)(*:391)'
                        .'|editMenmbership/([^/]++)(*:423)'
                    .')'
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
        203 => [[['_route' => 'admin_reporter_course', '_controller' => 'App\\Controller\\Admin\\CourseController::reporterCourse'], ['course'], null, null, false, true, null]],
        232 => [[['_route' => 'admin_consulter_participants', '_controller' => 'App\\Controller\\Admin\\CourseController::consulterParticipants'], ['course'], null, null, false, true, null]],
        262 => [[['_route' => 'admin_supprimer_participants', '_controller' => 'App\\Controller\\Admin\\CourseController::supprimerParticipants'], ['user', 'circuit'], ['DELETE' => 0], null, false, true, null]],
        303 => [[['_route' => 'admin_mail_licence', '_controller' => 'App\\Controller\\Admin\\CourseController::envoyerMailLicence'], ['circuit', 'user'], null, null, false, true, null]],
        340 => [[['_route' => 'admin_pdf', '_controller' => 'App\\Controller\\Admin\\CourseController::genererPdf'], ['course'], null, null, false, true, null]],
        365 => [[['_route' => 'admin_voir_user', '_controller' => 'App\\Controller\\Admin\\UserController::voir_user'], ['user'], null, null, false, true, null]],
        391 => [[['_route' => 'admin_supprimer_user', '_controller' => 'App\\Controller\\Admin\\UserController::supprimer_user'], ['user'], ['DELETE' => 0], null, false, true, null]],
        423 => [
            [['_route' => 'admin_editMembership_user', '_controller' => 'App\\Controller\\Admin\\UserController::edit_membership'], ['user'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
