<?php ob_start(); 
$titre = "Exo 6 : la boucle for";
?>

<?php 

$table = rand(5 , 15);

?>
<h2>Voici le cumul des  <?= $table; ?> premiers nombres (sens inverse)</h2>
    <p>
        <?php 
        $res=0;
        for($i = $table; $i>=1; $i--){
            $res += $i;
            echo "Etape: ".($table-$i+1)."- résultat = " .$res. "</br>";
        }
        ?>
    </p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
