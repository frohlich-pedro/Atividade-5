<?php

include 'db.php';

$id_cliente = $_GET['id_cliente'];

$sql = "DELETE FROM cliete WHERE id_cliente=$id_cliente";

if ($conn->query($sql) === true) {
    echo "cliente excluído com sucesso.
        <a href='read.php'>Ver registros.</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();

exit();