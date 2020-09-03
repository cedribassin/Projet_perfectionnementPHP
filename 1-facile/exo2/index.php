<?php ob_start(); 
$titre = "Exo 2 : Variables -> variables et ternaires";
?>

<?php
$nom="Marie";
$age=30;
$homme=false;

$nom2="Pierre";
$age2=32;
$homme2=true;

echo"<p>";
    echo $nom ." à ". $age." ans";
    //condition ternaire: (!$homme) => si homme = false ? => "et c'est une femme"
    // : => sinon "et c'est un homme"
   echo (!$homme) ? " et c'est une femme":" et c'est un homme";
   echo "</br>";
echo"<p>";
   /* 
  (!$homme) ? " et c'est une femme":" et c'est un homme";
  syntaxe qui équivaut à:
   if(!$homme){
        echo "et c'est une femme";
    } else {
        echo "et c'est un homme";
    } */
?>
<!-- echo $nom2 équivaut à: -->
<p>
    <?= $nom2 ?> à <?= $age2?> ans 
    <?= (!$homme2) ? " et c'est une femme":" et c'est un homme"; ?>
</p>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
