<?php


namespace app\controllers;

class UserController extends AppController{


        public function signupAction(){
            if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            if(!$user->validate($data)){
                $user->getErrors();
                redirect();
            } else {
                $_SESSION['success'] = 'OK';
                redirect();
            }
            }
                $this->setMeta('Регистрация');
        }

        public function loginAction(){

        }

        public function logoutAction(){

        }
}


?>