<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($conn->query($sql) === true) {
        echo "Novo produto adicinado!(hmm!)";
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
        <label for="preço">preço($/Kg)</label>
        <input type="text" name= "preço" required>
        <br>
        <input type="submit" name = "adicionar produto">
        <br>
    </form>

</body>
</html>
</body>
</html>