<div class="container">
    <form action="Produto/inserir.php" method="get">
        <fieldset>
            <h1>Cadastrar Produto</h1>
            <input class="form-control mb-3" type="text" placeholder="Nome do produto" required name="nome" id="">
            <input class="form-control mb-3" type="number" placeholder="Valor do produto" required name="valor" id="">
            <input class="form-control mb-3" type="number" placeholder="Quantidade do produto" required name="quantidade" id="">
            <input class="form-control mb-3 btn btn-danger" type="submit" value="Cadastrar">
        </fieldset>
    </form>
</div>