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
                $_SESSION['invit'] = $_POST['guests'];
                $_SESSION['suite_type'] = $type;
                // $_SESSION['suite_type'] = $suite;
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

        public function inv(){
            
            $this->view('booking/guest');
            $_SESSION['idroom'] = $_POST['idd'];
            $rooomid = $_SESSION['idroom'];
            $useeerid = $_SESSION['id_user'];
            $entttttt = $_SESSION['in'];
            $srtttttt = $_SESSION['out'];
        }

        public function booking(){

            if(isset($_POST['book'])){
                $ent = $_SESSION['in'];
                $sort = $_SESSION['out'];
                $idroom = $_POST['idd'];
                $iduser = $_SESSION['id_user'];
                $_SESSION['idroom'] = $idroom;
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
        public function addguest(){

            if(isset($_POST['ajoute'])){
                $inputlength = $_POST['length'];
                $model = $this->model('search');
                // book($ent,$sort,$idroom,$iduser)
                $model->book($_SESSION['in'],$_SESSION['out'],$_SESSION['idroom'],$_SESSION['id_user']);
                $idReservation = $model->getmaxid();
                // echo 'the last id is '.$idReservation;
                $i = 1;
                while($i <= $inputlength){
                    $fullname = $_POST['invf'.$i];
                    $datebirth = $_POST['invb'.$i];
                    $model->addguest($fullname,$datebirth,$idReservation);
                    $i++;
                }
                $msg='your suite booked successfully';
                $this->view('booking/room',['suite' => $msg ]);
            }
            // var_dump($_SESSION);
    
        }

    }
   

?>