<?php 
class Arme{

private static $increment = 1;
//Tableau qui contient les objets armes
private static $armes = [];
private $nom = "";
private $nbDegat = 0;
private $id = 1;

//Getters
public function getNom(){
return $this->nom;
}
public function getNbDegat(){
    return $this->nbDegat;
}
public function getId(){
    return $this->id;
}
//Setters
public function setNom($nom){
    $this->nom = $nom;
}
public function setNbDegat($nbDegat){
    $this->nbDegat = $nbDegat;
}
public function setId($id){
    $this->id = $id;
}


public function __construct($nom, $nbDegat){
    $this->nom = $nom;
    $this->nbDegat = $nbDegat;
    $this->id = self::$increment;
    self::$increment++;
    //A chaque que l'on va créer une arme, on va pouvoir l'insérer
    // dans notre tableau $armes[] on pourra ainsi accéder directement à ce tableau
    // en utilisant la classe Arme directement
    self::$armes[] = $this;
}

//Fonction qui permet de récupérer une arme en fonction d'un identifiant
public static function getArme($idArme){
    foreach(self::$armes as $arme){
        //On vérifie que $idArme === à l'id de l'arme qui à été crée et si 
        // c'est le cas on retourne l'objet arme correspondant
        if($idArme === $arme->id){
            return $arme;
        }
    }

}

public function __toString(){
    $txt = "ID : ". $this->id . "</br>";
    $txt .= "Arme : ". $this->nom . "</br>";
    $txt .= "Degat : ". $this->nbDegat. "</br>";
    return $txt;
}


} 

?>