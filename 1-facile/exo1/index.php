<!-- ob_start() permet d'ouvrir un buffer qui permet d'enregistrer tout les affichages
et ce qui sera réalisé dans la page pour ensuite les afficher grâce à un ob_get_clean()
en fin de page -->
<?php ob_start(); 
$titre = "Exo 1 : Variables -> inversion de variables";
?>

<?php
echo "<p>";
echo "*******************Avant permutation*************************</br>";

$A = 3;
$B = 5;
$C = 7;

echo "A : ".$A."</br>";
echo "B : ".$B."</br>";
echo "C : ".$C."</br>";

echo "*******************Après permutation*************************</br>";
// Je suis obligé de passer par une variable temporaire sinon C prendra la nouvelle
// valeur de A:
$temp = $A;
$A = $B;
$B = $C;
$C = $temp;

echo "A : ".$A."</br>";
echo "B : ".$B."</br>";
echo "C : ".$C."</br>";

echo "</p>";

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
// $content = variable affichée dans le template
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
