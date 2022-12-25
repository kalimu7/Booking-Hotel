<?php

require_once '../app/core/Controller.php';

class Admin extends controller{

    public function Dashboard(){
        $this->view('Admin/Dashboard');
    }

    public function add(){
        $this->view('Admin/Add');
    }
    public function addroom(){
        if(isset($_POST['submit'])){
            $room = $_POST['room'];
            // $suite = $_POST['suite'];
            $capacity = $_POST['capacity'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            if(isset($_POST['suite'])){
                $suite = $_POST['suite'];
            }else{
                $suite = "";
            } 
            $img_tmp = $_FILES['image']['tmp_name'];
            $image = $_FILES['image']['name'];
            $Folder =  '../public/Uppictures/'.$image;
            
            move_uploaded_file($img_tmp,$Folder);
            $model = $this->model('adminmodel');
            $model->insertdata($room,$capacity,$description,$price,$suite,$image);
            $msg = "added succefully";
            $this->view('Admin/Add', ['msg' => $msg] );
        }
    }
    public function display(){
        $model  = $this->model('adminmodel');
        $data = $model->fetch();
        $this->view('Admin/Dashboard',$data);
    }
    public function up($id){
        $model = $this->model('adminmodel');
        $data = $model->upp($id);
        $this->view('Admin/update',$data);
    }
    public function update($id){
        if(isset($_POST['update'])){
            $room = $_POST['room'];
            $capacity = $_POST['capacity'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            if(isset($_POST['suite'])){
                $suite = $_POST['suite'];
            }else{
                $suite = "";
            } 
            $img_tmp = $_FILES['image']['tmp_name'];
            $image = $_FILES['image']['name'];
            $Folder =  '../public/Uppictures/'.$image;
            $model = $this->model('adminmodel');
        if(empty($image)){
            $model->update2($id,$room,$capacity,$description,$price,$suite);
            
            header('Location:http://localhost/Hotel/public/Admin/display');
            exit;
        }else{
            $model->update1($id,$room,$capacity,$description,$price,$suite,$image);
            move_uploaded_file($img_tmp,$Folder);
            header('Location:http://localhost/Hotel/public/Admin/display');
        }
    }
    public function delete($id){
        $model = $this->model('adminmodel');
        
    }
    
}
}
?>