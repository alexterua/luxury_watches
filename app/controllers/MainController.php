<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30.05.2018
 * Time: 2:00
 */

namespace app\controllers;


use shop\App;

class MainController extends AppController {

    //public $layout = 'test';

    public function indexAction() {
        //$this->layout = 'test';
        //echo __METHOD__;
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые слова...');
        $name = 'Alex';
        $age = 31;
        $names = ['John', 'Eric', 'Jane'];
        //$this->set(['name' => 'Alex', 'age' => 31]);
        $this->set(compact('name', 'age', 'names'));
    }
}