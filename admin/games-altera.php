<?php

require_once 'config.inc.php';

$id = $_POST['id'];
$game = $_POST['game'];
$link = $_POST['link'];
$imagem = $_POST['imagem'];
$anoLancou = $_POST['anoLancou'];

$sql = "UPDATE games SET
        game = '$game',
        link = '$link',
        anoLancou = '$anoLancou',
        imagem = '$imagem' WHERE id = '$id'";

if($resultado = mysqli_query($conexao, $sql)){
    echo "<h2 style='margin:45px 0'>Game atualizado com sucesso!</h2> <a class='botao' style='margin-left: 42%' href='?pg=games-admin'>Voltar aos games</a>";
}else{
    echo "<h2 style='margin:45px 0'>Erro ao atualizar game.</h2>";
}
?>