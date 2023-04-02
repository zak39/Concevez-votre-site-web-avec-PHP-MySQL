<?php

try {
    // Souvent on identifie cet objet par la variable $conn ou $db
    $db = new PDO(
        'mysql:host=localhost;dbname=my_recipes;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$recipesStatement = $db->prepare('select * from recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
    ?>
        <p><?= $recipe['author']; ?></p>
    <?php
}