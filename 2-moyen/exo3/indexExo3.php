<?php ob_start(); 
$titre = "Exo 3 : Tableaux associatif et méthode GET";
?>

<?php
$leebron = ["nom"=>"Leebron", "age"=>"35", "sport"=>"basket"];
$usain = ["nom"=>"Usain", "age"=>"36", "sport"=>"athletisme"];
$tony = ["nom"=>"Tony", "age"=>"38", "sport"=>"basket"];
$jim = ["nom"=>"Jim", "age"=>"42", "sport"=>"athletisme"];
 
$tableauAthlete = [$leebron, $usain, $tony, $jim];
?>
<div>
    <!-- Dans chaque bouton me permet de pointer vers l'url demandé via href -->
    <a href="?sport=tous" class="btn btn-primary m-2">tous</a>
    <a href="?sport=basket" class="btn btn-primary m-2">basket</a>
    <a href="?sport=athletisme" class="btn btn-primary m-2">athletisme</a>
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
         if($sportif['sport'] === $discipline){
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
