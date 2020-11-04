<?php
$servername = "localhost";
$username = "mayraalmeida";
$password = "May1998@";
$database = "fseletro";

//Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando a conexão
if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossos Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="./funcoes.js"></script>
</head>

<body>

    <!-- Menu -->
    <?php
    include_once('menu.html');
    ?>

    <main>

        <h2>Produtos</h2>
        <hr>

        <aside class="categorias">

            <header>
                <h3><strong>Categorias</strong></h3>
            </header>

            <ul>
                <li onclick="exibirTodos()" ; id="cursor">Todos os produtos (12)</li>
                <li onclick="exibirCategoria('geladeira')" ; id="cursor">Geladeiras (3)</li>
                <li onclick="exibirCategoria('fogao')" ; id="cursor">Fogões (2)</li>
                <li onclick="exibirCategoria('microondas')" ; id="cursor">Microondas (3)</li>
                <li onclick="exibirCategoria('lava-roupa')" id="cursor">Lavadora de roupas (2)</li>
                <li onclick="exibirCategoria('lava-louca')" id="cursor">Lava-louças (2)</li>
            </ul>

        </aside>

        <div class="produtos">

            <?php

            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {

            ?>

            <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" style="display: inline-block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" ; onmouseover="destaque(this)" ; onmouseout="tamNormal(this)"><br><br>
                <?php echo $rows["descricao"]; ?>
                <hr>
                <strike>R$<?php echo $rows["preco"]; ?></strike><br>
                <p class="preco">R$<?php echo $rows["precofinal"]; ?></p><br>
            </div>


            <?php


                }
            } else {
                echo "Nenhum produto cadastrado";
            }

            ?>


        </div>

    </main>


    <br><br><br>

    <footer id="rodape">
        <p id="forma_pagamento">Formas de Pagamento:</p>
        <img src="./imagens/forma_pagamento.jpg" alt="Formas de Pagamento" width="380" align="center">
        <p>&copy; Full Stack Eletro</p>
    </footer>
</body>

</html>


<?php
mysqli_close($conn);
?>