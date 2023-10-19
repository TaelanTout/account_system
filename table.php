<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau des utilisateurs</title>
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
  <h1>Tableau des utilisateurs</h1>
</body>
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

$sqlQuery = "SELECT * FROM test";
$RecipesStatement = $conn->prepare($sqlQuery);
$RecipesStatement->execute();
$recipes = $RecipesStatement->fetchAll();

?>

<table class="table table-hover shadow p-3 mb-5 bg-body rounded" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">nom</th>
      <th scope="col">mot de passe</th>
      <th scope="col">modifier</th>
      <th scope="col">supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($recipes as $value){ ?>
    <tr>
      <th scope="row"><?php echo($value["id"]) ?></th>
      <td><?php echo($value["usename"]) ?></td>
      <td><?php echo($value["mdp"]) ?></td>
      <td><a class ="btn btn-success" href="update.php?id=<?php echo($value["id"]) ?>&nom=<?php echo($value["usename"])?>">modifier</a>
      <td><a class ="btn btn-danger" href="delete.php?id=<?php echo($value["id"]) ?>&nom=<?php echo($value["usename"])?>">supprimer</a>
    </tr>
    <?php } ?>
  </tbody>
</table>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


