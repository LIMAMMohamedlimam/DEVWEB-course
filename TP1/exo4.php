<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXO4</title>
</head>
<body>
<?php
function affiche_mots($nomDeFichier) {
    $fichier = fopen($nomDeFichier, 'r');

    if ($fichier) {
        while (($ligne = fgets($fichier)) !== false) {
            $mots = explode(' ', $ligne);
            foreach ($mots as $mot) {
                if (strlen($mot) < 4) {
                    echo $mot . ' ';
                }
            }
        }
        fclose($fichier);
    } else {
        echo "Impossible d'ouvrir le fichier $nomDeFichier.";
    }
}

affiche_mots('test.txt');
?>

</body>
</html>