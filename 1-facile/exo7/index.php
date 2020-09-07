<?php ob_start(); 
$titre = "Exo 7 : le switch";
?>

<?php 

$moisChiffre = rand(1 , 12);
?>
    <p>
        <?php 
        switch ($moisChiffre) {
            case 1:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Janvier</b> en lettres";
                break;
            case 2:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Février</b> en lettres";
                break;
            case 3:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Mars</b> en lettres";
                break;
            case 4:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois d'<b>Avril</b> en lettres";
                break;        
            case 5:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Mai</b> en lettres";
                break;
            case 6:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Juin</b> en lettres";
                break;
            case 7:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Juillet</b> en lettres";
                break;
            case 8:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois d'<b>Aout</b> en lettres";
                break;     
            case 9:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Septembre</b> en lettres";
                break;
            case 10:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois d'<b>Octobre</b> en lettres";
                break;
            case 11:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Novembre</b> en lettres";
                break;
            case 12:
                echo "Le mois <strong>".$moisChiffre."</strong> correspond au mois de <b>Décembre</b> en lettres";
                break;        
             }
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
