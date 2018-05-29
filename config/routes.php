<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.05.2018
 * Time: 19:02
 */

use shop\Router;

// Маршруты по умолчанию
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');