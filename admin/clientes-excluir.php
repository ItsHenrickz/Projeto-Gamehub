<?php

require_once 'config.inc.php';

$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id = '$id'";

if(mysqli_query($conexao, $sql)){
    echo "<br><h2 style='margin:45px 0'>Cliente Excluido com Sucesso.</h2>";
    echo "<a class='botao' href='?pg=clientes-admin'>Voltar</a>";
}else{
    echo "<br><h2>Erro ao excluir Cliente.</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar aos clientes</a>";
}


?>