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
        $posts = R::findAll('test');
        $post = R::findOne('test', 'id = ?', [2]);
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые слова...');
        $name = 'Alex';
        $age = 31;
        $names = ['John', 'Eric', 'Jane', 'Mike'];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        //$cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $names);
        }
        debug($data);
        //$this->set(['name' => 'Alex', 'age' => 31]);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}