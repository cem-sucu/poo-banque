<h1>Exercice Banque</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.Un compte bancaire est composé des éléments suivants :Un libellé (compte courant, livret A, ...)Un solde initialUne devise monétaireUn titulaire uniqueUn titulaire comporte :Un nomUn prénomUne date de naissanceUne villeL'ensemble de ses comptes bancaires.Sur un compte bancaire, on doit pouvoir :Créditer le compte de X eurosDébiter le compte de X eurosEffectuer un virement d'un compte à l'autre.On doit pouvoir :Afficher  toutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.</p>

<h2>Résultat</h2>


<?php 

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

$personne1 = new Titulaire(" Jean ", " Foucaut ", " 1920-01-01 ", " Paris ");
$personne2 = new Titulaire(" Arnold ", " Swatzeneeger ", " 1956-01-01 ", " New-York ");


echo $personne1;

$compte1 = new CompteBancaire(" compte courant ", 1000, " euro ", $personne1);
$compte2 = new CompteBancaire(" livret A ", 500000, " dollar ", $personne2 );

 
echo $compte1->afficherInfos();
echo $compte2->afficherInfos();


?>