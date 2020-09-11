<?php
 //Fonction qui permet de tester si les valeurs d'un tableau sont toute pair en utilisant le modulo
 function tabTabPair($tab){
     for($i = 0; $i<count($tab); $i++){
         //si on détecte une tab impaire on return false
         if($tab[$i]%2 !== 0){
            return false;
         }         
     } 
     return true;    
}

 //Fonction qui utilise une boucle for pour afficher le tableau et une ternaire pour le -
 function affichageForeach($tab){
    for($i = 0; $i < count($tab); $i++){
        echo ($i===0)?"":"-";
        echo $tab[$i];
    }
    echo "</br>";
}

 //Fonction qui permet de calculer la moyenne des tableau rentrés dans un tableau
 function calculMoy($tab){
    $sum=0;
    for($i=0; $i < count($tab); $i++){
        $sum += $tab[$i];
    }
    $moy = $sum/count($tab);
    return $moy;
}

?>