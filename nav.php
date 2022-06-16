<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog::Vítor</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- <h1>Blog</h1> -->

  <nav class="navbar navbar-expand-lg" style="background-color: #20d9e3;">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/blogger_32p.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?cat=Cat-1">Categoria 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?cat=Cat-2">Categoria 2</a>
          </li>
          <li class="nav-item dropdown">
            <!-- trocar nome!! -->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- trocar nome!! -->
              <li><a class="dropdown-item" href="category.php?cat=Cat-1">Cat 1</a></li>
              <!-- trocar nome!! -->
              <li><a class="dropdown-item" href="category.php?cat=Cat-2">Cat 2</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <!-- trocar nome!! -->
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search" action="buscar.php" method="POST">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
          <button class="btn btn-outline-success" type="submit">Procurar</button>
        </form>
      </div>
    </div>
  </nav>