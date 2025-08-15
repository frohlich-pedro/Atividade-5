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
                <a href='index.php'>Ver registros.</a>
";
        }else{
            echo"Erro " . $sql . "<br>" . $conn->error;
        }
        $conn -> close();
    }


?>