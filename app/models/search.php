<?php

require_once '../app/models/connection.php';
class search extends Connection{

    public function recherche($type){
        $conn = $this->connect();
        // SELECT chambre.* FROM chambre LEFT JOIN reservation ON chambre.id = reservation.idroom AND (:entt BETWEEN reservation.checkin AND reservation.checkout OR :srtt BETWEEN reservation.checkin AND reservation.checkout) WHERE reservation.idroom IS NULL and chambre.type = :typo 
        $stm = $conn->prepare("
        SELECT chambre.* FROM chambre
        WHERE chambre.type = :typo 
        AND chambre.id NOT IN (
          SELECT reservation.idroom FROM reservation 
          WHERE (
              (:entt BETWEEN reservation.checkin AND reservation.checkout) 
              OR (:srtt BETWEEN reservation.checkin AND reservation.checkout)
              OR (reservation.checkin BETWEEN :entt AND :srtt)
          )
        )");
        
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
        // print_r($type_suite);
        // die;
        $conn = $this->connect();
        $stm = $conn->prepare("
        SELECT chambre.* FROM chambre
        WHERE chambre.type = :type AND chambre.suite_type = :typesuite
        AND chambre.id NOT IN (
          SELECT reservation.idroom FROM reservation 
          WHERE (
              (:entt BETWEEN reservation.checkin AND reservation.checkout) 
              OR (:srtt BETWEEN reservation.checkin AND reservation.checkout)
              OR (reservation.checkin BETWEEN :entt AND :srtt)
          )
        )");
        $stm->BindParam(':type',$type);
        $stm->BindParam(':typesuite',$type_suite);
        $stm->BindParam(':entt',$_SESSION['in']);
        $stm->BindParam(':srtt',$_SESSION['out']);
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
    public function dshb($iduser){
        $conn = $this->connect();
        $stm = $conn->prepare("SELECT * FROM `reservation` INNER JOIN chambre on reservation.idroom = chambre.id WHERE reservation.iduser = :iduser");
        $stm->BindParam(':iduser',$iduser);
        $stm->execute();
        $data = $stm->FetchAll();
        return $data;
    }
    public function sup($id){
        $conn = $this->connect();
        $stm = $conn->prepare("DELETE FROM `reservation` WHERE id = :idd ");
        $stm->BindParam(':idd',$id);
        $stm->execute();
    }
}

?>