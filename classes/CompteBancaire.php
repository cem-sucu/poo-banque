<?php 

class CompteBancaire{
    private string $libelle;
    private float $soldeInitiale;
    private string $devideMonetaire;
    protected Titulaire $titulaireCompte;

    public function __construct(string $libelle, float $soldeInitiale, string $devideMonetaire, $titulaireCompte){
        $this-> libelle =$libelle;
        $this-> soldeInitiale = $soldeInitiale;
        $this-> devideMonetaire = $devideMonetaire;
        $this-> titulaireCompte = $titulaireCompte;
        //avec la function que l'on créé dans la classe Titulaire ici cela permet d'ajouter les coompte directement dans le titulaireCompte
        $titulaireCompte -> ajouterCompte($titulaireCompte);

    }

//créé getter et setter libelle
    public function getLibelle():string{
        return $this-> libelle;
    }
    public function setLibelle(string $libelle){
        $this-> libelle = $libelle;
    }
//créé getter et setter de soldeInitiale
    public function getSoldeInitiale():float{
        return $this-> soldeInitiale;
    }
    public function setSoldeInitiale(float $soldeInitiale){
        $this-> soldeInitiale = $soldeInitiale;
    }
//créé getter et setter deviseMonetaire
    public function getDeviseMonetaire():string{
        return $this-> devideMonetaire;
    }
    public function setDeviseMonetaire(string $devideMonetaire){
        $this-> devideMonetaire = $devideMonetaire;
    }
//créé getter et setter titulaireCompte
    public function getTitulaireCompte():Titulaire{
        return $this-> titulaireCompte;
    }
    public function setTitulaireCompte(Titulaire $titulaireCompte){
        $this-> titulaireCompte = $titulaireCompte;
    }

//methode pour créditer
    public function crediter($montant){
        $this-> soldeInitiale += $montant;
    }
//méthode pour débité
    public function debiter($montant){
        $this-> soldeInitiale -= $montant;
    }

//méthode effectuer virement d'un compte à l'autre
    public function virement($compteDestinataire, $montant) {
        $this->debiter($montant);
        $compteDestinataire->crediter($montant);
    }



//ici cela permet d'afficher les infos
    public function afficherInfos() {
        echo "libéllé : $this->libelle <br>";
        echo "solde  : $this->soldeInitiale<br>";
        echo "devise : $this->devideMonetaire<br>";
        echo "titulaire du compte : " . $this->titulaireCompte->__toString();
    }

}





?>