<?php

use Dom\Mysql;

require "config.inc.php";

$id = $_REQUEST["id"];

$sql = "SELECT * FROM games WHERE id = '$id'";

$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
        $game = $dados["game"];
        $link = $dados["link"];
        $imagem = $dados["imagem"];
        $anoLancou = $dados["anoLancou"];
    }

?>

<h1>Alteraçao de dados do game.</h1>
<form action="?pg=games-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do game:</label>
        <input type="text" name="game" value="<?=$game?>" required><br>
        <label>Link da imagem do game:</label>
        <input type="text" name="imagem" value="<?=$imagem?>" required><br>
        <label>Link de download do game:</label>
        <input type="text" name="link" value="<?=$link?>"><br><br>
        <label>Ano de lançamento:</label>
        <input type="number" name="anoLancou" value="<?=$anoLancou?>"><br><br>
    <input class="botao" type="submit" value="Atualizar">
</form> 

<?php

}else{
    echo "<h2>Nenhum game encontrado.</h2>";
}

?>