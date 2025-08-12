<?php

include 'db.php';

$id_padeiro = $_GET['id_padeiro'];

$sql = "DELETE FROM cliete WHERE id_padeiro=$id_padeiro";

if ($conn->query($sql) === true) {
    echo "padeiro excluído com sucesso.
        <a href='read.php'>Ver registros.</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();

exit();