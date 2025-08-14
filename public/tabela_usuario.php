<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">

            <h4> Lista de Clientes
            <a href="public/create_cliente.php" class="btn btn-outline-dark float-end">Adicionar Cliente</a>
            </h4>    
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">



            <tbody>

                <?php
                $sql = 'SELECT * FROM cliente';
                $cliente = mysqli_query($conn, $sql);
                if (mysqli_num_rows($cliente) > 0) {
                foreach($cliente as $cliente) {
                ?>

            <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Data de Criação</th>
                <th>Ações</th>
                </tr>
            </thead>


                <tr>
                <td><?=$cliente['id_cliente']?></td>
                <td><?=$cliente['nome_cliente']?></td>
                <td><?=$cliente['email_cliente']?></td>
                <td><?=$cliente['telefone_cliente']?></td>
                <td><?=$cliente['cpf_cliente']?></td>
                <td><?=$cliente['created_at_cliente']?></td>
                <td>

                    <a href="cliente-edit.php?id=<?=$cliente['id']?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>
                    <form action="update.php" method="POST" class="d-inline">
                    <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_cliente" value="<?=$cliente['id_cliente']?>" class="btn btn-danger btn-sm">
                        <span class="bi-trash3-fill"></span>&nbsp;Excluir
                    </button>
                    </form>
                </td>
                </tr>
        
                <?php
                }
                } else {
                echo '<h4><strong>Nenhum usuário encontrado</strong></h4>';
                }
                ?>

            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>