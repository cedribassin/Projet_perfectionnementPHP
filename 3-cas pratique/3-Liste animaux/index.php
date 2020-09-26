<?php ob_start(); 
require_once "Pdo.class.php";
require_once "Animal.class.php";
require_once "AnimalDAO.php";

$titre = "Liste d'animaux";
?>
<?php

//On récupère l'ensemble des animaux dans la variable $animal
$animaux = AnimalDAO::getAnimals();

//On créer l'ensemble des animaux
foreach($animaux as $animal){
    //On récupère le type dans $type en utilisant la fonction getTypeAnimal()
    $type = AnimalDAO::getTypeAnimal($animal['id_animal']);
    $images = AnimalDAO::getImagesAnimal($animal['id_animal']);
    //Pour le sexe il s'agit d'un booléen mais considéré comme un entier dans la BDD, d'ou le cast en int
    new Animal($animal['id_animal'], $animal['nom'], (int)$animal['age'], (int)$animal['sexe'], $type, $images);
}

foreach (Animal::$mesAnimaux as $animal){
    echo $animal->getId()."</br>";
    echo $animal->getNom()."</br>";     
    echo $animal->getType()."</br>";
}

?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
