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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form Method="post" action ="create.php">
        <label for="nome">Nome:</label>
        <input type="text" name= "nome" required>
        <br>
        <label for="email">email::</label>
        <input type="text" name= "email" required>
        <br>
        
        
    </form>

</body>
</html>