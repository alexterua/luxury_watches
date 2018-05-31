<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30.05.2018
 * Time: 2:33
 */

namespace app\controllers;


use app\models\AppModel;
use shop\base\Controller;

class AppController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
    }

}