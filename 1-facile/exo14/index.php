<?php ob_start(); 
$titre = "Exo 14 : les tableaux associatifs";
?>
    <p>
        <?php 

$cedric=["nom" => "Cedric", "age" => 43, "sexe" => true];
$lea=["nom" => "Léa", "age" => 36, "sexe" => false];

affichagePersonne($cedric);
echo "-----------------</br>";
affichagePersonne($lea);

//Fonction qui permet d'afficher un tableau associatif
function affichagePersonne($personne){
        echo "Nom: ".$personne['nom']."</br>";
        echo "Age: ".$personne['age']."</br>";
        if($personne['sexe']){
            echo "Sexe: Homme</br>";
        } else {
            echo "Sexe: Femme</br>";
        }   
    }


        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
