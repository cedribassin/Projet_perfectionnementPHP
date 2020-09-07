<?php ob_start(); 
$titre = "Exo 11 : les tableaux";
?>
    <p>
        <?php 
            $hommes=["Mathieu", "Pierre", "Marc", "Jean"];
            $femmes=["Morgane", "Mathilde", "Julie"];

            affichageFor($hommes);
            echo "------------------------</br>";
            affichageFor($femmes);
            echo "------------------------</br>";
            affichageForeach($hommes);
            echo "------------------------</br>";
            affichageForeach($femmes);

            //Fonction qui utilise une boucle for pour afficher le tableau
            function affichageFor($noms){
                for($i = 0; $i <count($noms); $i++){
                    echo $i.": ".$noms[$i] ."</br>";
                }
            }

            //Fonction qui utilise une boucle foreach pour afficher le tableau
            function affichageForeach($noms){
                foreach($noms as $index => $nom){
                    echo $index.": ".$nom ."</br>";
                }
            }


        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
