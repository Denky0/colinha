<?php 
    include '../conexao.php';

    $nome = $_GET['nome'];
    $valor = $_GET['valor'];
    $qtd = $_GET['quantidade'];
    $insert = "INSERT INTO produto VALUES('', '{$nome}', '{$valor}', '{$qtd}')";
    $result = $conn->query($insert);

    if($result === true){
        echo "<h1>Produto adicionado com sucesso !</h1>";
    }else{
        echo "<h1>Erro ao adicionar !</h1>";
    }

?>

<a href="../index.php?pagina=listar">Voltar</a>