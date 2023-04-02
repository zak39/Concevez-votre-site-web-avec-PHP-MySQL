<?php

session_start();

include_once('variables.php');
// Vérification du formulaire soumis
if ( !isset($_POST['title'])
    || !isset($_POST['recipe']) ) {
        echo('Il faut un titre et une recette pour soumettre le formulaire !');
        return;
}

$title = $_POST['title'];
$recipe = $_POST['recipe'];

// Faire l'insertion en base
$insertRecipe = $mysqlClient->prepare('INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled);');
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'is_enabled' => true,
    'author' => $_SESSION['LOGGED_USER']
]);
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de Recettes - Page d'accueil</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>
        <div class="container">
            <?php include_once('header.php'); ?>
            <h1>Recette ajoutée avec succès !</h1>
    
            <div style="padding: 8px;" class="border border-dark">
                <h4><?= $title ?></h3>
                <p>
                    <span><b>Email</b> :</span> <?= $_SESSION['LOGGED_USER'] ?>
                </p>
                <p>
                    <span><b>Recette</b> :</span> <?= $recipe ?>
                </p>
            </div>
        </div>
        <?php include_once('footer.php'); ?>
    </body>
</html>