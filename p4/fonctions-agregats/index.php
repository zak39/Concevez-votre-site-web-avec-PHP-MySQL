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

$sqlQuery = 'SELECT ROUND(AVG(c.ranking), 1) as rating
FROM recipes r LEFT JOIN comments c on r.title = c.recipe
WHERE r.title = :recipe_name';

// Préparation
$averageRatingStatement = $db->prepare($sqlQuery);

// Exécution
$averageRatingStatement->execute([
    'recipe_name' => "Chaussons aux pommes"
]);

/** La fonction fetch est plus performante que fetchAll()
 * quand nous sommes certain(e)s de ne récupérer qu'une ligne.
 * https://www.php.net/manual/fr/pdostatement.fetch.php
 */
$averageRating = $averageRatingStatement->fetch();

?>

<p style="font-size: 24px">
    Voici la moyenne de notre reccette Chaussons aux pommes :
    <span style="font-weight: bold">
        <?= $averageRating['rating'] ?>
    </span>
</p>