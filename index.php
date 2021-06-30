<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/dropdown.css">
    <link rel="shortcut icon" href="images/seta.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="menu-int">
            <div class="menu-left">
                <img src="images/seta.png" alt="">
                FINER
            </div>
            <div class="menu-right">
                <ul class="dropdown">
                    <li class="menu-item">
                        <a href="">Quem somos</a>
                    </li>
                    <li class="menu-item">
                        <a href="">Clientes</a>
                    </li>

                    <li class="menu-item">
                        <a href="">Produtos
                            <img class="flecha" src="images/down.png" alt="">
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-item">
                                <a href="">Finer Foods</a>
                                <a href="">Finer Store</a>
                                <a href="">Finer Services</a>
                                <a href="">Criação de Sites</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="">Blog</a>
                    </li>
                    <li class="menu-item">
                        <a href="">Contato</a>
                    </li>
                    <li class="menu-item">
                        <a href="">Representante</a>
                    </li>
                    <li class="menu-item">
                        <a href="">Suporte</a>
                    </li>
                </ul>
            </div>
        </nav>

        <section>
            <form action="cadastrando.php" method="post">
                Informe seus dados <br><br>
                <label for="nome">Nome</label> 
                <input type="text" id="nome" name="nome" required>  <br>

                <label for="cpf">CPF</label> 
                <input type="text" id="cpf" name="cpf" placeholder="Somente números" maxlength="14" onkeyup="mascara_cpf()" autocomplete="off" required>  <br>

                <label for="email">E-mail</label> 
                <input type="email" id="email" name="email" required>  <br>

                <label for="senha">Senha</label> 
                <input type="password" id="senha" name="senha" required>  <br>

                <label for="tel">Telefone</label> 
                <input type="text" name="tel" id="telefone" maxlength="14" placeholder="Somente números" onkeypress="mascara_tel()" required> <br> <br>

                Endereço <br> <br>
                <label for="rua">Rua</label> 
                <input type="text" id="rua" name="rua" required> <br> 

                <label for="num">Número</label> 
                <input type="number" name="num" id="num" required> <br>

                <input class="enviar" type="submit" value="Cadastrar">
            </form>
        </section>
    </header>

    <script src="script.js"></script>    
</body>
</html>