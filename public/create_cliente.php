<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $tele = trim($_POST['tele']);
        $cpf = trim($_POST['cpf']);

        $sql = "INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente, cpf_cliente) 
        VALUES ('$name', '$email', '$tele', '$cpf')";


    if ($conn->query($sql) === true) {
            echo "Registro criado com sucesso!
            <a href='../index.php'>Ver registros.</a>";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>


<body style="background-color:#ddddddff;">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Criar Cliente</h4>
            </div>
            <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name= "nome" class="form-control" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="tele" class="form-control" required>
                </div>

                <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Criar</button>
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>