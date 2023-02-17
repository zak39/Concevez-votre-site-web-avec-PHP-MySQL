<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe;

echo "<br />";

echo str_replace('c', 'C', 'le cassoulet, c\'est très bon');

echo "<br />";

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);

echo "<br />";

$year = date('Y');
echo $year;

echo "<br />";

// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;

echo "<br />";

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

// 2 exemples
$romanSalad = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => true,
];

$sushis = [
    'title' => 'Sushis',
    'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => false,
];


// Répond true !
$isRomandSaladValid = isValidRecipe($romanSalad);
var_dump($isRomandSaladValid);
echo "<br/>";

// Répond false !
$isSushisValid = isValidRecipe($sushis);
var_dump($isSushisValid);
echo "<br/>";

