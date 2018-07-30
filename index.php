<?php
/**
 * Created by PhpStorm.
 * User: Xoma55
 * Date: 28.07.2018
 * Time: 19:11
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

use application\engine\Router;
use application\lib\Db;

spl_autoload_register(function ($class) {

    $path=str_replace('\\','/',$class.'.php');
    if(file_exists($path)) {
        require $path;
    }

});

session_start();
require_once 'vendor/autoload.php';


$config = require 'application/config/app.php';

$router = new Router($config['main']);
//$db = new Db();


//



//$loader = new Twig_Loader_Array(array(
//    'index' => 'Hello {{ name }}!',
//));
//$twig = new Twig_Environment($loader);
//
//echo $twig->render('index', array('name' => 'Fabien'));