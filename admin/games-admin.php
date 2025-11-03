<?php

    require "config.inc.php";

    echo "<h2><ins>Lista de Games</ins></h2>";
    echo "<p><a href='?pg=games-cadastro-form'>Adicionar Game</a></p><br>";

    $sql = "SELECT * FROM games";
    $resultado = mysqli_query($conexao, $sql);
?>

<div style="display: flex; flex-wrap:wrap">


<?php
    while($dados = mysqli_fetch_array($resultado)){
        echo "<div style='border: 3px solid black;
                border-radius: 20px;
                width: max-content;
                padding: 0 5px;
                margin: 0 3% 6% 3%;'>
            <img style='height:150px; width:150px' src='$dados[imagem]'>
            <p>$dados[game] ($dados[anoLancou])</p>
            <a href='$dados[link]'>Download</a>";
        echo " | <a href='?pg=games-altera-form&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=games-excluir&id=$dados[id]'>Excluir</a></div>";
        
    }

?>

</div>