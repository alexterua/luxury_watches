<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 28.05.2018
 * Time: 23:19
 */

namespace shop;


class App {

    public static $app; // Параметры приложения

    public function __construct() {
        // Cтрока запроса без концевого {/}
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
    }

    protected function getParams() {
        $params = require_once CONF . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }
    }
}