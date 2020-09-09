<?php ob_start(); 
$titre = "Exo 17 : Formulaire et méthode GET";
?>
    <!-- action="" permet de relancer la même page et la method GET qui envoie 
    les données directement dans l'url -->
   <form action="" method="GET">
    <div class="form-group"><!-- form-group = classe bootstrap -->
        <label>Pseudo:</label>
        <input type="text" name="pseudo" class="form-control">
    </div>
    <div class="form-group">
        <label>Age:</label>
        <input type="number" name="age" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>
<?php
    //On va vérifier si on a récupéré les informations qui ont été postées dans l'url en 
    // réalisant un test via la méthode isset() et empty()

    // -> isset teste l'existance (undefined ou defined) et empty si la valeur n'est pas vide
    if(
        isset($_GET['pseudo']) && !empty($_GET['pseudo']) &&
        isset($_GET['age']) && !empty($_GET['age'])){
            //On réalise un simple affichage:
            echo $_GET['pseudo']." à ".$_GET['age']." ans";
    }

    /* En résumé, on a envoyé des informations à notre serveur php via un formulaire, 
    il les a traité et a renvoyé un résultat en html */
?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
