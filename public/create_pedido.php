<?php

include 'db.php';

$sql = "SELECT * FROM produto";
$result = $conn ->query($sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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
                <th> Produto   </th>
                <th> preço     </th>
                <th> Descrição </th>
                <th>           </th>
            <tr>";
while($row = $result -> fetch_assoc()){
    echo"<tr>
            <td>{$row[' nome_produto     |']}</td>
            <td>{$row[' preco_produto    ']}</td>
            <td>{$row[' descricao_produto']}</td>
            <button method='POST' type='submit'name='adicionar'>
         </tr>";
}

}else{
    echo "tem nada aqui não chefe";
}

?>