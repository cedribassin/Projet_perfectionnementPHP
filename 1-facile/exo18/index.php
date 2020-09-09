<?php ob_start(); 
$titre = "Exo 18 : Formulaire et méthode POST";
?>
<h2>Le chiffre est-il pair?</h2>

   <form action="" method="POST">
    <div class="form-group">
        <label>chiffre:</label>
        <input type="number" name="chiffre" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>
<?php

    if(isset($_POST['chiffre']) && !empty($_POST['chiffre'])){
            //J'utilise la fonction testPair() pour vérifier si le chiffre saisi est pair 
            // et j'envoie la réponse adéquate
            if(testPair($_POST['chiffre'])){
                echo "Le chiffre saisi est pair";
            } else {
                echo "Le chiffre saisi n'est pas pair";
            }
        }

     //Fonction qui permet de tester si un chiffre est pair en utilisant le modulo
     function testPair($chiffre){
        if ($chiffre%2===0){
            return true;
        } else {
            return false;
        }
    }
?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
