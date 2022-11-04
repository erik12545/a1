<?php
class User
{
    private $user_id;
    private $user_nom;
    private $user_prenom;
    private $user_mail;
    private $user_statut;


    public function __construct(int $user_id, string $unNom, string $unPrenom, string $unMail, string $user_statut){
        $this->user_id = $user_id;
        $this->user_nom = $unNom;
        $this->user_prenom = $unPrenom;
        $this->user_mail = $unMail;
        $this->user_statut = $user_statut;
    }


    public function getUser_id(){
        return $this->user_id;
    }
    public function setUser_id(int $user_id){
        $this->user_id = $user_id;
        return $this;
    }

    public function getUser_nom(){
        return $this->user_nom;
    }
    public function setUser_nom(string $user_nom){
        $this->user_nom = $user_nom;
        return $this;
    }

    public function getUser_prenom(){
        return $this->user_prenom;
    }
    public function setUser_prenom(string $user_prenom){
        $this->user_prenom = $user_prenom;
        return $this;
    }
    
    public function getUser_mail(){
        return $this->user_mail;
    }
    public function setUser_mail(string $user_mail){
        $this->user_mail = $user_mail;
        return $this;
    }

    public function getUser_statut(){
        return $this->user_statut;
    }
    public function setUser_statut(string $user_statut){
        $this->user_statut = $user_statut;
        return $this;
    }


    
}


?>