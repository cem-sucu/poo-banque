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
}



?>