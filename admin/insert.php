<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

</head>
<body>
    <main>
        <div class="container">
             <form class="row g-3" action="envia.php" method="POST" enctype="multipart/form-data">
                <!-- title -->
                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Example input placeholder" required>
                </div>
                <!-- data -->
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Data</label>
                    <input type="date" class="form-control" id="formGroupExampleInput" name="data" placeholder="" required>
                </div>
                <!-- description -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                    <textarea class="form-control" id="mytextarea" name="description" rows="3" required></textarea>
                </div>
                <!-- category -->
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="category" placeholder="Example input placeholder" required>
                </div>
                <!-- imagens -->
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image" required>
                    <label class="input-group-text" for="inputGroupFile02" >Imagem</label>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="ENVIAR">
                </div>
            </form>
        </div>
    </main>
</body>
</html>