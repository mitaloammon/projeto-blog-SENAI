<?php
    include_once('../config/connection.php');

    $stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id");//Prepare a query para ser enviada a query Select ao banco de dados
    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

    foreach ($results as $row) {//laço
        foreach ($row as $key => $value) {
            echo "<strong>".$key."</strong>".$value."<br/>";
        }
        echo "+++++++++++++++++++<br/>";
    }



?>