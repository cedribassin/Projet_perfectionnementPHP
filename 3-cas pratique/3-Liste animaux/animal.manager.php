<?php 
require_once "pdo.class.php";

class AnimalDAO{

    //Fonction qui permet de récupérer l'ensemble des aniamux dans la BDD
    public function getAnimals(){
        $pdo= monPDO::getPDO();
        $req = "SELECT * FROM animal";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $animals;
}


}


?>