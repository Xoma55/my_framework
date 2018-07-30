<?php
/**
 * Created by PhpStorm.
 * User: Xoma55
 * Date: 28.07.2018
 * Time: 19:39
 */

namespace application\controllers;

use application\engine\Controller;

class AccountController extends Controller{

    public function loginAction() {

        $this->view->render([
            'title'=>'Страница входа'
        ]);
    }

    public function registerAction() {

        $this->view->render([
            'title'=>'Страница регистрации'
        ]);
    }

}