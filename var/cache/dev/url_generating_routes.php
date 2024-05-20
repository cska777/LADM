<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'about_us' => [[], ['_controller' => 'App\\Controller\\AboutUsController::index'], [], [['text', '/about_us']], [], [], []],
    'tab_about_us' => [[], ['_controller' => 'App\\Controller\\AboutUsController::aboutUsTab'], [], [['text', '/about_us/tab']], [], [], []],
    'delete_aboutus' => [['id'], ['_controller' => 'App\\Controller\\AboutUsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete/aboutus']], [], [], []],
    'update_aboutUs' => [['id'], ['_controller' => 'App\\Controller\\AboutUsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/aboutus']], [], [], []],
    'index_action' => [[], ['_controller' => 'App\\Controller\\ActionController::index'], [], [['text', '/action']], [], [], []],
    'tab_action' => [[], ['_controller' => 'App\\Controller\\ActionController::tabBord'], [], [['text', '/action/tab']], [], [], []],
    'new_action' => [[], ['_controller' => 'App\\Controller\\ActionController::new_action'], [], [['text', '/new']], [], [], []],
    'update_action' => [['id'], ['_controller' => 'App\\Controller\\ActionController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update']], [], [], []],
    'delete_action' => [['id'], ['_controller' => 'App\\Controller\\ActionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'app_adhesion' => [[], ['_controller' => 'App\\Controller\\AdhesionController::new'], [], [['text', '/adhesion']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_mailer' => [[], ['_controller' => 'App\\Controller\\Admin\\MailerController::sendEmailAction'], [], [['text', '/mailer']], [], [], []],
    'index_article' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'tab_article' => [[], ['_controller' => 'App\\Controller\\ArticleController::tabBord'], [], [['text', '/article/tab']], [], [], []],
    'new_article' => [[], ['_controller' => 'App\\Controller\\ArticleController::new_article'], [], [['text', '/new']], [], [], []],
    'update_article' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update']], [], [], []],
    'delete_article' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'actualites' => [[], ['_controller' => 'App\\Controller\\ArticleController::actualites'], [], [['text', '/actualites']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_database_backup' => [[], ['_controller' => 'App\\Controller\\DatabaseBackupController::backupDatabase'], [], [['text', '/backup-database']], [], [], []],
    'app_don' => [[], ['_controller' => 'App\\Controller\\DonController::index'], [], [['text', '/don']], [], [], []],
    'app_don_save' => [[], ['_controller' => 'App\\Controller\\DonController::save'], [], [['text', '/don/save']], [], [], []],
    'app_confirm' => [['token'], ['_controller' => 'App\\Controller\\EmailConfirmController::confirmEmail'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/confirm']], [], [], []],
    'app_error' => [[], ['_controller' => 'App\\Controller\\ErrorController::index'], [], [['text', '/error']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_legal_notice' => [[], ['_controller' => 'App\\Controller\\LegalNoticeController::index'], [], [['text', '/legal-notice']], [], [], []],
    'app_newz_index' => [[], ['_controller' => 'App\\Controller\\NewzController::index'], [], [['text', '/newz/']], [], [], []],
    'app_newz_new' => [[], ['_controller' => 'App\\Controller\\NewzController::new'], [], [['text', '/newz/new']], [], [], []],
    'app_newz_show' => [['id'], ['_controller' => 'App\\Controller\\NewzController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newz']], [], [], []],
    'app_newz_edit' => [['id'], ['_controller' => 'App\\Controller\\NewzController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/newz']], [], [], []],
    'app_newz_delete' => [['id'], ['_controller' => 'App\\Controller\\NewzController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newz']], [], [], []],
    'app_paiement_adhesion' => [[], ['_controller' => 'App\\Controller\\PaiementAdhesionController::index'], [], [['text', '/paiement/adhesion']], [], [], []],
    'stripe_webhook' => [[], ['_controller' => 'App\\Controller\\PaiementAdhesionController::stripeWebhook'], [], [['text', '/webhook/stripe']], [], [], []],
    'app_privacy' => [[], ['_controller' => 'App\\Controller\\PrivacyController::index'], [], [['text', '/privacy-policy']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'mdp_oublie' => [[], ['_controller' => 'App\\Controller\\SecurityController::mdpOublie'], [], [['text', '/mdp_oublie']], [], [], []],
    'mdp_reset' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::mdpReset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mdp_oublie']], [], [], []],
    'app_subscribe' => [[], ['_controller' => 'App\\Controller\\SubscriberController::index'], [], [['text', '/subscribe']], [], [], []],
    'app_unsubscribe' => [['token'], ['_controller' => 'App\\Controller\\UnsubscribeController::unsubscribe'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/unsubscribe']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/tab']], [], [], []],
    'app_recap_index' => [[], ['_controller' => 'App\\Controller\\UserController::tabBord'], [], [['text', '/user/']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\UserController::search'], [], [['text', '/user/search']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'show_article' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_create_checkout_session' => [[], ['_controller' => 'App\\Controller\\PaiementAdhesionController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'not_found' => [['url'], ['_controller' => 'App\\Controller\\ErrorController::notFound'], [], [['variable', '/', '[^/]++', 'url', true]], [], [], []],
    'App\Controller\AboutUsController::index' => [[], ['_controller' => 'App\\Controller\\AboutUsController::index'], [], [['text', '/about_us']], [], [], []],
    'App\Controller\AboutUsController::aboutUsTab' => [[], ['_controller' => 'App\\Controller\\AboutUsController::aboutUsTab'], [], [['text', '/about_us/tab']], [], [], []],
    'App\Controller\AboutUsController::delete' => [['id'], ['_controller' => 'App\\Controller\\AboutUsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete/aboutus']], [], [], []],
    'App\Controller\AboutUsController::update' => [['id'], ['_controller' => 'App\\Controller\\AboutUsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/aboutus']], [], [], []],
    'App\Controller\ActionController::index' => [[], ['_controller' => 'App\\Controller\\ActionController::index'], [], [['text', '/action']], [], [], []],
    'App\Controller\ActionController::tabBord' => [[], ['_controller' => 'App\\Controller\\ActionController::tabBord'], [], [['text', '/action/tab']], [], [], []],
    'App\Controller\ActionController::new_action' => [[], ['_controller' => 'App\\Controller\\ActionController::new_action'], [], [['text', '/new']], [], [], []],
    'App\Controller\ActionController::update' => [['id'], ['_controller' => 'App\\Controller\\ActionController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update']], [], [], []],
    'App\Controller\ActionController::delete' => [['id'], ['_controller' => 'App\\Controller\\ActionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'App\Controller\AdhesionController::new' => [[], ['_controller' => 'App\\Controller\\AdhesionController::new'], [], [['text', '/adhesion']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\Admin\MailerController::sendEmailAction' => [[], ['_controller' => 'App\\Controller\\Admin\\MailerController::sendEmailAction'], [], [['text', '/mailer']], [], [], []],
    'App\Controller\ArticleController::index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'App\Controller\ArticleController::tabBord' => [[], ['_controller' => 'App\\Controller\\ArticleController::tabBord'], [], [['text', '/article/tab']], [], [], []],
    'App\Controller\ArticleController::show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\ArticleController::new_article' => [[], ['_controller' => 'App\\Controller\\ArticleController::new_article'], [], [['text', '/new']], [], [], []],
    'App\Controller\ArticleController::update' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update']], [], [], []],
    'App\Controller\ArticleController::delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'App\Controller\ArticleController::actualites' => [[], ['_controller' => 'App\\Controller\\ArticleController::actualites'], [], [['text', '/actualites']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'App\Controller\DatabaseBackupController::backupDatabase' => [[], ['_controller' => 'App\\Controller\\DatabaseBackupController::backupDatabase'], [], [['text', '/backup-database']], [], [], []],
    'App\Controller\DonController::index' => [[], ['_controller' => 'App\\Controller\\DonController::index'], [], [['text', '/don']], [], [], []],
    'App\Controller\DonController::save' => [[], ['_controller' => 'App\\Controller\\DonController::save'], [], [['text', '/don/save']], [], [], []],
    'App\Controller\EmailConfirmController::confirmEmail' => [['token'], ['_controller' => 'App\\Controller\\EmailConfirmController::confirmEmail'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/confirm']], [], [], []],
    'App\Controller\ErrorController::index' => [[], ['_controller' => 'App\\Controller\\ErrorController::index'], [], [['text', '/error']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\LegalNoticeController::index' => [[], ['_controller' => 'App\\Controller\\LegalNoticeController::index'], [], [['text', '/legal-notice']], [], [], []],
    'App\Controller\NewzController::index' => [[], ['_controller' => 'App\\Controller\\NewzController::index'], [], [['text', '/newz/']], [], [], []],
    'App\Controller\NewzController::new' => [[], ['_controller' => 'App\\Controller\\NewzController::new'], [], [['text', '/newz/new']], [], [], []],
    'App\Controller\NewzController::show' => [['id'], ['_controller' => 'App\\Controller\\NewzController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newz']], [], [], []],
    'App\Controller\NewzController::edit' => [['id'], ['_controller' => 'App\\Controller\\NewzController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/newz']], [], [], []],
    'App\Controller\NewzController::delete' => [['id'], ['_controller' => 'App\\Controller\\NewzController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newz']], [], [], []],
    'App\Controller\PaiementAdhesionController::index' => [[], ['_controller' => 'App\\Controller\\PaiementAdhesionController::index'], [], [['text', '/paiement/adhesion']], [], [], []],
    'App\Controller\PaiementAdhesionController::createCheckoutSession' => [[], ['_controller' => 'App\\Controller\\PaiementAdhesionController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'App\Controller\PaiementAdhesionController::stripeWebhook' => [[], ['_controller' => 'App\\Controller\\PaiementAdhesionController::stripeWebhook'], [], [['text', '/webhook/stripe']], [], [], []],
    'App\Controller\PrivacyController::index' => [[], ['_controller' => 'App\\Controller\\PrivacyController::index'], [], [['text', '/privacy-policy']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::mdpOublie' => [[], ['_controller' => 'App\\Controller\\SecurityController::mdpOublie'], [], [['text', '/mdp_oublie']], [], [], []],
    'App\Controller\SecurityController::mdpReset' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::mdpReset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mdp_oublie']], [], [], []],
    'App\Controller\SubscriberController::index' => [[], ['_controller' => 'App\\Controller\\SubscriberController::index'], [], [['text', '/subscribe']], [], [], []],
    'App\Controller\UnsubscribeController::unsubscribe' => [['token'], ['_controller' => 'App\\Controller\\UnsubscribeController::unsubscribe'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/unsubscribe']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/tab']], [], [], []],
    'App\Controller\UserController::tabBord' => [[], ['_controller' => 'App\\Controller\\UserController::tabBord'], [], [['text', '/user/']], [], [], []],
    'App\Controller\UserController::search' => [[], ['_controller' => 'App\\Controller\\UserController::search'], [], [['text', '/user/search']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
