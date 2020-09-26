<?php

class Animal {

    private $id;
    private $nom;
    private $age;
    private $sexe;
    private $type;
    private $image = [];

    public static $mesAnimaux = [];

    public function __construct($id, $nom, $age, $sexe, $type, $image){
        $this->id = $id;
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->type = $type;
        $this->image = $image;
        //Permet d'insérer directement l'objet créé dans le tableau $mesAnimaux
        self::$mesAnimaux[] = $this;
    }
    
    //Getters
    public function getId(){
        return $this->id;
    }    
    public function getNom(){
        return $this->nom;
    }    
    public function getAge(){
        return $this->age;
    }    
    public function getSexe(){
        return $this->sexe;
    }    
    public function getType(){
        return $this->type;
    }    
    public function getImage(){
        return $this->image;
    }    

    //Setters
    public function setNom($nom){
       $this->nom = $nom;
    }    
    public function setAge($age){
        $this->age = $age;
    }    
    public function setSexe($sexe){
    $this->sexe = $sexe;
    }    
    public function setType($type){
    $this->type = $type;
    }    

    


}

?>