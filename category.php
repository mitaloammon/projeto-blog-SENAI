<?php
    include_once('config/connection.php');
    include('nav.php');

    $cat = $_GET['cat'];

    $stmt = $conectar->prepare('SELECT id, title, image, description, data FROM posts WHERE category = :cat');
        
    $stmt->execute(array('cat' => $cat));

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<style>a{text-decoration: none; color: blue;}</style>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($results as $post): ?>
        <div class="col gy-5">
            <div class="card">
                <img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h4 class="card-title"><?= $post["title"] ?></h4>
                <p class="card-text">
                    <?= $post["description"] ?>
                </p>
                <a href="viewBlog.php?id=<?= $post["id"] ?>">
                    <i class="fas fa-eye check-icon">Ver</i>
                </a>
                <p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
                </div>
            </div>
        </div>   
        <?php endforeach; ?>
    </div>
</div>    
</body>
</html>
