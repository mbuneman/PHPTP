<?php

$coca = "coca";
$grenadine = "grenadine";

$echange = $coca;
$coca = $grenadine;
$grenadine = $echange;

[$coca, $grenadine] = [$grenadine, $coca];


$variableA = 12;
$variableB = 15;

echo "La variableA contient $variableA et la variableB contient $variableB <br/>";

$variabelC = $variableA; // Variable C = 12; Variable A= 12;
$variableA = $variableB; // Variable A = 15; Variable B= 15;
$variableB = $variableC; // Variable B = 12; Variable C= 12;


echo "La variableA contient $variableA et la variableB contient $variableB <br/>";

// Permutation par destructuration = equivalent aux lignes 33, 34 et 35  réunis
[$variableA, $variableB] = [$variableB, $variableA];

// Si ici on fait un echo, on aura à nouveau les valeurs du début
echo "La variableA contient $variableA et la variableB contient $variableB <br/>"


?>