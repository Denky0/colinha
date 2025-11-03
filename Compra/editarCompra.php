<?php

include "conexao.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = "SELECT * FROM compra WHERE id = $id";

    $result = $conn->query($select);

    $compra = $result->fetch_object();
}

?>
<div class="container">
    <form action="compra/atualizarCompras.php" method="get">
        <fieldset>
            <h1>Atualizar Compra</h1>
            <input type="hidden" name="id" value="<?= $compra->id ?>">
            <input class="form-control mb-3" type="text" required
                placeholder="Nome do Produto"
                value="<?= $compra->produto ?>"
                name="produto" id="">
            <input class="form-control mb-3" type="number" required
                placeholder="Insira o comprador do Produto"
                value="<?= $compra->comprador ?>"
                name="comprador" id="">
            <input class="form-control mb-3" type="number" required
                placeholder="Insira data da Compra"
                value="<?= $compra->data ?>"
                name="data" id="">
            <input class="form-control mb-3 btn btn-danger" type="submit"
                value="Atualizar">
        </fieldset>
    </form>
</div>