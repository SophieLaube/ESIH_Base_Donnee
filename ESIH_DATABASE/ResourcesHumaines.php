<?php 

class ResourcesHumaines{
    private $code;
    private $nom;
    private $prenom;
    private $sexe;
    private $nationalite;
    private $tel;
    private $email;
    private $type_personne;


    public function __construct($code_p,$nom_p,$prenom_p,$sexe_p,$nationalite_p,$tel_p,$email_p,$type_personne_p){
        $this->code = $code_p;
        $this->nom = $nom_p;
        $this->prenom = $prenom_p;
        $this->sexe = $sexe_p;
        $this->nationalite = $nationalite_p;
        $this->tel = $tel_p;
        $this->email = $email_p;
        $this->type_personne = $type_personne_p;
    }

    public function getCode(){
        return $this->code;
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function getSexe(){
        return $this->sexe;
    }

    public function getNationalite(){
        return $this->nationalite;
    }
    
    public function getTel(){
        return $this->tel;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getTypePersonne(){
        return $this->type_personne;
    } 
}

?>