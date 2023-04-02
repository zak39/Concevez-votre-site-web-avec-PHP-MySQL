<?php

session_start();

include_once('./variables.php');

$getData = $_GET;

if (!isset($getData['id'])
    && is_numeric($getData['id'])) {
        echo('Il faut un identifiant de recette pour la supprimer.');
        return;
    }

$retrieveRecipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
$retrieveRecipesStatement->execute([
    'id' => $getData['id']
]);
/**
 * S'il y a une erreur dans la requête SQL.
 * On retourne à la page d'accueil avec "or header('Location: ' . $rootUrl . 'home.php')".
 */
$recipe = $retrieveRecipesStatement->fetch(PDO::FETCH_ASSOC) or header('Location: ' . $rootUrl . 'home.php');

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
    <body class="d-flex flex-column min-vh-100">
        <div class="container">
            <?php include_once('header.php'); ?>

            <h1>Supprimer la recette ?</h1>
            <p>Êtes-vous sûr de supprimer la recette "<?= $recipe['title'] ?>"</p>
            <form action="post_delete.php" method="post">
                <div class="mb3 visually-hidden">
                    <label for="id" class="form-label">Identifiant de la recette</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $recipe['recipe_id'] ?>" />
                </div>
                <button type="submit" class="btn btn-danger">La suppression est définitive</button>
            </form>
        </div>

        <?php include_once('footer.php'); ?>
    </body>
</html>