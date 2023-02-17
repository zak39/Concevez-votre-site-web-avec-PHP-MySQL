<?php

$variable = "Mon \"nom\" est Mathieu";
$variable = 'Je m\'appelle Mathieu';

$userAge = 17;

$price = 57.3;

$isAuthor = true;
$isAdministrator = false;

$noValue = NULL;

$fullname = 'Mathieu Nebra';
echo $fullname;

echo "Bonjour $fullname et bienvenue sur le site !";

echo 'Bonjour $fullname et bienvenue sur le site !'; // ERREUR !
echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK

$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6

$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150


$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste

$number = 10 % 3; // $number prend la valeur 1 car il reste 1

