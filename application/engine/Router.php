<?php
/**
 * Created by PhpStorm.
 * User: Xoma55
 * Date: 28.07.2018
 * Time: 19:18
 */

namespace application\engine;

class Router {

    public function __construct($config) {

        $url=trim($_SERVER['REQUEST_URI'],'/');

        if(empty($url)) $url=isset($config['baseRoute']) && !empty($config['baseRoute'])?$config['baseRoute']:'main/index';

        $route = explode('/',$url);

        $path = 'application\controllers\\'.ucfirst($route[0]).'Controller';

        if(class_exists($path)) {

            $action = isset($route[1])?$route[1].'Action':'indexAction';

            if(method_exists($path,$action)) {
                $controller = new $path($route);
                $controller->$action();
            } else {
                echo 'No';
            }

        } else {
            echo 'No';
        }
    }
}