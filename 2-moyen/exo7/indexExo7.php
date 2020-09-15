<?php ob_start(); 
require_once "player.class.php";
require_once "arme.class.php";

$titre = "Exo 7 : Manipuler plusieurs classes";
?>

<?php

$joueur1 = new Player();
$joueur1->setNom("Superman");
$arme1 = new Arme("Laser", 10);
$joueur1->setIdArme($arme1->getId());
echo $joueur1;
echo "---------------</br>";
$joueur2 = new Player();
$joueur2->setNom("Thor");
$arme2 = new Arme("Marteau", 12);
$joueur2->setIdArme($arme2->getId());
echo $joueur2;

?>
        
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
