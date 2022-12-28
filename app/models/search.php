<?php

require_once '../app/models/connection.php';
class search extends Connection{

    public function recherche($type){
        $conn = $this->connect();
        $stm = $conn->prepare("SELECT *FROM chambre WHERE type = :typo  ");
        $stm->BindParam(':typo',$type);
        $stm->execute();
        $doubleSingle = $stm->fetchAll();
        return $doubleSingle;
    }
    public function recherche1($type,$type_suite){
        $conn = $this->connect();
        $stm = $conn->prepare("SELECT *FROM chambre WHERE type = :type  and suite_type = :typesuite ");
        $stm->BindParam(':type',$type);
        $stm->BindParam(':typesuite',$type_suite);
        $stm->execute();
        $suite = $stm->fetchAll();
        return $suite;
    }
    public function book($ent,$sort,$idroom,$iduser){
        $conn = $this->connect();
        $stm = $conn->prepare("INSERT INTO `reservation` ( `checkin`, `checkout`, `idroom`, `iduser`) VALUES ('$ent','$sort',$idroom,'$iduser')");
        // $stm->bindParam(':ent',$ent);
        // $stm->bindParam(':sor',$sort);
        // $stm->bindParam(':iduser',$iduser);
        // $stm->bindParam(':isroom',$idroom);
        $stm->execute();

    }
}

?>