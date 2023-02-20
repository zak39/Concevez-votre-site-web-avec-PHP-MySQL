<?php

session_start();

// Déconnexion
if (isset($_SESSION['LOGGED_USER'])) {
    $email = $_SESSION['LOGGED_USER'];
    session_destroy();
}

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

    <!-- Navigation -->
    <?php include_once('header.php'); ?>
    
    <h1>A bientôt <?= $email ?></h1>

    <?php include_once('footer.php'); ?>
</body>
</html>