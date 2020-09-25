<?php

class Animal {

    private $nom;
    private $age;
    private $sexe;
    private $type;

    public function __construct($nom, $age, $sexe, $type){
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->type = $type;
    }
    
    //Getters
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