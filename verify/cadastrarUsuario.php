<?php 

    include "../conexao.php";
   

    if(isset($_REQUEST['nome'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        
        try{
            $conn->query("INSERT INTO usuario VALUES('','$nome','$email','$senha')");
            echo "<p class='text-success ms-5'>Cadastrado com sucesso</p>";
        }catch(Exception $e){
            echo "<p class='text-danger ms-5'>Erro ao cadastrar</p>".$e->getMessage();
        }
        
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <div class="container p-4 mt-5 col-4 bg-dark border border-danger rounded">
        <h1 class="text-danger">Cadastro</h1>
        <form>
            <input class="form-control" type="text" required name="nome" placeholder="Informe seu nome">
            <br>
            <input class="form-control" type="email" required name="email" placeholder="Informe o Email">
            <br>
            <input class="form-control" type="password" required name="senha" placeholder="Informe a Senha" id="">
            <br>
            <button class="btn btn-danger col-12" type="submit">Cadastrar</button>
        </form>
        <a href="login.php">Possuo login</a>
    </div>

</body>
</html>