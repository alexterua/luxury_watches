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
use shop\Cache;

class MainController extends AppController {

    public function indexAction() {
        $brands = R::find('brand', 'LIMIT 3');
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые слова...');
        $this->set(compact('brands'));
    }
}