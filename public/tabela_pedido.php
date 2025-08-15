<?php

include 'db.php';

$sql = "SELECT * FROM pedido";

$result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Pedido</title>
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

                <h4> Lista de Pedidos
                <a href="create_pedido.php" class="btn btn-outline-dark float-end">Adicionar Pedido</a>
                </h4>    
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Padeiro</th>
                    <th>Produto</th>
                    <th>Data do Pedido</th>
                    <th>Status do Pedido</th>
                    <th>Ações</th>
                    </tr>
                </thead>

                <tbody>


                    <?php
                    $sql = 'SELECT * FROM pedido';
                    $pedido = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($pedido) > 0) {
                    foreach($pedido as $pedido) {
                    ?>



                    <tr>
                    <td><?=$pedido['id_pedido']?></td>
                    <td><?=$pedido['id_cliente_fk']?></td>
                    <td><?=$pedido['id_padeiro_fk']?></td>
                    <td><?=$pedido['id_produto_fk']?></td>
                    <td><?=$pedido['data_pedido']?></td>
                    <td><?=$pedido['status_pedido']?></td>
                    
                    <td>

                    <a href="update_status.php?id_pedido=<?=$pedido['id_pedido']?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>

                    <a href="delete_pedido.php?id_pedido=<?=$pedido['id_pedido']?>" onclick=" return confirm('Tem certeza que deseja excluir?')" 
                    class="btn btn-danger btn-sm"><span class="bi-trash3-fill"></span>&nbsp;Excluir</a>
                    </td>
                    </tr>
            
                    <?php
                    }
                    } else {
                    echo '<h4><strong>Nenhum pedido encontrado</strong></h4>';
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