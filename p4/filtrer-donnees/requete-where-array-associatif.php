<?php

try {
    // Souvent on identifie cet objet par la variable $conn ou $db
    $db = new PDO(
        'mysql:host=localhost;dbname=we_love_food;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$recipesStatement = $db->prepare(
    "SELECT * 
    FROM recipes
    WHERE is_enabled = :is_enabled
    AND author = :author"
);

$recipesStatement->execute([
    'is_enabled' => false,
    'author' => 'okara@hotmail.com'
]);
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
    ?>
        <p><?= $recipe['title']; ?></p>
    <?php
}