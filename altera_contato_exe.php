<?php
    include('coneksao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome_contato = $_POST['nome'];
    $apelido_contato = $_POST['apelido'];
    $endereco_contato = $_POST['endereco'];
    $bairro_contato = $_POST['bairro'];
    $cidade_contato = $_POST['cidade'];
    $estado_contato = $_POST['estado'];
    $telefone_contato = $_POST['telefone'];
    $celular_contato = $_POST['celular'];
    $email_contato = $_POST['email'];
    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome: " . $nome_contato . "<p>";
    
	
	$sql = "UPDATE agenda SET
            nome='".$nome_contato."',
            apelido='".$apelido_contato."',
            endereco='".$endereco_contato."',
            bairro='".$bairro_contato."',
            cidade='".$cidade_contato."',
            estado='".$estado_contato."',
            telefone='".$telefone_contato."',
            celular='".$celular_contato."',
            email='".$email_contato."'
          WHERE id_agenda=".$id_agenda;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>