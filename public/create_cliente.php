<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $tele  = $_POST['tele'];
        $cpf   = $_POST['cpf'];
    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
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
    
    <form Method="POST" action ="create.php">
        <label for="nome">Nome:</label>
        <input type="text" name= "nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name= "email" required>
        <br>
        <label for="email">CPF:</label>
        <input type="tel" name= "tele" required>
        <br>
        <label for="email">Telefone</label>
        <input type="text" name= "cpf" required>
        <br>
        <input type="submit" name="Enviar">
        
    </form>

</body>
</html>