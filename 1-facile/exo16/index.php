<?php ob_start(); 
$titre = "Exo 16 : les tableaux complexes";
?>
    <p>
        <?php 

$noteLea=[12, 15, 13, 7, 18];
$noteLeeroy=[11, 14, 10, 4, 20, 8, 2];
$noteCedric=[17, 15, 5, 7, 9];
$noteClyde=[11, 19, 4, 13, 20, 8, 2];

//Tableaux associatif contenant un tableau de notes
$cedric=["nom" => "Cedric", "age" => 43, "sexe" => true, "notes"=>[17, 15, 5, 7, 9]];
$lea=["nom" => "Léa", "age" => 36, "sexe" => false,"notes"=>[12, 15, 13, 7, 18] ];
$leeroy=["nom" => "Leeroy", "age" => 8, "sexe" => true, "notes"=>[11, 14, 10, 4, 20, 8, 2]];
$clyde=["nom" => "Clyde", "age" => 6, "sexe" => true, "notes"=>[11, 19, 4, 13, 20, 8, 2]];

//Tableau de tableaux associatif
$personnes = [$cedric, $lea, $leeroy, $clyde];

//Boucle for qui permet d'afficher toutes les personnes
for ($i=0; $i<count($personnes); $i++){
    echo affichagePersonne($personnes[$i]);
}


//Fonction qui permet d'afficher un tableau associatif
function affichagePersonne($personne){
        echo "<b>Nom:</b> ".$personne['nom']."</br>";
        echo "<b>Age:</b> ".$personne['age']."</br>";
        if($personne['sexe']){
            echo "<b>Sexe:</b> Homme</br>";
        } else {
            echo "<b>Sexe:</b> Femme</br>";
        }   
        //Foreach qui permet de parcourir les notes de chaque personnes
        foreach($personne['notes'] as $index => $note ){
            echo "Note: ".$index."=".$note."</br>";
        }  
        echo "La moyenne est de ".calculMoy($personne['notes'])."</br>";  
        echo "----------------------</br>";
    }

    //Fonction pour calculer la moyenne
    function calculMoy($tab){
        $sum=0;
        for($i=0; $i < count($tab); $i++){
            $sum += $tab[$i];
        }
        $moy = $sum/count($tab);
        return $moy;
    }
    
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
