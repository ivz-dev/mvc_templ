<?php

// Front controller


// 1. Общие настройки

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/helpers/helper.php');
require_once(ROOT.'/config/config.php');

// 3. Определение поддомена.

if($_SERVER['HTTP_HOST'] != $_SERVER['SERVER_NAME'] &&  explode(".", $_SERVER['HTTP_HOST'])[0]!='www')
{
    $subdomain = explode(".", $_SERVER['HTTP_HOST'])[0];
    define("subdomain", $subdomain);
}
else
{
    define("subdomain", 'main');
}

// 4. Вызов Router
$router = new Router();
$router->run();
