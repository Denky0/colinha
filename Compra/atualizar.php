<?php 
    include '../conexao.php';

    $id = $_GET['id'];
    $produto = $_GET['produto'];
    $comprador = $_GET['comprador'];
    $data = $_GET['data'];
    $update = "UPDATE compra SET produto = '$produto', comprador = '$comprador', data = '$data' WHERE id = $id";
    $result = $conn->query($update);

    if($result === true){
        echo "<h1>Compra atualizado com sucesso !</h1>";
    }else{
        echo "<h1>Erro ao atualizar !</h1>";
    }

?>

<a href="../index.php?pagina=listar">voltar</a>