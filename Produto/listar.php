<h1>Listar</h1>
<?php 

    include('conexao.php');

    $select = "SELECT * FROM produto";

    $result = $conn->query($select);
?>

<table class='table table-hover table-bordered '>
    <thead class='table-danger'>
        <th>Nome</th><th>Valor</th><th>Quantidade</th><th>Campos</th>
    </thead>
    <tbody>
        <?php 
            if($result->num_rows > 0){
                while($produto = $result->fetch_object()){
                    echo "<tr>
                            <td> $produto->nome </td>
                            <td> $produto->valor</td>
                            <td> $produto->quantidade</td>
                            <td class='col-2'>
                                <a class='btn btn-sm btn-success' href='?pagina=editar&id=$produto->id'>EDITAR </a>
                                <a class='btn btn-sm btn-danger' href='produto/apagar.php?id=$produto->id'> EXCLUIR</a>
                            </td>
                        
                        </tr>";
                }
            }else{
                echo "
                    <tr> 
                        <td>Nenhum dado encontrado</td>
                    </tr>
                ";
            }
        ?>
        
    </tbody>
</table>

<?php 

    include('conexao.php');

    $select = "SELECT * FROM compra";

    $result = $conn->query($select);
?>

<table class='table table-hover table-bordered '>
    <thead class='table-danger'>
        <th>Produto</th><th>Comprador</th><th>Data de Compra</th><th>Campos</th>
    </thead>
    <tbody>
        <?php 
            if($result->num_rows > 0){
                while($compra = $result->fetch_object()){
                    echo "<tr>
                            <td> $compra->produto</td>
                            <td> $compra->comprador</td>
                            <td> $compra->data</td>
                            <td class='col-2'>
                                <a class='btn btn-sm btn-success' href='?pagina=editarCompra&id=$compra->id'>Editar</a>
                                <a class='btn btn-sm btn-danger' href='compra/apagar.php?id=$compra->id'>Excluir</a>
                            </td>
                        
                        </tr>";
                }
            }else{
                echo "
                    <tr> 
                        <td>Nenhum dado encontrado</td>
                    </tr>
                ";
            }
        ?>
        
    </tbody>
</table>