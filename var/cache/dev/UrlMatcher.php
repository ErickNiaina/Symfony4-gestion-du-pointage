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
        '/api/api' => [[['_route' => 'api_api_', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/of_erh/pointage/feuilleTemps' => [[['_route' => 'pointage_feuilleTemps', '_controller' => 'App\\Controller\\ConfigurationFeuilleDeTempController::feuilleTemps'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/of_erh/pointageadd/feuilleTemps/recherche' => [[['_route' => 'generated_feuilleDeTemps', '_controller' => 'App\\Controller\\ConfigurationFeuilleDeTempController::addFeuilleTemp'], null, ['POST' => 0], null, false, false, null]],
        '/of_erh/pointagenumber/months' => [[['_route' => 'nb_dayInmonths', '_controller' => 'App\\Controller\\ConfigurationFeuilleDeTempController::DayTravelMonth'], null, ['GET' => 0], null, false, false, null]],
        '/config/heure' => [[['_route' => 'config_heure', '_controller' => 'App\\Controller\\ConstController::getAllConfig'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/example.com' => [[['_route' => 'racine', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'pageIndex', '_controller' => 'App\\Controller\\DefaultController::indexPage'], null, null, null, false, false, null]],
        '/of_erh' => [[['_route' => 'of_erh.index', '_controller' => 'App\\Controller\\DefaultController::of_erh'], null, null, null, false, false, null]],
        '/configuration' => [[['_route' => 'pointage_configuration_Access', '_controller' => 'App\\Controller\\DefaultController::configurationAccess'], null, ['GET' => 0], null, false, false, null]],
        '/employers/list' => [[['_route' => 'employers', '_controller' => 'App\\Controller\\EmployersController::getAllEmployers'], null, null, null, false, false, null]],
        '/holiday' => [[['_route' => 'holiday', '_controller' => 'App\\Controller\\HolidayController::index'], null, null, null, false, false, null]],
        '/of_erh/pointage/index' => [[['_route' => 'pointage_index', '_controller' => 'App\\Controller\\PointageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/of_erh/pointage/list' => [[['_route' => 'pointage_list', '_controller' => 'App\\Controller\\PointageController::getAllPointage'], null, ['GET' => 0], null, false, false, null]],
        '/of_erh/pointage/nouveau' => [[['_route' => 'pointage_new', '_controller' => 'App\\Controller\\PointageController::new'], null, ['GET' => 0], null, false, false, null]],
        '/of_erh/pointage/register' => [[['_route' => 'pointage_register', '_controller' => 'App\\Controller\\PointageController::registerPointage'], null, ['POST' => 0], null, false, false, null]],
        '/of_erh/pointage/fullof/employer' => [[['_route' => 'pointage_employer', '_controller' => 'App\\Controller\\PointageController::fullpointageofEmployer'], null, ['GET' => 0], null, false, false, null]],
        '/salary/index' => [[['_route' => 'salary_index', '_controller' => 'App\\Controller\\SalaryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/salary/list' => [[['_route' => 'salary_list', '_controller' => 'App\\Controller\\SalaryController::showAll'], null, ['GET' => 0], null, false, false, null]],
        '/salary/view' => [[['_route' => 'salary_view', '_controller' => 'App\\Controller\\SalaryController::show'], null, ['GET' => 0], null, false, false, null]],
        '/salary/nouveau' => [[['_route' => 'salary_new', '_controller' => 'App\\Controller\\SalaryController::new'], null, ['GET' => 0], null, false, false, null]],
        '/salary/modifier' => [[['_route' => 'salary_edit', '_controller' => 'App\\Controller\\SalaryController::edit'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/subscription' => [[['_route' => 'subscription.index', '_controller' => 'App\\Controller\\SubscriptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/permission/list' => [[['_route' => 'user_origin_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/permission/registration' => [[['_route' => 'user_origin_new', '_controller' => 'App\\Controller\\UserController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/permission/converted' => [[['_route' => 'permissionof_test', '_controller' => 'App\\Controller\\UserController::userHavePermission'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_admin_index', '_controller' => 'App\\Controller\\admin\\AdminController::index'], null, null, null, true, false, null]],
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
                .'|/of_erh/pointage/(?'
                    .'|view/pointage/number/([^/]++)(*:218)'
                    .'|([^/]++)/delete(*:241)'
                    .'|modifier/([^/]++)/\\?lang\\:en(*:277)'
                    .'|savemodif/([^/]++)/\\?lang\\:en(*:314)'
                .')'
                .'|/user/permission/(?'
                    .'|view/user/([^/]++)(*:361)'
                    .'|user/(?'
                        .'|([^/]++)/edit(*:390)'
                        .'|delete/([^/]++)(*:413)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|user(*:438)'
                        .'|deactivate/([^/]++)/user\\}(*:472)'
                        .'|activate/([^/]++)/com\\}(*:503)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        218 => [[['_route' => 'pointage_view', '_controller' => 'App\\Controller\\PointageController::getOnePointageEmployers'], ['rowid'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'pointage_delete', '_controller' => 'App\\Controller\\PointageController::deletedPointage'], ['rowid'], ['GET' => 0], null, false, false, null]],
        277 => [[['_route' => 'pointage_edit', '_controller' => 'App\\Controller\\PointageController::edit'], ['rowid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'pointage_update', '_controller' => 'App\\Controller\\PointageController::updatePointage'], ['rowid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [[['_route' => 'user_origin_show', '_controller' => 'App\\Controller\\UserController::show'], ['rowid'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'user_origin_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['rowid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'user_origin_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['rowid'], ['DELETE' => 0], null, false, true, null]],
        438 => [[['_route' => 'list_permission', '_controller' => 'App\\Controller\\UserController::listUserRight'], ['rowid'], ['GET' => 0], null, false, false, null]],
        472 => [[['_route' => 'deactivated_permission', '_controller' => 'App\\Controller\\UserController::unsetRight'], ['fk_id', 'fk_user'], ['GET' => 0], null, false, false, null]],
        503 => [
            [['_route' => 'permission_activate', '_controller' => 'App\\Controller\\UserController::setRight'], ['fk_id', 'fk_user'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
