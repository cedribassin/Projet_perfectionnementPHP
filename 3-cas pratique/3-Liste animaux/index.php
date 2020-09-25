<?php ob_start(); 
require_once "pdo.class.php";
$titre = "Liste d'animaux";
?>
<?php

$test ="x";

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
                    <?= $test?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>

</table>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
