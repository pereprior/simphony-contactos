<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'job_info' => [['id'], ['id' => '1', '_controller' => 'App\\Controller\\JobController::getJobById'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/job']], [], [], []],
    'add_new_job' => [[], ['_controller' => 'App\\Controller\\JobController::addJob'], [], [['text', '/job/add']], [], [], []],
    'update_job_name' => [['id'], ['_controller' => 'App\\Controller\\JobController::updateJobName'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job/update']], [], [], []],
    'delete_job' => [['id'], ['_controller' => 'App\\Controller\\JobController::deleteJob'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job/delete']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_page_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/']], [], [], []],
    'user_info' => [['id'], ['id' => '1', '_controller' => 'App\\Controller\\UserController::getUserById'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/user']], [], [], []],
    'add_new_user' => [[], ['_controller' => 'App\\Controller\\UserController::addUser'], [], [['text', '/user/add']], [], [], []],
    'update_user_name' => [['id'], ['_controller' => 'App\\Controller\\UserController::updateUserName'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/update']], [], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/delete']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
