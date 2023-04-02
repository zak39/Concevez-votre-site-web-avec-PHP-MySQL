<?php

session_start();

include_once('./variables.php');

$getData = $_GET;

if (!isset($getData['id'])
    && is_numeric($getData['id'])) {
        echo('Il faut un identifiant de recette pour le modifier.');
        return;
    }

$retrieveRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
$retrieveRecipeStatement->execute([
    'id' => $getData['id']
]);

$recipe = $retrieveRecipeStatement->fetch(PDO::FETCH_ASSOC);

// Si la recette n'est pas trouvée, renvoyer un message d'erreur

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

            <h1>Mettre à jour <?= $recipe['title'] ?></h1>
                <form action="post_update.php" method="post">
                    <div class="mb-3 visually-hidden">
                        <label for="id" class="form-label">Identifiant de la recette</label>
                        <input type="hidden" class="form-control" name="id" value="<?= $recipe['recipe_id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre de la recette</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $recipe['title'] ?>">
                        <div id="title-help" class="form-text">
                            Choisissez un titre percutant !
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipe" class="form-label">Description de la recette</label>
                        <textarea name="recipe" class="form-control" placeholder="Seulement du contenu vous appertenant">
                            <?= strip_tags($recipe['recipe']) ?>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
        </div>

        <?php include_once('footer.php'); ?>
    </body>
</html>