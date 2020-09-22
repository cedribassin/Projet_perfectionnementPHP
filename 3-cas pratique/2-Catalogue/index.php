<?php ob_start(); 
$titre = "Un catalogue de sport";
?>
<?php
//Connexion à la BDD, code récupéré sur php.net
$dsn = 'mysql:dbname=dbcatalogue;host=localhost';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

//Requete pour récupérer tous les sports
$req = "select * from sport";
//test liaison bdd
$statement=$pdo->prepare($req);
$statement->execute();
$sports = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="row no-gutter">
  <?php foreach($sports as $sport){?>
    <div class="col col-3">
        <div class="card" style="width: 18rem;">
            <img src="sources/<?= $sport['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$sport['libelle']?></h5>
              <p class="card-text"><?=$sport['description']?></p>
              <?php 
                //Requête pour récupérer le libelle du type correspondant au sport
                $req2 = "SELECT libelle FROM type WHERE id_type = :id_type";
                $statement=$pdo->prepare($req2);
                //Sécurisation avec binValue()
                $statement->bindValue(":id_type", $sport['id_type'], PDO::PARAM_INT);
                $statement->execute();
                $type = $statement->fetch(PDO::FETCH_ASSOC);
              ?>
              <span class='badge badge-primary'><?=$type['libelle']?></span>
          </div>
        </div>
        </div>
  <?php }?>
</div>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
