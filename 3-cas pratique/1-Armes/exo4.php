<?php ob_start(); 
$titre = "Partie 4 - La Programmation Orientée Objet (POO)";
?>
<?php
       class Arme {

       public $nom;
       public $img;
       public $description;

       public function __construct($nom, $img, $description)
       {
           $this->nom = $nom;
           $this->img = $img;
           $this->description = $description;
       }


       }
       $arme1 = new Arme("épée", "sources/epee/epee1.png", "Une arme tranchante");
       $arme2 = new Arme("arc", "sources/arc/arc1.png","Une arme à distance");
       $arme3 = new Arme("hache", "sources/hache/hache1.png", "Une arme tranchante ou un outil qui permet aussi de couper du bois");
       $arme4 = new Arme("fleau", "sources/fleau/fleau1.png", "Une arme contondante du moyen âge");

       $armurerie = [$arme1, $arme2, $arme3, $arme4];

    ?>
<p><b>Voici les armes:</b></p>
<div class ="container">
    <?php foreach($armurerie as $arme) : ?>
    <div class ="row">
        <div class="col-2">
           <img src="<?= $arme->img ?>"/>
        </div>
        <div class="col-10">
            <?="<h2>".$arme->nom."</h2></br>"?>
            <?=$arme->description."</br>"?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
