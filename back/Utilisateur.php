<?php

class Utilisateur
{
    private $id;
    private $nom;
    private $email;
    private $mdp;


    function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    

    public function create()
    {
        $requete = $GLOBALS['database']->prepare("INSERT INTO `utilisateur`( `nom`, `email`, `mdp`) VALUES (:nom ,:email,:mdp)");
        $requete->bindParam(':nom', $this->nom);
        $requete->bindParam(':email', $this->email);
        $requete->bindParam(':mdp', $this->mdp);
        $requete->execute();
    }
}
