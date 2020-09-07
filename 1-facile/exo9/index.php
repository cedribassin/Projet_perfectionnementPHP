<?php ob_start(); 
$titre = "Exo 9 : les fonctions: détection chiffres pair";
?>
    <p>
        <?php 
        $a=5;
        $b=122;

        //Fonction qui permet de tester si un chiffre est pair en utilisant le modulo
        function testPair($chiffre){
            if ($chiffre%2===0){
                return true;
            } else {
                return false;
            }
        }

        /* if(testPair($a)){
            echo "Le chiffre ".$a." est pair</br>";
        } else {
            echo "Le chiffre ".$a." n'est pas pair</br>";
        } */

        //Avec une ternaire
        echo (testPair($a)? "Le chiffre ".$a." est pair</br>" : "Le chiffre ".$a." n'est pas pair</br>" );

       /*  if(testPair($b)){
            echo "Le chiffre ".$b." est pair</br>";
        } else {
            echo "Le chiffre ".$b." n'est pas pair</br>";
        } */

        echo (testPair($b)? "Le chiffre ".$b." est pair</br>" : "Le chiffre ".$b." n'est pas pair</br>" );

        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
