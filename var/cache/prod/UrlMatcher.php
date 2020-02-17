<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/of_erh/pointage/(?'
                    .'|view/pointage/number/([^/]++)(*:56)'
                    .'|([^/]++)/delete(*:78)'
                    .'|modifier/([^/]++)/\\?lang\\:en(*:113)'
                    .'|savemodif/([^/]++)/\\?lang\\:en(*:150)'
                .')'
                .'|/user/permission/(?'
                    .'|view/user/([^/]++)(*:197)'
                    .'|user/(?'
                        .'|([^/]++)/edit(*:226)'
                        .'|delete/([^/]++)(*:249)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|user(*:274)'
                        .'|deactivate/([^/]++)/user\\}(*:308)'
                        .'|activate/([^/]++)/com\\}(*:339)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        56 => [[['_route' => 'pointage_view', '_controller' => 'App\\Controller\\PointageController::getOnePointageEmployers'], ['rowid'], ['GET' => 0], null, false, true, null]],
        78 => [[['_route' => 'pointage_delete', '_controller' => 'App\\Controller\\PointageController::deletedPointage'], ['rowid'], ['GET' => 0], null, false, false, null]],
        113 => [[['_route' => 'pointage_edit', '_controller' => 'App\\Controller\\PointageController::edit'], ['rowid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        150 => [[['_route' => 'pointage_update', '_controller' => 'App\\Controller\\PointageController::updatePointage'], ['rowid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        197 => [[['_route' => 'user_origin_show', '_controller' => 'App\\Controller\\UserController::show'], ['rowid'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'user_origin_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['rowid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'user_origin_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['rowid'], ['DELETE' => 0], null, false, true, null]],
        274 => [[['_route' => 'list_permission', '_controller' => 'App\\Controller\\UserController::listUserRight'], ['rowid'], ['GET' => 0], null, false, false, null]],
        308 => [[['_route' => 'deactivated_permission', '_controller' => 'App\\Controller\\UserController::unsetRight'], ['fk_id', 'fk_user'], ['GET' => 0], null, false, false, null]],
        339 => [
            [['_route' => 'permission_activate', '_controller' => 'App\\Controller\\UserController::setRight'], ['fk_id', 'fk_user'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
