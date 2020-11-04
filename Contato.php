<!DOCTYPE html>
<html lang="pt.br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Fullstack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
    </head>
    <body>
        <nav class="menu">
            <a href="index.html"><img width="100px" src="./Imagens/Logo.jpeg" alt="FullStack Eletro"></a>
            <a href="Produtos.html">Produtos</a>
            <a href="Loja.html">Nossas Lojas</a>
            <a href="Contato.html">Fale Conosco</a>
        </nav>
        <h2>Contato</h2>
        <hr>
        <table border="0" width="100%" cellpadding="20">
            <tr>
                <td width="50" align="center" class="contato">
                    <img src="./Imagens/email.png" width="60px">
                    contato@fullstackeletro.com
                </td>
                <td width="50" align="center" class="contato">
                    <img src="./Imagens/wzap.png" width="80px">
                    (11) 99999-9999
                </td>
            </tr>
        </table><br><br><hr>

        <h4>Em caso de dúvidas, reclamações, elogios, sugestões, ou se quiser fazer um pedido, deixe uma mensagem pra gente!</h4><br><br>

        <form action="pedidos.php" method="post">
            <h4>Nome:</h4>
            <input type="text" name= "nome" style="width: 400px;">
            <h4>Endereço:</h4>
            <input type="text" name= "endereco" style="width: 400px;">
            <h4>Telefone:</h4>
            <input type="text" name= "telefone" style="width: 400px;">
            <h4>Pedido:</h4>
            <input type="text" name= "pedido" style="width: 400px;">
            <h4>Mensagem:</h4>
            <textarea name= "mensagem"style=width:400px;></textarea>
            <input type="submit" value="Enviar">
        </form>
        
        <br><br><br><br><br>
        <br><br><br><br><br>

        <footer id= "rodape" class="letrinha">
            <p id=formas_pagamento><b>Formas de Pagamento</b></p>
            <img src="./Imagens/Formas de Pagamento.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>