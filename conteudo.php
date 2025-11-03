
<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM games";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)> 0){
        echo "<h2>Biblioteca de Jogos.</h2>";
?>

<div style="display: flex; flex-wrap:wrap; justify-content: space-evenly;">

<?php
        while($dados = mysqli_fetch_array($resultado)){
        echo "<div class='game'> 
            <img style='height:150px; width:150px;' src='$dados[imagem]'>
            <p>$dados[game] ($dados[anoLancou])</p>
                <a class='botao' href='$dados[link]' target='_blank'>Download</a></div>";
            
    }
}

?>

</div>
