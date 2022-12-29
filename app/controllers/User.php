<?php
    require_once '../app/core/Controller.php';
    class User extends controller{

        public function login(){
            $this->view('Home/login');
        }
        public function sign(){
            $this->view('Home/Signup');
        }
        public function signup(){
            if(isset($_POST['register'])){
                $name=$_POST['Name'];
                $email=$_POST['Email'];
                $password=$_POST['password'];
            }
            if(empty($name) || empty($email) || empty($password)){
                $msg="please fill out all the forms";
                $this->view('Home/Signup',['msg' => $msg]);
                exit;
            }
            $password = Password_hash($_POST['password'],PASSWORD_BCRYPT);
            $model = $this->model('authentication');
            $check = $model->validate($email);
            if($check){
                $msg = "sign up successfully";
                $model->register($name,$email,$password);
                header('Location:http://localhost/Hotel/public/User/login');
            }else{
                $msg = "this email already registred";
                $this->view('Home/Signup',['msg' => $msg]);
            }
        }
        public function loog(){
            if(isset($_POST['login'])){
                $name=$_POST['email'];
                $password=$_POST['password'];
            }
            if(empty($name) || empty($password)){
                $msg="please fill out all the forms";
                $this->view('Home/login',['msg' => $msg]);
                exit;
            }
            
            $model = $this->model('authentication');
            $data = $model->log($name);
            //die(print_r($data));
            if(password_verify($password,$data->password) && ($data->role == 1)){
                $_SESSION['admin'] = true;
                $_SESSION['login'] = true;
                $_SESSION['name'] = $data->name;
                $_SESSION['email'] = $name;
                header('Location:http://localhost/Hotel/public/admin/display');
            }elseif(password_verify($password,$data->password) && ($data->role == 0)){
                $_SESSION['user'] = true;
                $_SESSION['id_user'] = $data->id;
                $_SESSION['name'] = $data->name;
                $_SESSION['email'] = $name;
                header('Location:http://localhost/Hotel/public/User/book');
            }else{
                $msg = 'there is something doesnt match';
                $this->view('Home/login',['msg' => $msg]);
            }
        
        }
        public function book(){
            $this->view('booking/book');
        }
        public function room(){
            $model  = $this->model('adminmodel');
            $data = $model->fetch();
            $this->view('booking/room',$data);
        }
        public function rm(){
            $this->view('booking/room');
        }
        public function out(){
            $model = $this->model('logout');
            $model->Logout();
            header('Location:http://localhost/Hotel/public/User/login');
        }
        public function search(){
            
            if(isset($_POST["search"])){
                $type = $_POST["type"];
                $suite = $_POST["suite"];
                $_SESSION['in'] = $_POST["date_entree"];
                $_SESSION['out'] = $_POST["date_sortie"];
            }
            // die(print_r($_POST));

            if(!empty($suite)){
                
                $model = $this->model('search');
                $data = $model->recherche1($type,$suite);
                $this->view('booking/room',$data);
                exit;   
            }
           
            $model = $this->model('search');
            $data = $model->recherche($type);
            // die(print_r($data));
            $this->view('booking/room',$data);
           
            
        }


        public function booking(){
            if(isset($_POST['book'])){
                $ent = $_SESSION['in'];
                $sort = $_SESSION['out'];
                $idroom = $_POST['idd'];
                $iduser = $_SESSION['id_user'];
            }
            if(empty($ent) || empty($sort) || empty($idroom) || empty($iduser)){
                $msg='you didnt fill all the inputs';               
                $this->view('booking/room',['msg'  => $msg ]);
            }
            // echo 'date entree '.$ent .' and '. $sort .' and '. $idroom .' and ' .$iduser;
            $model = $this->model('search');
            $model->book($ent,$sort,$idroom,$iduser);
            $msg = 'you have booked your room sussefully';  
            $this->view('booking/room',['msg'  => $msg ]);
        }

    }

?>