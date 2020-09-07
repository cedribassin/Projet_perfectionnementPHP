<?php ob_start(); 
$titre = "Exo 10 : les fonctions: détection de voyelles";
?>
    <p>
        <?php 
            $monMot= "CoUcou";
            $motSansVoyelle= suppressionVoyelle($monMot);

            echo "$monMot sans voyelles est $motSansVoyelle";

            function suppressionVoyelle($mot){
                //On créer un tableau qui contient les voyelles en min et maj
                $voyelle =["a", "e", "i", "o", "u", "y","A", "E", "I", "O", "U", "Y"];
                //On utilise la fonction str_replace(arg1 = lettre recherchée, arg2 = par quoi on remplace, arg3 = sur quel mot)
                // qui permet de remplacer des lettres
                $resultat=str_replace($voyelle,"",$mot);
                return $resultat;
            }

        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
