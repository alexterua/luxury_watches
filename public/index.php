<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 28.05.2018
 * Time: 0:40
 */
// Подключение конфигурационного файла init.php
require_once dirname(__DIR__) . '/config/init.php';
// Подключение пользовательских функций
require_once LIBS . '/functions.php';

new \shop\App();
debug(\shop\App::$app->getProperties());

?>
<h1>Это фронт-контроллер</h1>