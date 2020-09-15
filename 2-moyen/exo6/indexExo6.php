<?php ob_start(); 
require_once "maison.class.php";
$titre = "Exo 6 : Attribut statique";
?>

<?php
//Je créer mes objet Maison
$maison1 = new Maison(2018, 3, 98);
$maison2 = new Maison(2019, 4, 120);
$maison3 = new Maison(2017, 4, 130);

//On stocke les maisons dans un tableau de maisons
$maisons = [$maison1, $maison2, $maison3];

?>

<!-- Pour l'affichage on utilise la balise table et la classe table de bootstrap -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Nombre de chambre</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($maisons as $maison) : ?>
      <tr>
        <th scope="row"><?=$maison->getIdMaison() ?></th>
        <td><?=$maison->getDate()?></td>
        <td><?=$maison->getNbChambre()?></td>
        <td><?=$maison->getSurface()?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
