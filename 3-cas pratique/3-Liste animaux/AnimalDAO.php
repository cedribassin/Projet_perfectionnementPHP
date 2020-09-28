<?php 
require_once "Pdo.class.php";

class AnimalDAO{

    //Fonction qui permet de récupérer l'ensemble des animaux dans la BDD
    public static function getAnimals(){
        $pdo= monPDO::getPDO();
        $req = "SELECT * FROM animal";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $animals;
}

    //Fonction qui permet de récupérer le type d'un animal
    public static function getTypeAnimal($idAnimal){
        $pdo= monPDO::getPDO();
        $req = "SELECT typeAnimal FROM `type` t INNER JOIN animal a ON t.id_type = a.id_type 
        WHERE a.id_animal= :idAnimal";
        $stmt = $pdo->prepare($req);
        //La variable :idAnimal prendra la valeur $idAnimal (et on précise qu'il s'agit d'un entier)
        $stmt->bindValue(":idAnimal", $idAnimal, PDO::PARAM_INT);
        $stmt->execute();
        //FETCH_ASSOC => on renvoie le tableau associatif du résultat de cette requête
        $typeAnimal = $stmt->fetch(PDO::FETCH_ASSOC);
        return $typeAnimal['typeAnimal'];
    }

    //Fonction qui permet de récupérer les images d'un animal
    public static function getImagesAnimal($idAnimal){
        $pdo= monPDO::getPDO();
        $req = "SELECT libelle, url_image FROM `image` i INNER JOIN imageappartient ia ON i.id_image = ia.id_image 
        WHERE ia.id_animal= :idAnimal";
        $stmt = $pdo->prepare($req);
        //La variable :idAnimal prendra la valeur $idAnimal (et on précise qu'il s'agit d'un entier)
        $stmt->bindValue(":idAnimal", $idAnimal, PDO::PARAM_INT);
        $stmt->execute();
        $imageAnimal = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $imageAnimal;
    }
    
}


?>