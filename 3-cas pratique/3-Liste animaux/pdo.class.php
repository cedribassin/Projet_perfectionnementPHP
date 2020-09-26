<?php 

//On créer une classe pour générer la connexion à la DB

class MonPDO {
    private const HOST_NAME = "localhost";
    private const DB_NAME = "listeanimaux";
    private const USER_NAME = "root";
    private const PWD = "";

    //Propriété statique qui permet de conserver l'instance de PDO, permet d'éviter
    // de régénérer à chaque requête une nouvelle instance de PDO (similaire au pattern Singleton)
    private static $monPDOinstance = null;
    
    public static function getPDO(){
        //self permet d'acceder à une propriété static
        if (is_null(self::$monPDOinstance)){
            try{
                $connexion = 'mysql:host=' .self::HOST_NAME. ';dbname='.self::DB_NAME;
                self::$monPDOinstance = new PDO($connexion, self::USER_NAME, self::PWD, array (pdo::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION));
            } catch (PDOException $e){
                $message = "erreur de connexion à la DB ". $e->getMessage();
                die($message);
            }
            //Pour avoir un encodage en utf8
            self::$monPDOinstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$monPDOinstance;
    }
}

?>
