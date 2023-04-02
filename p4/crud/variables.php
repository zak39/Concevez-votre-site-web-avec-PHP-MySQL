<?php

try {
    // Souvent on identifie cet objet par la variable $conn ou $db
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=we_love_food;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'user@exemple.com',
        'age' => 34,
        'password' => 'devine',
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
        'password' => 'MiamMiam',
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
        'password' => 'laCasto28',
    ],
];

/*
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];
*/

$recipesStatement = $mysqlClient->prepare("SELECT * FROM recipes;");
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}

$rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/Concevez-votre-site-web-avec-PHP-MySQL/p4/crud/';