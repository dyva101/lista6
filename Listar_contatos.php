<?php
    
    include("coneksao.php");
    $sql = 'SELECT * FROM agenda';
    $result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <h2 align="center">Listagem de usuários</h2><br>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id_agenda']."</td>";
            echo "<td><a href='altera_contato.php?id_agenda=".$row['id_agenda']."'>" .$row['nome']. "</a></td>";
            echo "<td>".$row['apelido']."</td>";
            echo "<td>".$row['endereco']."</td>";
            echo "<td>".$row['bairro']."</td>";
            echo "<td>".$row['cidade']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "<td>".$row['telefone']."</td>";
            echo "<td>".$row['celular']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href='Excluir_contato.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>