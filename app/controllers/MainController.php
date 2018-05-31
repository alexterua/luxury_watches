<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30.05.2018
 * Time: 2:00
 */

namespace app\controllers;


use RedBeanPHP\R;
use shop\App;

class MainController extends AppController {

    public function indexAction() {
        $posts = R::findAll('test');
        $post = R::findOne('test', 'id = ?', [2]);
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые слова...');
        $name = 'Alex';
        $age = 31;
        $names = ['John', 'Eric', 'Jane'];
        //$this->set(['name' => 'Alex', 'age' => 31]);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}