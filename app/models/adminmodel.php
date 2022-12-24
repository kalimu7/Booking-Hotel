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
    }

?>