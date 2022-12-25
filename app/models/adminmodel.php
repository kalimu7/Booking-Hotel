<?php

    require_once '../app/models/connection.php';
    class adminmodel extends Connection{
         
        public function insertdata($room,$capacity,$description,$price,$suite,$image){
        $cnn = $this->connect();
        $stm = $cnn->prepare("INSERT INTO chambre(`type`, `price`, `capacity`, `description`, `suite_type`, `image`) VALUES (:type,:price,:capacity,:description,:suite,:image)");
        // $stm->bindParam("ssss",$room,$capacity,$description,$price);
        $stm->bindParam(':type',$room);
        $stm->bindParam(':price',$price);
        $stm->bindParam(':capacity',$capacity);
        $stm->bindParam(':description',$description);
        $stm->bindParam(':suite',$suite);
        $stm->bindParam(':image',$image);
        $stm->execute();
        $stm->null;
        }
        public function fetch(){
            $conn = $this->connect();
            $stm = $conn->prepare("SELECT *from chambre");
            $stm->execute();
            $rooms = $stm->fetchAll();
            return $rooms;
            $stm->null;
        }
        public function upp($id){
            $conn = $this->connect();
            $stm = $conn->prepare("SELECT *from chambre WHERE id = $id");
            $stm->execute();
            $room = $stm->fetchAll();
            return $room;
            $stm->null;
        }
        public function update1($id,$room,$capacity,$description,$price,$suite,$image){
            $conn = $this->connect();
            $stm = $conn->prepare("UPDATE chambre SET type = :type , suite_type = :suite , price = :price , capacity = :capacity , description = :description , image = :image WHERE id = :id  ");
            $stm->BindParam(':type',$room);
            $stm->BindParam(':suite',$suite);
            $stm->BindParam(':price',$price);
            $stm->BindParam(':capacity',$capacity);
            $stm->BindParam(':description',$description);
            $stm->BindParam(':image',$image);
            $stm->BindParam(':id',$id);
            $stm->execute();
            $stm-> null;
        }
        public function update2($id,$room,$capacity,$description,$price,$suite){
            $conn = $this->connect();
            $stm = $conn->prepare("UPDATE chambre SET type = :type , suite_type = :suite , price = :price , capacity = :capacity , description = :description  WHERE id = :id  ");
            $stm->BindParam(':type',$room);
            $stm->BindParam(':suite',$suite);
            $stm->BindParam(':price',$price);
            $stm->BindParam(':capacity',$capacity);
            $stm->BindParam(':description',$description);
            $stm->BindParam(':id',$id);
            $stm->execute();
            $stm-> null;
        }
        public function remove(){
            $coon = $this->connect();
            $stm = $conn->prepare("");
        }
    }

?>