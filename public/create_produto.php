<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['name']);
        $desc = trim($_POST['desc']);
        $preco = trim($_POST['preco']);

        $sql = "INSERT INTO produto (nome_produto, descricao_produto, preco_produto) 
        VALUES ('$name', '$desc', '$preco')";


    if ($conn->query($sql) === true) {
            echo "Registro criado com sucesso!
            <a href='tabela_produto.php'>Ver registros.</a>";    } else {
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
            <h4>Criar Produto</h4>
            </div>
            <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                <label class="form-label">Produto</label>
                <input type="text" name= "name" class="form-control" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name= "desc" class="form-control" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Preço(R$)</label>
                <input type="number" step="0.01" name= "preco" class="form-control" required>
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