<?php ob_start(); 
require_once "gestionTableau.php";
$titre = "Exo 2 : Fichier de fonctions et tableaux";
?>

<?php
$tab1=[2, 6, 10, 20, 9, 14];
$tab2=[4, 8, 2, 26, 18, 14];

/* echo affichageForeach($tab1);
echo calculMoy($tab1);
testPair($tab1); */

?>
 <div class="row">
    <div class="col-6 text-center">
        <h2>Tableau 1:</h2>
            <?= affichageForeach($tab1) ?>
            <?= "La moyenne est de: ".calculMoy($tab1)."</br>" ?>
            <?php 
            if(tabTabPair($tab1)){
                echo "Le tableau contient que des valeurs paires";
             } else {
                 echo"Le tableau ne contient pas que des valeurs paires";
                }
            ?>
    </div>
    <div class="col-6 text-center">
        <h2>Tableau 2:</h2>
        <?= affichageForeach($tab2) ?>
            <?= "La moyenne est de: ".calculMoy($tab2)."</br>" ?>
            <?php 
            if(tabTabPair($tab2)){
                echo "Le tableau contient que des valeurs paires";
             } else {
                 echo"Le tableau ne contient pas que des valeurs paires";
                }
            ?>
    </div>
  </div>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
