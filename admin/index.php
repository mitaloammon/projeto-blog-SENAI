<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS  -->
    <link rel="stylesheet" href="../css/style-index.css">
</head>
<body classe="text-center">
    <main class="form-login">
        <!-- formulario -->
        <form method="POST" action="logar.php">
            <img class="mb-4" src="../images/blogger_64p.png" alt="" width="70" height="70">
	        <h3 class="h3">Painel Administrativo</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Login</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
            </div>
            <button type="submit" class="btn btn-primary">LOGAR</button>

        </form>
    </main>

</body>
</html>