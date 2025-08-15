<?php
include 'db.php';

if (!isset($_GET['id_produto']) || !is_numeric($_GET['id_produto'])) {
    echo "ID inválido. <a href='../index.php'>Voltar</a>";
    exit;
}

$id_produto = (int) $_GET['id_produto'];

$sql = "DELETE FROM produto WHERE id_produto = $id_produto";

if ($conn->query($sql) === true) {
    echo "Produto excluído com sucesso.
        <a href='../index.php'>Ver registros.</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
exit;