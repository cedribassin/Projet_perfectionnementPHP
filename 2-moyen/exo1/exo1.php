<?php ob_start(); 
$titre = "Exo 1 : Les tables de multiplication";
?>

<?php

$ligne=[];
for($i=1; $i <= 10; $i++){
    //on construit 10 colonnes
    $colonne = [];
        for($j=1; $j<=10; $j++){
            //On veut que dans chaque colonne, il y ai le résultat du produit
            // de $i et $j
            $colonne[]=$i*$j;
        }
        //Dans chaque ligne, on met le résultat des colonnes
        $ligne[]=$colonne;
    }
?>

<!-- Pour l'affichage on utilise la balise table et la classe table de bootstrap -->
<table class="table">
    <?php for($j=0; $j < 10; $j++) : ?>
        <!-- On réalise une condition ternaire pour avoir seulement la 1ère ligne en gras -->
        <tr <?= ($j===0)?'class="font-weight-bold"':''?>>
            <?php for($i=0; $i < 10; $i++) :?>
                        <!-- pareil pour la 1ère colonne en gras -->
                <td <?= ($i===0)?'class="font-weight-bold"':''?>>
                    <!-- On affiche notre tableau -->
                    <?= $ligne[$j][$i]?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>

</table>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
