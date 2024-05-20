<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about_us' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\AboutUsController::index'], null, null, null, false, false, null]],
        '/about_us/tab' => [[['_route' => 'tab_about_us', '_controller' => 'App\\Controller\\AboutUsController::aboutUsTab'], null, null, null, false, false, null]],
        '/action' => [[['_route' => 'index_action', '_controller' => 'App\\Controller\\ActionController::index'], null, null, null, false, false, null]],
        '/action/tab' => [[['_route' => 'tab_action', '_controller' => 'App\\Controller\\ActionController::tabBord'], null, null, null, false, false, null]],
        '/new' => [
            [['_route' => 'new_action', '_controller' => 'App\\Controller\\ActionController::new_action'], null, null, null, false, false, null],
            [['_route' => 'new_article', '_controller' => 'App\\Controller\\ArticleController::new_article'], null, null, null, false, false, null],
        ],
        '/adhesion' => [[['_route' => 'app_adhesion', '_controller' => 'App\\Controller\\AdhesionController::new'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\Admin\\MailerController::sendEmailAction'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'index_article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/article/tab' => [[['_route' => 'tab_article', '_controller' => 'App\\Controller\\ArticleController::tabBord'], null, null, null, false, false, null]],
        '/actualites' => [[['_route' => 'actualites', '_controller' => 'App\\Controller\\ArticleController::actualites'], null, null, null, false, false, null]],
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
                .'|/delete/(?'
                    .'|aboutus/([^/]++)(*:34)'
                    .'|([^/]++)(?'
                        .'|(*:52)'
                    .')'
                .')'
                .'|/a(?'
                    .'|boutus/([^/]++)(*:81)'
                    .'|rticle/([^/]++)(*:103)'
                .')'
                .'|/u(?'
                    .'|pdate/([^/]++)(?'
                        .'|(*:134)'
                    .')'
                    .'|nsubscribe/([^/]++)(*:162)'
                    .'|ser/([^/]++)(?'
                        .'|(*:185)'
                        .'|/edit(*:198)'
                        .'|(*:206)'
                    .')'
                .')'
                .'|/confirm/([^/]++)(*:233)'
                .'|/newz/([^/]++)(?'
                    .'|(*:258)'
                    .'|/edit(*:271)'
                    .'|(*:279)'
                .')'
                .'|/mdp_oublie/([^/]++)(*:308)'
                .'|/([^/]++)(*:325)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'delete_aboutus', '_controller' => 'App\\Controller\\AboutUsController::delete'], ['id'], null, null, false, true, null]],
        52 => [
            [['_route' => 'delete_action', '_controller' => 'App\\Controller\\ActionController::delete'], ['id'], null, null, false, true, null],
            [['_route' => 'delete_article', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], null, null, false, true, null],
        ],
        81 => [[['_route' => 'update_aboutUs', '_controller' => 'App\\Controller\\AboutUsController::update'], ['id'], null, null, false, true, null]],
        103 => [[['_route' => 'show_article', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [
            [['_route' => 'update_action', '_controller' => 'App\\Controller\\ActionController::update'], ['id'], null, null, false, true, null],
            [['_route' => 'update_article', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], null, null, false, true, null],
        ],
        162 => [[['_route' => 'app_unsubscribe', '_controller' => 'App\\Controller\\UnsubscribeController::unsubscribe'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        233 => [[['_route' => 'app_confirm', '_controller' => 'App\\Controller\\EmailConfirmController::confirmEmail'], ['token'], null, null, false, true, null]],
        258 => [[['_route' => 'app_newz_show', '_controller' => 'App\\Controller\\NewzController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_newz_edit', '_controller' => 'App\\Controller\\NewzController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'app_newz_delete', '_controller' => 'App\\Controller\\NewzController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'mdp_reset', '_controller' => 'App\\Controller\\SecurityController::mdpReset'], ['token'], null, null, false, true, null]],
        325 => [
            [['_route' => 'not_found', '_controller' => 'App\\Controller\\ErrorController::notFound'], ['url'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
