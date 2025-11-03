<?php 
    include '../conexao.php';

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $valor = $_GET['valor'];
    $qtd = $_GET['quantidade'];
    $update = "UPDATE produto SET nome = '$nome', valor = '$valor', quantidade = '$qtd' WHERE id = $id";
    $result = $conn->query($update);

    if($result === true){
        echo "<h1>Produto atualizado com sucesso !</h1>";
    }else{
        echo "<h1>Erro ao atualizar !</h1>";
    }

?>

<a href="../index.php?pagina=listar">voltar</a>