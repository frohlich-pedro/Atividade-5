<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}

?>