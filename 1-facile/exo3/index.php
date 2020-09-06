<?php ob_start(); 
$titre = "Exo 3 : les tests";
?>

<?php 

// rand() permet de générer un chiffre aléatoire entre le min et le max inclus
// Attention ne pas utiliser pour des données de chiffrement (cryptographique) car 
// pas assez sécurisé => il vaut mieux  random_int(), random_bytes(), ou openssl_random_pseudo_bytes().
$chiffre = rand(1 , 20);
?>
<h1> Le chiffre est <?= $chiffre; ?> </h1>
    <p>
        <?php if ($chiffre<=5){
                echo "il est compris entre 1 et 5";
            } else if ($chiffre<=10){
                echo "il est compris entre 6 et 10";
            } else if ($chiffre<=15){
                echo "il est compris entre 11 et 15";
            } else if ($chiffre<=20){
                echo "il est compris entre 16 et 20";
            } 
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
