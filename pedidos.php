<?php
$servername = "localhost";
$username = "mayraalmeida";
$password = "May1998@";
$database = "fseletro";

//Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando a conexão
if (!$conn) {

    die("A conexão ao Banco de dados falhou" . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['prod']) && isset($_POST['quant']) && isset($_POST['endereco'])) {
    $nome = $_POST['nome'];
    $prod = $_POST['prod'];
    $quant = $_POST['quant'];
    $ende = $_POST['endereco'];
    $sql = "insert into pedidos (nome_cliente, nome_produto, quantidade, endereco) values('$nome','$prod','$quant','$endereco')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="./funcoes.js"></script>
</head>

<body>

    <!-- Menu -->
    <?php
    include_once('menu.html');
    ?>

    <main>
        <header>
            <h2>Pedidos</h2>
        </header>

        <hr>
    </main>

    <br><br><br>

    <form method="post" action="" style="margin-left: 39%; margin-top: 0px;">
        <h4>Nome: </h4>
        <input type="text" name="nome" style="width: 400px;">
        <h4>Produto: </h4>
        <select name="produto" size="1" id="produto" value="selecione"">
        <option value=" selecione">Selecione:</option>
            <option value="Geladeira Frost Free Brastemp Side Inverse 540 Litros">Geladeira Frost Free Brastemp Side Inverse 540 Litros</option>
            <option value="Geladeira Frost Free Brastemp Branca 375 Litros">Geladeira Frost Free Brastemp Branca 375 Litros</option>
            <option value="Geladeira Frost Free Consul Prata 340 Litros">Geladeira Frost Free Consul Prata 340 Litros</option>
            <option value="Fogão 4 Bocas Consul Inox com Mesa de Vidro">Fogão 4 Bocas Consul Inox com Mesa de Vidro</option>
            <option value="Fogão de Piso 4 Bocas Atlas com Acendimento Automático">Fogão de Piso 4 Bocas Atlas com Acendimento Automático</option>
            <option value="Forno de Microondas Consul 32 Litros Inox 220V">Forno de Microondas Consul 32 Litros Inox 220V</option>
            <option value="Forno de Microondas 25 Litros Espelhado Philco 220V">Forno de Microondas 25 Litros Espelhado Philco 220V</option>
            <option value="Forno de Microondas Electrolux 20 Litros Branco">Forno de Microondas Electrolux 20 Litros Branco</option>
            <option value="Lava-Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch">Lava-Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch</option>
            <option value="Lava-Louça Compacta 8 Serviços Branca 127V Brastemp">Lava-Louça Compacta 8 Serviços Branca 127V Brastemp</option>
            <option value="Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca">Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca</option>
            <option value="Lavadora de Roupas Philco Inverter 12KG">Lavadora de Roupas Philco Inverter 12KG</option>
        </select><br><br>
        <h4>Quantidade: </h4>
        <input type="number" name="quant" style="width: 400px;">
        <h4>Endereco: </h4>
        <input type="text" name="endereco" style="width: 400px;">
        <input type="submit" name="submit">
    </form>

    <?php
    $sql = "select * from pedidos";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Pedido enviado!";
    } else {
        echo "Nenhum comentario ainda!";
    }
    ?>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>
    <br><br>

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