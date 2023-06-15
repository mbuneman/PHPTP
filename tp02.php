<?php 
/*
    Créer un programme qui demande une valeur entière et qui affiche son double si cette donnée est inférieur à un seuil
        - Le seuil doit être défini dans une variable
        - La valeur doit être entrée directement dans une variable
    
    EXEMPLE :
        le seuil : 10
        la variable : 5
        Affichera :
            10 (5*2)
    AUTRE EXEMPLE :
        le seuil : 10
        la variable : 20
        Affichera :
            20
    Pour cela, vous allez entrer la valeur en dur (directement sur la variable)
    Vous allez devoir utiliser les conditions
*/


$seuil = 20;
$valeurEntiere = 15;
$valeurDouble = $valeurEntiere * 2 ;

    if($seuil > $valeurEntiere){
        echo "le double de cette valeur est de $valeurDouble ";
    }else {
            echo "voici la valeur entiere : $valeurEntiere ";
        }
?>