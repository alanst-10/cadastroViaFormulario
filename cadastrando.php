<!DOCTYPE html>
<html lang="pt-brbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "cadastro";
        $conexao = mysqli_connect($host, $user, $pass) or die('ERRO');
        mysqli_select_db($conexao, $database) or die('ERRO 2');
    ?>

    <?php 
        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $tel=$_POST['tel'];
        $rua=$_POST['rua'];
        $num=$_POST['num'];

        $sql = mysqli_query($conexao, "INSERT INTO users(nome, cpf, email, senha, tel, rua, num)
                            VALUES('$nome', '$cpf', '$email', '$senha', '$tel', '$rua', '$num')");

        echo "<h1>Cadastro realizado com sucesso!</h1>"
    ?>
</body>
</html>