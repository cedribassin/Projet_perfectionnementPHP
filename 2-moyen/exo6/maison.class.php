<?php 
class Maison{

private static $increment = 1;
private $idMaison = 1;
private $date = 0;
private $nbChambre = 0;
private $surface = 0;

//Getters
public function getIdMaison(){
return $this->idMaison;
}
public function getDate(){
    return $this->date;
}
public function getNbChambre(){
    return $this->nbChambre;
}
public function getSurface(){
    return $this->surface;
}

public function __construct($date, $nbChambre, $surface){
    //Ici j'indique que idMaison = $increment, que j'incrémente à chaque création
    // de maison
    $this->idMaison = self::$increment;
    self::$increment++;
    $this->date = $date;
    $this->nbChambre = $nbChambre;
    $this->surface = $surface;
    }

public function __toString(){
    $txt = "id : ". $this->idMaison . "</br>";
    $txt .= "Date : ". $this->date. "</br>";
    $txt .= "Nombre chambre : ". $this->nbChambre. "</br>";
    $txt .= "Surface : ". $this->surface. "</br>";
    return $txt;
}


} 

?>