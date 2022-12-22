<?php
    require_once '../app/core/Controller.php';
    class User extends controller{

        public function login(){
            $this->view('Home/login');
        }
        public function sign(){
            $this->view('Home/Signup');
        }
        public function book(){
            $this->view('booking/book');
        }
    }

?>