<?php ob_start(); 
$titre = "Partie 7 - Listes déroulantes et formulaires";
?>
<?php
       class Arme {

       private $nom;
       private $level;
       private $description;
       private $maxLevel;


       public function __construct($nom, $description, $maxLevel){
           $this->nom = $nom;
           $this->level = 1;
           $this->description = $description;
           $this->maxLevel=$maxLevel;
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

        public function getMaxLevel(){
            return $this->maxLevel;
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

        public function setMaxLevel($maxLevel){
            $this->maxLevel=$maxLevel;
        }

       public function __toString(){
       $txt='<div class ="row">';
             $txt .= '<div class="col-2">';
                     $txt .= '<img src="sources/'.$this->getImageLevel().'"/></div>';
            $txt .= '<div class="col-2">';
                $txt .= '<form action="" method="GET">';
                //onChange nous permet de soumettre ce formulaire quand on change de valeur
                //En faisant name="level'.$this->nom.'", on pourra récupérer la valeur en fonction des armes
                    $txt .= '<select onChange="submit()" name="level'.$this->nom.'">';
                        for($i=1; $i<=$this->maxLevel; $i++ ){
                            $txt .="<option value='".$i."'>".$i."</option>";
                        }
                    $txt .= '</select>';  
                $txt .='</form>';
                $txt .= '</div>';
        
             $txt .= '<div class="col-8">';
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
$arme1 = new Arme("épée", "Une arme tranchante",5);
$arme2 = new Arme("arc","Une arme à distance",2);
$arme3 = new Arme("hache", "Une arme tranchante ou un outil qui permet aussi de couper du bois",5);
$arme4 = new Arme("fleau", "Une arme contondante du moyen âge",5);

$armurerie = [$arme1, $arme2, $arme3, $arme4];

//$_GET['levelépée'] est le résultat de name="level'.$this->nom.'" contenu dans la balise select
if(isset($_GET['levelépée'])){
    //On récupère cette valeur pour modifier le level (ça permettra d'afficher le bon level d'arme)
    $arme1->setLevel($_GET['levelépée']);
}
if(isset($_GET['levelarc'])){
    $arme2->setLevel($_GET['levelarc']);
}
if(isset($_GET['levehache'])){
    $arme3->setLevel($_GET['levelhache']);
}
if(isset($_GET['levelfléau'])){
    $arme4->setLevel($_GET['levelfléau']);
}

       

    ?>
<p><b>Voici les armes:</b></p>
    <?php foreach($armurerie as $arme) : 
        echo $arme;
     endforeach; ?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
