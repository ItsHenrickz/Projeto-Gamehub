<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $game = $_POST["game"];
        $imagem = $_POST["imagem"];
        $link = $_POST["link"];
        $anoLancou = $_POST["anoLancou"];
    }else{
        echo "<H2>Envio de dados não permitido</H2>";
    }

    $sql = "INSERT INTO games (game, link, imagem, anoLancou)
            VALUES ('$game', '$link', '$imagem', '$anoLancou')";

    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
        echo "<H2>Adicionado com sucesso</H2>";
        echo "<a href='?pg=games-admin'>Voltar</a>";
    }else{
        echo "Adicionamento não realizado.";
    }


