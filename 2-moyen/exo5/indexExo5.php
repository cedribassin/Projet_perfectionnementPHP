<?php ob_start(); 
$titre = "Exo 5 : Private & Getter";
?>

<?php

class Livre{

    private $nom = "";
    private $edition = "";
    private $auteur = "";
    private $date = 0;


    public function __construct($nom, $edition, $auteur, $date){
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->date = $date;
    } 
    
    public function getEdition(){
        return $this->edition;
    }
    public function getDate(){
        return $this->date;
    }

    //L'utilisation de la fonction __toString() nous permettra de faire
    // directement des echo de $uneVariable. 
    public function __toString(){
        $txt = "Nom : ". $this->nom . "</br>";
        $txt .=   "Edition : ". $this->edition. "</br>";
        $txt .=  "Auteur : ". $this->auteur. "</br>";
        $txt .= "Date : ". $this->date. "</br>";
        return $txt;
    }


}

$livre1 = new Livre("La pluie","Laroche","Cédric", 2015);
$livre2 = new Livre("Le beau temps","Saison","Léa", 2017);
$livre3 = new Livre("La performance","Laroche","Leeroy", 2017);
$livre4 = new Livre("Les pokemons","Jeux","Clyde", 2015);
$livre5 = new Livre("L'entrainement","Saison","Cédric", 2019);

$livres = [$livre1, $livre2, $livre3, $livre4, $livre5];

//Fonction qui permet d'afficher tous les ouvrages
function affichageLivres($ouvrage){
    foreach($ouvrage as $livre){
        //Le echo $livres est possible car nous avons codé la fonction __toString()
        echo $livre;
        echo "------------</br>";
    }
 }

//Fonction qui permet d'afficher les livres en fonction de l'éditeur
function afficherOuvrageEdition($livres, $edition){
    foreach($livres as $ouvrage){
        if (($ouvrage->getEdition() === $edition || $ouvrage==="tous")){
            echo $ouvrage;
            echo "----------------</br>";
        }
    }
}

//Fonction qui permet d'afficher les livres en fonction de la date
function afficherOuvrageDate($livres, $date){
    foreach($livres as $ouvrage){
        if (($ouvrage->getDate() === (int)$date || $ouvrage==="tous")){
            echo $ouvrage;
            echo "----------------</br>";
        }

    }
}

?>
<div>
    <h2>Choisissez vos livres: </h2></br>
    <form action="" method="POST">
        <div class="form-group">
            <label>Edition</label>
            <select name="edition">
            <option value="tous">tous</option>
            <option value="Laroche">Laroche</option>
            <option value="Saison">Saison</option>
            <option value="Jeux">Jeux</option>
            </select>
        </div>
        <div class="form-group">
            <label>Date de parution</label>
            <select name="date">
            <option value="tous">tous</option>
            <option value="2015">2015</option>
            <option value="2017">2017</option>
            <option value="2019">2019</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Valider">
    </form>
</div>
<?php
//Condition qui me permet d'afficher tous les livres
if((isset($_POST['edition']) && !empty($_POST['edition']) && $_POST['edition']==="tous") &&
(isset($_POST['date']) && !empty($_POST['date']) && $_POST['date']==="tous")){
    affichageLivres($livres);
}
//Condition qui me permet de filtrer en fonction de l'editeur
if(isset($_POST['edition']) && !empty($_POST['edition'])){
    afficherOuvrageEdition($livres, $_POST['edition']);
}
//Condition qui me permet de filtrer en fonction de la date de parution
if(isset($_POST['date']) && !empty($_POST['date'])){
    afficherOuvrageDate($livres, $_POST['date']);
} 

?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
