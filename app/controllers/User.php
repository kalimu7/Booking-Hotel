<?php
    require_once '../app/core/Controller.php';
    class User extends controller{

        public function login(){
            $this->view('Home/login');
        }

    }

?>