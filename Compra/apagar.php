<?php 
    include '../conexao.php';

    $id = $_GET['id'];

    $conn->query("DELETE FROM compra WHERE id = $id");

    header('location:../index.php?pagina=listar')


?>