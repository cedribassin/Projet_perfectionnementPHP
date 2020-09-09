<?php ob_start(); 
$titre = "Exo 12 : les tableaux => calcul de moyenne";
?>
    <p>
        <?php 
            $marc=[12, 15, 13, 7, 18];
            $mathieu=[11, 14, 10, 4, 20, 8, 2];

           echo "La moyenne des notes de <b>Marc</b> est <b>".calculMoy($marc)."</b></br>";
           echo "La moyenne des notes de <b>Mathieu</b> est <b>".calculMoy($mathieu)."</b></br>";

           //Fonction qui permet de calculer la moyenne des chiffres rentrés dans un tableau
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
