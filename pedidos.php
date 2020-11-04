<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$pedido = $_POST['pedido'];
$mensagem = $_POST['mensagem'];


    $conn = mysqli_connect("localhost", "root", "", "fullstackeletro");
    $sql = "INSERT INTO pedidos (nome, endereco, telefone, pedido, mensagem) values ('$nome', '$endereco', '$telefone', '$pedido', '$mensagem')";
    mysqli_query($conn, $sql);

    if ($conn) {
        echo "Conexão bem sucedida!";
    }
    else {
        die("Erro ao realizar conexão " . mysqli_connect_error());
    }
    
    echo "<script>
        alert('A sua mensagem foi enviada com sucesso!')
        window.location.href= 'index.php'
    </script>";

