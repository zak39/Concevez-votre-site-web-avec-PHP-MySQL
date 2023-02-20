<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['screenshot']['size'] <= 1000000)
    {
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = [
            'jpg',
            'jpeg',
            'gif',
            'png'
        ];

        if (in_array($extension, $allowedExtensions)) {
            if (!file_exists('uploads/')) {
                mkdir('uploads/', 0777, true);
            }
            move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
            echo('L\'envoi a bien été effectué !');
        }
    }
    else {
        print('Le fichier est trop volumineux.');
    }
}