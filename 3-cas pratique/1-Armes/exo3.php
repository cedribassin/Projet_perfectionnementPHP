<?php ob_start(); 
$titre = "Partie 3 - Les tableaux associatifs";
?>
<?php
        $arme1 = [
            "nom"=>"épée",
            "img"=>"sources/epee/epee1.png",
            "description" => "Une arme tranchante"
        ];
        $arme2 = [
            "nom"=>"arc",
            "img"=>"sources/arc/arc1.png",
            "description" => "Une arme à distance"
        ];
        $arme3 = [
            "nom"=>"hache",
            "img"=>"sources/hache/hache1.png",
            "description" => "Une arme tranchante ou un outil qui permet aussi de couper du bois"
        ];
        $arme4 = [
            "nom"=>"fleau",
            "img"=>"sources/fleau/fleau1.png",
            "description" => "Une arme contondante du moyen âge"
        ];

        $armurerie = [$arme1, $arme2, $arme3, $arme4];
    ?>
<p><b>Voici les armes:</b></p>
<div class ="container">
    <?php foreach($armurerie as $arme) : ?>
    <div class ="row">
        <div class="col-2">
           <img src="<?= $arme['img']?>"/>
        </div>
        <div class="col-10">
            <?="<h2>".$arme['nom']."</h2></br>"?>
            <?=$arme['description']."</br>"?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
