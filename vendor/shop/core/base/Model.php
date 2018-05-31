<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 31.05.2018
 * Time: 18:14
 */

namespace shop\base;

use shop\Db;

use \RedBeanPHP\R;


abstract class Model extends \RedBeanPHP\SimpleModel {

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        Db::instance();
    }

}