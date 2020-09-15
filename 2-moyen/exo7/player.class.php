<?php 
class Player{

private $nom = "";
private $force = 0;
private $ptVie = 0;
private $idArme;

//Getters
public function getNom(){
return $this->nom;
}
public function getForce(){
    return $this->force;
}
public function getPtVie(){
    return $this->ptVie;
}
public function getIdArme(){
    return $this->idArme;
}

//Setters
public function setNom($nom){
    $this->nom = $nom;
}
public function setForce($force){
    $this->force = $force;
}
public function setPtVie($ptVie){
    $this->ptVie = $ptVie;
}
public function setIdArme($idArme){
    $this->idArme = $idArme;
}


public function __construct(){
    //Modifiable par la suite via les setters
    $this->force = 5;
    $this->ptVie = 100;  
}

public function __toString(){
    //On récupère la fonction getArme() et on lui fait passer en paramètre
    // l'idArme de notre player
    $arme = Arme::getArme($this->idArme);
    $txt = "Nom : ". $this->nom . "</br>";
    $txt .= "Force : ". $this->force. "</br>";
    $txt .= "PV : ". $this->ptVie. "</br>";
    $txt .= $arme;
    return $txt;
}


} 

?>