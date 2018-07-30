<?php
/**
 * Created by PhpStorm.
 * User: Xoma55
 * Date: 28.07.2018
 * Time: 21:20
 */


namespace application\engine;

use application\engine\View;

abstract class Controller {

    public $route;
    public $view;

    public function __construct($route,$config) {

        $this->route=$route;
        $this->view = new View($route,$config);

    }

}