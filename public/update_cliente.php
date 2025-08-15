<?php

    include 'db.php';

    $id_cliente = $_GET['id_cliente'];

    $sql = "SELECT * FROM cliente WHERE id_cliente='$id_cliente'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $tele = $_POST['tele'];
        $cpf = $_POST['cpf'];

        $sql = "UPDATE cliente SET nome_cliente='$name', email_cliente='$email', telefone_cliente='$tele', cpf_cliente='$cpf' WHERE id_cliente='$id_cliente'";
        
        if($conn -> query($sql) === true){
            echo "Registro atualizado com sucesso!
                <a href='../index.php'>Ver registros.</a>
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
    <title>Editar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>


<body style="background-color:#ddddddff;">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Editar Cliente</h4>
            </div>
            <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $row['nome_cliente'];?>" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= isset($row['email_cliente']) ? htmlspecialchars($row['email_cliente']) : '' ?>" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="tele" class="form-control" value="<?= isset($row['telefone_cliente']) ? htmlspecialchars($row['telefone_cliente']) : '' ?>">
                </div>

                <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" value="<?= isset($row['cpf_cliente']) ? htmlspecialchars($row['cpf_cliente']) : '' ?>">
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>