<?php
    include 'db.php';

    $id_pedido = $_GET['id_pedido'];

    $sql = "SELECT * FROM pedido WHERE id_pedido='$id_pedido'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $status = $_POST['status_pedido'];

        $sql = "UPDATE pedido SET status_pedido='$status' WHERE id_pedido='$id_pedido'";
        
        if($conn->query($sql) === true){
            echo "Registro atualizado com sucesso!
                <a href='tabela_pedido.php'>Ver registros.</a>
";

        }else{
            echo"Erro " . $sql . "<br>" . $conn->error;
        }
        $conn -> close();
    }

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar Status do Pedido</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body style="background-color:#ddddddff;">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Atualizar Status</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status_pedido" class="form-control" required>
                            <option value="Pendente" <?php if($row['status_pedido']=='Pendente') echo 'selected'; ?>>Pendente</option>
                            <option value="Em Preparação" <?php if($row['status_pedido']=='Em Preparaçã o') echo 'selected'; ?>>Em Preparação</option>
                            <option value="Pronto" <?php if($row['status_pedido']=='Pronto') echo 'selected'; ?>>Pronto</option>
                            <option value="Entregue" <?php if($row['status_pedido']=='Entregue') echo 'selected'; ?>>Entregue</option>
                        </select>
                    </div>

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="tabela_pedido.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>