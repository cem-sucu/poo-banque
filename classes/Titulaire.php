<?php 

class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $ensembleCompte;

    public function __construct(string $nom,string $prenom, string $dateDeNaissance, string $ville)
    {
        $this->nom = $nom;
        $this-> prenom = $prenom;
        $this-> dateDeNaissance = new DateTime($dateDeNaissance);
        $this-> ville = $ville;
        //ici comme c'est un ensemble de compte, on créé un tableau
        $this-> ensembleCompte = [];
    }
    

// on c réé la function pour calculez age a partir de a date de naissance
    public function calculeAge(){
        $aujourdhui = new DateTime();
        $difference = $this->dateDeNaissance->diff($aujourdhui);
        // ca sa return l'age mois jours près
        // return $difference->format("%Y ans %m mois %d jours");
        
        //ca sa return l'age directement
        return $difference->format("%y ans");
        
    }


//la function ajouterCompte
    public function ajouterCompte($compte) {
        $this->ensembleCompte[] = $compte;
    }


// afficher

//getter setter de nom
    public function getNom():string{
        return $this-> nom;
    }
    public function setNom(string $nom){
        $this-> nom = $nom;
    }
//getter setter de prenom
    public function getPrenom():string{
        return $this-> prenom;
    }
    public function setPrenom(string $prenom){
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
    public function getVille(){
        return $this->ville;
    }
    public function setVille(string $ville){
        $this-> ville = $ville;
    }

// function toString
    public function __toString():string{
        return $this->getNom() ." " .$this->getPrenom() .$this->getDateDeNaissance()->format("d-m-Y")." a ".$this->calculeAge() ." ";
    }
 
    
}



?>