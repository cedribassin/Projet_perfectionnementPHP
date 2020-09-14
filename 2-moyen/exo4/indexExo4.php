<?php ob_start(); 
$titre = "Exo 4 : Création d'objet";
?>

<?php

class Animal{

    public $nom = "";
    public $age = 0;
    public $sport = "";

    public function __construct($nom, $age, $sport){
        $this->nom = $nom;
        $this->age = $age;
        $this->sport = $sport;
    }    
}

$leebron = new Animal("Leebron",35,"basket");
$usain = new Animal("Usain",33,"athletisme");
$tony = new Animal("Tony",37,"basket");
$jim = new Animal("leebron",42,"athletisme");
$tableauAthlete = [$leebron, $usain, $tony, $jim];

?>
<div>
    <h2>Choisissez une sport: </h2></br>
    <!-- Dans chaque bouton me permet de pointer vers l'url demandé via href -->
    <a href="?sport=tous" class="btn btn-primary m-1">tous</a>
    <a href="?sport=basket" class="btn btn-primary m-1">basket</a>
    <a href="?sport=athletisme" class="btn btn-primary m-1">athletisme</a>
</div>
<?php
//On vérifie que $_GET[''sport] existe et n'est pas vide, puis on réalise l'affichage demandé en utilisant les fonctions
if (isset($_GET['sport']) && !empty($_GET['sport']) && $_GET['sport'] === "tous"){
    affichagePersonne($tableauAthlete);
} else if (isset($_GET['sport']) && !empty($_GET['sport']) && $_GET['sport'] === "basket"){
    affichageTabPersonne("basket");
} else if (isset($_GET['sport']) && !empty($_GET['sport']) && $_GET['sport'] === "athletisme"){
    affichageTabPersonne("athletisme");
}


//Fonction qui permet d'afficher un tableau associatif
function affichagePersonne($sportifs){
    foreach($sportifs as $sportif){
        foreach($sportif as $key => $discipline){
            echo $key." : ".$discipline."<br/>";
        }
        echo "------------</br>";
    }
 }
 
 //Fonction qui permet d'afficher un élément du tableau associatif
 function affichageTabPersonne($discipline){
     global $tableauAthlete;
     echo "------------</br>";
     foreach($tableauAthlete as $sportif){
         //on vérifie que $discipline correspond au sport voulu et on affiche uniquement les bons
         if($sportif->sport === $discipline){
            foreach($sportif as $key => $discipline){
                echo $key." : ".$discipline."<br/>";
            }
            echo "------------</br>";
         }
     }
  }
  
 
?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
