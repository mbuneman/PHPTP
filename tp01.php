<?php
/*

Créer un petit programme qui permet de saisir un prix HT
et d'afficher le prix TTC correspondant

// INFORMATIONS
-Le prix HT, pour le moment, doit être renseigné directement sur le code, sur une variable

- Vous allez faire le calcul et stocker le montant TTC sur une variable

- Vous allez faire une echo affichant :
    Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)

- Taux TVA = 20%

//EXEMPLE
Si le prix HT est 10, vous devez afficher :
Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€

*/
$prixHT = 20;
$TVA = 0.2;
$prixTTC = $prixHT + ($prixHT*$TVA);

echo "PrixTTC = $prixTTC";

?>
