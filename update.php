<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class=body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="menu.php">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            compte
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="table.php">tableau des comptes</a></li>
            <li><a class="dropdown-item" href="update.php?id=&nom=&mdp=">modifier son compte</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="register.php">enregistrer un compte</a></li>
            <li><a class="dropdown-item" href="connexion.php">se connecter</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <?php $id = $_GET["id"] ?>
    <?php $nom = $_GET["nom"] ?>
    <h1>Mettre à jour son compte</h1>
    <hr>
    <form action="" method="post">
    <label for="id">ID</label>
    <input type="text" name="id" value="<?php echo($id)?>">
    <label for="id">nouveau nom</label>
    <input type="text" name="nom" value="<?php echo($nom)?>">
    <label for="mdp">nouveau mot de passe</label>
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

$id = $_POST["id"];
$new_name = $_POST["nom"];
$new_mdp = $_POST["mdp"];

if(isset($id) && isset($new_name) && isset($new_mdp)){
$sqlQuery = "UPDATE test SET usename = '".$new_name."' , mdp = '".$new_mdp."' WHERE  id = '".$id."'";
$RecipesStatement = $conn->prepare($sqlQuery);
$RecipesStatement->execute();
$recipes = $RecipesStatement->fetchAll();
}
// var_dump($new_name);


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
