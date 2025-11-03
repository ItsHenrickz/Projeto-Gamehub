<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM clientes";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)> 0){
        echo "<h3>Clientes</h3>";
        while($dados = mysqli_fetch_array($resultado)){
            echo "<p style='font-size: 20px'>Nome: $dados[cliente] |";
            echo "Cidade: $dados[cidade] |";
            echo "Estado: $dados[estado]</p>";
            
        }
    }
   


?>