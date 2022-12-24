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
            $suite = $_POST['suite'];
            $img_tmp = $_FILES['image']['tmp_name'];
            $image = $_FILES['image']['name'];
            $Folder =  '../public/Uppictures/'.$image;
        //die(print_r($capacity));

            if(empty($suite)){
                
            }

            move_uploaded_file($img_tmp,$Folder);
            $model = $this->model('adminmodel');
            $model->insertdata($room,$capacity,$description,$price,$suite,$image);
            $msg = "added succefully";
            $this->view('Admin/Add',$msg);
        }
    }
    
}

?>