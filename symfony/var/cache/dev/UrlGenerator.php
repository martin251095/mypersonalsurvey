<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'users_login' => [[], ['_controller' => 'App\\Controller\\AccountController::login'], [], [['text', '/users/login']], [], []],
    'users_logout' => [[], ['_controller' => 'App\\Controller\\AccountController::logout'], [], [['text', '/users/logout']], [], []],
    'check_email' => [[], ['_controller' => 'App\\Controller\\RedirectController::redirectRequest'], [], [['text', '/resetting/check-email']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\RedirectController::redirectReset'], [], [['text', '/profile']], [], []],
    'request' => [[], ['_controller' => 'App\\Controller\\RedirectController::blockAccess'], [], [['text', '/resetting/request']], [], []],
    'admin_answer_list' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminAnswerController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/answer']], [], []],
    'admin_answer_add' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminAnswerController::add'], [], [['text', '/admin/answer/add']], [], []],
    'admin_answer_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminAnswerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/answer']], [], []],
    'admin_answer_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminAnswerController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/answer']], [], []],
    'admin_category_list' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/category']], [], []],
    'admin_category_add' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::add'], [], [['text', '/admin/category/add']], [], []],
    'admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_homepage' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::dashboard'], [], [['text', '/admin/dashboard']], [], []],
    'admin_question_list' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/question']], [], []],
    'admin_question_add' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminQuestionController::add'], [], [['text', '/admin/question/add']], [], []],
    'admin_question_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminQuestionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/question']], [], []],
    'admin_question_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminQuestionController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/question']], [], []],
    'admin_quiz_list' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminQuizController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/quiz']], [], []],
    'admin_quiz_add' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminQuizController::add'], [], [['text', '/admin/quiz/add']], [], []],
    'admin_quiz_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminQuizController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quiz']], [], []],
    'admin_quiz_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminQuizController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/quiz']], [], []],
    'admin_surveyanswer_list' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminSurveyAnswerController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/surveyanswer']], [], []],
    'admin_surveyanswer_details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSurveyAnswerController::details'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/surveyanswer']], [], []],
    'admin_surveyanswer_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSurveyAnswerController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/surveyanswer']], [], []],
    'admin_survey_list' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminSurveyController::list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/survey']], [], []],
    'admin_survey_add' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminSurveyController::add'], [], [['text', '/admin/survey/add']], [], []],
    'admin_survey_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSurveyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey']], [], []],
    'admin_survey_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSurveyController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/survey']], [], []],
    'admin_user_list' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUsersController::list'], [], [['text', '/admin/user']], [], []],
    'admin_user_add' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUsersController::add'], [], [['text', '/admin/user/add']], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUsersController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'contact' => [['_locale'], ['_controller' => 'App\\Controller\\Site\\Contact\\ContactController::home'], ['_locale' => 'en|fr|nl'], [['text', '/contact'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'quiz_list' => [['_locale', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::list'], ['page' => '\\d+', '_locale' => 'en|fr|nl'], [['variable', '/', '\\d+', 'page', true], ['text', '/quiz'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'quiz_show' => [['_locale', 'slug'], ['_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::show'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'slug', true], ['text', '/quiz'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'quiz_thanks' => [['_locale'], ['_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::thanks'], ['_locale' => 'en|fr|nl'], [['text', '/thanks'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'survey_list' => [['_locale', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::list'], ['page' => '\\d+', '_locale' => 'en|fr|nl'], [['variable', '/', '\\d+', 'page', true], ['text', '/survey'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'survey_create' => [['_locale'], ['_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::create'], ['_locale' => 'en|fr|nl'], [['text', '/survey/create'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'survey_show' => [['_locale', 'slug'], ['_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::show'], ['_locale' => 'en|fr|nl'], [['variable', '/', '[^/]++', 'slug', true], ['text', '/survey'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'survey_thanks' => [['_locale'], ['_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::thanks'], ['_locale' => 'en|fr|nl'], [['text', '/thanks'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'home' => [['_locale'], ['_locale' => 'en', '_controller' => 'App\\Controller\\Site\\Home\\HomeController::home'], ['_locale' => 'en|fr|nl'], [['text', '/homepage'], ['variable', '/', 'en|fr|nl', '_locale', true]], [], []],
    'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
    'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
    'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
    'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
    'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
    'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
    'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
    'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
    'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
    'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], []],
    'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/registration/']], [], []],
    'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/registration/check-email']], [], []],
    'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/registration/confirm']], [], []],
    'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/registration/confirmed']], [], []],
];
