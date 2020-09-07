<?php ob_start(); 
$titre = "Exo 5 : la boucle for";
?>

<?php 

$table = rand(1 , 10);

?>
<h1>Voici la table de multiplication de <?= $table; ?></h1>
    <p>
        <?php 
        for($i = 1; $i<=10; $i++){
            $res = $i*$table;
            echo $table ."*". $i ."=" .$res . "</br>";
        }
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
