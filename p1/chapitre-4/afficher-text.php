<?php echo "Ceci est du texte" . "<br/>"; ?>

<!-- Ou bien, avec des parenthèses -->
<?php echo("Ceci est du texte" . "<br/>"); ?>

<?php
    /**
    * Permet d'afficher "texte" en gras.
    * Ce qui peur représenter un risque de sécurité (injection HTML).
    */
    echo "Ceci est du <strong>texte</strong>" . "<br/>";
?>

<?php echo "Cette ligne a été écrite \"uniquement\" en PHP." . "<br/>"; ?>