<?php
include 'db.php';

if (!isset($_GET['id_cliente']) || !is_numeric($_GET['id_cliente'])) {
    echo "ID inválido. <a href='../index.php'>Voltar</a>";
    exit;
}

$id_cliente = (int) $_GET['id_cliente'];

$sql = "DELETE FROM cliente WHERE id_cliente = $id_cliente";

if ($conn->query($sql) === true) {
    echo "Cliente excluído com sucesso.
        <a href='../index.php'>Ver registros.</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
exit;