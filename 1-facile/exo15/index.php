<?php ob_start(); 
$titre = "Exo 15 : les tableaux de tableaux associatifs";
?>
    <p>
        <?php 

//Tableaux associatif 
$cedric=["nom" => "Cedric", "age" => 43, "sexe" => true];
$lea=["nom" => "Léa", "age" => 36, "sexe" => false];
$leeroy=["nom" => "Leeroy", "age" => 8, "sexe" => true];
$clyde=["nom" => "Clyde", "age" => 6, "sexe" => true];

//Tableau de tableaux associatif
$personnes = [$cedric, $lea, $leeroy, $clyde];

//Boucle for qui permet d'afficher toutes les personnes
for ($i=0; $i<count($personnes); $i++){
    echo affichagePersonne($personnes[$i]);
}

//Fonction qui permet d'afficher un tableau associatif
function affichagePersonne($personne){
        echo "<b>Nom:</b> ".$personne['nom']."</br>";
        echo "<b>Age:</b> ".$personne['age']."</br>";
        if($personne['sexe']){
            echo "<b>Sexe:</b> Homme</br>";
        } else {
            echo "<b>Sexe:</b> Femme</br>";
        }   
        echo "----------------------</br>";
    }


        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
