<?php ob_start(); 
$titre = "Exo 13 : les tableau de tableaux";
?>
    <p>
        <?php 

$noteMarc=[12, 15, 13, 7, 18];
$noteMathieu=[11, 14, 10, 4, 20, 8, 2];
$noteCedric=[17, 15, 5, 7, 9];
$noteClyde=[11, 19, 4, 13, 20, 8, 2];

//Tableau de tableaux
$moyenneEleve = [$noteMarc, $noteMathieu, $noteCedric, $noteClyde];

    for($i=0; $i<count($moyenneEleve); $i++){
            echo "La moyenne des notes de l'élève <b>" . ($i+1) ."</b> est de <b>".calculMoy($moyenneEleve[$i])."</b></br>";
    }

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
