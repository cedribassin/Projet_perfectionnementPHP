<?php 
//Pour les sessions on doit TOUJOURS commencer la page par session_start()
session_start();

//On initialise les variables de session et on vérifie si les variable de session
// n'existaient pas avec !isset()
if(!isset($_SESSION['épée']) ){
$_SESSION['épée']=1;}
if(!isset($_SESSION['arc']) ){
$_SESSION['arc']=1;}
if(!isset($_SESSION['hache']) ){
$_SESSION['hache']=1;}
if(!isset($_SESSION['fléau']) ){
    $_SESSION['fléau']=1;}

ob_start(); 
$titre = "Partie 8 - Finalisation avec les sessions";
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
                    $txt .= '<select onChange="submit()" name="level'.$this->nom.'">';
                        for($i=1; $i<=$this->maxLevel; $i++ ){
                            //Pour conserver le bonne indice de l'arme dans la liste déroulante
                            // on rajoute selected dans la balise option:
                            $txt .="<option value='".$i."'";
                            //On test si $i correspond à ce que nous avons dans la variable de session
                            //correspondant à l'arme, si ce n'est pas le cas on met rien:
                            $txt .=($i=== (int)$_SESSION[$this->nom])? "selected":"";
                            $txt .=  ">".$i."</option>";
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
$arme4 = new Arme("fléau", "Une arme contondante du moyen âge",5);

$armurerie = [$arme1, $arme2, $arme3, $arme4];

if(isset($_GET['levelépée'])){ 
    //$arme1->setLevel($_GET['levelépée']);
    //On modifie la session:
    $_SESSION['épée'] = $_GET['levelépée'];
}
if(isset($_GET['levelarc'])){
    //$arme2->setLevel($_GET['levelarc']);
    $_SESSION['arc'] = $_GET['levelarc'];
}
if(isset($_GET['levelhache'])){
    //$arme3->setLevel($_GET['levelhache']);
    $_SESSION['hache'] = $_GET['levelhache'];
}
if(isset($_GET['levelfléau'])){
    //$arme4->setLevel($_GET['levelfléau']);
    $_SESSION['fléau'] = $_GET['levelfléau'];
}

//On passe maintenant la valeur des $_SESSION[''] dans les level des armes:
$arme1->setLevel($_SESSION['épée']);
$arme2->setLevel($_SESSION['arc']);
$arme3->setLevel($_SESSION['hache']);
$arme4->setLevel($_SESSION['fléau']);
    ?>

<p><b>Voici les armes:</b></p>
    <?php foreach($armurerie as $arme) : 
        echo $arme;
     endforeach; ?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
