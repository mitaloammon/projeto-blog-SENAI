<?php 
    include "config/connection.php"; 
    include "nav.php";

    $id = $_GET['id'];
    //$id = 10;
    $stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute(array('id'=>$id));

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container">
    <?php foreach ($results as $post): ?>
        <div class="card mb-3 mt-5">
            <img src="<?= $post['image'] ?>" class="card-img-top" alt="<?= $post['title'] ?>">
            <div class="card-body">
                <h2 class="card-title"><?= $post['title'] ?></h2>
                <p class="card-text"><?= $post['description'] ?></p>
                <p class="card-text"><small class="text-muted"><?= date('d/m/Y', strtotime($post['data'])); ?></small></p>
            </div>
        </div>
     <?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>
