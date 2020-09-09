<?php ob_start(); 
$titre = "Exo 19 : Formulaire, méthode POST et tableau";
?>
<h2>Calcule d'une moyenne</h2>
   <form action="" method="POST">
    <div class="form-group">
        <label>Note 1:</label>
        <input type="number" name="note1" class="form-control">
    </div>
    <div class="form-group">
        <label>Note 2:</label>
        <input type="number" name="note2" class="form-control">
    </div>
    <div class="form-group">
        <label>Note 3:</label>
        <input type="number" name="note3" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>
<?php

    if(isset($_POST['note1']) && !empty($_POST['note1']) &&
       isset($_POST['note2']) && !empty($_POST['note2']) &&
       isset($_POST['note3']) && !empty($_POST['note3'])){
           //On insère les chiffres rentrés dans un tableau $tableau
           //On utilise la méthode calculMoy() et on affiche le résultat
           $tableau = [$_POST['note1'],$_POST['note2'], $_POST['note3']];
           echo "<h3>La moyenne des 3 est de: ".calculMoy($tableau)."</h3>";
        }

         //Fonction qui permet de calculer la moyenne des chiffres rentrés dans un tableau
         function calculMoy($note){
            $sum=0;
            for($i=0; $i < count($note); $i++){
                $sum += $note[$i];
            }
            $moy = $sum/count($note);
            return $moy;
        }

?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
