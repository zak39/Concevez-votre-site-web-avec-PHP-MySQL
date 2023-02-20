<?php

if (isset($_POST['password'])
    && isset($_POST['email']))
    {
        foreach ($users as $user)
        {
            if ($user['email'] === $_POST['email']
                && $user['password'] === $_POST['password']
            ) {
                $loggedUser = [ 'email' => $_POST['email'] ];
            }
        }
    }

?>

<?php if (!isset($loggedUser)): ?>
    <form action="home.php" method="post">
        <div>
            <label for="email">Votre adresse email :</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Votre mot de passe :</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Envoyer">
    </form>
<?php endif; ?>