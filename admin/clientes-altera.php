<?php

require_once 'config.inc.php';

$id = $_POST['id'];
$nome = $_POST['cliente'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "UPDATE clientes SET
        cliente = '$nome',
        cidade = '$cidade',
        estado = '$estado' WHERE id = '$id'";

if($resultado = mysqli_query($conexao, $sql)){
    echo "<h2 style='margin:45px 0'>Usuário atualizado com sucesso!</h2> <a class='botao' href='?pg=clientes-admin'>Voltar aos clientes</a>";
}else{
    echo "<h2 style='margin:45px 0'>Erro ao atualizar cliente.</h2>";
}
?>