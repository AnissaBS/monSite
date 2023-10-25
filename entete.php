<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar scroll</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contenuIndex.php">Les bases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="date.php">Dates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operVar.php">Opérations</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="structControle.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Structures de contrôle
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="structControle.php">Structures de contrôle</a></li>
            <li><a class="dropdown-item" href="testCondition.php">Tests</a></li>
            <li><a class="dropdown-item" href="boucles.php">Boucles</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        <li class="nav-item">
          <a class="nav-link" href="tableau.php">Tableaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fonction.php">Fonctions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Formulaires</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Entrer</button>
      </form>
    </div>
  </div>
</nav>

<!-- <header>
        <nav>
            <a href="index.php">Présentation PHP</a>
            <a href="date.php">Variables sur les dates</a>
            <a href="operVar.php">Opérations sur variables</a>
            <a href="structControle.php">Structures de contrôle</a>
            <a href="testCondition.php">Tests Conditons</a>
            <a href="boucles.php">Les boucles</a>
            <a href="tableau.php">Les tableaux</a>
        </nav>
</header> -->

</body>
</html>