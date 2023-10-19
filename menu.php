<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
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
    </div>
  </div>
</nav>
<hr>
<div class="btn-group" role="group" aria-label="Basic example">
    <div class="card" style="width: 18rem;">
    <img src="create.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Create</h5>
        <p class="card-text">Il s'agit de l'opération d'ajout de nouvelles données dans le système. Cela peut inclure l'insertion de nouveaux enregistrements dans une base de données ou la création de nouveaux éléments dans une application.</p>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="read.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Read</h5>
        <p class="card-text">Cette opération consiste à récupérer ou lire les données existantes à partir de la base de données ou du système. Elle permet d'accéder aux informations stockées pour les afficher ou les utiliser.</p>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="update.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Update</h5>
        <p class="card-text">L'opération de mise à jour permet de modifier les données existantes. Elle est utilisée pour effectuer des changements, des corrections ou des ajustements sur les données déjà enregistrées.</p>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="delete.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Delete</h5>
        <p class="card-text">L'opération de suppression permet de retirer des données du système. Cela peut être utile pour éliminer des informations obsolètes ou inutiles.</p>
    </div>
    </div>
</div>
<hr>
<h2>Ce programme sert à :</h2>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Se connecter.</strong> Il communique avec une base de données, pour envoyer, recevoir, modifier et supprimer des informations avec et de celle-ci.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Apprendre la notion de CRUD.</strong> Une explication de l'abréviation qu'est CRUD est disponible sur ce programme.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Enregistrer des comptes.</strong> Grâce à la base de données, un système de comptes est mit à disposition.
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html