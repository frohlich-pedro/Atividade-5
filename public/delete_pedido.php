<?php
include 'db.php';

if (!isset($_GET['id_pedido']) || !is_numeric($_GET['id_pedido'])) {
    echo "ID inválido. <a href='tabela_pedido.php'>Voltar</a>";
    exit;
}

$id_pedido = (int) $_GET['id_pedido'];

$sql = "DELETE FROM pedido WHERE id_pedido = $id_pedido";

if ($conn->query($sql) === true) {
    echo "Pedido excluído com sucesso.
        <a href='tabela_pedido.php'>Ver registros.</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
exit;