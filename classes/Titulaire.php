<?php 

class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $ensembleCompte;

    public function __construct(string $nom,string $prenom, $dateDeNaissance, string $ville, $ensembleCompte )
    {
        $this->nom = $nom;
        $this-> prenom = $prenom;
        $this-> dateDeNaissance = $dateDeNaissance;
        $this-> ville = $ville;
        //ici comme c'est un ensemble de compte, on créé un tableau
        $this-> ensembleCompte = array();
    }

    public function ajouterCompte($ensembleCompte){
        $this-> ensembleCompte[]= $ensembleCompte;
    }

//getter setter de nom
    public function getNom(){
        return $this-> nom;
    }
    public function setNom(string $nom){
        $this-> nom = $nom;
    }
//getter setter de prenom
    public function getPrenom(){
        return $this-> prenom;
    }
    public function setPrenom($prenom){
        $this-> prenom = $prenom;
    }
//getter setter de dateDeNaissance
    public function getDateDeNaissance(){
        return $this -> dateDeNaissance;
    }
    public function setDateDeNaissance(DateTime $dateDeNaissance){
        $this-> dateDeNaissance = $dateDeNaissance;
    }
//getter et setter de ville
    public function getVile(){
        return $this->ville;
    }
    public function setVille($ville){
        $this-> ville = $ville;
    }
}



?>