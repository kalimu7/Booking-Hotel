<?php

require_once '../app/models/connection.php';
    class authentication extends Connection{
        public function validate($email){
            $conn = $this->connect();
            $stm = $conn->prepare("SELECT *FROM  user WHERE email = :email");
            $stm->bindParam(':email',$email);
            $stm->execute();
            $data = $stm->fetchAll();
            if($data){
                return false;
            }else{
                return true;
            }
            $stm->null;
        }
        
        public function register($name,$email,$password){
            
            $conn = $this->connect();
            $stm = $conn->prepare("INSERT INTO `user`(`name`, `email`, `password`) VALUES (:name,:email ,:password ) " );
            $stm->bindParam(':name',$name);
            $stm->bindParam(':email',$email);
            $stm->bindParam(':password',$password);
            $stm->execute();
            $stm->null;
        }
        public function log($email){
            $conn = $this->connect();
            $stm = $conn->prepare("SELECT * FROM  user WHERE email = :email");
            $stm->bindParam(':email',$email);
            $stm->execute();
            // $count = $stm->rowCount();
            $data = $stm->fetch(PDO::FETCH_OBJ);
           return $data;
        }

    }


?>