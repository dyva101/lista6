<?php
   include('coneksao.php');
   $id_agenda = $_GET['id_agenda'];
   $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
    <link rel="stylesheet" href="Cadastro_agenda.css">
</head>
<body>
    <div id="teste">
        <form method="post" action="altera_contato_exe.php">
            <table>
                <tr>
                    <th colspan="2">Alterar Dados</th>
                </tr>
                <tr>
                    <td><p>Nome: </p></td>
                    <td><input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Digite o nome"></td>
                </tr>
                <tr>
                <td><p>Apelido: </p></td>
                    <td><input type="text" id="apelido" name="apelido" value="<?php echo $row['apelido']?>" placeholder="Digite o apelido"></td>
                </tr>
                <tr>
                <td><p>Endereço: </p></td>
                    <td><input type="text" id="endereco" name="endereco" value="<?php echo $row['endereco']?>" placeholder="Digite o seu endereço"></td>
                </tr>
                <tr>
                <td><p>Bairro: </p></td>
                    <td><input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']?>" placeholder="Digite o bairro"></td>
                </tr>
                <tr>
                <td><p>Cidade: </p></td>
                    <td><input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Digite a cidade"></td>
                </tr>
                <tr>
                <td><p>Celular: </p></td>
                    <td><input type="text" id="celular" name="celular" value="<?php echo $row['celular']?>" placeholder="Digite o celular"></td>
                </tr>
                <tr>
                    <td><p>Telefone: </p></td>
                    <td><input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']?>" placeholder="Digite o Telefone"></td>
                </tr>
                <tr>
                    <td><p>Email: </p></td>
                    <td><input type="text" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Digite o email"></td>
                </tr>
                <tr>
                    <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
                    <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
                </tr>
            </table>  
        </form>
    </div>
</body>
</html>