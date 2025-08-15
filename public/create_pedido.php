<?php

include 'db.php';

$id_cliente = 1;
$id_padeiro = 1;
$sql = "SELECT * FROM produto";
$sql_pedido = "SELECT * FROM pedido";
$result1 = $conn ->query($sql_pedido);

$result = $conn ->query($sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_produto'])) {
    $id_produto = $_POST['id_produto'];

    $sql = "INSERT INTO pedido(id_cliente_fk,id_padeiro_fk,id_produto_fk) VALUES($id_cliente,
$id_padeiro, $id_produto)";

    if ($conn->query($sql) === true) {
        echo "Pedido enviado!";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}

if($result -> num_rows >0){
echo " <table borde = '1'>
            <tr>
                <th>  Produto  </th>
                <th>   preço   </th>
                <th> Descrição </th>
                <th>   ação    </th>
            <tr>";
while($row = $result -> fetch_assoc()){
    echo"<tr>
            <td>{$row['nome_produto']     }</td>
            <td>{$row['preco_produto']    }</td>
            <td>{$row['descricao_produto']}</td>
            <td>
                <form method='POST'>
                    <input type='hidden' name='id_produto' value='{$row['id_produto']}'>
                    <button type='submit'>Adicionar ao Pedido</button>
                </form>
            </td>
         </tr>"
         ;
}
}
if($result1 -> num_rows >0){
echo " <table borde = '1'>
            <tr>
                <th> cliente </th>
                <th> padeiro </th>
                <th> produto </th>
            <tr>";
while($row = $result1 -> fetch_assoc()){
    echo"<tr>
            <td>{$row['id_cliente_fk']}</td>
            <td>{$row['id_padeiro_fk']}</td>
            <td>{$row['id_produto_fk']}</td>
         </tr>";
}

}else{
    echo "tem nada aqui não chefe";
}

?>