<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['name']);
        $desc = trim($_POST['desc']);
        $preco = trim($_POST['preco']);

        $sql = "INSERT INTO produto (nome_produto, descricao_produto, preco_produto) 
        VALUES ('$name', '$desc', '$preco')";


    if ($conn->query($sql) === true) {
        echo "Novo produto criado com sucesso.";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form Method="POST" action ="create_produto.php">
        <label for="name">Nome:</label>
        <input type="text" name= "name" required>
        <br>
        <label for="desc">Descrição</label>
        <input type="text" name= "desc" required>
        <br>
        <label for="preco">preço($/Kg)</label>
        <input type="text" name= "preco" required>
        <br>
        <input type="submit" name = "adicionar produto">
        <br>
    </form>

</body>
</html>