<?php

    include 'db.php';

    $id_produto = $_GET['id_produto'];

    $sql = "SELECT * FROM produto WHERE id_produto='$id_produto'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['desc'];
        $tele = $_POST['preco'];

        $sql = "UPDATE produto SET nome_produto='$name', descricao_produto='$desc', preco_produto='$preco' WHERE id_produto='$id_produto'";
        
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
                <label class="form-label">Produto</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['nome_produto'];?>" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Preço(R$)</label>
                <input type="email" name="preco" class="form-control" value="<?php echo $row['preco_produto'];?>" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="desc" class="form-control" value="<?php echo $row['descricao_produto'];?>" required>
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>