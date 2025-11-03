<?php

include "conexao.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = "SELECT * FROM produto WHERE id = $id";

    $result = $conn->query($select);

    $produto = $result->fetch_object();
}

?>
<div class="container">
    <form action="produto/atualizar.php" method="get">
        <fieldset>
            <h1>Atualizar Produto</h1>
            <input type="hidden" name="id" value="<?= $produto->id ?>">
            <input class="form-control mb-3" type="text" required
                placeholder="Nome do produto"
                value="<?= $produto->nome ?>"
                name="nome" id="">
            <input class="form-control mb-3" type="number" required
                placeholder="Insira o valor do produto"
                value="<?= $produto->valor ?>"
                name="valor" id="">
            <input class="form-control mb-3" type="number" required
                placeholder="Insira a quantidade do produto"
                value="<?= $produto->quantidade ?>"
                name="quantidade" id="">
            <input class="form-control mb-3 btn btn-danger" type="submit"
                value="Atualizar">
        </fieldset>
    </form>
</div>