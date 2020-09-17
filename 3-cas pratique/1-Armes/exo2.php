<?php ob_start(); 
$titre = "Partie 2 - Les tableaux";
?>
<?php
        $arme1 = "épée";
        $arme2 = "arc";
        $arme3 = "hache";
        $arme4 = "fléau";

        $armurerie = [$arme1, $arme2, $arme3, $arme4];
    ?>
<p><b>Voici les armes dans un tableau PHP:</b></p>
    <?= "Arme 1 : ".$armurerie[0]."</br>" ?>
    <?= "Arme 2 : ".$armurerie[1]."</br>" ?>
    <?= "Arme 3 : ".$armurerie[2]."</br>" ?>
    <?= "Arme 4 : ".$armurerie[3]."</br>" ?>
</br>
<p><b>Voici les armes dans une boucle for:</b></p>
<div>
    <?php
        for($i=0; $i<count($armurerie); $i++){
            echo "Arme ".($i+1)." : ".$armurerie[$i]."</br>";
        }
    ?>
</div>
</br>
<p><b>Voici les armes dans une boucle foreach:</b></p>
<div>
    <?php
        foreach($armurerie as $key => $arme){
            echo "Arme ".($key+1)." : ".$arme."</br>";
        }
    ?>
</div>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
