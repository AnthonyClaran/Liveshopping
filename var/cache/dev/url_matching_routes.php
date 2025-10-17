<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/category' => [
            [['_route' => 'api_category_list', '_controller' => 'App\\Controller\\API\\CategoryApiController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_category_create', '_controller' => 'App\\Controller\\API\\CategoryApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/item' => [[['_route' => 'api_item_list', '_controller' => 'App\\Controller\\API\\ItemApiController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/stock/movements' => [[['_route' => 'api_stock_movements', '_controller' => 'App\\Controller\\API\\StockControllerApi::getStockMovements'], null, ['GET' => 0], null, false, false, null]],
        '/api/stock/current' => [[['_route' => 'api_stock_current', '_controller' => 'App\\Controller\\API\\StockControllerApi::getCurrentStock'], null, ['GET' => 0], null, false, false, null]],
        '/api/stock/export' => [[['_route' => 'api_stock_export_data', '_controller' => 'App\\Controller\\API\\StockControllerApi::getExportData'], null, ['GET' => 0], null, false, false, null]],
        '/api/stock/import' => [[['_route' => 'api_stock_import', '_controller' => 'App\\Controller\\API\\StockControllerApi::importCsv'], null, ['POST' => 0], null, false, false, null]],
        '/api/stock/export/save' => [[['_route' => 'api_stock_export_save', '_controller' => 'App\\Controller\\API\\StockControllerApi::saveExportRequests'], null, ['POST' => 0], null, false, false, null]],
        '/api/stock/all' => [[['_route' => 'api_stock_all', '_controller' => 'App\\Controller\\API\\StockControllerApi::getAllStockData'], null, ['GET' => 0], null, false, false, null]],
        '/api/user/update' => [[['_route' => 'api_user_update', '_controller' => 'App\\Controller\\API\\UserApiController::apiUpdate'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/api/dashboard' => [[['_route' => 'api_dashboard', '_controller' => 'App\\Controller\\AdminController::apiDashboard'], null, ['POST' => 0], null, false, false, null]],
        '/liveStart' => [[['_route' => 'admin_live_form', '_controller' => 'App\\Controller\\AdminController::startLiveSelect'], null, null, null, false, false, null]],
        '/liveConfirm' => [[['_route' => 'admin_live_confirm', '_controller' => 'App\\Controller\\AdminController::confirmLive'], null, ['POST' => 0], null, false, false, null]],
        '/enDirecte' => [[['_route' => 'app_live', '_controller' => 'App\\Controller\\AdminController::liveInterface'], null, null, null, false, false, null]],
        '/api/categories' => [[['_route' => 'api_categories', '_controller' => 'App\\Controller\\AdminController::getCategories'], null, ['GET' => 0], null, false, false, null]],
        '/api/items/create' => [[['_route' => 'api_item_create', '_controller' => 'App\\Controller\\AdminController::createItem'], null, ['POST' => 0], null, false, false, null]],
        '/api/items/upload-image' => [[['_route' => 'api_item_upload_image', '_controller' => 'App\\Controller\\AdminController::uploadItemImage'], null, ['POST' => 0], null, false, false, null]],
        '/classement' => [[['_route' => 'app_classement', '_controller' => 'App\\Controller\\ClassementController::index'], null, null, null, false, false, null]],
        '/objectif-mensuel' => [[['_route' => 'app_objectif_mensuel', '_controller' => 'App\\Controller\\ClassementController::objectifMensuel'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/history' => [[['_route' => 'app_history', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, null, null, false, false, null]],
        '/historyDetails' => [[['_route' => 'app_history_details', '_controller' => 'App\\Controller\\HistoriqueController::details'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\InscriptionController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\InscriptionController::logout'], null, null, null, false, false, null]],
        '/api/inscription' => [[['_route' => 'api_inscription', '_controller' => 'App\\Controller\\InscriptionController::apiRegister'], null, ['POST' => 0], null, false, false, null]],
        '/api/live/formLive' => [[['_route' => 'api_live_formLive', '_controller' => 'App\\Controller\\LiveApiController::apiStartLiveSelect'], null, ['POST' => 0], null, false, false, null]],
        '/api/live/start' => [[['_route' => 'api_live_start', '_controller' => 'App\\Controller\\LiveApiController::apiConfirmLive'], null, ['POST' => 0], null, false, false, null]],
        '/api/live/stop' => [[['_route' => 'api_live_stop', '_controller' => 'App\\Controller\\LiveApiController::stopLive'], null, ['POST' => 0], null, false, false, null]],
        '/api/live/active' => [[['_route' => 'api_live_active', '_controller' => 'App\\Controller\\LiveApiController::getActiveLives'], null, ['GET' => 0], null, false, false, null]],
        '/connection' => [[['_route' => 'app_connection', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\LoginController::apiLogin'], null, ['POST' => 0], null, false, false, null]],
        '/profil' => [[['_route' => 'app_admin_profil', '_controller' => 'App\\Controller\\ProfilAdminController::profil'], null, null, null, false, false, null]],
        '/profil/update' => [[['_route' => 'app_admin_update_profile', '_controller' => 'App\\Controller\\ProfilAdminController::updateProfil'], null, ['POST' => 0], null, false, false, null]],
        '/api/admin/profil' => [[['_route' => 'api_admin_profil', '_controller' => 'App\\Controller\\ProfilAdminController::apiProfil'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profil/update' => [[['_route' => 'api_admin_update_profile', '_controller' => 'App\\Controller\\ProfilAdminController::apiUpdateProfil'], null, ['POST' => 0], null, false, false, null]],
        '/client/profil' => [[['_route' => 'app_client_profil', '_controller' => 'App\\Controller\\ProfilClientController::profil'], null, null, null, false, false, null]],
        '/client/profil/update' => [[['_route' => 'app_client_update_profile', '_controller' => 'App\\Controller\\ProfilClientController::updateProfil'], null, ['POST' => 0], null, false, false, null]],
        '/users/profil' => [[['_route' => 'app_users_profil', '_controller' => 'App\\Controller\\ProfilController::profil'], null, null, null, false, false, null]],
        '/users/profil/update' => [[['_route' => 'app_users_update_profile', '_controller' => 'App\\Controller\\ProfilController::updateProfil'], null, ['POST' => 0], null, false, false, null]],
        '/api/client/profil' => [[['_route' => 'api_client_profil', '_controller' => 'App\\Controller\\ProfilController::apiProfil'], null, ['GET' => 0], null, false, false, null]],
        '/api/promotions/create' => [[['_route' => 'api_promotions_create', '_controller' => 'App\\Controller\\PromotionApiController::createPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/promotion/category/create' => [[['_route' => 'app_promotion_category_create', '_controller' => 'App\\Controller\\PromotionController::createCategory'], null, ['POST' => 0], null, false, false, null]],
        '/promotion/item/update' => [[['_route' => 'app_promotion_item_update', '_controller' => 'App\\Controller\\PromotionController::updateItem'], null, ['POST' => 0], null, false, false, null]],
        '/promotion/item/create' => [[['_route' => 'app_promotion_item_create', '_controller' => 'App\\Controller\\PromotionController::createItem'], null, ['POST' => 0], null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock', '_controller' => 'App\\Controller\\StockController::index'], null, null, null, false, false, null]],
        '/import' => [[['_route' => 'app_import', '_controller' => 'App\\Controller\\StockController::importDate'], null, ['POST' => 0], null, false, false, null]],
        '/export' => [[['_route' => 'app_export', '_controller' => 'App\\Controller\\StockController::exportDate'], null, ['POST' => 0], null, false, false, null]],
        '/export_csv' => [[['_route' => 'app_export_csv', '_controller' => 'App\\Controller\\StockController::createCSV'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|category/([^/]++)(?'
                        .'|(*:70)'
                    .')'
                    .'|item/(?'
                        .'|([^/]++)(?'
                            .'|(*:97)'
                        .')'
                        .'|category/([^/]++)(*:122)'
                    .')'
                    .'|stock/export/(?'
                        .'|([^/]++)(*:155)'
                        .'|generate(*:171)'
                    .')'
                    .'|user/([^/]++)(*:193)'
                    .'|promotions/(?'
                        .'|update/([^/]++)(*:230)'
                        .'|delete/([^/]++)(*:253)'
                        .'|item/([^/]++)(*:274)'
                    .')'
                .')'
                .'|/stopLive/([^/]++)(*:302)'
                .'|/client/live/([^/]++)(*:331)'
                .'|/delete_stock/([^/]++)(*:361)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [
            [['_route' => 'api_category_read', '_controller' => 'App\\Controller\\API\\CategoryApiController::read'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_category_update', '_controller' => 'App\\Controller\\API\\CategoryApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_category_delete', '_controller' => 'App\\Controller\\API\\CategoryApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        97 => [
            [['_route' => 'api_item_read', '_controller' => 'App\\Controller\\API\\ItemApiController::read'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_item_update', '_controller' => 'App\\Controller\\API\\ItemApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_item_delete', '_controller' => 'App\\Controller\\API\\ItemApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        122 => [[['_route' => 'api_item_get_by_category', '_controller' => 'App\\Controller\\API\\ItemApiController::getByCategory'], ['categoryId'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'api_stock_export_delete', '_controller' => 'App\\Controller\\API\\StockControllerApi::deleteExportRequest'], ['id'], ['DELETE' => 0], null, false, true, null]],
        171 => [[['_route' => 'api_stock_export_generate', '_controller' => 'App\\Controller\\API\\StockControllerApi::generateCsv'], [], ['POST' => 0], null, false, false, null]],
        193 => [[['_route' => 'api_user_get_by_id', '_controller' => 'App\\Controller\\API\\UserApiController::getUserById'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'api_promotions_update', '_controller' => 'App\\Controller\\PromotionApiController::updatePromotion'], ['id'], ['PUT' => 0], null, false, true, null]],
        253 => [[['_route' => 'api_promotions_delete', '_controller' => 'App\\Controller\\PromotionApiController::deletePromotion'], ['id'], ['DELETE' => 0], null, false, true, null]],
        274 => [[['_route' => 'api_promotions_get_by_item', '_controller' => 'App\\Controller\\PromotionApiController::getPromotionByItem'], ['itemId'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'admin_live_stop', '_controller' => 'App\\Controller\\AdminController::stopLive'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'app_client_live', '_controller' => 'App\\Controller\\ClientController::live'], ['id'], null, null, false, true, null]],
        361 => [
            [['_route' => 'delete_stock', '_controller' => 'App\\Controller\\StockController::deleteStock'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
