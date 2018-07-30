<?php
/**
 * Created by PhpStorm.
 * User: xoma55
 * Date: 30.07.18
 * Time: 9:46
 */

namespace application\engine;

class View {

    public $route;
    public $layout='default';
    private $config;
    public $cache;

    public function __construct($route,$config) {
        $this->config=$config;
        $this->route=$route;
        $this->cache = isset($this->config['twigCache'])?['cache'=>$this->config['twigCache']]:[];
    }

    public function render($vars=[]) {

        $folder = 'application/views/'.$this->route[0];
        $file = $this->route[1].'.twig';

        // Content block
        if(file_exists($folder.'/'.$file)) {
            $loader = new \Twig_Loader_Filesystem($folder);
            $layout = new \Twig_Environment($loader,$this->cache);
            $vars['content'] = $layout->render($file, $vars);
        }


        $path='application/views/layouts/'.$this->layout.'.twig';
        if(file_exists($path)) {
            $loader = new \Twig_Loader_Filesystem('application/views/layouts/');
            $layout = new \Twig_Environment($loader,$this->cache);
            echo $layout->render($this->layout.'.twig', $vars);

        } else {
            echo 'No';
        }
    }

}