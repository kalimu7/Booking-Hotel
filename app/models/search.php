<?php

require_once '../app/models/connection.php';
class search extends Connection{

    public function recherche($type){
        $conn = $this->connect();
        $stm = $conn->prepare("SELECT chambre.* FROM chambre LEFT JOIN reservation ON chambre.id = reservation.idroom AND (:entt BETWEEN reservation.checkin AND reservation.checkout OR :srtt BETWEEN reservation.checkin AND reservation.checkout) WHERE reservation.idroom IS NULL and chambre.type = :typo ");
        
        $stm->BindParam(':typo',$type);
        $stm->BindParam(':entt',$_SESSION['in']);
        $stm->BindParam(':srtt',$_SESSION['out']);
        // $stm->BindParam(':in',$_SESSION['in']);
        // $stm->BindParam(':out',$_SESSION['out']);
        $stm->execute();
        $doubleSingle = $stm->fetchAll();
        return $doubleSingle;
    }
    public function recherche1($type,$type_suite){
        $conn = $this->connect();
        $stm = $conn->prepare("SELECT chambre.* FROM chambre LEFT JOIN reservation ON chambre.id = reservation.idroom AND ('2022-12-09' BETWEEN reservation.checkin AND reservation.checkout OR '2022-12-09' BETWEEN reservation.checkin AND reservation.checkout) WHERE reservation.idroom IS NULL and chambre.type = :type  and chambre.suite_type = :typesuite ");
        $stm->BindParam(':type',$type);
        $stm->BindParam(':typesuite',$type_suite);
        $stm->execute();
        $suite = $stm->fetchAll();
        return $suite;
    }
    public function getmaxid(){
        $conn = $this->connect();
        $stm = $conn->prepare("SELECT MAX(id) as laast FROM reservation");
        $stm->execute();
        $idddd = $stm->fetchAll();
        // var_dump ($idddd);
        $id = $idddd[0]['laast'];
        // echo $idddd['laast'];
        return $id;
    }
    public function addguest($fullname,$datebirth,$idreservation){

        $conn = $this->connect();
        $stm = $conn->prepare("INSERT INTO `guest`( `fullname`, `dbirth`, `idreservation`) VALUES ('$fullname','$datebirth','$idreservation' )");
        $stm->execute();
        
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