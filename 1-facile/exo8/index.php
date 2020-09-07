<?php ob_start(); 
$titre = "Exo 8 : la boucle while";
?>
    <p>
        <?php 
        $compteur=0;
        $aleatoire=0;
        while ($aleatoire<=15){
            $compteur++;
            $aleatoire = rand(1 , 20);
            if($aleatoire<=15){
                echo "Essaie ".$compteur.": ".$aleatoire." est trop petit(<15)</br>";
            }
       }
       echo "Le chiffre choisi est ".$aleatoire;
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
