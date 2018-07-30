<?php
/**
 * Created by PhpStorm.
 * User: Xoma55
 * Date: 28.07.2018
 * Time: 20:09
 */

namespace application\controllers;

use application\engine\Controller;

class MainController extends Controller {

    public function indexAction() {



        $this->view->render([
            'title'=>'Main Page',

        ]);
    }

}