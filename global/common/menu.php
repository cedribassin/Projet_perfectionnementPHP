<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="../../global/accueil/index.php">accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Facile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php for($i=1;$i <= 19;$i++) : ?>
                <a class="dropdown-item" href="../../1-facile/exo<?=$i?>/index.php">exo<?=$i?></a>
            <?php endfor; ?>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Moyen
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../2-moyen/exo1/exo1.php">Table de multiplication</a>
                <a class="dropdown-item" href="../../2-moyen/exo2/indexExo2.php">Fichier de fonctions et tableaux</a>
                <a class="dropdown-item" href="../../2-moyen/exo3/indexExo3.php">Fichier de fonctions et tableaux associatifs</a>
                <a class="dropdown-item" href="../../2-moyen/exo4/indexExo4.php">Création d'objet</a>
                <a class="dropdown-item" href="../../2-moyen/exo5/indexExo5.php">Private && Getter</a>
                <a class="dropdown-item" href="../../2-moyen/exo6/indexExo6.php">Attribut statique</a>
                <a class="dropdown-item" href="../../2-moyen/exo7/indexExo7.php">Manipulation de plusieurs classes</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Armes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo1.php">Etape 1</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo2.php">Etape 2</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo3.php">Etape 3</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo4.php">Etape 4</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo5.php">Etape 5</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo6.php">Etape 6</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo7.php">Etape 7</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo8.php">Etape 8</a>
            </div>
        </li>
    </ul>
    </div>
</nav>