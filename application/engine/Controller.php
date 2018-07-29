<?php
/**
 * Created by PhpStorm.
 * User: Xoma55
 * Date: 28.07.2018
 * Time: 21:20
 */


namespace application\engine;

abstract class Controller {

    public $route;

    public function __construct($route) {

        $this->route=$route;

    }

}