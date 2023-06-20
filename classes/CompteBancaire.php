<?php 

class CompteBancaire{
    private string $libelle;
    private float $soldeInitiale;
    private string $devideMonetaire;
    private object $titulaireCompte;

    public function __construct(string $libelle, float $soldeInitiale, string $devideMonetaire,  object $titulaireCompte){
        $this-> libelle =$libelle;
        $this-> soldeInitiale = $soldeInitiale;
        $this-> devideMonetaire = $devideMonetaire;
        $this-> titulaireCompte = $titulaireCompte;
        $titulaireCompte -> ajouterCompte($titulaireCompte);

    }

//créé getter et setter libelle
    public function getLibelle(){
        return $this-> libelle;
    }
    public function setLibelle($libelle){
        $this-> libelle = $libelle;
    }
//créé getter et setter de soldeInitiale
    public function getSoldeInitiale(){
        return $this-> soldeInitiale;
    }
    public function setSoldeInitiale($soldeInitiale){
        $this-> soldeInitiale = $soldeInitiale;
    }
//créé getter et setter deviseMonetaire
    public function getDeviseMonetaire(){
        return $this-> devideMonetaire;
    }
    public function setDeviseMonetaire($devideMonetaire){
        $this-> devideMonetaire = $devideMonetaire;
    }
//créé getter et setter titulaireCompte
    public function getTitulaireCompte(){
        return $this-> titulaireCompte;
    }
    public function setTitulaireCompte($titulaireCompte){
        $this-> titulaireCompte = $titulaireCompte;
    }
}





?>