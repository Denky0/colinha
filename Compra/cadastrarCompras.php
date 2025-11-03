<?php
include 'conexao.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = "SELECT * FROM produto WHERE id = $id";

    $result = $conn->query($select);

    $produto = $result->fetch_object();
}

?>

<div class="container">
    <form action="Compra/inserirCompras.php" method="get">
        <fieldset>
            <h1>Cadastrar Compras</h1>
            <input class="form-control mb-3" type="text" required
                placeholder="Nome do produto"
                value="<?= $produto->nome ?>"
                name="nome" id="">
            <input class="form-control mb-3" type="text" placeholder="Nome do Comprador" required name="comprador" id="">
            <input class="form-control mb-3" type="date" placeholder="Data de Compra" required name="data" id="">
            <input class="form-control mb-3 btn btn-danger" type="submit" value="Cadastrar">
        </fieldset>
    </form>
</div>