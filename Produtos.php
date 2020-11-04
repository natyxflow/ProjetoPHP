
<?php

$conn = mysqli_connect("localhost", "root", "", "fullstackeletro");

if (!$conn) {
    die ("A conexão ao BD falhou!" . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="pt.br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Fullstack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="comandos.js"></script>
    </head>
    <body>
        <?php
    
            include('menu.html');

        ?>
        <h2>Produtos</h2>
        <hr>
        <section class="listaCategorias">
            <h3>Categorias</h3>
                <ol class="seta">
                    <li onclick="exibirTodos()">Todos (12)</li>
                    <li onclick="exibirCategoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibirCategoria('fogao')">Fogões (2)</li>
                    <li onclick="exibirCategoria('microondas')">Microondas (3)</li> 
                    <li onclick="exibirCategoria('lavaRoupa')">Lavadoras de roupa (2)</li>
                    <li onclick="exibirCategoria('lavaLouca')">Lava-louças (2)</li>
                </ol><br><br>
                <a class= "link" href="consulta_produtos.php"><h5>Consulte a lista de todos os produtos</h5></a>
        </section>
        <section class="produtos">


            <?php
            
            $sql = "select * from produtos";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()) {
            
            ?>

                <div class="cadaProduto" style="display: inline-block;" id="categoria">
                    <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
                    <br>
                    <div><?php echo $rows["descricao"]; ?></div>
                    <hr>
                    <strike>R$ <?php echo $rows["preco"]; ?></strike><br>
                    <naty class="preço">R$ <?php echo $rows["precoFinal"]; ?></naty>
                </div>

            <?php
                }
            }
            else {
                echo "Nenhum produto cadastrado!";
            }
            
            ?>
        
        </section>
        <footer id= "rodape" class="letrinha">
            <p id=formas_pagamento><b>Formas de Pagamento</b></p>
            <img src="./Imagens/Formas de Pagamento.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>



