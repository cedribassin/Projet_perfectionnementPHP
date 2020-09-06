<?php ob_start(); 
$titre = "Exo 4 : les tests";
?>

<?php 

$chiffre1 = rand(1 , 100);
$chiffre2 = rand(1 , 100);

// abs() permet de calculer la valeur absolue
$valAbsolue = abs($chiffre1-$chiffre2);

?>
<p> Le chiffre 1 est <strong><?= $chiffre1; ?></strong> </p>
<p> Le chiffre 2 est <strong><?= $chiffre2; ?></strong> </p>

    <p>
        <?php if ($valAbsolue < 25 && $valAbsolue > 75){
                echo "La valeur absolue de <strong>".$chiffre1 ." - ".$chiffre2."</strong> n'est pas comprise entre 25 et 75";
            } else {
                echo "La valeur absolue de <strong>".$chiffre1 ." - ".$chiffre2."</strong> est comprise entre 25 et 75"; 
            }
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
