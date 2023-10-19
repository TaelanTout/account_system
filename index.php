<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wikipédia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="rond"></div>
    <button id="gauche">gauche</button>
    <button id="droite">droite</button>
    <button id="haut">haut</button>
    <button id="bas">bas</button>
    <form action="" method="post">
        <label for="nom">nom</label>
        <input type="text" name="nom">
        <label for="prénom">prénom</label>
        <input type="text" name="prénom">
        <label for="adresse_mail">adresse email</label>
        <input type="text" name="adresse_mail">
        <label for="tel">numéro de téléphone</label>
        <input type="text" name="tel">
        <button type="submit"> valider</button>
    </form>
</body>
</html>
<script src="js/main.js"></script>
<?php

    $nom = $_POST["nom"];
    echo('nom='.$nom);

    $prenom = $_POST["prénom"];
    echo(' prénom='.$prenom);

    $adresse_mail = $_POST["adresse_mail"];
    echo(' adresse mail='.$adresse_mail);

    $tel = $_POST["tel"];
    echo(' numéro de téléphone='.$tel);
?>