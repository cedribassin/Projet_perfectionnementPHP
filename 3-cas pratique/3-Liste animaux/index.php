<?php ob_start(); 
require_once "Pdo.class.php";
require_once "Animal.class.php";
require_once "AnimalDAO.php";

$titre = "Liste d'animaux";
?>
<?php

//-----------------CONTROLLER---------------------
//On récupère l'ensemble des animaux dans la variable $animal
$animaux = AnimalDAO::getAnimals();
//On créer l'ensemble des animaux
foreach($animaux as $animal){
    //On récupère le type dans $type en utilisant la fonction getTypeAnimal(), et idem pour les images avec $images
    $type = AnimalDAO::getTypeAnimal($animal['id_animal']);
    $images = AnimalDAO::getImagesAnimal($animal['id_animal']);
    //Pour le sexe il s'agit d'un booléen mais considéré comme un entier dans la BDD, d'ou le cast en int
    new Animal($animal['id_animal'], $animal['nom'], (int)$animal['age'], (int)$animal['sexe'], $type, $images);
}
//-----------------CONTROLLER---------------------


//-----------------VIEW---------------------

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Sexe</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach(Animal::$mesAnimaux as $animal){?>
    <tr>
        <td style="vertical-align:middle"><?= $animal->getId() ?></td>
        <td style="vertical-align:middle" ><?= $animal->getNom() ?></td>
        <td style="vertical-align:middle"><?= $animal->getAge() ?></td>
        <td style="vertical-align:middle" ><?= ($animal->getSexe()===0) ? "femelle":"mâle" ?></td>
        <td style="vertical-align:middle"><?= $animal->getType() ?></td>
        <?php foreach($animal->getImages() as $image) :?>
        <td style="width:200px" class="text-center">
            <img src="sources/<?= $animal->getNom()?>/<?= $image['url_image']?>" alt="<?= $image['libelle'] ?>"
            style="max-height:150px" class="img-thumbnail img-fluid"/>
        </td>
        <?php endforeach?>
    </tr>
    <tr>
      <?php } ?>
  </tbody>
</table>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
