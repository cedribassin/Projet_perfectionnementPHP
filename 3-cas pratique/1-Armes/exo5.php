<?php ob_start(); 
$titre = "Partie 5 - Optimisation de la classe Arme";
?>
<?php
       class Arme {

       private $nom;
       private $img;
       private $description;


       public function __construct($nom, $img, $description)
       {
           $this->nom = $nom;
           $this->img = $img;
           $this->description = $description;
       }
      
        public function getNom(){
            return $this->nom;
             }
        public function getImg(){
            return $this->img;
            }
        public function getDescription(){
            return $this->description;
            }

        public function setImg($img){
            $this->img = $img;
            }
    

       public function __toString(){
       $txt='<div class ="row">';
             $txt .= '<div class="col-2">';
                     $txt .= '<img src="sources/'.$this->img.'"/></div>';
             $txt .= '<div class="col-10">';
                    $txt .="<h2>".$this->nom."</h2></br>";
                     $txt .= $this->description."</br></div>";
       $txt .= "</div>";
    return $txt;

       }

       }
$arme1 = new Arme("épée", "epee/epee1.png", "Une arme tranchante");
$arme2 = new Arme("arc", "arc/arc1.png","Une arme à distance");
$arme3 = new Arme("hache", "hache/hache1.png", "Une arme tranchante ou un outil qui permet aussi de couper du bois");
$arme4 = new Arme("fleau", "fleau/fleau1.png", "Une arme contondante du moyen âge");

$armurerie = [$arme1, $arme2, $arme3, $arme4];

//Ici rand de 1 à 5 car il y a 5 images
$imgRandom=rand(1,5);
$arme1->setImg("epee/epee".$imgRandom.".png");
$imgRandom=rand(1,5);
$arme3->setImg("hache/hache".$imgRandom.".png");
$imgRandom=rand(1,5);
$arme4->setImg("fleau/fleau".$imgRandom.".png");

//Ici rand de 1 à 2 car il y a 2 images
$imgRandom=rand(1,2);
$arme2->setImg("arc/arc".$imgRandom.".png");

       

    ?>
<p><b>Voici les armes:</b></p>
    <?php foreach($armurerie as $arme) : 
        echo $arme;
     endforeach; ?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
