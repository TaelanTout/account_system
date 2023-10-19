<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>delete</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php $id = $_GET["id"] ?>
    <?php $nom = $_GET["nom"] ?>
    <h1>Supprimer son compte</h1>
    <hr>
    <form action="" method="post">
    <label for="id">ID</label>
    <input type="text" name="id" value="<?php echo($id)?>">
    <label for="id">nom</label>
    <input type="text" name="nom" value="<?php echo($nom)?>">
    <label for="mdp">mot de passe</label>
    <input type="text" name="mdp">
    <button type="submit">valider</button>
    </form>
</body>
</html>

<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}


$id = $_GET["id"];

// var_dump($new_name);

$sqlQuery = "DELETE FROM test WHERE id ='".$id."'";
$RecipesStatement = $conn->prepare($sqlQuery);
$RecipesStatement->execute();
$recipes = $RecipesStatement->fetchAll();

header('Location:table.php');


?>