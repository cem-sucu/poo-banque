<?php 

class CompteBancaire{
    private string $libelle;
    private float $soldeInitiale;
    private string $devideMonetaire;
    private string $titulaireCompte;

    public function __construct(string $libelle, float $soldeInitiale, string $devideMonetaire, string $titulaireCompte){
        $this-> libelle =$libelle;
        $this-> soldeInitiale = $soldeInitiale;
        $this-> devideMonetaire = $devideMonetaire;
        $this-> titulaireCompte = $titulaireCompte;

    }
    
    
}





?>