<?php
    include('coneksao.php');

    $nome_contato = $_POST['nome'];
    $apelido_contato = $_POST['apelido'];
    $endereco_contato = $_POST['endereco'];
    $bairro_contato = $_POST['bairro'];
    $cidade_contato = $_POST['cidade'];
    $estado_contato = $_POST['estado'];
    $telefone_contato = $_POST['telefone'];
    $celular_contato = $_POST['celular'];
    $email_contato = $_POST['email'];
    
    echo "<a href='index.php'> Voltar</a>";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email)
            VALUES ('".$nome_contato."', '".$apelido_contato."', '".$endereco_contato."', '".$bairro_contato."', '".$cidade_contato."', '".$estado_contato."', '".$telefone_contato."', '".$celular_contato."', '".$email_contato."')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br>Dados inseridos com sucesso!";
    } else {
        echo "<br>Erro ao inserir a banco de dados: ".mysqli_error($con);
    }
?>