<?php ob_start(); 
$titre = "Partie 6 - Gestion d'images en fonction du level";
?>
<?php
       class Arme {

       private $nom;
       private $level;
       private $description;


       public function __construct($nom, $description){
           $this->nom = $nom;
           $this->level = 2;
           $this->description = $description;
       }
      
        public function getNom(){
            return $this->nom;
             }
        public function getLevel(){
            return $this->level;
            }
        public function getDescription(){
            return $this->description;
            }
        
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setLevel($level){
            $this->level = $level;
            }
        
        public function setDescription($description){
            $this->description=$description;
        }
    

       public function __toString(){
       $txt='<div class ="row">';
             $txt .= '<div class="col-2">';
                     $txt .= '<img src="sources/'.$this->getImageLevel().'"/></div>';
             $txt .= '<div class="col-10">';
                    $txt .="<h2>".$this->nom."</h2></br>";
                     $txt .= $this->description."</br></div>";
       $txt .= "</div>";
    return $txt;
       }

       //Fonction qui va permettre d'afficher les images en fonction du level
       public function getImageLevel(){
           //On créé une 1ère variable qui contient les lettres avec accent à rechercher
            $recherche=["é", "ê", "à", "è"];
            //On créé une 2ème variable qui contient les lettres de remplacement
            $replace=["e", "e", "a", "e"];
            //On crée une dernière variable qui utilise la fonction str_replace(), qui
            // contiendra le nom modifié sans accents
            $nomSansAccent = str_replace($recherche, $replace, $this->nom);
            return $nomSansAccent."/".$nomSansAccent.$this->level.".png";
       }

}
$arme1 = new Arme("épée", "Une arme tranchante");
$arme2 = new Arme("arc","Une arme à distance");
$arme3 = new Arme("hache", "Une arme tranchante ou un outil qui permet aussi de couper du bois");
$arme4 = new Arme("fleau", "Une arme contondante du moyen âge");

$armurerie = [$arme1, $arme2, $arme3, $arme4];


       

    ?>
<p><b>Voici les armes:</b></p>
    <?php foreach($armurerie as $arme) : 
        echo $arme;
     endforeach; ?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
