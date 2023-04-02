<?php

try {
    // Souvent on identifie cet objet par la variable $conn ou $db
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=my_recipes;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}