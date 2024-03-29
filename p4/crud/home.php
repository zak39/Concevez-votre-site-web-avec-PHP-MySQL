<?php session_start(); // $_SESSION ?>

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




    <!-- Formulaire de connexion -->

    <?php include_once('login.php'); ?>

    <!-- Fin du Formulaire de connexion -->











        <h1>Site de Recettes !</h1>
        <!-- Plus facile à lire -->
        <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo $recipe['author']; ?></i>
                <table>
                    <tbody>
                        <td style="border: 1px solid black; padding: 5px;">
                            <a class="text-warning" href="update.php?id=<?= $recipe['recipe_id'] ?>">Editer l'article</a>
                        </td>
                        <td style="border: 1px solid black; padding: 5px;">
                            <a class="text-danger" href="delete.php?id=<?= $recipe['recipe_id'] ?>">Supprimer l'article</a>
                        </td>
                    </tbody>
                </table>
            </article>
        <?php endforeach ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>