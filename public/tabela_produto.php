<?php

include 'db.php';

$sql = "SELECT * FROM produto";

$result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Cadastros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles/style.css">
  </head>

  <body style="background-color: #ddddddff;">

        <?php include 'navbar_interno.php'; ?>

        <div class="container mt-4">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">

                <h4> Lista de Produtos
                <a href="create_produto.php" class="btn btn-outline-dark float-end">Adicionar Produto</a>
                </h4>    
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Data de Criação</th>
                    <th>Ações</th>
                    </tr>
                </thead>

                <tbody>


                    <?php
                    $sql = 'SELECT * FROM produto';
                    $produto = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($produto) > 0) {
                    foreach($produto as $produto) {
                    ?>



                    <tr>
                    <td><?=$produto['id_produto']?></td>
                    <td><?=$produto['nome_produto']?></td>
                    <td><?=$produto['preco_produto']?></td>
                    <td><?=$produto['descricao_produto']?></td>
                    <td><?=$produto['created_at_produto']?></td>
                    <td>

                    <a href="update_produto.php?id_produto=<?=$produto['id_produto']?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>

                    <a href="delete_produto.php?id_produto=<?=$produto['id_produto']?>" onclick=" return confirm('Tem certeza que deseja excluir?')" 
                    class="btn btn-danger btn-sm"><span class="bi-trash3-fill"></span>&nbsp;Excluir</a>
                    </td>
                    </tr>
            
                    <?php
                    }
                    } else {
                    echo '<h4><strong>Nenhum PRODUTO encontrado</strong></h4>';
                    }
                    ?>

                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>