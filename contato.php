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

if (isset($_POST['nome']) && isset($_POST['msg'])) {
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conn->query($sql);


} else {
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato</title>
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
            <h2>Contato</h2>
        </header>

        <hr>

        <table border=5 width="100%" cellpadding="20">
            <tr>
                <td width="50%" align="center">
                    <img src="./imagens/email.png" width="40px">
                    <font size="4">contato@fullstackeletro.com</font>

                </td>
                <td width="50%" align="center">
                    <img src="./imagens/whatsapp.png" width="40px">
                    <font size="4">(11) 99999-9999</font>
                </td>
            </tr>
        </table>
    </main>

    <br><br><br>

    <form method="post" action="" style="margin-left: 39%; margin-top: 0px;">
        <h4><b>Nome:</b></h4>
        <input type="text" name="nome" style="width: 400px;" placeholder="Digite aqui..."><br><br>
        <h4><b>Mensagem:</b></h4><br>
        <textarea name="msg" style="width: 400px;"></textarea>
        <input type="submit" name="submit" value="Enviar">
    </form>

    
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>

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