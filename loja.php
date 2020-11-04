<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossas Lojas</title>
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
            <h2>Nossas lojas</h2>
        </header>

        <hr>

        <section>
            <div style="align-items: center;" class="grupo_lojas">
                <div class="grupo_loja">
                    <h3 style="margin-left: 40px" ;>Rio de Janeiro</h3>
                    <ul ul class="list_none">
                        <li>Avenida Presidente Vargas, 5000</li>
                        <li>10° andar</li>
                        <li>Centro</li>
                        <li>(21) 3333-3333</li>
                    </ul>
                </div>
                <div class="grupo_loja">
                    <h3 style="margin-left: 40px" ;>São Paulo</h3>
                    <ul ul class="list_none">
                        <li>Avenida Avenida Paulista, 985</li>
                        <li>3° andar</li>
                        <li>Jardins</li>
                        <li>(11) 4444-4444</li>
                    </ul>
                </div>
                <div class="grupo_loja">
                    <h3 style="margin-left: 39px" ;> Santa Catarina</h3>
                    <ul class="list_none">
                        <li>Rua Major &Aacute;vila</li>
                        <li>370</li>
                        <li>Vila Mariana</li>
                        <li>(47) 5555-5555</li>

                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer id="rodape">
        <p id="forma_pagamento">Formas de Pagamento:</p>
        <img src="./imagens/forma_pagamento.jpg" alt="Formas de Pagamento" width="380" align="center">
        <p>&copy; Full Stack Eletro</p>
    </footer>
</body>

</html>