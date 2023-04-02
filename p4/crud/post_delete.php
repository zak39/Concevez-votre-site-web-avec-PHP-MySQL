<?php

session_start();

include_once('./variables.php');

if (!isset($_POST['id'])) {
    echo('Il faut un identifiant valide pour supprimer une recette.');
    return;
}

$id = $_POST['id'];

$deleteRecipeStatement = $mysqlClient->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
    'id' => $id
]);

header('Location: ' . $rootUrl . 'home.php');