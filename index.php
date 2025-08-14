<?php

include 'read.php';

$sql = "SELECT * FROM usuario";

$result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Cadastros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles/style.css">
  </head>


  <body>
    <?php include('public/navbar.php'); ?>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">

              <h4> Lista de Clientes
                <a href="/public/create_cliente.php" class="btn btn-primary float-end">Adicionar Cliente</a>
              </h4>    
            </div>

            <div class="card-body">
              <table class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>


                  <?php
                  $sql = 'SELECT * FROM cliente';
                  $cliente = mysqli_query($conexao, $sql);
                  if (mysqli_num_rows($cliente) > 0) {
                    foreach($cliente as $cliente) {
                  ?>

                  <tr>
                    <td><?=$cliente['id']?></td>
                    <td><?=$cliente['nome']?></td>
                    <td><?=$cliente['email']?></td>
                    <td><?=date('d/m/Y', strtotime($cliente['data_nascimento']))?></td>
                    <td>

                      <a href="cliente-edit.php?id=<?=$cliente['id']?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>
                      <form action="update.php" method="POST" class="d-inline">
                        <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_cliente" value="<?=$cliente['id']?>" class="btn btn-danger btn-sm">
                          <span class="bi-trash3-fill"></span>&nbsp;Excluir
                        </button>
                      </form>
                    </td>
                  </tr>
          
                  <?php
                  }
                 } else {
                   echo '<h5>Nenhum usuário encontrado</h5>';
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