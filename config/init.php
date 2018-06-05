<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 28.05.2018
 * Time: 0:56
 */

define("DEBUG", 1); // 1 - режим разработки; 0 - режим продакшен
define("ROOT", dirname(__DIR__)); // Корневая папка
define("WWW", ROOT . '/public'); // Публичная папка
define("APP", ROOT . '/app'); // Папка приложения
define("CORE", ROOT . '/vendor/shop/core'); // Папка ядра приложения
define("LIBS", ROOT . '/vendor/shop/core/libs'); // Папка библиотек приложения
define("CACHE", ROOT . '/tmp/cache'); // Папка кэша
define("CONF", ROOT . '/config'); // Конфигурационный файл
define("LAYOUT", 'watches'); // Шаблон сайта по умолчанию

// http(s)://shop.loc/public/index.php
if (!empty($_SERVER['HTTPS'] && 'off' !== strtolower($_SERVER['HTTPS']))) {
    $app_path = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
} else {
    $app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
}
// Ищем все кроме {/] , начиная с конца строки (убирает index/php)
// http(s)://shop.loc/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http(s)://shop.loc - получен URL главной страницы
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path); // URL главной страницы
define("ADMIN", PATH . '/admin'); // URL страницы админки

// Подключение автозагрузчика composer
require_once ROOT . '/vendor/autoload.php';