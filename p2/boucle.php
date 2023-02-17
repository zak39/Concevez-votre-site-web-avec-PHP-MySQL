<?php

// Principe d'un array

$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo "<br/>";
echo $user1[1]; // "email"
echo "<br/>";
echo $user1[3]; // 34

echo "<br/>";

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // "mathieu.nebra@exemple.com"

echo "<br/>";


// while

$lines = 1;

while ($lines <= 5) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}

$lines = 1;

while ($lines <= 5)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}
?>

<?php
// For avec le projet fil rouge

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>

