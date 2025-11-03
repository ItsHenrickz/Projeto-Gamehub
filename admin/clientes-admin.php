<?php

    require "config.inc.php";

    echo "<h2><ins>Lista de Clientes</ins></h2>";
    echo "<p><a href='?pg=clientes-cadastro-form'>Cadastrar Cliente</a></p><br>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($resultado)){
        echo "<div style='display:flex; justify-content:center; font-size: 24px; margin-bottom: 15px; width: 100%'>Id: ".$dados['id']." | ";
        echo "Nome: ".$dados['cliente']." | ";
        echo "Cidade: ".$dados['cidade']." | ";
        echo "Estado: ".$dados['estado']." | ";
        echo "<a class='botao' href= '?pg=clientes-altera-form&id=$dados[id]'>Alterar</a>|
        <a class='botao' href= '?pg=clientes-excluir&id=$dados[id]'>Excluir</a>";
         echo "</div>";
    }

?>