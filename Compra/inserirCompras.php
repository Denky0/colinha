<?php 
    include '../conexao.php';

    $produto = $_GET['produto'];
    $comprador = $_GET['comprador'];
    $data = $_GET['data'];
    $insert = "INSERT INTO compra VALUES('', '{$produto}', '{$comprador}', '{$data}')";
    $result = $conn->query($insert);

    if($result === true){
        echo "<h1>Compra adicionado com sucesso !</h1>";
    }else{
        echo "<h1>Erro ao adicionar !</h1>";
    }

?>

<a href="../index.php?pagina=listar">Voltar</a>