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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about_us' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\AboutUsController::index'], null, null, null, false, false, null]],
        '/about_us/tab' => [[['_route' => 'tab_about_us', '_controller' => 'App\\Controller\\AboutUsController::aboutUsTab'], null, null, null, false, false, null]],
        '/new_aboutUs' => [[['_route' => 'new_aboutUs', '_controller' => 'App\\Controller\\AboutUsController::new_aboutus'], null, null, null, false, false, null]],
        '/action' => [[['_route' => 'index_action', '_controller' => 'App\\Controller\\ActionController::index'], null, null, null, false, false, null]],
        '/action/tab' => [[['_route' => 'tab_action', '_controller' => 'App\\Controller\\ActionController::tabBord'], null, null, null, false, false, null]],
        '/new_action' => [[['_route' => 'new_action', '_controller' => 'App\\Controller\\ActionController::new_action'], null, null, null, false, false, null]],
        '/adhesion' => [[['_route' => 'app_adhesion', '_controller' => 'App\\Controller\\AdhesionController::new'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\Admin\\MailerController::sendEmailAction'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'index_article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/article/article/tab' => [[['_route' => 'tab_article', '_controller' => 'App\\Controller\\ArticleController::tabBord'], null, null, null, false, false, null]],
        '/article/new' => [[['_route' => 'new_article', '_controller' => 'App\\Controller\\ArticleController::new_article'], null, null, null, false, false, null]],
        '/article/actualites' => [[['_route' => 'actualites', '_controller' => 'App\\Controller\\ArticleController::actualites'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/backup-database' => [[['_route' => 'app_database_backup', '_controller' => 'App\\Controller\\DatabaseBackupController::backupDatabase'], null, null, null, false, false, null]],
        '/don' => [[['_route' => 'app_don', '_controller' => 'App\\Controller\\DonController::index'], null, null, null, false, false, null]],
        '/don/save' => [[['_route' => 'app_don_save', '_controller' => 'App\\Controller\\DonController::save'], null, ['POST' => 0], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/legal-notice' => [[['_route' => 'app_legal_notice', '_controller' => 'App\\Controller\\LegalNoticeController::index'], null, null, null, false, false, null]],
        '/newz' => [[['_route' => 'app_newz_index', '_controller' => 'App\\Controller\\NewzController::index'], null, ['GET' => 0], null, true, false, null]],
        '/newz/new' => [[['_route' => 'app_newz_new', '_controller' => 'App\\Controller\\NewzController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/paiement/adhesion' => [[['_route' => 'app_paiement_adhesion', '_controller' => 'App\\Controller\\PaiementAdhesionController::index'], null, null, null, false, false, null]],
        '/webhook/stripe' => [[['_route' => 'stripe_webhook', '_controller' => 'App\\Controller\\PaiementAdhesionController::stripeWebhook'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/privacy-policy' => [[['_route' => 'app_privacy', '_controller' => 'App\\Controller\\PrivacyController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/mdp_oublie' => [[['_route' => 'mdp_oublie', '_controller' => 'App\\Controller\\SecurityController::mdpOublie'], null, null, null, false, false, null]],
        '/subscribe' => [[['_route' => 'app_subscribe', '_controller' => 'App\\Controller\\SubscriberController::index'], null, null, null, false, false, null]],
        '/user/tab' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_recap_index', '_controller' => 'App\\Controller\\UserController::tabBord'], null, ['GET' => 0], null, true, false, null]],
        '/user/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\UserController::search'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_create_checkout_session', '_controller' => 'App\\Controller\\PaiementAdhesionController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/delete/(?'
                    .'|aboutus/([^/]++)(*:229)'
                    .'|([^/]++)(*:245)'
                .')'
                .'|/a(?'
                    .'|boutus/([^/]++)(*:274)'
                    .'|rticle/(?'
                        .'|update/([^/]++)(*:307)'
                        .'|delete/([^/]++)(*:330)'
                        .'|([^/]++)(*:346)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pdate/([^/]++)(*:375)'
                    .'|nsubscribe/([^/]++)(*:402)'
                    .'|ser/([^/]++)(?'
                        .'|(*:425)'
                        .'|/edit(*:438)'
                        .'|(*:446)'
                    .')'
                .')'
                .'|/confirm/([^/]++)(*:473)'
                .'|/newz/([^/]++)(?'
                    .'|(*:498)'
                    .'|/edit(*:511)'
                    .'|(*:519)'
                .')'
                .'|/mdp_oublie/([^/]++)(*:548)'
                .'|/([^/]++)(*:565)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'delete_aboutus', '_controller' => 'App\\Controller\\AboutUsController::delete'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'delete_action', '_controller' => 'App\\Controller\\ActionController::delete'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'update_aboutUs', '_controller' => 'App\\Controller\\AboutUsController::update'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'update_article', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'show_article', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'update_action', '_controller' => 'App\\Controller\\ActionController::update'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'app_unsubscribe', '_controller' => 'App\\Controller\\UnsubscribeController::unsubscribe'], ['token'], null, null, false, true, null]],
        425 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        473 => [[['_route' => 'app_confirm', '_controller' => 'App\\Controller\\EmailConfirmController::confirmEmail'], ['token'], null, null, false, true, null]],
        498 => [[['_route' => 'app_newz_show', '_controller' => 'App\\Controller\\NewzController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_newz_edit', '_controller' => 'App\\Controller\\NewzController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        519 => [[['_route' => 'app_newz_delete', '_controller' => 'App\\Controller\\NewzController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        548 => [[['_route' => 'mdp_reset', '_controller' => 'App\\Controller\\SecurityController::mdpReset'], ['token'], null, null, false, true, null]],
        565 => [
            [['_route' => 'not_found', '_controller' => 'App\\Controller\\ErrorController::notFound'], ['url'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
