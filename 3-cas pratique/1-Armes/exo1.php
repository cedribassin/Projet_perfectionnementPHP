<?php ob_start(); 
$titre = "Partie 1 - Les variables";
?>
<h2>Voici toutes les armes:</h2>

<div>
    <?php
        $arme1 = "épée";
        $arme2 = "arc";
        $arme3 = "hache";
        $arme4 = "fléau";

        $armurerie = [$arme1, $arme2, $arme3, $arme4];
        foreach($armurerie as $key => $arme){
            echo "Arme ".($key+1)." : ".$arme."</br>";
        }
    ?>
</div>
<div class="mt-2" >
    <select>
        <option></option>
        <option><?= $arme1 ?></option>
        <option><?= $arme2 ?></option>
        <option><?= $arme3 ?></option>
        <option><?= $arme4 ?></option>
    </select>
</div>
    
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
