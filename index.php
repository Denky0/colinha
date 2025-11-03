<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: auth/login.php');
}

$usuario = $_SESSION['usuario'];

?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Início</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">🎰 Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?pagina=cadastrar">📠 Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="?pagina=compras">💰 Compras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="?pagina=listar">📒 Listar</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <span class="navbar-text nav-link active">😶‍🌫️<?= $usuario ?> </span>
          <a class="navbar-text nav-link" href="?pagina=sair"> Sair ✖️</a>

        </ul>

      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <?php
    switch (@$_REQUEST['pagina']) {
      case 'cadastrar':
        include('Produto/formCadastrar.php');
        break;
      case 'editar':
        include('Produto/formEditar.php');
        break;
      case 'compras':
        include('Compra/cadastrarCompras.php');
        break;
      case 'editarCompra':
        include('Compra/editarCompra.php');
        break;
      case 'listar':
        include('Produto/listar.php');
        break;
      case 'sair':
        include('auth/sair.php');
        break;
      default:
        include("home.php");
    }

    ?>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>